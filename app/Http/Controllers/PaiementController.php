<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;
use FedaPay\FedaPay;
use FedaPay\Transaction;
use FedaPay\Error\ApiConnection;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class PaiementController extends Controller
{
    private const PHONE_REGEX = '#^(\+229|00229|\+225|\+226)[0-9]{8}$#';

    public function showForm($oeuvre)
    {
        $oeuvre = Oeuvre::findOrFail($oeuvre);
        return view('paiement', [
            'oeuvre' => $oeuvre,
            'countries' => [
                'bj' => 'Bénin (+229)',
                'ci' => 'Côte d\'Ivoire (+225)',
                'bf' => 'Burkina Faso (+226)'
            ]
        ]);
    }

    public function initierPaiement(Request $request)
    {
        try {
            // Initialisation avec timeout
            FedaPay::setApiKey(config('services.fedapay.api_key'));
            FedaPay::setEnvironment(config('services.fedapay.mode'));
            FedaPay::setVerifySslCerts(true); // Important pour la sécurité

            $validated = $this->validateRequest($request);

            $transaction = $this->createTransaction($validated, $request->ip());

            return response()->json([
                'success' => true,
                'payment_url' => $transaction->generateToken()->url,
                'transaction_id' => $transaction->id
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return $this->handleValidationError($e);
        } catch (ApiConnection $e) {
            return $this->handleApiConnectionError($e);
        } catch (\Exception $e) {
            return $this->handleGenericError($e);
        }
    }

    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'oeuvre_id' => 'required|exists:oeuvres,id',
            'amount' => 'required|numeric|min:500',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => ['required', 'string', 'regex:'.self::PHONE_REGEX],
            'payment_method' => ['required', Rule::in(['mobile_money'])]
        ]);
    }

    private function createTransaction(array $data, string $clientIp)
    {
        $phone = preg_replace('/[^0-9+]/', '', $data['phone']);

        return Transaction::create([
            'description' => 'Achat œuvre #'.$data['oeuvre_id'],
            'amount' => (int) $data['amount'], // Conversion en entier
            'currency' => ['iso' => 'XOF'],
            'customer' => [
                'firstname' => $data['prenom'],
                'lastname' => $data['nom'],
                'email' => $data['email'],
                'phone_number' => [
                    'number' => substr($phone, -8),
                    'country' => $this->detectCountryCode($phone)
                ]
            ],
            'metadata' => [
                'oeuvre_id' => $data['oeuvre_id'],
                'client_ip' => $clientIp
            ]
        ]);
    }

    private function detectCountryCode(string $phone): string
    {
        return match(substr($phone, 0, 4)) {
            '+225' => 'ci',
            '+226' => 'bf',
            default => 'bj'
        };
    }

    private function handleValidationError(\Illuminate\Validation\ValidationException $e)
    {
        Log::warning('Erreur validation paiement', ['errors' => $e->errors()]);
        return response()->json([
            'success' => false,
            'errors' => $e->errors()
        ], 422);
    }

    private function handleApiConnectionError(ApiConnection $e)
    {
        Log::error('Erreur connexion FedaPay: '.$e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Service de paiement temporairement indisponible'
        ], 503);
    }

    private function handleGenericError(\Exception $e)
    {
        Log::error('Erreur paiement: '.$e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Erreur lors du traitement du paiement'
        ], 500);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;
use FedaPay\FedaPay;
use FedaPay\Transaction;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class PaiementController extends Controller
{
    private const PHONE_REGEX = '#^(\+229|00229|\+225|\+226)[0-9]{8}$#';
public function showPaymentForm($id)

    {
        $oeuvre = Oeuvre::findOrFail($id);
        return view('paiement', compact('oeuvre'));
    }

    public function initierPaiement(Request $request)
    {
        try {
            // 1. Configuration API FedaPay
            FedaPay::setApiKey(config('services.fedapay.api_key'));
            FedaPay::setEnvironment(config('services.fedapay.mode'));

            // 2. Validation renforcée
            $validated = $request->validate([
                'oeuvre_id' => 'required|exists:oeuvres,id',
                'amount' => 'required|numeric|min:500',
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => [
                    'required',
                    'string',
                    'regex:'.self::PHONE_REGEX
                ],
                'payment_method' => [
                    'required',
                    Rule::in(['mobile_money'])
                ]
            ]);

            // 3. Traitement du numéro de téléphone
            $phone = preg_replace('/[^0-9+]/', '', $validated['phone']);
            $countryCode = $this->detectCountryCode($phone);

            // 4. Création de la transaction
            $transaction = Transaction::create([
                'description' => 'Achat œuvre #'.$validated['oeuvre_id'],
                'amount' => $validated['amount'],
                'currency' => ['iso' => 'XOF'],
                'callback_url' => route('paiement.callback'),
                'customer' => [
                    'firstname' => $validated['prenom'],
                    'lastname' => $validated['nom'],
                    'email' => $validated['email'],
                    'phone_number' => [
                        'number' => substr($phone, -8), // Garde les 8 derniers chiffres
                        'country' => $countryCode
                    ]
                ],
                'metadata' => [
                    'oeuvre_id' => $validated['oeuvre_id'],
                    'client_ip' => $request->ip()
                ]
            ]);

            // 5. Journalisation et réponse
            Log::info('Transaction initiée', [
                'transaction_id' => $transaction->id,
                'amount' => $validated['amount'],
                'client' => $validated['email']
            ]);

            return response()->json([
                'success' => true,
                'payment_url' => $transaction->generateToken()->url,
                'transaction_id' => $transaction->id
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::warning('Erreur validation paiement', ['errors' => $e->errors()]);
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),
                'message' => 'Erreur de validation'
            ], 422);

        } catch (\Exception $e) {
            Log::error('Erreur FedaPay', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors du paiement: '.$e->getMessage()
            ], 500);
        }
    }

    private function detectCountryCode($phone): string
    {
        return match(substr($phone, 0, 4)) {
            '+225' => 'ci', // Côte d'Ivoire
            '+226' => 'bf', // Burkina Faso
            default => 'bj' // Bénin par défaut
        };
    }

    public function handleCallback(Request $request)
    {
        try {
            $transactionId = $request->input('transaction_id');
            $status = $request->input('status');

            Log::info('Callback FedaPay', $request->all());

            if ($status === 'approved') {
                // TODO: Mettre à jour votre base de données
                return view('payment.success');
            }

            return view('payment.error');

        } catch (\Exception $e) {
            Log::error('Erreur callback', [
                'error' => $e->getMessage(),
                'data' => $request->all()
            ]);
            return view('payment.error');
        }
    }
}
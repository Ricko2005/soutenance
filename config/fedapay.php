<?php
return [
    'api_key' => env('FEDAPAY_API_KEY'),
    'mode' => env('FEDAPAY_MODE', 'sandbox'),
    'webhook_secret' => env('FEDAPAY_WEBHOOK_SECRET'),
    // ... (autres variables)
];
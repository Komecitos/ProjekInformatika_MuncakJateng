<?php

return [
    'server_key' => env('SB-Mid-server-fRCWq_HpCGRyU04X_-YTX1z0'),  // Masukkan Server Key dari Midtrans
    'client_key' => env('SB-Mid-client-9kwjuiv1TtsaITMG'),  // Masukkan Client Key dari Midtrans
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),  // Tentukan apakah sedang di environment production atau sandbox
    'merchant_id' => env('G186178983'), // Merchant ID (opsional, jika perlu)
    'snap_base_url' => env('MIDTRANS_BASE_URL', 'https://app.sandbox.midtrans.com/snap/v1/'),

];

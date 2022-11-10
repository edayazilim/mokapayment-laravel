<?php
/*
 *
API_MOKA_DELAER_CODE=26090
API_MOKA_USERNAME=01e9b890-1d53-4ec7-be82-35244a1dc5db
API_MOKA_PASSWORD=96ca848d-f1aa-434a-9db0-3b6ad8644559
API_MOKA_BASE_URL=https://service.moka.com
 */
return [
    'moka_delaer_code' => env('API_MOKA_DELAER_CODE', ''),
    'moka_username' => env('API_MOKA_USERNAME',''),
    'moka_password' => env('API_MOKA_PASSWORD',''),
    'moka_base_url'=> env('API_MOKA_BASE_URL',''),
    'type' => env('API_MOKA_TREED',0)
];

<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type: application/json; charset=utf-8');
require 'vendor/autoload.php';

use GuzzleHttp\Client;
$base_url = "http://192.168.43.95/";

$client = new Client([
    'base_uri' => $base_url.'ci-server-lala/api/master/'
]);
$client2 = new Client([
    'base_uri' => $base_url.'ci-server-lala/api/transaksi/'
]);
$client3 = new Client([
    'base_uri' => $base_url.'ci-server-lala/api/audit/'
]);
$login = new Client([
    'base_uri' => $base_url.'ci-server-lala/api/'
]);
<?php
require_once('vendor/autoload.php');

use \Firebase\JWT\JWT;

/**
 * RS256
 * Tạo private, public key từ https://github.com/vanquan223/Generate-JWT-Keys.git 
 */

$privateKey = file_get_contents('private.pem');

$publicKey = file_get_contents('public.pem');

$payload = [
  'data' => ['field1' => 1, 'field2' => 'string data'],
  "iss" => "http://example.org",
  "aud" => "http://example.com",
  "iat" => 1531498466,
  "eat" => 1557000000
];

$token = JWT::encode($payload, $privateKey, 'RS256');
echo "Token:\n" . print_r($token, true) . "\n";


$decoded = JWT::decode($token, $publicKey, ['RS256']);
$decoded_array = (array) $decoded;

echo "Decoded:\n" . print_r($decoded_array, true) . "\n";
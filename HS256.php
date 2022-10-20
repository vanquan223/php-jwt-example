<?php
require_once('vendor/autoload.php');

use \Firebase\JWT\JWT;

/**
 * HS256
 * Tự tạo một mã secret, không cần phải tạo private, public key
 */

$secret = 'blablabla-secret-string'; 
// or You can save that random text in .jwt-secret  file and use this way
// $secret = file_get_contents('./.jwt-secret');

$payload = [
  'data' => ['field1' => 1, 'field2' => 'string data'],
  "iss" => "http://example.org",
  "aud" => "http://example.com",
  "iat" => 1531498466,
  "eat" => 1557000000
];

$token = JWT::encode($payload, $secret, 'HS256');
echo "HS256 Token:\n" . print_r($token, true) . "\n";


$decoded = JWT::decode($token, $secret, ['HS256']);
$decoded_array = (array) $decoded;

echo "HS256 Token decoded:\n" . print_r($decoded_array, true) . "\n";
<?php
require_once 'app/config/config.php';

$apiKey = BUILDER_API_KEY;
$model = BUILDER_MODEL;
$url = "https://cdn.builder.io/api/v1/html/{$model}?apiKey={$apiKey}";

echo "Testing Builder.io connection...\n";
echo "URL: {$url}\n\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "HTTP Response Code: " . $httpCode . "\n";
echo "Response:\n";
echo substr($response, 0, 500) . "...\n"; // Show first 500 characters
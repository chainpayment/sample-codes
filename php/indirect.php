<?php
$token = 'oqeFpzOdOBdK4oYMAx9RymwaBKuxQ';
$url = "http://localhost/chainpayment/web/api/v1/indirect/new?access_token=$token";
$requestData = [
	'crypto_id' => 1,
	'amount' => 100,
	'return_url' => "http://localhost.com/test-chainpayment/return.php",
	'invoice_id' => "invoice-id-1",
	'callback_url' => 'http://localhost.com/test-chainpayment/callback.php',
	'title' => 'this is title',
	'description' => 'this is desc',
	'tos' => 'terms of service'
];


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $requestData);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);
curl_close($curl);

echo '<pre>';
print_r($result);
echo '</pre>';
?>
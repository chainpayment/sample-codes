<?php
$token = 'oqeFpzOdOBdK4oYMAx9RymwaBKuxQ';
$url = "http://localhost/chainpayment/web/api/v1/direct/new?access_token=$token";
$requestData = [
	'crypto_id' => 1,
	'amount' => 19.9,
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
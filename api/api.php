<?php

$url = 'https://api.brevo.com/v3/emailCampaigns';

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($curl);

curl_close($curl);

$result = json_decode($data, true);

var_dump($result);

?>
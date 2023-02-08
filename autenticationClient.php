<?php

// function (clientId, clientSecret, grantType, scope){
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api-sandbox-limit-digimason.axxispay.com.br/v2/oauth/token',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "client_id" : "7",
    "client_secret" : "L7qtbNnKX3AtyDhR9wOjgALEIQujoXSLCdZfqYIu",
    "grant_type" : "client_credentials",
    "scope" : "partner"
    }
    ',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
// }
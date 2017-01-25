<?php

$email = $_POST['email'];


$curl = curl_init();

curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => [
            'secret' => '6LcrMRMUAAAAAEEbGp6sxy1OXGCmhI9CoaPYyjKG',
            'response' => $_POST['g-recaptcha-response'],
        ],
]);

$response = json_decode(curl_exec($curl));

if(!$response->success) {
    //Redirect with error message
}

//Success, now register your user

var_dump($response);

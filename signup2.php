<?php

require 'app/bootstrap.php';

$response = $recaptcha->verify($_POST['g-recaptcha-response']);

if(!$response->isSuccess()) {
    $errors = $response->getErrorCodes();
    var_dump($errors);
}

// Register the user
<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('451406970490-25tqfkn5a25jiih94kcctah42idc1tok.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/web_design/sign_up.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>
<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('362908891019-l27q01154m9a7qej415lhde9h0ef74q0.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/tes/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>

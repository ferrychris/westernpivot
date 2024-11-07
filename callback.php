<?php
require 'vendor/autoload.php';

use Google\Auth\OAuth2;

$oauth2 = new OAuth2([
    'clientId' => '4680241477-m9pguejepqqevdq85mtfvtm1951k0pqt.apps.googleusercontent.com',
    'clientSecret' => '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',
    'authorizationUri' => 'https://accounts.google.com/o/oauth2/auth',
    'redirectUri' => 'https://ferrychris.github.io/westernpivot/callback.php',
    'tokenCredentialUri' => 'https://oauth2.googleapis.com/token',
]);

// Check if authorization code is in query parameters
if (isset($_GET['code'])) {
    $oauth2->setCode($_GET['code']);
    
    // Exchange authorization code for access token
    $authToken = $oauth2->fetchAuthToken();
    if (isset($authToken['access_token'])) {
        // Store the access token and refresh token (if available) as needed
        echo "Authentication successful!";
    } else {
        echo "Failed to obtain access token.";
    }
} else {
    echo "No authorization code returned.";
}
?>

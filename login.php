<?php
require 'vendor/autoload.php';

use Google\Auth\OAuth2;

// Initialize OAuth2 client
$oauth2 = new OAuth2([
    'clientId' => '4680241477-m9pguejepqqevdq85mtfvtm1951k0pqt.apps.googleusercontent.com',
    'clientSecret' => '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',
    'authorizationUri' => 'https://accounts.google.com/o/oauth2/auth',
    'redirectUri' => 'YOUR_REDIRECT_URI',  // e.g., http://yourdomain.com/callback.php
    'tokenCredentialUri' => 'https://oauth2.googleapis.com/token',
    'scope' => 'https://www.googleapis.com/auth/adwords',
    'accessType' => 'offline',
    'prompt' => 'consent',
]);

// Redirect to Google OAuth login
$authUrl = $oauth2->buildFullAuthorizationUri();
header("Location: " . $authUrl);
exit();
?>

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => env('google_client_id'),
        'client_secret' => env('google_client_secret'),
        'redirect' => env('google_redirect'),
    ],
    'facebook' => [
        'client_id' => env('facebook_client_id'),
        'client_secret' => env('facebook_client_secret'),
        'redirectfacebook' => env('facebook_redirect'),
        'redirectinstagram' => env('instagram_redirect'),
    ],

    'twitter'=>[
        'consumer_key' =>env('Twitter_Consumer_Key'),
        'consumer_secret' => env('Twitter_Consumer_Secret'),
        'access_token' => env('Twitter_Access_token'),
        'access_token_secret' => env('Twitter_Access_token_Secret'),
        'redirect' => env('Twitter_OAuth_Url'),
        'callback' => env('Twitter_Callback_Uri'),

    ],
    'reddit'=>[
        'client_id'=>env('Reddit_Client_id'),
        'client_secret'=>env('Reddit_Client_Secret'),
        'callback'=>env('Reddit_Callack_Uri'),
    ],
    'socialmint'=>[
        'redirect'=>env('Social_Mint_Redirect')

    ],


];

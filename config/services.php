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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID', 'mock_github_client_id'),
        'client_secret' => env('GITHUB_CLIENT_SECRET', 'mock_github_client_secret'),
        'redirect' => env('GITHUB_REDIRECT_URL', 'http://localhost:8000/callback/github'),
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID', 'mock_google_client_id'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET', 'mock_google_client_secret'),
        'redirect' => env('GOOGLE_REDIRECT_URL', 'http://localhost:8000/callback/google'),
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID', 'mock_facebook_client_id'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET', 'mock_facebook_client_secret'),
        'redirect' => env('FACEBOOK_REDIRECT_URL', 'http://localhost:8000/callback/facebook'),
    ],

    'instagram' => [
        'client_id' => env('INSTAGRAM_CLIENT_ID', 'mock_instagram_client_id'),
        'client_secret' => env('INSTAGRAM_CLIENT_SECRET', 'mock_instagram_client_secret'),
        'redirect' => env('INSTAGRAM_REDIRECT_URL', 'http://localhost:8000/callback/instagram'),
    ],

];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    'midtrans' => [
        'serverKey'     => env('MIDTRANS_SERVERKEY'),
        'clientKey'     => env('MIDTRANS_CLIENTKEY'),
        'isProduction'  => env('MIDTRANS_IS_PRODUCTION', false),
        'isSanitized'   => env('MIDTRANS_IS_SANITIZED', true),
        'is3ds'         => env('MIDTRANS_IS_3DS', true),
    ],

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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'google' => [
      'client_id' => env('GOOGLE_CLIENT_ID', '550202528529-q7e4nl01knes124babk6muf7kgbi8api.apps.googleusercontent.com'),
      'client_secret' => env('GOOGLE_CLIENT_SECRET', 'fJFbPfoqB5lOkFKZT3thLd9P'),
      'redirect' => env('GOOGLE_REDIRECT_CALLBACK', 'http://localhost:8000/login/google/callback'),
    ],

];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
    'client_id' => '1565699683731882',
    'client_secret' => 'b3229c2ee236d67823ffebd2a719df79',
    'redirect' => 'https://machinery-hire.herokuapp.com/auth/callback/facebook',
    ],
    'twitter' => [
        'client_id' => 'MHFW3sI7Mb0Zuss5Mk6Ihl9K5',
        'client_secret' => '9l3G6VtuxTxxyzZ5hoJXl2dMl3kb6zfkekuFcrM25WBW2pyDmK',
        'redirect' => 'https://machinery-hire.herokuapp.com/auth/callback/twitter',
    ],

];

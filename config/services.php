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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    //'google' => [
    //    'client_id' => env('GOOGLE_CLIENT_ID'),
    //    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
    //    'redirect' => 'http://localhost:3000/api/auth/callback/google',
   // ],

   'google' => [
    'client_id' => '820489442521-9gufjjoc914sf5baemusr6261tcf0kld.apps.googleusercontent.com',
    'client_secret' => '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',
   //'redirect' => 'https://unitelearning.com/callback/google',
   'redirect' => 'https://unitelearning.com/role-register',

  ],

  'facebook' => [
    'client_id' => '656731016632838',
    'client_secret' => '4f01946f06b507f2b3e1a2c993791aca',
    'redirect' => 'https://unitelearning.com/role-register',
],



];

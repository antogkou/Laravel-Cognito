<?php

return [
    'app_client_id'     => env('AWS_COGNITO_CLIENT_ID'),
    'app_client_secret' => env('AWS_COGNITO_CLIENT_SECRET'),
    'user_pool_id'      => env('AWS_COGNITO_USER_POOL_ID'),
    'credentials'  => [
        'key'     => env('AWS_COGNITO_KEY'),
        'secret'  => env('AWS_COGNITO_SECRET')
    ],
    'region'    => env('AWS_COGNITO_REGION'),
    'version'       => '2016-04-18',
];

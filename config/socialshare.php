<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Supported Platforms
    |--------------------------------------------------------------------------
    |
    | Currently, supports these below platforms only. More to be added soon.
    |
    */

    'supported_platforms' => [
        'facebook',
        'messenger',
        'twitter',
        'linkedin',
        'whatsapp',
        'reddit'
    ],

    /*
    |--------------------------------------------------------------------------
    | Socail APP Configuration
    |--------------------------------------------------------------------------
    |
    | Here we may specify the configuration details for social sites like FACEBOOK APP integration.
    |
    | For messenger share only.
    */
    'facebook_app_id' => env('FACEBOOK_APP_ID', null),


];
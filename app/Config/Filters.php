<?php 
namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
      'loggedIn' => \App\Filters\loggedIn::class,
      'isLoggedIn' => \App\Filters\isLoggedIn::class,
    ];

    public $globals = [
        'before' => [
            'loggedIn' => ['except' => [
                'auth/*',
                'register',
                'register/*'
              ]
            ]
        ],
        'after'  =>  [

        ],
    ];

    public $methods = [];

    public $filters = [
        'loggedIn' => [
            'before' => [
                'auth/logout',
                'auth/account/create',
                'community/*', 
                'me/*'
            ]
        ],
        'isLoggedIn' => [
            'before' => [
                'auth/login',
                'register'
            ]
        ], 
    ];
}

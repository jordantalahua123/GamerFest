<?php

use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Features;

return [

    //Fortify Guard

    'guard' => 'web',

    //Fortify Password Broker

    'passwords' => 'users',

    // Username / Email

    'username' => 'email',

    'email' => 'email',

    //Home Path

    'home' => RouteServiceProvider::HOME,

    //Fortify Routes Prefix / Subdomain

    'prefix' => '',

    'domain' => null,

    //Fortify Routes Middleware

    'middleware' => ['web'],

    //Rate Limiting

    'limiters' => [
        'login' => 'login',
        'two-factor' => 'two-factor',
    ],

    //Register View Routes

    'views' => true,

    //Features

    'features' => [
        Features::registration(),
        Features::resetPasswords(),
        Features::updateProfileInformation(),
        Features::updatePasswords(),
        Features::twoFactorAuthentication([
            'confirm' => true,
            'confirmPassword' => true,
        ]),
    ],

];

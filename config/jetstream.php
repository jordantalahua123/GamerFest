<?php

use Laravel\Jetstream\Features;
use Laravel\Jetstream\Http\Middleware\AuthenticateSession;

return [

    //Jetstream Stack

    'stack' => 'livewire',

    //Jetstream Route Middleware

    'middleware' => ['web'],

    'auth_session' => AuthenticateSession::class,

    //Jetstream Guard

    'guard' => 'sanctum',

    //Features

    'features' => [
        
        Features::accountDeletion(),
    ],

    // Profile Photo Disk

    'profile_photo_disk' => 'public',

];

<?php

return [

    //Titulo

    'title' => 'AdminLTE 3',
    'title_prefix' => 'Gamerfest |',
    'title_postfix' => '',

    //Favicon

    'use_ico_only' => false,
    'use_full_favicon' => false,

    //Google Fonts

    'google_fonts' => [
        'allowed' => true,
    ],

    //Admin Panel Logo

    'logo' => '<b>GamerFest</b>',
    'logo_img' => 'img/logo.jpg',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    //Authentication Logo

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    //Preloader Animation

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'img/logo.jpg',
            'alt' => 'Prelogo',
            'effect' => 'animation__shake',
            'width' => 120,
            'height' => 120,
        ],
    ],

    //User Menu

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    //Layout

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    Authentication Views Classes
    Admin Panel Classes
    
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    //Sidebar

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    //Control Sidebar (Right Sidebar)

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    //URLs

    'use_route_url' => false,
    'dashboard_url' => 'http://127.0.0.1:8000/dashboard',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email'    ,
    'profile_url' => false,

    //Laravel Mix

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    //Menu Items

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        ['header' => 'Principal'],
        [
            'text' => 'Dashboard',
            'url'  => 'http://127.0.0.1:8000/dashboard',
            'icon' => 'fas fa-fw fa-chart-line',
            'classes'  => 'text-red text-bold',
            'icon_color' => 'red'
        ],
        ['header' => 'General'],
        [
            'text' => 'Gestión',
            'icon' => 'fas fa-fw fa-tachometer-alt',
            'icon_color' => 'light',
            'classes'  => 'text-light text-bold',
            'submenu' => [
                [
                    'text' => 'Aulas',
                    'url'  => 'http://127.0.0.1:8000/aulas',
                    'icon' => 'fas fa-fw fa-hospital-alt',
                ],
                [
                    'text' => 'Horarios',
                    'url'  => 'http://127.0.0.1:8000/horarios',
                    'icon' => 'fas fa-fw fa-calendar',
                ],
                [
                    'text' => 'Categorias',
                    'url'  => 'http://127.0.0.1:8000/categoriajuegos',
                    'icon' => 'fas fa-fw fa-tags',
                ],
                [
                    'text' => 'Videojuegos',
                    'url'  => 'http://127.0.0.1:8000/videojuegos',
                    'icon' => 'fas fa-fw fa-dice',
                ]   
            ]
        ],
        [
            'text' => 'Usuarios',
            'icon' => 'fas fa-fw fa-user-cog',
            'icon_color' => 'orange',
            'classes'  => 'text-orange text-bold',
            'submenu' => [
                [
                    'text' => 'Equipos',
                    'url'  => 'http://127.0.0.1:8000/equipos',
                    'icon' => 'fas fa-fw fa-people-arrows',
                ],
                [
                    'text' => 'Jugadores',
                    'url'  => 'http://127.0.0.1:8000/jugadores',
                    'icon' => 'fas fa-fw fa-user',
                ],
            ]
        ],
        [
            'text' => 'Inscripciones',
            'icon' => 'fas fa-fw fa-cash-register',
            'icon_color' => 'blue',
            'classes'  => 'text-blue text-bold',
            'submenu' => [
                [
                    'text' => 'Pagos',
                    'url'  => 'http://127.0.0.1:8000/pagos',
                    'icon' => 'fas fa-fw fa-money-bill',
                ],
                [
                    'text' => 'Inscripción grupal',
                    'url'  => 'http://127.0.0.1:8000/inscripciongrp',
                    'icon' => 'fas fa-fw fa-users',
                ],
                [
                    'text' => 'Inscripción individual',
                    'url'  => 'http://127.0.0.1:8000/inscripcionidv',
                    'icon' => 'fas fa-fw fa-user-plus',
                ],
            ]
        ],
        ['header' => 'Reportes'],
        [
            'text'       => 'Generar Reporte',
            'icon'       => 'fas fa-file-pdf mr-1',
            'submenu' => [
                [
                    'text' => 'Reporte de inscripciones inv',
                    'icon' => 'fas fa-scroll',
                    'url'  => '/reporte-inscripcionidv',
                ],
                [
                    'text' => 'Reporte de inscripciones grp',
                    'url'  => '/reporte-inscripciongrp',
                    'icon' => 'fas fa-users-cog',
                ],
                [
                    'text' => 'Juegos por categoria',
                    'url'  => '/reporte-categoria',
                    'icon' => 'fas fa-sitemap',
                ],
                [
                    'text' => 'Cuarto reporte',
                    'url'  => '/',
                    'icon' => ''
                ],
                [
                    'text' => 'Quinto reporte',
                    'url'  => '/',
                    'icon' => ''
                ]
            ]  
        ],
    ],

    //Menu Filters

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    //Plugins Initialization/

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    //IFrame

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    //Livewire

    'livewire' => true,
];

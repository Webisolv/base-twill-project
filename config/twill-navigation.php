<?php

return [
    'customPage' => [
        'title' => 'Custom page',
        'route' => 'admin.customPage',
    ],
    'content' => [
        'title' => 'Content',
        'route' => 'admin.content.pages.index',
        'primary_navigation' => [
            'pages' => [
                'title' => 'Pages',
                'module' => true,
            ],
            'menus' => [
                'title' => 'Menu',
                'module' => true,
            ],
        ],
    ],
    'contactFormSubmissions' => [
        'title' => 'Contact messages',
        'module' => true,
    ],
    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'pages'],
        'primary_navigation' => [
            'pages' => [
                'title' => 'Pages',
                'route' => 'admin.settings',
                'params' => ['section' => 'pages'],
            ],
            'footer' => [
                'title' => 'Footer',
                'route' => 'admin.settings',
                'params' => ['section' => 'footer'],
            ],
        ],
    ],
];

<?php

$cropConfig = [
    'desktop' => [
        [
            'name' => 'desktop',
            'ratio' => 16 / 9,
            'minValues' => [
                'width' => 100,
                'height' => 100,
            ],
        ],
    ],
    'full' => [
        [
            'name' => 'full',
            'ratio' => 0,
        ],
    ],
];

return [
    'dashboard' => [
        'modules' => [
            'pages' => [
                'name' => 'pages',
                'routePrefix' => 'content',
                'repository' => \App\Twill\Capsules\Pages\Repositories\PageRepository::class,
                'count' => true,
                'create' => true,
                'activity' => true,
                'draft' => true,
                'search' => true,
                'search_fields' => ['title']
            ],
        ],
    ],
    'publish_date_24h' => true,
    'settings' => true,
    'locale' => 'en',
    'activitylog' => true,
    'fallback_locale' => 'en',
    'available_user_locales' => [
        'en',
        'nl',
    ],
    'capsules' => [
        'list' => [
            [
                'name' => 'Base',
                'enabled' => true,
            ],
            [
                'name' => 'Pages',
                'enabled' => true,
            ],
            [
                'name' => 'Menus',
                'enabled' => true,
            ],
            [
                'name' => 'ContactFormSubmissions',
                'enabled' => true,
            ],
        ],
    ],
    'block_editor' => [
        'use_twill_blocks' => [],
        'block_preview_render_childs' => false,
        'crops' => [
            'image' => $cropConfig,
            'heading' => $cropConfig,
            'gallery' => $cropConfig,
            'content_square' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 4 / 3,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
            'content_image' => [
                'flexible' => [
                    [
                        'name' => 'free',
                        'ratio' => 0,
                    ],
                ],
            ],
        ],
    ],
];

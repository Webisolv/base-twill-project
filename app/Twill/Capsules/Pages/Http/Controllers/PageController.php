<?php

namespace App\Twill\Capsules\Pages\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class PageController extends ModuleController
{
    protected $moduleName = 'pages';

    protected $permalinkBase = '';

    protected $indexColumns = [
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
        'description' => [
            'title' => 'Description',
            'field' => 'description',
        ],
    ];
}

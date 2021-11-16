<?php

namespace App\Twill\Capsules\Menus\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class MenuController extends ModuleController
{
    protected $moduleName = 'menus';

    protected $indexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => false,
        'bulkPublish' => false,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => true,
        'forceDelete' => true,
        'bulkForceDelete' => true,
        'delete' => true,
        'duplicate' => false,
        'bulkDelete' => true,
        'reorder' => false,
        'permalink' => false,
        'bulkEdit' => true,
        'editInModal' => false,
    ];
}

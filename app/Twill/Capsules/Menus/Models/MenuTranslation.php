<?php

namespace App\Twill\Capsules\Menus\Models;

use A17\Twill\Models\Model;

/**
 * @mixin IdeHelperMenuTranslation
 */
class MenuTranslation extends Model
{
    protected $baseModuleModel = Menu::class;
}

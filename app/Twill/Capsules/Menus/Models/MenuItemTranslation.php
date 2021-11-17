<?php


namespace App\Twill\Capsules\Menus\Models;


use A17\Twill\Models\Model;

/**
 * @mixin IdeHelperMenuItemTranslation
 */
class MenuItemTranslation extends Model
{
    protected $baseModuleModel = MenuItem::class;
}

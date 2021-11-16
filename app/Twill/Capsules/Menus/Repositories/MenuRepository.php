<?php

namespace App\Twill\Capsules\Menus\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Menus\Models\Menu;

class MenuRepository extends ModuleRepository
{
    use HandleTranslations;
    use HandleSlugs;
    use HandleRevisions;

    public function __construct(Menu $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $this->updateRepeater(
            $object,
            $fields,
            'menu_items',
            MenuItemRepository::class,
            'menu_item'
        );
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields = $this->getFormFieldsForRepeater(
            $object,
            $fields,
            'menu_items',
            MenuItemRepository::class,
            'menu_item'
        );
        return $fields;
    }
}

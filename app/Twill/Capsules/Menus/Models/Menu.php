<?php

namespace App\Twill\Capsules\Menus\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use App\Twill\Capsules\Base\Model;


class Menu extends Model implements Sortable
{
    use HasTranslation;
    use HasSlug;
    use HasRevisions;
    use HasPosition;

    protected $fillable = [
        'title',
        'position',
    ];

    public $translatedAttributes = [
        'title',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function menu_items()
    {
        return $this->hasMany(MenuItem::class)->ordered();
    }


}

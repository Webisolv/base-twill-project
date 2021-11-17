<?php

namespace App\Twill\Capsules\Pages\Models;

use A17\Twill\Models\Model;
use App\Twill\Capsules\Pages\Models\Page;

/**
 * @mixin IdeHelperPageTranslation
 */
class PageTranslation extends Model
{
    protected $baseModuleModel = Page::class;
}

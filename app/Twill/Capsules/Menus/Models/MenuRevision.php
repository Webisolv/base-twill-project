<?php

namespace App\Twill\Capsules\Menus\Models;

use A17\Twill\Models\Revision;

/**
 * @mixin IdeHelperMenuRevision
 */
class MenuRevision extends Revision
{
    protected $table = "menu_revisions";
}

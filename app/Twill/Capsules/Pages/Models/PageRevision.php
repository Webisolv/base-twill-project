<?php

namespace App\Twill\Capsules\Pages\Models;

use A17\Twill\Models\Revision;

/**
 * @mixin IdeHelperPageRevision
 */
class PageRevision extends Revision
{
    protected $table = "page_revisions";
}

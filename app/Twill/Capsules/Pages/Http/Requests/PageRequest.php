<?php

namespace App\Twill\Capsules\Pages\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class PageRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [];
    }
}

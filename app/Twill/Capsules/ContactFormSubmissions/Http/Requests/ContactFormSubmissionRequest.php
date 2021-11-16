<?php

namespace App\Twill\Capsules\ContactFormSubmissions\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class ContactFormSubmissionRequest extends Request
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

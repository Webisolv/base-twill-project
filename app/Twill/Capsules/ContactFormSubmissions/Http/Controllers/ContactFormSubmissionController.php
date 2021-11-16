<?php

namespace App\Twill\Capsules\ContactFormSubmissions\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class ContactFormSubmissionController extends ModuleController
{
    protected $moduleName = 'contactFormSubmissions';
    
    protected $indexOptions = [
        'permalink' => false
    ];
    
}

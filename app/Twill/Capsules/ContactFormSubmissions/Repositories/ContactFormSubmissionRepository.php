<?php

namespace App\Twill\Capsules\ContactFormSubmissions\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\ContactFormSubmissions\Models\ContactFormSubmission;

class ContactFormSubmissionRepository extends ModuleRepository
{
    use HandleMedias, HandleFiles;

    public function __construct(ContactFormSubmission $model)
    {
        $this->model = $model;
    }
}

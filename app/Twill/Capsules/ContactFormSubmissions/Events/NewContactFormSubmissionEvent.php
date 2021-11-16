<?php

namespace App\Twill\Capsules\ContactFormSubmissions\Events;

use App\Twill\Capsules\ContactFormSubmissions\Models\ContactFormSubmission;
use Illuminate\Foundation\Events\Dispatchable;

class NewContactFormSubmissionEvent
{
    use Dispatchable;

    public ContactFormSubmission $submission;

    public function __construct(ContactFormSubmission $submission)
    {
        $this->submission = $submission;
    }
}

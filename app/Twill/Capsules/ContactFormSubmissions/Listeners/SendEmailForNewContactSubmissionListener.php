<?php

namespace App\Twill\Capsules\ContactFormSubmissions\Listeners;

use App\Twill\Capsules\ContactFormSubmissions\ContactFormSubmissionsCapsuleServiceProvider;
use App\Twill\Capsules\ContactFormSubmissions\Events\NewContactFormSubmissionEvent;
use App\Twill\Capsules\ContactFormSubmissions\Mail\ContactFormSubmissionMail;
use Illuminate\Support\Facades\Mail;

class SendEmailForNewContactSubmissionListener
{
    public function handle(NewContactFormSubmissionEvent $event): void
    {
        Mail::to(ContactFormSubmissionsCapsuleServiceProvider::$emailTo)->send(
            new ContactFormSubmissionMail($event->submission)
        );
    }
}

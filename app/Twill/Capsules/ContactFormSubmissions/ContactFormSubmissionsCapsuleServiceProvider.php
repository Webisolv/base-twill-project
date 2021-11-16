<?php

namespace App\Twill\Capsules\ContactFormSubmissions;

use App\Twill\Capsules\ContactFormSubmissions\Events\NewContactFormSubmissionEvent;
use App\Twill\Capsules\ContactFormSubmissions\Listeners\SendEmailForNewContactSubmissionListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class ContactFormSubmissionsCapsuleServiceProvider extends ServiceProvider
{
    public static ?string $emailTo = null;

    public function register(): void
    {
    }

    public function boot(): void
    {
        Event::listen(NewContactFormSubmissionEvent::class, SendEmailForNewContactSubmissionListener::class);
    }

    public static function setEmailTo(string $email): void
    {
        self::$emailTo = $email;
    }
}

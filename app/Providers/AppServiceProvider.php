<?php

namespace App\Providers;

use App\Twill\Capsules\ContactFormSubmissions\ContactFormSubmissionsCapsuleServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // I dont know yet why.
        include_once __DIR__ .'/../Twill/Capsules/Base/helpers.php';
        ContactFormSubmissionsCapsuleServiceProvider::setEmailTo('rob@harings.be');
    }

    public function boot(): void
    {
    }
}

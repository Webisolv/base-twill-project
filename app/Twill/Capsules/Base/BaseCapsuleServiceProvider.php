<?php

namespace App\Twill\Capsules\Base;

use Illuminate\Support\ServiceProvider;

class BaseCapsuleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        include_once __DIR__ . '/helpers.php';
    }

    public function boot(): void
    {
    }
}

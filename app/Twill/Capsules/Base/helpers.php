<?php

use A17\Twill\Repositories\SettingRepository;
use Illuminate\Support\Str;

if (!function_exists('is_running_on_frontend')) {
    function is_running_on_frontend(): bool
    {
        if (request()->route()) {
            return Str::startsWith(optional(request()->route())->getName(), ['front.', 'api.']);
        }
        return false;
    }
}

if (!function_exists('repository')) {
    function repository($moduleName)
    {
        $repository = 'App\\Repositories\\' . ucfirst(Str::singular($moduleName)) . 'Repository';

        if (class_exists($repository)) {
            return app($repository);
        }

        $repository =
            'App\\Twill\\Capsules\\' .
            ucfirst(Str::plural($moduleName)) .
            '\Repositories\\' .
            ucfirst(Str::singular($moduleName)) .
            'Repository';

        return app($repository);
    }
}

if (!function_exists('get_config')) {
    function get_config(string $key, string $group): ?string
    {
        return app(SettingRepository::class)->byKey($key, $group);
    }
}

<?php

namespace App\Twill\Capsules\Base\Scopes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope as IlluminateScope;

abstract class Scope implements IlluminateScope
{
    public function isPublishable(Model $model): bool
    {
        return collect($model->getFillable())->contains('published');
    }

    public function isTranslatable(Model $model): bool
    {
        return filled($model->translatedAttributes ?? null);
    }
}

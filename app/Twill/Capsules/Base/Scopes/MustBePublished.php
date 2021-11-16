<?php

namespace App\Twill\Capsules\Base\Scopes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class MustBePublished extends Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        if (is_running_on_frontend() && $this->isPublishable($model)) {
            $builder->where("{$model->getTable()}.published", true);
        }
    }
}

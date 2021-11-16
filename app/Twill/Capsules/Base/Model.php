<?php

namespace App\Twill\Capsules\Base;

use A17\Twill\Models\Model as TwillModel;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use App\Twill\Capsules\Base\Scopes\MustBePublished;
use App\Twill\Capsules\Base\Scopes\MustHaveTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class Model extends TwillModel
{
    use HasMedias, HasRevisions, HasFactory;

    public $titleColumnKey = 'title';

    public $translatedAttributes = [];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new MustBePublished());

        static::addGlobalScope(new MustHaveTranslation());
    }
}

<?php

namespace App\Twill\Capsules\Base;

use A17\Twill\Models\Model as TwillModel;
use A17\Twill\Models\Behaviors\HasRevisions;
use App\Twill\Capsules\Base\Scopes\MustBePublished;
use App\Twill\Capsules\Base\Scopes\MustHaveTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class FrontEndModel extends TwillModel
{
    use HasRevisions, HasFactory;

    public $titleColumnKey = 'title';

    public $translatedAttributes = [];

    protected static function booted(): void
    {
        static::addGlobalScope(new MustBePublished());
        static::addGlobalScope(new MustHaveTranslation());
    }
}

<?php

namespace App\Twill\Capsules\ContactFormSubmissions\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;
use App\Twill\Capsules\ContactFormSubmissions\Events\NewContactFormSubmissionEvent;

/**
 * @mixin IdeHelperContactFormSubmission
 */
class ContactFormSubmission extends Model
{
    use HasMedias, HasFiles;

    protected $dispatchesEvents = [
        'created' => NewContactFormSubmissionEvent::class
    ];

    protected $fillable = [
        'published',
        'title',
        'description',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
                ],
            ],
        ],
    ];
}

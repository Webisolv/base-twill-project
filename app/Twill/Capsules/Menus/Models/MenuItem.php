<?php


namespace App\Twill\Capsules\Menus\Models;


use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\Sortable;
use App\Twill\Capsules\Base\Model;


class MenuItem extends Model implements Sortable
{
    use HasPosition;
    use HasTranslation;

    protected $fillable = [
        'menu_id',
        'title',
        'destination',
        'position',
        'url',
        'anchor',
        'query_string',
        'class_attribute',
        'id_attribute',
        'target_attribute',
        'rel_attribute',
        'linkable_id',
        'linkable_type',
    ];

    public $translatedAttributes = [
        'title',
        'url',
        'active',
    ];

    public $checkboxes = [
        'new_window',
    ];

    public $translationModel = 'App\Twill\Capsules\Menus\Models\MenuItemTranslation';

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function linkable()
    {
        return $this->morphTo();
    }

    public function getHrefAttribute()
    {
        switch ($this->destination) {
            case 'internal':
                if ($this->linkable) {
                    $baseUrl = '/' . $this->linkable->slug;
                } else {
                    $baseUrl = '/';
                }
                return $this->buildHref($baseUrl);
                break;
            case 'external':
                return $this->buildHref($this->url);
                break;
            case 'homepage':
                return '/';
                break;
        }

        return '#';
    }

    public function getTargetAttribute()
    {
        if ($this->new_window) {
            return "_blank";
        }

        return "";
    }

    public function getRelAttribute()
    {
        $rel = "";
        if ($this->destination === 'external') {
            $rel .= "nofollow noreferrer";
        }
        if ($this->new_window) {
            $rel .= " external";
        }
        return $rel;
    }

    protected function buildHref($baseUrl)
    {
        $href = $baseUrl;

        if (!empty($this->query_string)) {
            $href .= "?" . $this->query_string;
        }

        if (!empty($this->anchor)) {
            $href .= "#" . $this->anchor;
        }

        return $href;
    }
}

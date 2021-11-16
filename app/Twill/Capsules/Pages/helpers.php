<?php

use App\Twill\Capsules\Pages\Repositories\PageRepository;

if (!function_exists('get_slug_for_page_id')) {
    function get_slug_for_page_id(int $id): string
    {
        $repo = app()->make(PageRepository::class);

        /** @var \A17\Twill\Models\Behaviors\HasSlug $page */
        $page = $repo->getById($id);

        return $page->getSlug();
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use A17\Twill\Http\Controllers\Front\Controller;
use A17\Twill\Repositories\SettingRepository;
use App\Twill\Capsules\Pages\Models\Page;
use App\Twill\Capsules\Pages\Repositories\PageRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;

class PageDisplayController extends Controller
{
    private PageRepository $pageRepository;
    private SettingRepository $settingRepository;

    public function __construct(
        PageRepository $pageRepository,
        SettingRepository $settingRepository,
    ) {
        parent::__construct();
        $this->pageRepository = $pageRepository;
        $this->settingRepository = $settingRepository;
    }

    public function displayPage(string $slug): View
    {
        /** @var Page $page */
        $page = $this->pageRepository->forSlug($slug);

        abort_if(!$page || !$page->translation->active, 404);

        $this->seo->setTitle($page->getAttribute('title') . ' | ' . Config::get('twill.seo.site_title'));

        return view('frontend.page', ['item' => $page]);
    }

    public function landingPage(): View
    {
        $page = Page::find($this->settingRepository->byKey('homepage', 'pages'));

        abort_if(!$page || !$page->translation->active, 404);

        $this->seo->setTitle($page->translation->title . ' | ' . Config::get('twill.seo.site_title'));

        return view('frontend.page', ['item' => $page]);
    }
}

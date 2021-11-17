@php
    // Code for menus.
    // This is just hardcoded for now, but could be made into a select.
    $menuRepo = app()->make(\App\Twill\Capsules\Menus\Repositories\MenuRepository::class);
    /** @var \App\Twill\Capsules\Menus\Models\Menu $menu */
    $menu = $menuRepo->first();
@endphp
<div x-data="{ mobileMenuIsOpen: false}">
    <div class="flex py-4 max-w-5xl mx-auto justify-between px-8 md:px-0">
        <a href="{{LaravelLocalization::localizeUrl(route('front.homepage'))}}" class="font-semibold leading-none text-black">
            logo comes here
        </a>
        <button type="button"
                class="lg:hidden flex items-center py-2 px-3 text-gray-900 border border-gray-900"
                @click="mobileMenuIsOpen = !mobileMenuIsOpen"
                aria-expanded="false">
            <span class="sr-only">{{__('Open menu')}}</span>
            <x-heroicon-o-menu class="h-6 w-6" x-show="!mobileMenuIsOpen"/>
            <x-heroicon-o-x class="h-6 w-6" x-show="mobileMenuIsOpen"/>
        </button>
        @if ($menu)
            <ul class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-12">
                @php /** @var \App\Twill\Capsules\Menus\Models\MenuItem $menuItem */ @endphp
                @foreach ($menu->menu_items as $menuItem)
                    <x-site.menu.item
                        :href="$menuItem->getHrefAttribute()">{{$menuItem->translation->title}}</x-site.menu.item>
                @endforeach
            </ul>
        @endif
        <ul>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="md:hidden"
         x-transition
         x-show="mobileMenuIsOpen">
        <div class="bg-white divide-y-2 divide-gray-50">
            <div class="p-4">
                <nav>
                    <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4">
                        @if ($menu)
                            @foreach ($menu->menu_items as $menuItem)
                                <x-site.menu.mobile-item
                                    :href="$menuItem->getHrefAttribute()">{{$menuItem->getAttribute('title')}}</x-site.menu.mobile-item>
                            @endforeach
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

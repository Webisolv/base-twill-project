<div class="flex max-w-5xl mx-auto justify-between">
    <div class="pb-8 text-xl font-bold">
        {!! get_config('text', 'footer') !!}
    </div>
</div>
<div class="flex max-w-5xl mx-auto justify-between border-t pt-8 flex-col md:flex-row">
    <div>
        {{get_config('copyright_notice', 'footer')}}
    </div>
    <div class="flex gap-4">
        <div>
            <a href="{{ route('front.page', ['slug' => get_slug_for_page_id(get_config('privacy_policy', 'pages'))]) }}">@lang('Privacy policy')</a>
        </div>
        <div>
            <a href="{{ route('front.page', ['slug' => get_slug_for_page_id(get_config('terms_and_conditions', 'pages'))]) }}">@lang('Terms and conditions')</a>
        </div>
        <div>
            <a href="{{ route('front.page', ['slug' => get_slug_for_page_id(get_config('cookies', 'pages'))]) }}">@lang('Cookies')</a>
        </div>
    </div>
</div>

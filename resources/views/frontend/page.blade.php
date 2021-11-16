<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <title>{{ $seo->title }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @livewireStyles
</head>
<body>
<div class="flex flex-col">
    <x-site.menu/>
    {!! $item->renderBlocks(false) !!}
    <x-footer/>
</div>
<script src="//unpkg.com/alpinejs" defer></script>
<script src="{{mix('js/app.js')}}"></script>
@livewireScripts
</body>
</html>

@php
    $image = $block->imageAsArray('content_square', 'desktop');
@endphp
<div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12 md:m-0">
    <div class="relative">
        <img class="relative z-10" src="{{$image['src']}}" alt="{{$image['alt']}}"/>
        <div class="absolute border border-brown-900 h-full ml-5 mt-5 w-full inset-0"></div>
    </div>
    <div class="text-xl prose prose-2xl">
        <h3 class="text-3xl font-bold">{{$block->translatedInput('title')}}</h3>
        {!! $block->translatedInput('text') !!}
    </div>
</div>

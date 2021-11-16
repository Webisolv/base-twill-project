<div class="px-6 py-8 bg-brown-500" x-data="{open: {{$block->input('open') ? 'true' : 'false'}}}">
    <div class="flex items-center justify-between cursor-pointer py-4" x-on:click="open = !open">
        <h3 class="text-2xl font-bold">{{$block->translatedInput('title')}}</h3>
        <x-heroicon-o-arrow-down class="h-5 w-5 transition-all" x-bind:class="{'transform rotate-180': open}"/>
    </div>
    <div class="prose prose-lg mt-4 transition-all duration-500 ease-in-out" x-show="open"
         x-transition
    >
        {!! $block->translatedInput('text') !!}
    </div>
</div>

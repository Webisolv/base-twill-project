<li x-data="{ isOpen: false}" class="relative pt-4 pb-4"
    @mouseover="isOpen = true"
    @mouseleave="isOpen = false"
>
    <a href="{{$href ?? '#'}}"
       class="flex font-semibold @if ($active ?? false) text-gray-900 @endif"
       aria-expanded="false"
    >
        {{$slot}}

        @if($content ?? false)
            <x-heroicon-o-chevron-down
                x-bind:class="{'rotate-180': isOpen}"
                class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500 transition"/>
        @endif
    </a>
    @if($content ?? false)
        <ul x-show="isOpen"
            x-transition:enter="transition-transform ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-3"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-out duration-300"
            x-transition:leave-end="opacity-0 transform translate-y-3"
            style="display:none"
            class="absolute p-5 mt-4 right-0 bg-white shadow-lg transition-all pt-4 pb-4 border border-gray-100"
            @click.away="isOpen = false">
            {{$content}}
        </ul>
    @endif
</li>

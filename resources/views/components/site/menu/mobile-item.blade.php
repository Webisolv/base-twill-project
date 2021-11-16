<div>
    <a href="{{$href ?? '#'}}" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
    w-full border-b pb-2 pt-2 text-lg
    @if ($content ?? false) font-bold @else @endif
    @if ($active ?? false) text-gray-900 @endif">
        {{$slot}}
        @if (($href ?? '#') !== '#')
            <x-heroicon-o-arrow-right class="ml-auto h-4 w-4 inline" />
        @endif
    </a>
    @if($content ?? false)
        <div class="w-full">
            {{$content}}
        </div>
    @endif
</div>

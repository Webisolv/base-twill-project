@php
    /** @var \A17\Twill\Models\Block $block */
@endphp
<div class="flex flex-col max-w-2xl w-full mx-auto gap-8">
    @foreach($block->children as $child)
        @include('site.blocks.faq-item', ['block' => $child, 'background' => $block->input('background')])
    @endforeach
</div>

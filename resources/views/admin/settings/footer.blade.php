@extends('twill::layouts.settings')

@php
    $pageRepository = app(\App\Twill\Capsules\Pages\Repositories\PageRepository::class);

    $pages = $pageRepository->listAll()->map(function($label, $value) {
        return [
            'value' => $value,
            'label' => $label,
        ];
    })->values()->toArray();

@endphp

@section('contentFields')
    @formField('wysiwyg', [
        'name' => 'text',
        'label' => 'Left side content',
        'placeholder' => 'Text',
        'toolbarOptions' => [
            'bold',
            'italic',
            ['list' => 'bullet'],
            ['list' => 'ordered'],
            [ 'script' => 'super' ],
            [ 'script' => 'sub' ],
            'link',
            'clean'
        ],
        'translated' => true
    ])

    @formField('input', [
        'name' => 'copyright_notice',
        'label' => __('Copyright notice'),
        'translated' => true,
    ])
@stop

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
    @formField('select', [
        'name' => 'homepage',
        'label' => 'Homepage',
        'options' => $pages
    ])
    @formField('select', [
        'name' => 'privacy_policy',
        'label' => 'Privacy policy',
        'options' => $pages
    ])
    @formField('select', [
        'name' => 'cookies',
        'label' => 'Cookies',
        'options' => $pages
    ])
    @formField('select', [
        'name' => 'terms_and_conditions',
        'label' => 'Terms and conditions',
        'options' => $pages
    ])
@stop

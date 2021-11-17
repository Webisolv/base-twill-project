@extends('twill::layouts.free')
@section('customPageContent')
    @livewireScripts
    @livewireStyles

    hello world!

    Below is a livewire component:
    <br/>
    <livewire:example-livewire-component/>
@endsection


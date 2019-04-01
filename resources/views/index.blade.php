@extends('layouts.landing')

@section('content')
    <div class="screen-block screen-1">
        <first-screen></first-screen>
    </div>
    <div class="screen-block screen-2">
        <second-screen></second-screen>
        <div class="screen-logo">
            <div>G</div>
        </div>
    </div>
    <div class="screen-block screen-3" data-parallax="scroll"
         data-image-src="{{ asset('resources/img/landing/parallax/forest.jpg') }}">

    </div>
    <div class="screen-block screen-4">
    </div>
    <div class="screen-block screen-5" data-parallax="scroll"
         data-image-src="{{ asset('resources/img/landing/parallax/orange.jpg') }}">

    </div>
@endsection

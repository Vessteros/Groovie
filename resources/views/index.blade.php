@extends('layouts.landing')

@section('content')
    <div class="screen-block screen-1">
        <first-screen></first-screen>
    </div>
    <div class="screen-block screen-2" data-parallax="scroll"
         data-image-src="{{ asset('resources/img/landing/parallax/forest.jpg') }}">

        <div class="screen-logo"><div >G</div></div>
    </div>
    <div class="screen-block screen-3">

    </div>
    <div class="screen-block screen-4" data-parallax="scroll"
         data-image-src="{{ asset('resources/img/landing/parallax/orange.jpg') }}">

    </div>
@endsection

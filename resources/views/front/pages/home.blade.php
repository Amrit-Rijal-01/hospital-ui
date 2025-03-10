@extends('front.layout.app')

@section('title', 'Home')

@section('content')
    @include('front.includes.home.top-banner')

    @include('front.includes.home.speciality')

    @include('front.includes.home.team-section')

    @include('front.includes.home.why-this')

    @include('front.includes.home.services')

    @include('front.includes.home.story')
@endsection

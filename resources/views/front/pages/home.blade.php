@extends('front.layout.app')

@section('title', 'Home')
@section('meta', 'Home page for the website')

@section('content')
    @include('front.includes.home.top-banner')

    @include('front.includes.home.speciality')

    @include('front.includes.home.team-section')

    @include('front.includes.home.why-this')

    @include('front.includes.home.services')

    @include('front.includes.home.story')

    @include('front.includes.home.national')

    @include('front.includes.home.updates')

    @include('front.includes.home.award')

    @include('front.includes.home.events')
@endsection

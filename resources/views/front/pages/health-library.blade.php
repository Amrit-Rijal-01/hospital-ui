@extends('front.layout.app')
@section('title', 'Health Library')
@section('meta', 'Health Library page for the website')

@section('content')
    @include('front.includes.health-library.banner')
    @include('front.includes.health-library.diseases')
    @include('front.includes.health-library.health-library')
    @include('front.includes.health-library.health-care')
    @include('front.includes.health-library.technology')
    @include('front.includes.health-library.knowledge')
    @include('front.includes.health-library.download')
    @include('front.includes.health-library.event')
@endsection

@extends('front.layout.app')

@section('title', 'Learn CPR Technique')
@section('meta', 'CPR learning technique for the website')

@section('content')
    @include('front.includes.cpr.cpr-banner')
    @include('front.includes.cpr.statistics')
    @include('front.includes.cpr.why-learn-cpr')
    @include('front.includes.cpr.steps')
    @include('front.includes.cpr.mission')
    @include('front.includes.cpr.vision')
    @include('front.includes.cpr.aim')
    @include('front.includes.cpr.message')
    @include('front.includes.cpr.training')
    @include('front.includes.cpr.blog')
    @include('front.includes.cpr.file')
@endsection

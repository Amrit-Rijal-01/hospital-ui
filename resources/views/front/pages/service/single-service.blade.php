@extends('front.layout.app')

@section('title', 'Service Name')
@section('meta', 'Service name page for the website')

@section('content')
    @include('front.includes.single-service.top-banner')
    @include('front.includes.single-service.overview')
    @include('front.includes.single-service.faq')
    @include('front.includes.single-service.our-services')
    @include('front.includes.single-service.connect')
@endsection


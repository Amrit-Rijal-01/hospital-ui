@extends('front.layout.app')

@section('title', 'Service Name')
@section('meta', 'Service name page for the website')

@section('content')
    @include('front.includes.single-service.top-banner')
    @include('front.includes.single-service.overview')
    @include('front.includes.single-service.second-opinion-qn')
    @include('front.includes.single-service.faq')
    @include('front.includes.single-service.why-our-labs')
    @include('front.includes.single-service.middle-image')
    @include('front.includes.single-service.elder-care-package')
    @include('front.includes.single-service.our-services')
    @include('front.includes.single-service.connect')
@endsection


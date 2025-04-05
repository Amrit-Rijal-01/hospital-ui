@extends('front.layout.app')

@section('title', 'Service with package Name')
@section('meta', 'Service with package name page for the website')

@section('content')
      @include('front.includes.single-service.top-banner')
      @include('front.includes.single-service.package')
      @include('front.includes.single-service.overview')
      @include('front.includes.single-service.faq')
      @include('front.includes.single-service.our-services')
      @include('front.includes.single-service.connect')
@endsection
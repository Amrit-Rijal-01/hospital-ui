@extends('front.layout.app')
@section('title', 'Why Nobel')
@section('meta', 'Why choose us page for the website')

@section('content')
    @include('front.includes.why-us.why-us-banner')
    @include('front.includes.why-us.talent')
    @include('front.includes.why-us.infrastructure')
    @include('front.includes.why-us.technology')
    @include('front.includes.why-us.care')
    @include('front.includes.why-us.trust')
@endsection

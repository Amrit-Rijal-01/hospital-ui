@extends('front.layout.app')

@section('title', 'About Us')
@section('meta', 'About Us page for the website')

@section('content')
    @include('front.includes.about-us.about-us-banner')
    {{-- @include('front.includes.about-us.about-nobel') --}}
    @include('front.includes.about-us.about-mission')
    @include('front.includes.about-us.about-mission')
    @include('front.includes.about-us.about-mission')
    {{-- @include('front.includes.about-us.about-value') --}}
    {{-- @include('front.includes.about-us.about-award') --}}
@endsection
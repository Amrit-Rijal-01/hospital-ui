@extends('front.layout.app')

@section('title', 'Doctor Profile')
@section('meta', 'Per Doctor page for the website')

@section('content')
    @include('front.includes.doctor-profile.dr-banner')
    @include('front.includes.doctor-profile.dr-about')
    @include('front.includes.doctor-profile.dr-specialization')
    @include('front.includes.doctor-profile.dr-milestone')
    @include('front.includes.doctor-profile.dr-article')
    @include('front.includes.doctor-profile.dr-media')
@endsection

@extends('front.layout.app')

@section('title', 'Contact Us')
@section('meta', 'Contact us page for the website')

@section('content')
    @include('front.includes.contact-us.contact')
    @include('front.includes.contact-us.find-us')
@endsection

@extends('front.layout.app')

@section('title', 'Events & News')
@section('meta', 'Events & News page for the website')

@section('content')
@include('front.includes.events.top-banner')
@include('front.includes.events.news')
@include('front.includes.events.cme')
@include('front.includes.events.opd')
@include('front.includes.events.webinar')
@endsection

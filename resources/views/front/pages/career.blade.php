@extends('front.layout.app')
@section('title', 'Career');
@section('meta', 'Career page for the website')

@section('content')
    @include('front.includes.career.top-banner')
    @include('front.includes.career.profession')
    @include('front.includes.career.content')
    @include('front.includes.career.leader')
    @include('front.includes.career.not-sure')
    @include('front.includes.career.life-here')
    @include('front.includes.career.internship')
@endsection

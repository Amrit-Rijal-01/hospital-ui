@extends('front.layout.app')

@section('title', 'Home')

@section('content')
    @include('front.includes.home.top-banner')

    @include('front.includes.home.speciality')

    @include('front.includes.home.team-section')
@endsection

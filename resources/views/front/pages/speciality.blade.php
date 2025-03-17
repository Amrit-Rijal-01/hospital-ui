@extends('front.layout.app')

@section('title', 'Speciality')
@section('meta', 'Speciality page')

@section('content')
    @include('front.includes.speciality.overview')
    @include('front.includes.speciality.message')
    @include('front.includes.speciality.team')
    @include('front.includes.speciality.treatment')
    @include('front.includes.speciality.ailment')
    @include('front.includes.speciality.technology')
    @include('front.includes.speciality.sub-specialization')
    @include('front.includes.speciality.story')
    @include('front.includes.speciality.know-more')
@endsection

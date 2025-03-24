@extends('front.layout.app')

@section('title', 'Treatment Name')
@section('meta', 'Treatment-Name page for the website')

@section('content')
    @include('front.includes.per-treatment.treatment-banner')
    @include('front.includes.per-treatment.overview')
    @include('front.includes.per-treatment.how')
    @include('front.includes.per-treatment.benefit-risk')
@endsection

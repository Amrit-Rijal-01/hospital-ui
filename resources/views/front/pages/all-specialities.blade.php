@extends('front.layout.app')

@section('title', 'All Specialities')
@section('meta', 'All Specialities page for the website')

@section('content')
    <section id="all-specialities">
        <div class="main-container">
            <div class="heading text-center mb-4">
                All Specialities
            </div>
            <div class="specialities-cards">
                <div class="row">
                    <div class="col6 col-lg-4 col-md-3">
                        <div class="each-card">
                            <div class="img-wrapper">
                                <img src="{{ asset('front/img/health-library/diseases.png') }}" alt="Diseases">
                            </div>
                            <div class="heading-sm">
                                Diseases & Conditions
                            </div>
                            <x-hoverBtn class="btn heading-xs">Know More</x-hoverBtn>
                        </div>
                    </div>
                    <div class="col6 col-lg-4 col-md-3">
                        <div class="each-card">
                            <div class="img-wrapper">
                                <img src="{{ asset('front/img/health-library/diseases.png') }}" alt="Diseases">
                            </div>
                            <div class="heading-sm">
                                Diseases & Conditions
                            </div>
                            <x-hoverBtn class="btn heading-xs">Know More</x-hoverBtn>
                        </div>
                    </div>
                    <div class="col6 col-lg-4 col-md-3">
                        <div class="each-card">
                            <div class="img-wrapper">
                                <img src="{{ asset('front/img/health-library/diseases.png') }}" alt="Diseases">
                            </div>
                            <div class="heading-sm">
                                Diseases & Conditions
                            </div>
                            <x-hoverBtn class="btn heading-xs">Know More</x-hoverBtn>
                        </div>
                    </div>
                    <div class="col6 col-lg-4 col-md-3">
                        <div class="each-card">
                            <div class="img-wrapper">
                                <img src="{{ asset('front/img/health-library/diseases.png') }}" alt="Diseases">
                            </div>
                            <div class="heading-sm">
                                Diseases & Conditions
                            </div>
                            <x-hoverBtn class="btn heading-xs">Know More</x-hoverBtn>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

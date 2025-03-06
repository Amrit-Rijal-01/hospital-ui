@extends('front.layout.app')

@section('title', 'Home')

@section('content')
    <div class="top-banner">
        <picture class="img-wrap img-fluid">

            <source media="(min-width: 768px)" srcset="{{ asset('front/img/banner.jpg') }}">
            <source media="(min-width: 320px)" srcset="{{ asset('front/img/mobile-banner.jpg') }}">
            <img class="img-fluid" src="{{ asset('front/img/banner.jpg') }}" alt="Banner Image">

        </picture>
        <div class="search-wrapper mx-auto">
            <div class="search-field">
                <input type="text" name="" id="search-box" class="search-box" placeholder="Search for Doctors">
                <button class="search-icon" type="button" name="search"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="floating-tab d-flex">

            <a href="#" class="left-hover" target="_blank">
                <img src="{{ asset('front/img/calendar-tick.svg') }}" class="me-2" alt="Appointment Image">
                <span>Book Appointment</span>
            </a>

            <a href="#" class="">
                <img src="{{ asset('front/img/doctor.svg') }}" class="me-2" alt="Doctor Image">

                <span>Second Opinion</span>
            </a>

            <a href="#" class="">
                <img src="{{ asset('front/img/checkup.svg') }}" class="me-2" alt="Checkup Image">
                <span>Get Health Checkup</span>
            </a>

            <a href="#" class="">
                <img src="{{ asset('front/img/consultation.svg') }}" class="me-2" alt="Consultation Image">

                <span>Book A Virtual Consultation</span>
            </a>


            <a href="#" class="">
                <img src="{{ asset('front/img/homecare.svg') }}" class="me-2" alt="Home Care Image">

                <span>Home Care</span>
            </a>

            <a href="#" class="right-hover">

                <img src="{{ asset('front/img/test.svg') }}" class="me-2" alt="Test Image">
                <span>Book a Test</span>
            </a>

        </div>
    </div>

    <section class="specialities">

        <div class="pt-5 main-container">
            <div class="specialities-inner pt-5 d-flex flex-column flex-xl-row gap-2">
                <div class="sp-inner-heading p-3">
                    <h4 class="sp-subheading">Specialities</h4>
                    <h2 class="sp-heading">An Ecosystem for Clinical Excellence</h2>
                </div>
                <div class="sp-inner-care p-3 border-end">
                    <div class="sp-wrapper">
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/heart.svg') }}" alt="Heart">
                                <span>
                                    Cardiac Care
                                </span>
                            </div> <i class="bi bi-chevron-right"></i>
                        </a> <hr>
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/cancer.svg') }}" alt="Cancer">
                                <span>
                                    Cancer Care
                                </span>
                            </div> <i class="bi bi-chevron-right"></i>
                        </a> <hr>
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/neuro.svg') }}" alt="Neuro Science">
                                <span>
                                    Neuroscience
                                </span>
                            </div> <i class="bi bi-chevron-right"></i>
                        </a> <hr>
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/gastro.svg') }}" alt="Gastro Science">
                                <span>
                                    Gastro Science
                                </span>
                            </div> <i class="bi bi-chevron-right"></i>
                        </a> <hr>
                        <a href="#">
                            <d class="speciality-row">
                                <img src="{{ asset('front/img/ortho.svg') }}" alt="Orthopaedics">
                                <span>
                                    Orthopaedics
                                </span>
                            </d><i class="bi bi-chevron-right"></i>
                        </a> <hr>
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/renal.svg') }}" alt="Renal Care">
                                <span>
                                    Renal Care
                                </span>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </a> <hr>
                    </div>
                    <div class="common-button">
                        <a href="#" class="anchor-button">View All Specialities <span></span> </a>
                    </div>
                </div>
                <div class="sp-inner-search p-3">
                    <h4>Search By</h4>
                </div>
            </div>
        </div>
        </div>

    </section>
@endsection
m

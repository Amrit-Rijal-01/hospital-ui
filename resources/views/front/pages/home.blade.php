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

    <section class="specialities mb-4">

        <div class="pt-5 main-container">
            <div class="specialities-inner pt-5 d-flex flex-column flex-xl-row gap-2">
                <div class="sp-inner-heading p-3">
                    <h4 class="sp-subheading">Specialities</h4>
                    <h2 class="sp-heading">An Ecosystem for Clinical Excellence</h2>
                </div>
                <div class="sp-inner-care p-3 border-end fw-bold">
                    <div class="sp-wrapper">
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/heart.svg') }}" alt="Heart">
                                <span>
                                    Cardiac Care
                                </span>
                            </div> <i class="bi bi-chevron-right"></i>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/cancer.svg') }}" alt="Cancer">
                                <span>
                                    Cancer Care
                                </span>
                            </div> <i class="bi bi-chevron-right"></i>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/neuro.svg') }}" alt="Neuro Science">
                                <span>
                                    Neuroscience
                                </span>
                            </div> <i class="bi bi-chevron-right"></i>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/gastro.svg') }}" alt="Gastro Science">
                                <span>
                                    Gastro Science
                                </span>
                            </div> <i class="bi bi-chevron-right"></i>
                        </a>
                        <hr>
                        <a href="#">
                            <d class="speciality-row">
                                <img src="{{ asset('front/img/ortho.svg') }}" alt="Orthopaedics">
                                <span>
                                    Orthopaedics
                                </span>
                            </d><i class="bi bi-chevron-right"></i>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="speciality-row">
                                <img src="{{ asset('front/img/renal.svg') }}" alt="Renal Care">
                                <span>
                                    Renal Care
                                </span>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <hr>
                    </div>
                    <div class="hover-button">
                        <x-hoverBtn href="https://www.google.com" target="_blank">
                            View All Specialities
                        </x-hoverBtn>
                    </div>
                </div>
                <div class="sp-inner-search p-3">
                    <div class="sp-wrapper">
                        <h4 class="sp-subheading">Search By</h4>
                        <div class="sp-search-by d-flex justify-content-evenly gap-1">
                            <a href="#" class="flex-fill">Ailments</a>
                            <a href="#" class="flex-fill">Treatments</a>
                            <a href="#" class="flex-fill">Technologies</a>
                        </div>
                        <div class="sp-search-letter">
                            <div class="letter-wrap"><a href="#" class=""><span class="">a</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">b</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">c</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">d</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">e</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">f</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">g</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">h</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">i</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">j</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">k</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">l</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">m</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">n</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">o</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">p</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">q</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">r</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">s</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">t</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">u</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">v</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">w</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">x</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">y</span></a>
                            </div>
                            <div class="letter-wrap"><a href="#" class=""><span class="">z</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="hover-button">
                        <x-hoverBtn href="#">View All Technologies</x-hoverBtn>
                    </div>

                </div>
            </div>
        </div>
        </div>

    </section>

    <section class="team-section mt-5">
        <div class="main-container">
            <div class="meet-doc-content">
                <h3 class="text-center fw-bold mb-4">Doctors, Pioneers, Life Savers</h3>
                <div class="text-center mb-5">
                    <p>
                        Our superspecialist doctors provide the highest quality of care through a team-based,
                        doctor-led model. Trained at some of the world's most renowned institutions,
                        our highly experienced doctors are distinguished experts in their respective specialities.
                        Our doctors work full-time and exclusively across Medanta hospitals.
                        In addition to offering superspecialised care in their own field,
                        the Medanta organisational structure enables every doctor to help
                        create a culture of collaboration and multispecialty care integration.
                    </p>
                </div>
                <div class="find-doc">
                    <form>
                        <div class="find-doc-form">
                            <div class="select-wrap d-flex justify-content-center gap-2">
                                <div class="find-doc-location-wrap">
                                    <div class="default-location-item">
                                        <span>Kathmandu</span>
                                    </div>
                                    <ul class="find-doc-list location" id="find-doc-location">
                                        {{-- <li data-value="0">Kathmandu</li> --}}
                                        <li data-value="1">Pokhara</li>
                                        <li data-value="2">Biratnagar</li>
                                    </ul>
                                    <input type="hidden" name="find-doc-location" id="find-doc-location-input">
                                </div>
                                <div class="find-doc-speciality-wrap">
                                    <div class="default-speciality-item">
                                        <span>All Specialities</span>
                                    </div>
                                    <ul class="find-doc-list speciality" id="find-doc-speciality">
                                        <li data-value="1">Cardiac Care</li>
                                        <li data-value="2">Cancer Care</li>
                                        <li data-value="3">Neuro Science</li>
                                    </ul>
                                    <input type="hidden" name="find-doc-speciality" id="find-doc-location-input">
                                </div>
                                <button type="submit" class="find-doc-btn">Go</button>
                            </div>
                        </div>
                        @push('js')
                            <script>
                                $(function() {


                                })
                            </script>
                        @endpush
                    </form>
                </div>
            </div>
        </div>
        <picture class="image-block">
            <source media="(min-width:768px)" srcset="{{ asset('front/img/doctors-desktop.webp') }}"
                alt="meet-our-doctors">
            <source media="(min-width:320px)" srcset="{{ asset('front/img/doctor-mobile.webp') }}"
                alt="meet-our-doctors">
            <img class="img-fluid" src="{{ asset('front/img/doctors-desktop.webp') }}" alt="meet-our-doctors">
        </picture>
    </section>
@endsection

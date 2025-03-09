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
        <div class="slide-list">
            <button class="left-arrow">
                <img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow">
            </button>
            <div class=" floating-tab d-flex">
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
            <button class="right-arrow">
                <img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow">
            </button>

        </div>
    </div>

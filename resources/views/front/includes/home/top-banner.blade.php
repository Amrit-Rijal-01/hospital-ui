<section class="top-banner">
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
    <div class=" slide-list d-flex">
        <div class="swiper-wrapper floating-tab d-flex" id="slick-slider">
            <a href="#" class="swiper-slide left-hover" target="_blank">
                <img src="{{ asset('front/img/calendar-tick.svg') }}" class="me-2" alt="Appointment Image">
                <span>Book Appointment</span>
            </a>

            <a href="#" class="swiper-slide">
                <img src="{{ asset('front/img/doctor.svg') }}" class="me-2" alt="Doctor Image">

                <span>Second Opinion</span>
            </a>

            <a href="#" class="swiper-slide">
                <img src="{{ asset('front/img/checkup.svg') }}" class="me-2" alt="Checkup Image">
                <span>Get Health Checkup</span>
            </a>

            <a href="#" class="swiper-slide">
                <img src="{{ asset('front/img/consultation.svg') }}" class="me-2" alt="Consultation Image">

                <span>Book A Virtual Consultation</span>
            </a>


            <a href="#" class="swiper-slide">
                <img src="{{ asset('front/img/homecare.svg') }}" class="me-2" alt="Home Care Image">

                <span>Home Care</span>
            </a>

            <a href="#" class="swiper-slide right-hover">

                <img src="{{ asset('front/img/test.svg') }}" class="me-2" alt="Test Image">
                <span>Book a Test</span>
            </a>
        </div>
    </div>
</section>

@push('js')
    <script>
        $(document).ready(function() {
            let $slider = $('#slick-slider');

            function initSlider() {
                if ($(window).width() <= 1299) {

                    if (!$slider.hasClass('slick-initialized')) {
                        $slider.slick({
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: true,
                            prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                            nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                            responsive: [{
                                    breakpoint: 768,
                                    settings: {
                                        arrows: false,
                                        slidesToShow: 2,

                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 1,
                                        arrows: false
                                    }
                                }
                            ]
                        })
                    }
                } else {
                    if ($slider.hasClass("slick-initialized")) {
                        $slider.slick("unslick");
                    }
                }
                if ($(window).width() <= 768) {
                    $('.slick-prev, .slick-next').hide(); // Hide custom arrows
                } else {
                    $('.slick-prev, .slick-next').show(); // Show arrows for larger screens
                }
            }
            initSlider();
            $(window).on("resize", function() {
                initSlider();
            });
        })
    </script>
@endpush

<section id="home-top-banner" data-content="Top Banner">
    <div class="top-banner-slider">
        <div class="image-card">
            <picture>
                <source height="500" width="1920" media="(min-width: 769px)"
                    srcset="{{ asset('front/img/banner.jpg') }}">
                <source width="480" height="320" media="(max-width: 768px)"
                    srcset="{{ asset('front/img/mobile-banner.jpg') }}">
                <img height="500" width="1920" src="{{ asset('front/img/banner.jpg') }}" alt="Slider Image">
            </picture>

        </div>
        <div class="image-card">
            <picture>
                <source height="500" width="1920" media="(min-width: 769px)"
                    srcset="{{ asset('front/img/career/slide-banner-2.jpg') }}">
                <source width="480" height="320" media="(max-width: 768px)"
                    srcset="{{ asset('front/img/career/slide-banner-mob-2.jpg') }}">
                <img height="500" width="1920" src="{{ asset('front/img/career/slide-banner-2.jpg') }}"
                    alt="Slider Image">
            </picture>

        </div>
        <div class="image-card">
            <picture>
                <source height="500" width="1920" media="(min-width:769px)"
                    srcset="{{ asset('front/img/career/slide-banner-3.png') }}">
                <source width="480" height="320" media="(max-width:768px)"
                    srcset="{{ asset('front/img/career/slide-banner-mob-3.jpg') }}">
                <img height="500" width="1920" src="{{ asset('front/img/career/slide-banner-3.png') }}"
                    alt="Slider Image">
            </picture>
        </div>
    </div>
    <div class="main-container">
        <div class=" slide-list">
            <div class="swiper-wrapper floating-tab" id="slick-slider">
                <a href="#" class="swiper-slide" target="_blank">
                    <img src="{{ asset('front/img/calendar-tick.svg') }}" class="me-2" alt="Appointment Image">
                    <span>Book Appointment</span>
                </a>

                <a href="#" class="swiper-slide">
                    <img src="{{ asset('front/img/doctor.svg') }}" class="me-2" alt="Doctor Image">

                    <span>Second Opinion</span>
                </a>
                <a href="#" class="swiper-slide">
                    <img src="{{ asset('front/img/doctor.svg') }}" class="me-2" alt="Doctor Image">

                    <span>Second Opinion</span>
                </a>

            </div>
        </div>
        {{-- <div class="search-wrapper">
            <div class="search-field">
                <input type="text" name="" id="search-box" class="search-box" placeholder="Search for Doctors">
                <button class="search-icon" type="button" name="search"><i class="bi bi-search"></i></button>
            </div>
            <div class="feedback-section">
                <a href="#" class="feedback-btn navbar-link">
                    <img src="{{ asset('front/img/feedback.png') }}" class="feedback-image" alt="Feedback">
                    <small>Feedback</small>
                </a>
                <a href="#" class="whatsapp-link">
                    <img src="{{ asset('front/img/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-image">
                    <span>WhatsApp</span>
                </a>
                <a class="emergency-btn" href="tel:1068">
                    <img src="{{ asset('front/img/emergency.png') }}" alt="Emergency" width="50" height="50">
                    <small>Emergency</small>
                </a>
                <a class="md-emergency-btn" href="tel:1068">
                    <img src="{{ asset('front/img/emergency.png') }}" alt="Emergency" width="50" height="50">
                    <span>Emergency</span>
                </a>
    
                <button href="#" class="call-back navbar-link" data-bs-toggle="modal" data-bs-target="#callback-modal">
                    <img src="{{ asset('front/img/phone-icon.png') }}" alt="Call Back" class="call-back-image me-1">
                    <small>Request Call Back</small>
                </button>
                <a href="#" class="md-contact-us">
                    <img src="{{ asset('front/img/phone-grey-icon.png') }}" alt="Call Back" class="call-back-image me-1">
                    <span>Contact</span>
                </a>

            </div>
        </div> --}}
        <div class="search-wrapper">
            <div class="search-field">
                <a href="/doctor-listing" class="btn-action">
                    Search For Doctor
                </a>
            </div>
        
            <div class="feedback-section">
                <a href="/contact-us" class="btn-action button-secondary feedback-btn">
                    <img src="{{ asset('front/img/feedback.png') }}" alt="Feedback">
                    <span>Feedback</span>
                </a>
        
                <a href="tel:1068" class="btn-action button-primary emergency-btn">
                    <img src="{{ asset('front/img/emergency.png') }}" alt="Emergency">
                    <span>Emergency</span>
                </a>
        
                <a href="#" class="btn-action button-primary" data-bs-toggle="modal" data-bs-target="#callback-modal">
                    <img src="{{ asset('front/img/phone-icon.png') }}" alt="Call Back">
                    <span>Request Call</span>
                </a>
        
                <a href="#" class="btn-action button-secondary">
                    <img src="{{ asset('front/img/whatsapp.png') }}" alt="WhatsApp">
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="callback-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header p-0 pb-3 border-bottom-0">
                <h2 class="modal-title heading-md text-center">Request Call Back</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Full Name *" required>
                            <label for="name">Full Name *</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" name="phoneNumber" placeholder="Phone Number *"
                                required>
                            <label for="phoneNumber">Phone Number *</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email Address *"
                                required>
                            <label for="email">Email
                                Address *</label>
                        </div>
                    </div>
                    <div class="col-12 submit-btn">
                        <button class="w-100" id="submit-callback">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).ready(function () {
            $('.top-banner-slider').slick({
                arrows: false,
                dots: true
            })
            let $slider = $('#slick-slider');

            function initSlider() {
                if ($(window).width() <= 1299) {

                    if (!$slider.hasClass('slick-initialized')) {
                        $slider.slick({
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: false,
                            arrows: true,
                            prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                            nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                            responsive: [{
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2,

                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
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
            }
            initSlider();
            $(window).on("resize", function () {
                initSlider();
            });
        })
    </script>
@endpush
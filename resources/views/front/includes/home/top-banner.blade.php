<section id="home-top-banner" data-content="Top Banner">
    <div class="top-banner-slider">
        <div class="image-card">
            <picture>
                <source height="500" width="1920" media="(min-width: 769px)" srcset="{{ asset('front/img/banner.jpg') }}">
                <source width="480" height="320" media="(max-width: 768px)" srcset="{{ asset('front/img/mobile-banner.jpg') }}">
                <img height="500" width="1920"   src="{{ asset('front/img/banner.jpg') }}" alt="Slider Image">
            </picture>

        </div>
        <div class="image-card">
            <picture>
                <source height="500" width="1920" media="(min-width: 769px)" srcset="{{ asset('front/img/career/slide-banner-2.jpg') }}">
                <source width="480" height="320" media="(max-width: 768px)" srcset="{{ asset('front/img/career/slide-banner-mob-2.jpg') }}">
                <img height="500" width="1920"  src="{{ asset('front/img/career/slide-banner-2.jpg') }}" alt="Slider Image">
            </picture>

        </div>
        <div class="image-card">
            <picture>
                <source height="500" width="1920" media="(min-width:769px)" srcset="{{ asset('front/img/career/slide-banner-3.png') }}">
                <source width="480" height="320" media="(max-width:768px)" srcset="{{ asset('front/img/career/slide-banner-mob-3.jpg') }}">
                <img height="500" width="1920" src="{{ asset('front/img/career/slide-banner-3.png') }}" alt="Slider Image" >
            </picture>
        </div>
    </div>
    <div class="main-container">
       <div class="search-wrapper mx-auto">
           <div class="search-field">
               <input type="text" name="" id="search-box" class="search-box" placeholder="Search for Doctors">
               <button class="search-icon" type="button" name="search"><i class="bi bi-search"></i></button>
           </div>
       </div>
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
    </div>
</section>

@push('js')
    <script>
        $(document).ready(function() {
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
            $(window).on("resize", function() {
                initSlider();
            });
        })
    </script>
@endpush

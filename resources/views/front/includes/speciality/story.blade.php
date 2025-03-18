<section class="patient-story">
    <div class="main-container">
        <div class="heading text-center">
            Patient Stories
        </div>
        <div class="story-wrapper desktop d-flex flex-nowrap gap-4">
            <div class="first">
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="img-1 glightbox">
                        <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Doctor">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>
                </div>
            </div>
            <div class="second">
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="img-1 glightbox">
                        <img src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Paramedic">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>
                </div>
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="img-2 glightbox">
                        <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>
                </div>
            </div>
            <div class="third">
                <a href="{{ asset('front/img/test.mp4') }}" class="img-1 glightbox">
                    <img class="center-img" src="{{ asset('front/img/career/doctor.jpg') }}" alt="Doctor">
                    <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                </a>
            </div>
            <div class="fourth">
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="img-1 glightbox">
                        <img src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Paramedic">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>
                </div>
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="img-2 glightbox">
                        <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>
                </div>
            </div>
            <div class="fifth">
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="img-1 glightbox">
                        <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Doctor">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>

                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="mobile-slide">
                <div class="image-card">
                    <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                        <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>
                </div>
                <div class="image-card">
                    <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                        <img src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Paramedic">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>
                </div>
                <div class="image-card">
                    <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                        <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>
                </div>
                <div class="image-card">
                    <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                        <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Doctor">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </a>
                </div>
            </div>
            <div class="mobile-btn w-100 d-flex justify-content-center py-2 fw-semibold">
                <x-hoverBtn >View All</x-hoverBtn>

            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            const lightBox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true
            });
            function lifeHereSlider() {
                if ($(window).width() < 992) {
                    $('.mobile-slide').slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                        nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                        responsive: [{
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1,
                            }
                        }]
                    });
                } else {
                    if ($('.award-slider').hasClass('slick-initialized')) {
                        $('.award-slider').unslick();
                    }
                }
            }
            lifeHereSlider();
            $(window).resize(lifeHereSlider);
        });
    </script>
@endpush

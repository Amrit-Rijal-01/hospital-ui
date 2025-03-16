<section class="life-here">
    <div class="main-container">
        <h4 class="heading text-center">
            Life Here
        </h4>
        <div class="desktop d-flex flex-nowrap gap-4">
            <div class="first">
                <div class="img-1">
                    <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Doctor">
                </div>
            </div>
            <div class="second">
                <div class="img-1">
                    <img src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Paramedic">
                </div>
                <div class="img-2">
                    <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                </div>
            </div>
            <div class="third">
                <div class="img-1">
                    <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Doctor">
                </div>
            </div>
            <div class="fourth">
                <div class="img-1">
                    <img src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Paramedic">
                </div>
                <div class="img-2">
                    <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                </div>
            </div>
            <div class="fifth">
                <div class="img-1">
                    <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Doctor">
                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="image-card">
                <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
            </div>
            <div class="image-card">
                <img src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Paramedic">
            </div>
            <div class="image-card">
                <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
            </div>
            <div class="image-card">
                <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Doctor">
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            function lifeHereSlider() {
                if ($(window).width() < 992) {
                    $('.mobile').slick({
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

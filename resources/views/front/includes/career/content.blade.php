<section class="employee-section">
    <div class="main-container">
        <div class="heading text-center">
            Empowering Lives, Inspiring Excellence
        </div>
        <div class="tabs text-center">
            <button class="tab active-tab" onclick="changeTab(this)">Employees & Awards</button>
            <button class="tab" onclick="changeTab(this)">Our Philosophy</button>
        </div>
        <div class="content-main">
            <div class="employee-flex d-flex justify-content-between flex-nowrap flex-lg-row flex-column">
                <div class="employee">
                    <div class="heading-sm mb-4">
                        Employee Speak
                    </div>
                    <div class="employee-slider" id="slide">
                        <div class="each-card">
                            <div class="image-container">
                                <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Card Image" class="img-fluid">
                            </div>
                            <div class="body">
                                <h3 class="heading">Name</h3>
                                <p class="card-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est
                                    ipsam
                                    tempore
                                    dolorum nisi provident consequatur?</p>
                            </div>
                        </div>
                        <div class="each-card">
                            <div class="image-container">
                                <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Card Image" class="img-fluid">
                            </div>
                            <div class="body">
                                <h3 class="heading">Name</h3>
                                <p class="card-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est
                                    ipsam
                                    tempore
                                    dolorum nisi provident consequatur?</p>
                            </div>
                        </div>
                        <div class="each-card">
                            <div class="image-container">
                                <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Card Image" class="img-fluid">
                            </div>
                            <div class="body">
                                <h3 class="heading">Name</h3>
                                <p class="card-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est
                                    ipsam
                                    tempore
                                    dolorum nisi provident consequatur?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="award">
                    <div class="heading-sm mb-3">
                        Awards
                    </div>
                    <div class="award-slider d-flex flex-row flex-lg-column">
                        <div class="slide-card">
                            <div class="leaf-left">
                                <img src="{{ asset('front/img/leaf-left.png') }}" alt="leaf">
                            </div>
                            <div class="d-flex flex-column justify-content-center h-100">
                                <div class="year sm-heading">
                                    2022
                                </div>
                                <div class="content xs-heading">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, aperiam.
                                </div>
                            </div>
                            <div class="leaf-right">
                                <img src="{{ asset('front/img/leaf-right.png') }}" alt="leaf">
                            </div>
                        </div>
                        <div class="slide-card">
                            <div class="leaf-left">
                                <img src="{{ asset('front/img/leaf-left.png') }}" alt="leaf">
                            </div>
                            <div class="d-flex flex-column justify-content-center h-100">
                                <div class="year sm-heading">
                                    2022
                                </div>
                                <div class="content xs-heading">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, aperiam.
                                </div>
                            </div>
                            <div class="leaf-right">
                                <img src="{{ asset('front/img/leaf-right.png') }}" alt="leaf">
                            </div>
                        </div>
                        <div class="slide-card">
                            <div class="leaf-left">
                                <img src="{{ asset('front/img/leaf-left.png') }}" alt="leaf">
                            </div>
                            <div class="d-flex flex-column justify-content-center h-100">
                                <div class="year sm-heading">
                                    2022
                                </div>
                                <div class="content xs-heading">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, aperiam.
                                </div>
                            </div>
                            <div class="leaf-right">
                                <img src="{{ asset('front/img/leaf-right.png') }}" alt="leaf">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('js')
    <script>
        $(document).ready(function() {

            $('.employee-slider').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                centerMode: false,
                infinite: true,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                }]
            });

            function toggleAward() {
                if ($(window).width() < 992) {
                    if (!$('.award-slider').hasClass('.slick-initialized')) {
                        $('.award-slider').slick({
                            slidesToShow: 2,
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
                        })
                    } else {
                        if ($('.award-slider').hasClass('slick-initialized')) {
                            $('.award-slider').unslick();
                        }
                    }
                }

            }
            toggleAward();
            $(window).resize(toggleAward);
        });

        function changeTab(el) {
            console.log('click');

            $('.tab').removeClass('active-tab');
            $(el).addClass('active-tab');
        }
    </script>
@endpush

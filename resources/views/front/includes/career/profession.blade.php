<section class="profession">
    <div class="main-container">
        <div class="heading text-center">

        </div>
        <div class="card-wrapper">
            <div class="slide" id="slide">
                <div class="each-card">
                    <div class="image-container">
                        <img height="350" width="350" src="{{ asset('front/img/career/doctor.jpg') }}" alt="Card Image" class="img-fluid">
                    </div>
                    <div class="body">
                        <h3 class="heading-md">Administrative Administrative Staff</h3>
                        <p class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est ipsam tempore
                            dolorum nisi provident consequatur?</p>
                        <div class="d-flex justify-content-center know-btn">
                            <x-hoverBtn href="/jobs">View Jobs</x-hoverBtn>
                        </div>
                    </div>
                </div>
                <div class="each-card">
                    <div class="image-container">
                        <img height="350" width="350" src="{{ asset('front/img/career/nurse.jpg') }}" alt="Card Image" class="img-fluid">
                    </div>
                    <div class="body">
                        <h3 class="heading-md">Doctor</h3>
                        <p class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est ipsam tempore
                            dolorum nisi provident consequatur? amet consectetur adipisicing elit. Est ipsam tempore
                            dolorum nisi provident consequatur?</p>
                        <div class="d-flex justify-content-center know-btn">
                            <x-hoverBtn href="/jobs">View Jobs</x-hoverBtn>
                        </div>
                    </div>
                </div>
                <div class="each-card">
                    <div class="image-container">
                        <img height="350" width="350" src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Card Image" class="img-fluid">
                    </div>
                    <div class="body">
                        <h3 class="heading-md">Doctor</h3>
                        <p class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est ipsam tempore
                            dolorum nisi provident consequatur?</p>
                        <div class="d-flex justify-content-center know-btn">
                            <x-hoverBtn href="/jobs">View Jobs</x-hoverBtn>
                        </div>
                    </div>
                </div>
                <div class="each-card">
                    <div class="image-container">
                        <img height="350" width="350" src="{{ asset('front/img/career/staff.jpg') }}" alt="Card Image" class="img-fluid">
                    </div>
                    <div class="body">
                        <h3 class="heading-md">Doctor</h3>
                        <p class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est ipsam tempore
                            dolorum nisi provident consequatur? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est ipsam tempore
                            dolorum nisi provident consequatur?</p>
                        <div class="d-flex justify-content-center know-btn">
                            <x-hoverBtn href="/jobs">View Jobs</x-hoverBtn>
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

            function slickToggler() {
                let $slider = $('#slide');

                if ($(window).width() < 1199) {
                    if (!$slider.hasClass('slick-initialized')) {
                        $slider.slick({
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                            nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                            responsive: [{
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 2,

                                    }
                                },
                                {
                                    breakpoint: 576,
                                    settings: {
                                        slidesToShow: 1,
                                    }
                                }
                            ]
                        });
                    }
                } else {
                    if ($slider.hasClass('slick-initialized')) {
                        $slider.slick('unslick');
                    }
                }
            }
            slickToggler();
            $(window).resize(slickToggler);
        })
        // $(window).on('load resize', function() {
        //         equalizeCardHeight('.each-card');
        //     });
    </script>
@endpush

<section class="tech">
    <div class="main-container">
        <div class="heading-group text-center">
            <div class="heading">
                Technology
            </div>
            <div class="heading-xs">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, eligendi?
            </div>
        </div>
        <div class="content-slider">
            <div class="main-card ">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/speciality/technology-1.jpg') }}" alt="Team Image" class="img-fluid">
                </div>
                <div class="body text-center">
                    <div class="body-head">
                        Lorem ipsum dolor sit.
                    </div>
                    <div class="para-wrap">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ducimus, in, impedit beatae sit
                        quae alias quos soluta voluptate, repellendus similique doloremque sapiente nihil ratione?
                    </div>
                </div>
            </div>
            <div class="main-card ">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/speciality/technology-2.jpg') }}" alt="Team Image" class="img-fluid">
                </div>
                <div class="body text-center">
                    <div class="body-head">
                        Lorem ipsum dolor sit.
                    </div>
                    <div class="para-wrap">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ducimus, in, impedit beatae sit
                        quae alias quos soluta voluptate, repellendus similique doloremque sapiente nihil ratione?
                    </div>
                </div>
            </div>
            <div class="main-card ">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/speciality/technology-1.jpg') }}" alt="Team Image" class="img-fluid">
                </div>
                <div class="body text-center">
                    <div class="body-head">
                        Lorem ipsum dolor sit.
                    </div>
                    <div class="para-wrap">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ducimus, in, impedit beatae sit
                        quae alias quos soluta voluptate, repellendus similique doloremque sapiente nihil ratione?
                    </div>
                </div>
            </div>
            <div class="main-card full-height">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/speciality/technology-2.jpg') }}" alt="Team Image" class="img-fluid">
                </div>
                <div class="body text-center">
                    <div class="body-head">
                        Lorem ipsum dolor sit.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.content-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                }]
            })


            $(window).on('load resize', function() {
                equalizeCardHeight('.main-card');
            });
        })
    </script>
@endpush

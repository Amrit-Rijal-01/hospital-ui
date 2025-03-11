<section class="awards">
    <div class="main-container">
        <div class="heading text-center">Awards and Recognitions</div>
        <div class="award-slide">
            <div class="slide-card">
                <div class="leaf-left">
                    <img src="{{ asset('front/img/leaf-left.png') }}" alt="leaf">
                </div>
                <div class="year sm-heading">
                    2022
                </div>
                <div class="content xs-heading">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, aperiam.
                </div>
                <div class="leaf-right">
                    <img src="{{ asset('front/img/leaf-right.png') }}" alt="leaf">
                </div>
            </div>
            <div class="slide-card">
                <div class="leaf-left">
                    <img src="{{ asset('front/img/leaf-left.png') }}" alt="leaf">
                </div>
                <div class="year sm-heading">
                    2022
                </div>
                <div class="content xs-heading">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, aperiam.
                </div>
                <div class="leaf-right">
                    <img src="{{ asset('front/img/leaf-right.png') }}" alt="leaf">
                </div>
            </div>
            <div class="slide-card">
                <div class="leaf-left">
                    <img src="{{ asset('front/img/leaf-left.png') }}" alt="leaf">
                </div>
                <div class="year sm-heading">
                    2022
                </div>
                <div class="content xs-heading">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, aperiam.
                </div>
                <div class="leaf-right">
                    <img src="{{ asset('front/img/leaf-right.png') }}" alt="leaf">
                </div>
            </div>
            <div class="slide-card">
                <div class="leaf-left">
                    <img src="{{ asset('front/img/leaf-left.png') }}" alt="leaf">
                </div>
                <div class="year sm-heading">
                    2022
                </div>
                <div class="content xs-heading">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, aperiam.
                </div>
                <div class="leaf-right">
                    <img src="{{ asset('front/img/leaf-right.png') }}" alt="leaf">
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.award-slide').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                    },
                    breakpoint:768,
                    settings: {
                        slidesToShow: 1,
                    }
                }]
            });
        });
    </script>
@endpush

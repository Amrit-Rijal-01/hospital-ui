<section class="services">
    <div class="main-container">
        <div class="heading">
            Services
        </div>
        <div class="service-slider d-flex justify-content-between gap-5" id="service-slider">
            <div class="slide">
                <x-card image="{{ asset('front/img/service-img.jpg') }}" title="Home Care" class="each-card">
                    We continue to give you the best care possible, even after you reach home
                </x-card>
            </div>
            <div class="slide">
                <x-card image="{{ asset('front/img/service-img.jpg') }}" title="Home Care" class="each-card">
                    We continue to give you the best care possible, even after you reach home
                </x-card>
            </div>
            <div class="slide">
                <x-card image="{{ asset('front/img/service-img.jpg') }}" title="Home Care" class="each-card">
                    We continue to give you the best care possible, even after you reach home
                </x-card>
            </div>
            <div class="slide">
                <x-card image="{{ asset('front/img/service-img.jpg') }}" title="Home Care" class="each-card">
                    We continue to give you the best care possible, even after you reach home
                </x-card>
            </div>
            <div class="slide">
                <x-card image="{{ asset('front/img/service-img.jpg') }}" title="Home Care" class="each-card">
                    We continue to give you the best care possible, even after you reach home
                </x-card>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('#service-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',

                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            })
        });
    </script>
@endpush

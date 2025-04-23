<section id="single-service-why-our-labs">
    <div class="main-container">
        <div class="heading text-center mb-4">Why Nobel Labs</div>
        <div class="why-labs-slider">
            @for ($i = 0; $i < 3; $i++)
                <div class="why-labs-card">
                    <div class="logo">
                        <i class="bi bi-clipboard-pulse"></i>
                    </div>
                    <div class="card-title">
                        Title of the card
                    </div>
                </div>
                <div class="why-labs-card">
                    <div class="logo">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <div class="card-title">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia minus explicabo delectus pariatur,
                        a iure.
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function () {
            $('.why-labs-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',

                responsive: [
                    {
                        breakpoint: 1299,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            })

        })
    </script>
@endpush
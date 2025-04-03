<section class="services">
    <div class="main-container">
        <div class="heading">
            Services
        </div>
        <div class="service-slider" id="service-slider">
            <div class="slide m-3">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image" class="img-fluid">
                </div>
                <div class="body">
                    <h3 class="title heading-md">Service Title</h3>
                    <p class="para-wrap content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae,
                        repellendus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti hic, veniam enim, mollitia incidunt quibusdam ipsam itaque eaque quasi alias quam maiores quas debitis ut porro sit? Nemo iusto facere quam alias dolorem qui pariatur necessitatibus saepe odio aut consequatur, totam voluptatem repudiandae nostrum non ullam quibusdam? Itaque, ut dolore.</p>
                    <div class="d-flex justify-content-between know-btn">
                        <x-hoverBtn>Know More</x-hoverBtn>
                        <div class="service-logo">
                            <img src="{{ asset('front/img/homecare.svg') }}" alt="Home Care">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide m-3">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image" class="img-fluid">
                </div>
                <div class="body">
                    <h3 class="title heading-md">Service Title</h3>
                    <p class="para-wrap content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae,
                        repellendus.</p>
                    <div class="d-flex justify-content-between know-btn">
                        <x-hoverBtn>Know More</x-hoverBtn>
                        <div class="service-logo">
                            <img src="{{ asset('front/img/homecare.svg') }}" alt="Home Care">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide m-3">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image" class="img-fluid">
                </div>
                <div class="body">
                    <h3 class="title heading-md">Service Title</h3>
                    <p class="para-wrap content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae,
                        repellendus.</p>
                    <div class="d-flex justify-content-between know-btn">
                        <x-hoverBtn>Know More</x-hoverBtn>
                        <div class="service-logo">
                            <img src="{{ asset('front/img/homecare.svg') }}" alt="Home Care">
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
            $('.service-slider').slick({
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
                        breakpoint: 650,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            })
        });
    </script>
@endpush

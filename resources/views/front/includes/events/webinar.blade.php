<section id="webinar">
    <div class="main-container">
        <div class="heading-group mb-4">
            <div class="heading text-center">Webinar</div>
            <x-hoverBtn class="button">View All Webinar</x-hoverBtn>
        </div>
        <div class="webinar-slider">
            <div class="slide m-3">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image" class="img-fluid">
                </div>
                <div class="body">
                    <h3 class="title heading-sm mb-2">Webinar Title</h3>
                    <div class="para-wrap location mb-2"><i class="bi bi-geo-alt-fill"></i> Biratnagar</div>
                    <div class="d-flex justify-content-between know-btn">
                        <x-hoverBtn>View Event Details</x-hoverBtn>
                    </div>
                </div>
            </div>
            <div class="slide m-3">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image" class="img-fluid">
                </div>
                <div class="body">
                    <h3 class="title heading-sm mb-2">Webinar title</h3>
                    <div class="para-wrap location mb-2"><i class="bi bi-geo-alt-fill"></i> Biratnagar</div>
                    <div class="d-flex justify-content-between know-btn">
                        <x-hoverBtn>View Event Details</x-hoverBtn>
                    </div>
                </div>
            </div>
            <div class="slide m-3">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image" class="img-fluid">
                </div>
                <div class="body">
                    <h3 class="title heading-sm mb-2">Webinar title</h3>
                    <div class="para-wrap location mb-2"><i class="bi bi-geo-alt-fill"></i> Biratnagar</div>
                    <div class="d-flex justify-content-between know-btn">
                        <x-hoverBtn>View Event Details</x-hoverBtn>
                    </div>
                </div>
            </div>
        </div>
         <div class="mobile-btn">
            <x-hoverBtn>View All Webinar</x-hoverBtn>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.webinar-slider').slick({
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

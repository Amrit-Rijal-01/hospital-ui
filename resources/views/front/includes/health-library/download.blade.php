<section id="downloads">
    <div class="main-container">
        <div class="heading-group">
            <div class="heading text-center">Downloads</div>
            <x-hoverBtn class="button">Downloads</x-hoverBtn>
        </div>
        <div class="download-slider">
            <div class="download-card">
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                        <div class="img-wrapper">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                        </div>
                        <div class="content p-3">
                            <div class="heading-sm mb-3">Heading of the download </div>
                            <div class="date">Updated on: March 21, 2025</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="download-card">
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                        <div class="img-wrapper">
                            <img src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Paramedic">
                        </div>
                        <div class="content p-3">
                            <div class="heading-sm mb-3">Heading of the download </div>
                            <div class="date">Updated on: March 21, 2025</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="download-card">
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                        <div class="img-wrapper">
                            <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                        </div>
                        <div class="content p-3">
                            <div class="heading-sm mb-3">Heading of the download </div>
                            <div class="date">Updated on: March 21, 2025</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="download-card">
                <div>
                    <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                        <div class="img-wrapper">
                            <img class="img-fluid" src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                        </div>
                        <div class="content p-3">
                            <div class="heading-sm mb-3">Heading of the download </div>
                            <div class="date">Updated on: March 21, 2025</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="mobile-btn">
            <x-hoverBtn>View All Technology</x-hoverBtn>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.download-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: false,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                    breakpoint: 1599,
                    settings: {
                        slidesToShow: 3
                    }
                },{
                    breakpoint:991,
                    settings: {
                        slidesToShow: 2
                    }
                },{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerMode: true
                    }
                }]
            })
        })
    </script>
@endpush


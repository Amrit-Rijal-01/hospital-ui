<section id="health-library-download">
    <div class="main-container">
        <div class="heading-group">
            <div class="heading text-center">Downloads</div>
            <x-hoverBtn class="button">Downloads</x-hoverBtn>
        </div>
        <div class="download-slider">
            <div class="download-card p-4">
                <h3 class="title heading-sm mb-4">Heading of the download</h3>
                <div class="date-download d-flex justify-content-between">
                    <div class="para-wrap date">12/12/2081</div>
                    <a class="z-1" href="#">
                        <i class="bi bi-download"></i>
                    </a>
                </div>
            </div>
            <div class="download-card p-4">
                <h3 class="title heading-sm mb-4">Heading of the download</h3>
                <div class="date-download d-flex justify-content-between">
                    <div class="para-wrap date">12/12/2081</div>
                    <a class="z-1" href="#">
                        <i class="bi bi-download"></i>
                    </a>
                </div>
            </div>
            <div class="download-card p-4">
                <h3 class="title heading-sm mb-4">Heading of the download</h3>
                <div class="date-download d-flex justify-content-between">
                    <div class="para-wrap date">12/12/2081</div>
                    <a class="z-1" href="#">
                        <i class="bi bi-download"></i>
                    </a>
                </div>
            </div>
            <div class="download-card p-4">
                <h3 class="title heading-sm mb-4">Heading of the download</h3>
                <div class="date-download d-flex justify-content-between">
                    <div class="para-wrap date">12/12/2081</div>
                    <a class="z-1" href="#">
                        <i class="bi bi-download"></i>
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
                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
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

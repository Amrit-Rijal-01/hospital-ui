<section id="technology" data-content="Technology">
    <div class="main-container">
        <div class="heading-group mb-4">
            <div class="heading text-center">Technology</div>
            <x-hoverBtn class="button">View All Technology</x-hoverBtn>
        </div>
        <div class="technology-slider">
            <div class="tech-card d-flex flex-column flex-xl-row-reverse m-3 rounded-4 overflow-hidden">
                <div class="img-wrapper">
                    <img class="w-100 img-fluid" src="{{ asset('front/img/health-library/health-library-1.jpg') }}"
                        alt="Doctor">
                </div>
                <div class="body d-flex flex-column justify-content-center p-4">
                    <div class="heading-sm mb-3">256 Slice CT</div>
                    <p class="para-wrap">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt voluptatibus perspiciatis asperiores quia velit sit.
                    </p>
                    <x-hoverBtn class="heading-xs">Know More</x-hoverBtn>
                </div>
            </div>
        </div>
        <div class="mobile-btn">
            <x-hoverBtn>View All CME</x-hoverBtn>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.technology-slider').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
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

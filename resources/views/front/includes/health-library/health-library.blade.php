<section id="health-library">
    <div class="main-container">
        <div class="heading mb-4 text-center">
            Health Service Provides
        </div>
        <div class="health-library-slide">
            <div class="health-library-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/health-library/diseases.png') }}" alt="Diseases">
                </div>
                <div class="heading-sm">
                    Diseases & Conditions
                </div>
                <x-hoverBtn class="btn">Know More</x-hoverBtn>
            </div>
            <div class="health-library-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/health-library/treatment.png') }}" alt="Treatments">
                </div>
                <div class="heading-sm">
                    Treatments & Procedures
                </div>
                <x-hoverBtn class="btn">Know More</x-hoverBtn>
            </div>
            <div class="health-library-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/health-library/diagnostic.png') }}" alt="Diagnostics">
                </div>
                <div class="heading-sm">
                    Diagnostics & Testing
                </div>
                <x-hoverBtn class="btn">Know More</x-hoverBtn>
            </div>
            <div class="health-library-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/health-library/technology.png') }}" alt="Technology">
                </div>
                <div class="heading-sm">
                    Technology & Devices
                </div>
                <x-hoverBtn class="btn">Know More</x-hoverBtn>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.health-library-slide').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: false,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                    breakpoint: 1199,
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

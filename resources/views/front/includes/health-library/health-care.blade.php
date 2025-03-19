<section id="health-care">
    <div class="main-container">
        <div class="heading text-center mb-4">
            We're Here To Make Managing Your Healthcare Easier
        </div>
        <div class="desktop-card">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('front/img/health-library/health-library-1.jpg') }}" alt="Doctor">
                </div>
                <div class="col-3">
                    <div class="heading-sm mb-3">Our Doctors</div>
                    <x-hoverBtn>Know More</x-hoverBtn>
                </div>
                <div class="col-3"> <img src="{{ asset('front/img/health-library/health-library-2.jpg') }}" alt="Doctor"></div>
                <div class="col-3">
                    <div class="heading-sm mb-3">
                        Our Specialities
                    </div>
                    <x-hoverBtn>Know More</x-hoverBtn>
                </div>
                <div class="col-3">
                    <div class="heading-sm mb-3">Treatments</div>
                    <x-hoverBtn>Know More</x-hoverBtn>
                </div>
                <div class="col-3"> <img src="{{ asset('front/img/health-library/health-library-2.jpg') }}" alt="Doctor"></div>
                <div class="col-3">
                    <div class="heading-sm mb-3">
                        Ailments
                    </div>
                    <x-hoverBtn>Know More</x-hoverBtn>
                </div>
                <div class="col-3">
                    <img src="{{ asset('front/img/health-library/health-library-1.jpg') }}" alt="Doctor">
                </div>
            </div>
        </div>
        <div class="mobile-slider">
            <div class="mobile-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/health-library/health-library-1.jpg') }}" alt="Doctor">
                </div>
                <div class="body">
                     <div class="heading-sm mb-3">Our Doctors</div>
                    <x-hoverBtn>Know More</x-hoverBtn>
                </div>
            </div>
            <div class="mobile-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/health-library/health-library-2.jpg') }}" alt="Doctor">
                </div>
                <div class="body">
                     <div class="heading-sm mb-3">Our Doctors</div>
                    <x-hoverBtn>Know More</x-hoverBtn>
                </div>
            </div>
            <div class="mobile-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/health-library/health-library-1.jpg') }}" alt="Doctor">
                </div>
                <div class="body">
                     <div class="heading-sm mb-3">Our Doctors</div>
                    <x-hoverBtn>Know More</x-hoverBtn>
                </div>
            </div>
            <div class="mobile-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/health-library/health-library-2.jpg') }}" alt="Doctor">
                </div>
                <div class="body">
                     <div class="heading-sm mb-3">Our Doctors</div>
                    <x-hoverBtn>Know More</x-hoverBtn>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.mobile-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
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

<section class="sub">
    <div class="main-container">
        <div class="heading text-center mb-4">
            Know More About Sub-Specialization
        </div>
        <div class="sub-slider">
            <div class="sub-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/speciality/sub/interventional.png') }}" alt="Interventional">
                </div>
                <div class="heading-sm">
                    Interventional Cardiology
                </div>
            </div>
            <div class="sub-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/speciality/sub/electro.png') }}" alt="Electro">
                </div>
                <div class="heading-sm">
                    Electrophysiology
                </div>
            </div>
            <div class="sub-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/speciality/sub/transplant.png') }}" alt="Transplant">
                </div>
                <div class="heading-sm">
                    Heart Transplant
                </div>
            </div>
            <div class="sub-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/speciality/sub/clinical.png') }}" alt="Clinical">
                </div>
                <div class="heading-sm">
                    Clinical & Preventive Cardiology
                    Clinical & Preventive Cardiology
                </div>
            </div>
            <div class="sub-card">
                <div class="img-wrapper">
                    <img src="{{ asset('front/img/speciality/sub/interventional.png') }}" alt="Interventional">
                </div>
                <div class="heading-sm">
                    Interventional Cardiology
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.sub-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: false,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                    breakpoint: 1199,
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

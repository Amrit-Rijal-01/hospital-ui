<section class="intern">
    <div class="main-container">
        <h4 class="heading text-center">Internship</h4>
        <div class="content d-flex flex-column flex-lg-row-reverse justify-content-between">

            <div class="slide-wrapper">
                <div class="intern-slide">
                    <div class="image-card">
                        <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                    </div>
                    <div class="image-card">
                        <img src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Paramedic">
                    </div>
                    <div class="image-card">
                        <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                    </div>
                    <div class="image-card">
                        <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Doctor">
                    </div>
                </div>
            </div>
            <div class="para">
                <h5 class="heading-sm">
                    Title Here.
                </h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit molestias nisi quos saepe maiores
                    consequatur voluptatibus harum assumenda! Ab accusamus omnis quia laboriosam magni? Perferendis
                    excepturi cum totam ex dolor nam odit nostrum nulla iusto veniam deleniti incidunt saepe dignissimos
                    magnam ad nobis, nisi maxime. Hic inventore iusto deleniti at.</p>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.intern-slide').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                centerMode: false,
                infinite: true,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
@endpush

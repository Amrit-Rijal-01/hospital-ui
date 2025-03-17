<section class="team">
    <div class="main-container text-center">
        <div class="flex-container d-flex flex-column">
            <div class="heading-lg title">
                ‘Heart Team’
            </div>
            <div class="heading-xs para text-center align-self-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur tempore delectus fuga dignissimos
                sunt?
            </div>
            <div class="team-slider">
                <div class="main-card ">
                    <div class="img-wrapper">
                        <img src="{{ asset('front/img/speciality/team-card-1.png') }}" alt="Team Image" class="img-fluid">
                    </div>
                    <div class="body text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ducimus, in, impedit beatae sit
                        quae alias quos soluta voluptate, repellendus similique doloremque sapiente nihil ratione?
                    </div>
                </div>
                <div class="main-card">
                    <div class="img-wrapper">
                        <img src="{{ asset('front/img/speciality/team-card-2.jpg') }}" alt="Team Image" class="img-fluid">
                    </div>
                    <div class="body text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ducimus, in, impedit beatae sit
                        quae alias quos soluta voluptate, repellendus similique doloremque sapiente nihil ratione?
                    </div>
                </div>
                <div class="main-card">
                    <div class="img-wrapper">
                        <img src="{{ asset('front/img/speciality/team-card-1.png') }}" alt="Team Image" class="img-fluid">
                    </div>
                    <div class="body text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ducimus, in, impedit beatae sit
                        quae alias quos soluta voluptate, repellendus similique doloremque sapiente nihil ratione?
                    </div>
                </div>
                <div class="main-card">
                    <div class="img-wrapper">
                        <img src="{{ asset('front/img/speciality/team-card-2.jpg') }}" alt="Team Image" class="img-fluid">
                    </div>
                    <div class="body text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ducimus, in, impedit beatae sit
                        quae alias quos soluta voluptate, repellendus similique doloremque sapiente nihil ratione?
                    </div>
                </div>
            </div>
            <div class="heading-xs team-line">
                <span>Heart Team : </span>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, debitis!
            </div>

        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.team-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
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
                    }
                }]

            })
        })
    </script>
@endpush

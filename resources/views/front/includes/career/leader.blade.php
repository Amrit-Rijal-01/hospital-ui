<section class="leader">
    <div class="main-container">
        <h4 class="heading text-center">
            Meet Our Leadership
        </h4>
        <div class="leader-wrapper">
            <div class="slider-for">
                <div class="each-card">
                    <div class="detail">
                        <div class="heading-md mb-2">Leader Name</div>
                        <div class="heading-sm mb-2">Position</div>
                        <div class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis doloribus,
                            iure amet necessitatibus impedit corporis quos ab at quidem commodi consequatur nemo
                            architecto perferendis incidunt.</div>
                    </div>
                    <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Position Name">
                </div>
                <div class="each-card">
                    <div class="detail">
                        <div class="heading-md mb-2">Leader Name</div>
                        <div class="heading-sm mb-2">Position</div>
                        <div class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                            doloribus, iure amet necessitatibus impedit corporis quos ab at quidem commodi consequatur
                            nemo architecto perferendis incidunt.</div>
                    </div>
                    <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Position Name">
                </div>
                <div class="each-card">
                    <div class="detail">
                        <div class="heading-md mb-2">Leader Name</div>
                        <div class="heading-sm mb-2">Position</div>
                        <div class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                            doloribus, iure amet necessitatibus impedit corporis quos ab at quidem commodi consequatur
                            nemo architecto perferendis incidunt.</div>
                    </div>
                    <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Position Name">
                </div>
            </div>
            <div class="slider-nav">
                <div class="each-card-nav">
                    <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Position Name">
                </div>
                <div class="each-card-nav">
                    <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Position Name">
                </div>
                <div class="each-card-nav">
                    <img src="{{ asset('front/img/career/doctor.jpg') }}" alt="Position Name">
                </div>
            </div>
        </div>
    </div>
</section>

@push('js')
    <script>
        $(document).ready(function() {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav' // Link to thumbnail slider
            });

            $('.slider-nav').slick({
                slidesToShow: 3, // Adjust based on your design
                slidesToScroll: 1,
                asNavFor: '.slider-for', // Link to main slider
                dots: false,
                centerMode: true,
                focusOnSelect: true
            });
        })
    </script>
@endpush

<section class="update">
    <div class="main-container">
        <div class="heading">
            Updates
        </div>
        <div class="update-slider">
            <div class="update-card">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('front/img/care.png') }}" alt="care">
                </div>
                <div class="head">Elder Care Program</div>
                <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat et ducimus soluta
                    dolores aliquam nobis.</div>
                <x-hoverBtn class="button">Know More</x-hoverBtn>
            </div>
            <div class="update-card">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('front/img/care.png') }}" alt="care">
                </div>
                <div class="head">Elder Care Program</div>
                <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat et ducimus soluta
                    dolores aliquam nobis.</div>
                <x-hoverBtn class="button">Know More</x-hoverBtn>
            </div>
            <div class="update-card">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('front/img/care.png') }}" alt="care">
                </div>
                <div class="head">Elder Care Program</div>
                <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat et ducimus soluta
                    dolores aliquam nobis.</div>
                <x-hoverBtn class="button">Know More</x-hoverBtn>
            </div>
            <div class="update-card">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('front/img/care.png') }}" alt="care">
                </div>
                <div class="head">Elder Care Program</div>
                <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat et ducimus soluta
                    dolores aliquam nobis.</div>
                <x-hoverBtn class="button">Know More</x-hoverBtn>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.update-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 2,
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

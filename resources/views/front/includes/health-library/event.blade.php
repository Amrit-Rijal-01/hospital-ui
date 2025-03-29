<section id="events">
    <div class="main-container">
        <div class="heading-group">
            <div class="heading text-center">Events</div>
            <x-hoverBtn class="button">All Events</x-hoverBtn>
        </div>
        <div class="event-slider">
            <div class="event-card">
                <div>
                    <div href="{{ asset('front/img/test.mp4') }}" class="">
                        <div class="img-wrapper">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                        </div>
                        <div class="content p-3">
                            <div class="heading-sm mb-3">Heading of the event </div>
                            <p class="para-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, optio.</p>
                            <x-hoverBtn class="heading-xs">Read Post</x-hoverBtn>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-card">
                <div>
                    <div href="{{ asset('front/img/test.mp4') }}" class="">
                        <div class="img-wrapper">
                            <img src="{{ asset('front/img/career/paramedic.jpg') }}" alt="Paramedic">
                        </div>
                        <div class="content p-3">
                            <div class="heading-sm mb-3">Heading of the event </div>
                            <p class="para-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, optio.</p>
                            <x-hoverBtn class="heading-xs">Read Post</x-hoverBtn>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-card">
                <div>
                    <div href="{{ asset('front/img/test.mp4') }}" class="">
                        <div class="img-wrapper">
                            <img src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                        </div>
                        <div class="content p-3">
                            <div class="heading-sm mb-3">Heading of the event </div>
                            <p class="para-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, optio.</p>
                            <x-hoverBtn class="heading-xs">Read Post</x-hoverBtn>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-card">
                <div>
                    <div href="{{ asset('front/img/test.mp4') }}" class="">
                        <div class="img-wrapper">
                            <img class="img-fluid" src="{{ asset('front/img/career/nurse.jpg') }}" alt="Nurse">
                        </div>
                        <div class="content p-3">
                            <div class="heading-sm mb-3">Heading of the event </div>
                            <p class="para-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, optio.</p>
                            <x-hoverBtn class="heading-xs">Read Post</x-hoverBtn>
                        </div>
                    </div>
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
            $('.event-slider').slick({
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


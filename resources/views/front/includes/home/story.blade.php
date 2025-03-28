<section id="home-story">
    <div class="main-container">
        <div class="heading">
            Patient Stories
        </div>
        <div class="videos">
            <div class="video-wrapper" id="story-slider">
                <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                    <div class="each-video">
                        <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox">
                    <div class="each-video">
                        <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </div>
                </a>
                <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                    <div class="each-video">
                        <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox">
                    <div class="each-video ">
                        <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="main-container text-center">
        <x-hoverBtn href="#" class="view-all">View All Patients</x-hoverBtn>
    </div>
</section>

@push('js')
    <script>
        $(document).ready(function() {
            const lightBox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true
            });


            $('.video-wrapper').slick({
                slidesToShow: 3,
                infinite: true,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                }]
            });
        })
    </script>
@endpush

<section class="story">
    <div class="main-container">
        <div class="heading">
            Patient Stories
        </div>
        <div class="videos">
            <div class="row video-wrapper" id="story-slider">
                <div class="col-xl-3">
                    <div class="video">
                        <div class="video-thumb">
                            <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Video Thumbnail">
                            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0">
                                <img src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="title">Video Title</div>
                            <p class="name">Patient Name</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="video">
                        <div class="video-thumb">
                            <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Video Thumbnail">
                            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0">
                                <img src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="title">Video Title</div>
                            <p class="name">Patient Name</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="video">
                        <div class="video-thumb">
                            <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Video Thumbnail">
                            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0">
                                <img src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="title">Video Title</div>
                            <p class="name">Patient Name</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="video">
                        <div class="video-thumb">
                            <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Video Thumbnail">
                            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0">
                                <img src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="title">Video Title</div>
                            <p class="name">Patient Name</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="video">
                        <div class="video-thumb">
                            <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Video Thumbnail">
                            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0">
                                <img src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="title">Video Title</div>
                            <p class="name">Patient Name</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="video">
                        <div class="video-thumb">
                            <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Video Thumbnail">
                            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0">
                                <img src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="title">Video Title</div>
                            <p class="name">Patient Name</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="video">
                        <div class="video-thumb">
                            <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Video Thumbnail">
                            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0">
                                <img src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="title">Video Title</div>
                            <p class="name">Patient Name</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="video">
                        <div class="video-thumb">
                            <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Video Thumbnail">
                            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0">
                                <img src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="title">Video Title</div>
                            <p class="name">Patient Name</p>
                        </div>
                    </div>
                </div>
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
            let $slider = $('#story-slider');
            let breakpoint = 1199;

            function toggleSlick() {
                if ($(window).width() < breakpoint) {
                    $slider.slick({
                        slidesToShow: 2,
                        infinite: true,
                        slidesToScroll: 1,
                        arrows: true,
                        prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                        nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                        responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1
                            }
                        }]
                    });
                } else {
                    if($slider.hasClass('slick-initialized')) {
                        $slider.slick('unslick');
                    }
                }
            }
            toggleSlick();
            $(window).resize(toggleSlick);
        })
    </script>
@endpush

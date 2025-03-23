@extends('front.layout.app')

@section('title', 'Videos')
@section('meta', 'Videos page for the website')

@section('content')
    <section id="videos-top-banner">
        <picture class="img-wrap">
            <source media="(min-width: 768px)" srcset="{{ asset('front/img/health-library/knowledge/video-banner.jpg') }}"
                width="1920" height="500" alt="video">
            <source media="(min-width: 320px)" srcset="{{ asset('front/img/health-library/knowledge/video-banner-md.jpg') }}"
                width="480" height="320" alt="video">
            <img src="{{ asset('front/img/health-library/knowledge/video-banner.jpg') }}" width="1920" height="500"
                alt="video" class="img-fluid w-100">
            <div class="banner-title">Videos</div>
        </picture>
    </section>

    <section id="doctor-videos">
        <div class="main-container">
            <div class="heading-group">
                <div class="heading text-center">Doctor Videos</div>
                <x-hoverBtn class="button">View All</x-hoverBtn>
            </div>
            <div class="doctor-slider">
                <div class="video-card doctor-card">
                    <div class="img-wrapper">
                        <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                            <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                        </a>
                    </div>
                    <div class="body">
                        <div class="heading-sm">
                            Heading of the video
                        </div>
                        <div class="para-wrap">
                            <span>Dr Name </span>
                            | Field of Doctor
                        </div>
                    </div>
                </div>
                <div class="video-card doctor-card">
                    <div class="img-wrapper">
                        <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                            <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                        </a>
                    </div>
                    <div class="body">
                        <div class="heading-sm">
                            Heading of the video
                        </div>
                        <div class="para-wrap">
                            <span>Dr Name </span>
                            | Field of Doctor
                        </div>
                    </div>
                </div>
                <div class="video-card doctor-card">
                    <div class="img-wrapper">
                        <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                            <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                        </a>
                    </div>
                    <div class="body">
                        <div class="heading-sm">
                            Heading of the video
                        </div>
                        <div class="para-wrap">
                            <span>Dr Name </span>
                            | Field of Doctor
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-btn">
                <x-hoverBtn>View All</x-hoverBtn>
            </div>
        </div>
    </section>

    <section id="testimonials-video">
        <div class="main-container">
            <div class="heading-group">
                <div class="heading text-center">Testimonials</div>
                <x-hoverBtn class="button">View All</x-hoverBtn>
            </div>
            <div class="testimonials-slider">
                <div class="video-card testimonials-card">
                    <div class="img-wrapper">
                        <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                            <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                        </a>
                    </div>
                    <div class="body">
                        <div class="heading-sm">
                            Heading of the video
                        </div>
                        <div class="para-wrap">
                            <span>Dr Name </span>
                            | Field of Speciality
                        </div>
                    </div>
                </div>
                <div class="video-card testimonials-card">
                    <div class="img-wrapper">
                        <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                            <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                        </a>
                    </div>
                    <div class="body">
                        <div class="heading-sm">
                            Heading of the video
                        </div>
                        <div class="para-wrap">
                            <span>Dr Name </span>
                            | Field of Speciality
                        </div>
                    </div>
                </div>
                <div class="video-card testimonials-card">
                    <div class="img-wrapper">
                        <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                            <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                        </a>
                    </div>
                    <div class="body">
                        <div class="heading-sm">
                            Heading of the video
                        </div>
                        <div class="para-wrap">
                            <span>Dr Name </span>
                            | Field of Speciality
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-btn">
                <x-hoverBtn>View All</x-hoverBtn>
            </div>
        </div>
    </section>

    <section id="animated-video">
        <div class="main-container">
            <div class="heading-group">
                <div class="heading text-center">Animated/Explanatory Videos</div>
                <x-hoverBtn class="button">View All</x-hoverBtn>
            </div>
            <div class="animated-slider">
                <div class="video-card animated-card">
                    <div class="img-wrapper">
                        <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                            <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                        </a>
                    </div>
                    <div class="body">
                        <div class="heading-sm">
                            Heading of the video. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sunt, tempore nemo veritatis ullam dignissimos.
                        </div>
                        <div class="para-wrap">
                            <span>Animated video </span>
                            | Department Name
                        </div>
                    </div>
                </div>
                <div class="video-card animated-card">
                    <div class="img-wrapper">
                        <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                            <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                        </a>
                    </div>
                    <div class="body">
                        <div class="heading-sm">
                            Heading of the video
                        </div>
                        <div class="para-wrap">
                            <span>Animated video </span>
                            | Department Name
                        </div>
                    </div>
                </div>
                <div class="video-card animated-card">
                    <div class="img-wrapper">
                        <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                            <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                            <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                        </a>
                    </div>
                    <div class="body">
                        <div class="heading-sm">
                            Heading of the video
                        </div>
                        <div class="para-wrap">
                            <span>Animated video </span>
                            | Department Name
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-btn">
                <x-hoverBtn>View All</x-hoverBtn>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            const lightBox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true
            });
            $('.doctor-slider, .testimonials-slider, .animated-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                    breakpoint: 991,
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
            });

        })
        $(window).on('load resize', function() {
            equalizeCardHeight('.doctor-card');
        });
        $(window).on('load resize', function() {
            equalizeCardHeight('.testimonials-card');
        });
        $(window).on('load resize', function() {
            equalizeCardHeight('.animated-card');
        });
    </script>
@endpush

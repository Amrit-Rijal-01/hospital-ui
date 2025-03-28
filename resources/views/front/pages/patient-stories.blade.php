@extends('front.layout.app')

@section('title', 'Patient Stories')
@section('meta', 'Patient Stories page for the website')

@section('content')
    <section id="patient-banner">
        <picture class="img-wrap">
            <source media="(min-width: 768px)" srcset="{{ asset('front/img/patient-stories/banner.jpg') }}" width="1920"
                height="500" alt="Patient Stories">
            <source media="(min-width: 320px)" srcset="{{ asset('front/img/patient-stories/banner-md.jpg') }}" width="480"
                height="320" alt="Patient Stories">
            <img src="{{ asset('front/img/patient-stories/banner.jpg') }}" class="w-100 img-fluid object-fit-cover"
                alt="Patient Stories">
        </picture>
        <div class="banner-title">Patient Stories</div>
    </section>
    <section id="patient-featured">
        <div class="main-container">
            <x-sliderComponent heading="Featured Stories">
                <div class="each-card">
                    <div class="img-wrapper">
                        <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox col-xl-4 col-xxl-3">
                            <div class="each-video">
                                <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                                <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </div>
                        </a>
                    </div>
                    <div class="body">
                        <div class="type mb-3">Video</div>
                        <div class="heading-sm">Video heading</div>
                        <div class="location"><i class="bi bi-geo-alt"></i> Location</div>
                    </div>
                </div>
                <div class="each-card">
                    <div class="img-wrapper">
                        <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox col-xl-4 col-xxl-3">
                            <div class="each-video">
                                <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                                <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </div>
                        </a>
                    </div>
                    <div class="body">
                        <div class="type mb-3">Video</div>
                        <div class="heading-sm">Video heading</div>
                        <div class="location"><i class="bi bi-geo-alt"></i> Location</div>
                    </div>
                </div>
            </x-sliderComponent>
        </div>
    </section>
    <section id="all-stories">
        <div class="main-container">
            <div class="heading-group mb-4">
                <div class="heading text-center mb-2">All Stories</div>
                <div class="floating">
                    <input type="text" id="search-all-video" name="allVideo" class="form-control"
                        placeholder="Search All Videos">
                    <div class="search-icon"><i class="bi bi-search"></i></div>
                </div>
            </div>
            <div class="row g-4">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-md-6 col-xl-4 all-card">
                        <div class="each-card">
                            <div class="img-wrapper">
                                <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox col-xl-4 col-xxl-3">
                                    <div class="each-video">
                                        <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                                    </div>
                                </a>
                            </div>
                            <div class="body">
                                <div class="heading-md video-title">Video heading</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Location</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 all-card">
                        <div class="each-card">
                            <div class="img-wrapper">
                                <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox col-xl-4 col-xxl-3">
                                    <div class="each-video">
                                        <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                                        <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}"
                                            alt="Play Icon">
                                    </div>
                                </a>
                            </div>
                            <div class="body">
                                <div class="heading-md video-title">{{$i}} not Video heading</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Location</div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="btn-container d-flex justify-content-center">
            <button id="load-more-all" class="load-more heading-xs">Load More</button>
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

            let allCount = 0;
            let currentAllCount = 0;
            let searchActive = false;
            let searchValue = "";
            let cardPerPage = 3;

            // Show more for all blogs considering search filter
            function showMoreAll() {
                console.log('all-blogs');
                let totalCards;

                if (searchActive) {
                    // Only count and show visible cards that match the search
                    let visibleCards = $(".all-card").filter(function() {
                        let title = $(this).find(".video-title").text().toLowerCase();
                        return title.includes(searchValue);
                    });

                    totalCards = visibleCards.length;

                    // Get the hidden cards that match the search term
                    visibleCards.filter(':hidden').slice(0, cardPerPage).fadeIn();

                    // Update counts based on visible matching cards
                    currentAllCount = $(".all-card").filter(function() {
                        let title = $(this).find(".video-title").text().toLowerCase();
                        return title.includes(searchValue) && $(this).is(':visible');
                    }).length;
                } else {
                    // Normal behavior when no search is active
                    totalCards = $(".all-card").length;
                    $('.all-card').slice(currentAllCount, currentAllCount + cardPerPage).fadeIn();
                    currentAllCount += cardPerPage;
                }

                // Hide load more button when appropriate
                if (searchActive) {
                    // Hide button if all matching cards are shown
                    let hiddenMatchingCards = $(".all-card").filter(function() {
                        let title = $(this).find(".video-title").text().toLowerCase();
                        return title.includes(searchValue) && $(this).is(':hidden');
                    }).length;

                    if (hiddenMatchingCards === 0) {
                        $("#load-more-all").hide();
                    } else {
                        $("#load-more-all").show();
                    }
                } else {
                    // Normal behavior
                    if (currentAllCount >= totalCards) {
                        $("#load-more-all").hide();
                    } else {
                        $("#load-more-all").show();
                    }
                }
            }

            // Filter function
            function filterAllBlogs() {
                searchValue = $("#search-all-video").val().toLowerCase();
                searchActive = searchValue.length > 0;

                // Reset counters when search changes
                currentAllCount = 0;

                // Hide all cards first
                $(".all-card").hide();

                if (searchActive) {
                    // Show the first batch of matching cards
                    $(".all-card").filter(function() {
                        let title = $(this).find(".video-title").text().toLowerCase();
                        return title.includes(searchValue);
                    }).slice(0, cardPerPage).fadeIn();

                    // Update currentAllCount
                    currentAllCount = $(".all-card").filter(function() {
                        let title = $(this).find(".video-title").text().toLowerCase();
                        return title.includes(searchValue) && $(this).is(':visible');
                    }).length;

                    // Check if there are more matching cards to show
                    let totalMatchingCards = $(".all-card").filter(function() {
                        let title = $(this).find(".video-title").text().toLowerCase();
                        return title.includes(searchValue);
                    }).length;

                    if (currentAllCount >= totalMatchingCards) {
                        $("#load-more-all").hide();
                    } else {
                        $("#load-more-all").show();
                    }
                } else {
                    // Show first batch of all cards when search is cleared
                    $('.all-card').slice(0, cardPerPage).fadeIn();
                    currentAllCount = cardPerPage;

                    // Show load more button if there are more cards
                    if (currentAllCount >= $(".all-card").length) {
                        $("#load-more-all").hide();
                    } else {
                        $("#load-more-all").show();
                    }
                }
            }


            $("#load-more-all").on("click", function() {
                showMoreAll();
            });

            $("#search-all-video").on("keyup", function() {
                filterAllBlogs();
            });

            showMoreAll();
        })
    </script>
@endpush

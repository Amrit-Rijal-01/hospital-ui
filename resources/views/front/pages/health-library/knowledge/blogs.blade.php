@extends('front.layout.app')

@section('title', 'Blogs')
@section('meta', 'Blogs page for the website')

@section('content')
    <div id="blogs" class="border-bottom pb-5">
        <div class="main-container">
            <section id="featured-blog">
                <div class="heading mb-4">Featured Blogs</div>
                <div class="row g-4">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-6 col-xl-3 featured-blog-card">
                            <div class="blog-card ">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}" alt="Blog Title">
                                </div>
                                <div class="body">
                                    <div class="type para-wrap mb-3">Blog Type</div>
                                    <div class="heading-md blog-title mb-3">
                                        Title of the Blog
                                    </div>
                                    <div class="date-name para-wrap">
                                        <span class="date">Chaitra 10, 2081</span>
                                        <span class="name">Dr Name</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
            <div class="btn-container d-flex justify-content-center">
                <button id="load-more-featured" class="load-more heading-xs">Load More</button>
            </div>
            <section id="all-blogs">
                <div class="heading-group mb-4">
                    <div class="heading mb-2">All Blogs</div>
                    <div class="form-floating ">
                        <input type="text" id="search-all-blogs" name="allBlogs" class="form-control"
                            placeholder="Search All Blogs">
                        <label for="allBlogs">Search All Blogs</label>
                        <div class="search-icon"><i class="bi bi-search"></i></div>
                    </div>
                </div>
                <div class="row g-4">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-6 col-xl-3 all-blog-card">
                            <div class="blog-card ">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="Blog Title">
                                </div>
                                <div class="body">
                                    <div class="type para-wrap mb-3">Blog Type</div>
                                    <div class="heading-md blog-title mb-3">
                                        Title of the Blog
                                    </div>
                                    <div class="date-name para-wrap">
                                        <span class="date">Chaitra 10, 2081</span>
                                        <span class="name">Dr Name</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 all-blog-card">
                            <div class="blog-card ">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="Blog Title">
                                </div>
                                <div class="body">
                                    <div class="type para-wrap mb-3">Blog Type</div>
                                    <div class="heading-md blog-title mb-3">
                                        Testing
                                    </div>
                                    <div class="date-name para-wrap">
                                        <span class="date">Chaitra 10, 2081</span>
                                        <span class="name">Dr Name</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
            <div class="btn-container d-flex justify-content-center">
                <button id="load-more-all" class="load-more heading-xs">Load More</button>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            let cardPerPage = 4;
            let featuredCount = 0;
            let currentFeaturedCount = 0;

            function showMoreFeatured() {
                console.log('featured-blog');

                let totalCards = $(".featured-blog-card").length;
                featuredCount += cardPerPage;
                $('.featured-blog-card').slice(currentFeaturedCount, currentFeaturedCount + cardPerPage).fadeIn();
                currentFeaturedCount += cardPerPage;

                if (currentFeaturedCount >= totalCards) {
                    $("#load-more-featured").hide();
                }
            }

            let allCount = 0;
            let currentAllCount = 0;
            let searchActive = false;
            let searchValue = "";

            // Show more for all blogs considering search filter
            function showMoreAll() {
                console.log('all-blogs');
                let totalCards;

                if (searchActive) {
                    // Only count and show visible cards that match the search
                    let visibleCards = $(".all-blog-card").filter(function() {
                        let title = $(this).find(".blog-title").text().toLowerCase();
                        return title.includes(searchValue);
                    });

                    totalCards = visibleCards.length;

                    // Get the hidden cards that match the search term
                    visibleCards.filter(':hidden').slice(0, cardPerPage).fadeIn();

                    // Update counts based on visible matching cards
                    currentAllCount = $(".all-blog-card").filter(function() {
                        let title = $(this).find(".blog-title").text().toLowerCase();
                        return title.includes(searchValue) && $(this).is(':visible');
                    }).length;
                } else {
                    // Normal behavior when no search is active
                    totalCards = $(".all-blog-card").length;
                    $('.all-blog-card').slice(currentAllCount, currentAllCount + cardPerPage).fadeIn();
                    currentAllCount += cardPerPage;
                }

                // Hide load more button when appropriate
                if (searchActive) {
                    // Hide button if all matching cards are shown
                    let hiddenMatchingCards = $(".all-blog-card").filter(function() {
                        let title = $(this).find(".blog-title").text().toLowerCase();
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
                searchValue = $("#search-all-blogs").val().toLowerCase();
                searchActive = searchValue.length > 0;

                // Reset counters when search changes
                currentAllCount = 0;

                // Hide all cards first
                $(".all-blog-card").hide();

                if (searchActive) {
                    // Show the first batch of matching cards
                    $(".all-blog-card").filter(function() {
                        let title = $(this).find(".blog-title").text().toLowerCase();
                        return title.includes(searchValue);
                    }).slice(0, cardPerPage).fadeIn();

                    // Update currentAllCount
                    currentAllCount = $(".all-blog-card").filter(function() {
                        let title = $(this).find(".blog-title").text().toLowerCase();
                        return title.includes(searchValue) && $(this).is(':visible');
                    }).length;

                    // Check if there are more matching cards to show
                    let totalMatchingCards = $(".all-blog-card").filter(function() {
                        let title = $(this).find(".blog-title").text().toLowerCase();
                        return title.includes(searchValue);
                    }).length;

                    if (currentAllCount >= totalMatchingCards) {
                        $("#load-more-all").hide();
                    } else {
                        $("#load-more-all").show();
                    }
                } else {
                    // Show first batch of all cards when search is cleared
                    $('.all-blog-card').slice(0, cardPerPage).fadeIn();
                    currentAllCount = cardPerPage;

                    // Show load more button if there are more cards
                    if (currentAllCount >= $(".all-blog-card").length) {
                        $("#load-more-all").hide();
                    } else {
                        $("#load-more-all").show();
                    }
                }
            }

            // Event handlers
            $("#load-more-featured").on("click", function() {
                showMoreFeatured();
            });

            $("#load-more-all").on("click", function() {
                showMoreAll();
            });

            $("#search-all-blogs").on("keyup", function() {
                filterAllBlogs();
            });

            // Initial loading
            showMoreFeatured();
            showMoreAll();
        })
    </script>
@endpush

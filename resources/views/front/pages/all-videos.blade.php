@extends('front.layout.app')

@section('title', 'All Videos')
@section('meta', 'All video page for the website')

@section('content')
    <section id="all-videos">
        <div class="main-container">
            <div class="heading-group mb-4 d-flex justify-content-center flex-wrap gap-3">
                <div class="select-field">
                    <div class="default-select d-flex" id="default-select">
                        <span class="default-item text-truncate">All</span>
                        <span class="anchor-down-btn" style="border-color: #000"></span>
                    </div>
                    <div class="select-wrap" id="select-wrap">
                        <ul class="select-list" id="select-list">
                            <li>All</li>
                            <li data-value="doctors">Doctors</li>
                            <li data-value="testimonials">Testimonials</li>
                            <li data-value="animated">Animated/Explanatory</li>
                        </ul>
                        <input type="hidden" name="find-doc-speciality" id="find-doc-speciality-input">
                    </div>
                </div>
                <div class="floating">
                    <input type="text" id="search-all-video" name="allVideo" class="form-control"
                        placeholder="Search All Videos">
                    <div class="search-icon"><i class="bi bi-search"></i></div>
                </div>
            </div>
            <div class="row g-4">
                @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-6 col-xl-4 all-card" data-content="doctors">
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
                                <div class="heading-md video-title">Doctors Video heading</div>
                                <div class="location"><span class="name">Dr Name </span>| Division and/or Speciality</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 all-card" data-content="testimonials">
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
                                <div class="heading-md video-title"> testimonials Video heading</div>
                                <div class="location"><span class="name">Dr Name </span>| Division and/or Speciality</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 all-card" data-content="animated">
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
                                <div class="heading-md video-title">Animated/Explanatory Video heading</div>
                                <div class="location"><span class="name">Dr Name </span>| Division and/or Speciality</div>
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
            // Initialize GLightbox
            const lightBox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true
            });

            // Dropdown Toggle
            $('.default-select').on('click', function(e) {
                e.stopPropagation();
                $('#select-wrap').toggleClass('active');
            });

            // Close dropdown when clicking outside
            $(document).on('click', function() {
                $('#select-wrap').removeClass('active');
            });

            // Prevent dropdown from closing when clicking inside
            $('#select-wrap').on('click', function(e) {
                e.stopPropagation();
            });

            // Dropdown Selection
            $('#select-list li').on('click', function() {
                const selectedText = $(this).text();
                const selectedValue = $(this).data('value') || 'All';

                // Update dropdown display
                $('.default-item').text(selectedText);
                $('#find-doc-speciality-input').val(selectedValue);
                $('#select-wrap').removeClass('active');

                // Reset and filter videos
                resetLoadMore();
                filterVideos();
            });

            // Search Input Event
            $('#search-all-video').on('keyup', function() {
                resetLoadMore();
                filterVideos();
            });

            // Reset Load More Function
            function resetLoadMore() {
                currentLoadCount = 6;
                $('#load-more-all').show();
            }

            // Filter Videos Function
            function filterVideos() {
                const searchTerm = $('#search-all-video').val().toLowerCase();
                const selectedCategory = $('#find-doc-speciality-input').val() || 'All';

                // Hide all cards first
                $('.all-card').hide();

                // Filter cards based on search and category
                const filteredCards = $('.all-card').filter(function() {
                    const title = $(this).find('.video-title').text().toLowerCase();
                    const cardCategory = $(this).data('content');

                    const matchesSearch = !searchTerm || title.includes(searchTerm);
                    const matchesCategory = selectedCategory === 'All' || cardCategory === selectedCategory;

                    return matchesSearch && matchesCategory;
                });

                // Show first batch of cards
                filteredCards.slice(0, 6).show();

                // Manage Load More button
                if (filteredCards.length <= 6) {
                    $('#load-more-all').hide();
                } else {
                    $('#load-more-all').show();
                }

                return filteredCards;
            }

            // Load More Functionality
            let cardsPerLoad = 3;
            let currentLoadCount = 6;

            $('#load-more-all').on('click', function() {
                const searchTerm = $('#search-all-video').val().toLowerCase();
                const selectedCategory = $('#find-doc-speciality-input').val() || 'All';

                // Filter cards based on current search and category
                const filteredCards = $('.all-card').filter(function() {
                    const title = $(this).find('.video-title').text().toLowerCase();
                    const cardCategory = $(this).data('content');

                    const matchesSearch = !searchTerm || title.includes(searchTerm);
                    const matchesCategory = selectedCategory === 'All' || cardCategory ===
                        selectedCategory;

                    return matchesSearch && matchesCategory;
                });

                // Find hidden cards that match current filter
                const hiddenCards = filteredCards.filter(':hidden');

                // Show next batch of hidden cards
                hiddenCards.slice(0, cardsPerLoad).show();
                currentLoadCount += cardsPerLoad;

                // Hide Load More button if all cards are shown
                if (currentLoadCount >= filteredCards.length) {
                    $('#load-more-all').hide();
                }
            });

            // Initial load: show default cards and setup
            resetLoadMore();
            filterVideos();
        });
    </script>
@endpush

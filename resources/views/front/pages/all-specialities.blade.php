@extends('front.layout.app')

@section('title', 'All Specialities')
@section('meta', 'All Specialities page for the website')

@section('content')
    <section id="all-specialities">
        <div class="main-container">
            <div class="heading-group mb-4">
                <div class="heading text-center mb-2">
                    All Specialities
                </div>
                <div class="floating">
                    <input type="text" id="search-speciality" name="searchSpeciality" class="form-control"
                        placeholder="Search Speciality">
                    <div class="search-icon"><i class="bi bi-search"></i></div>
                </div>
            </div>
            <div class="specialities-cards">
                <div class="row">
                    @php
                        $specialities = array_fill(0, 30, [
                            'image' => asset('front/img/health-library/diseases.png'),
                            'title' => 'Diseases & Conditions',
                            'title-2' => 'testing',
                        ]);
                    @endphp

                    @foreach ($specialities as $speciality)
                        <div class="col-card col-lg-3 col-md-6 col-sm-6 p-2">
                            <div class="each-card">
                                <div class="img-wrapper">
                                    <img src="{{ $speciality['image'] }}" alt="{{ $speciality['title'] }}">
                                </div>
                                <div class="heading-sm">
                                    {{ $speciality['title'] }}
                                </div>
                                <div class="button d-flex justify-content-center">
                                    <x-hoverBtn class="btn">Know More</x-hoverBtn>
                                </div>
                            </div>
                        </div>
                        <div class="col-card col-lg-3 col-md-6 col-sm-6 p-2">
                            <div class="each-card">
                                <div class="img-wrapper">
                                    <img src="{{ $speciality['image'] }}" alt="{{ $speciality['title'] }}">
                                </div>
                                <div class="heading-sm">
                                    {{ $speciality['title-2'] }}
                                </div>
                                <div class="button d-flex justify-content-center">
                                    <x-hoverBtn class="btn">Know More</x-hoverBtn>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="btn-container d-flex justify-content-center mt-3">
                <button id="load-more" class=" heading-xs">Load More</button>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            let cardsPerPage = 10;
            let totalCards = $(".col-card").length;
            let currentCount = 0;
            let searchActive = false;
            let searchValue = ''; 

            // Initial setup - hide all cards except first batch
            $(".col-card").hide();
            $(".col-card").slice(0, cardsPerPage).fadeIn();
            currentCount = cardsPerPage;

            function showMoreCards() {
                if (searchActive) {
                    // Important: Use the searchValue variable here
                    $('.col-card').filter(function() {
                        let title = $(this).find('.each-card .heading-sm').text().toLowerCase();
                        return title.includes(searchValue) && !$(this).is(':visible');
                    }).slice(0, cardsPerPage).fadeIn();

                    currentCount = $('.col-card').filter(function() {
                        return $(this).is(':visible');
                    }).length;

                    let matchingCards = $('.col-card').filter(function() {
                        let title = $(this).find('.each-card .heading-sm').text().toLowerCase();
                        return title.includes(searchValue);
                    }).length;

                    if (currentCount >= matchingCards) {
                        $("#load-more").hide();
                    } else {
                        $("#load-more").show();
                    }
                } else {
                    $(".col-card").slice(currentCount, currentCount + cardsPerPage).fadeIn();
                    currentCount += cardsPerPage;

                    if (currentCount >= totalCards) {
                        $("#load-more").hide();
                    } else {
                        $("#load-more").show();
                    }
                }
            }

            $("#load-more").on("click", function() {
                showMoreCards();
            });

            function filterSpeciality() {
                searchValue = $('#search-speciality').val().toLowerCase(); // Update the shared variable
                searchActive = searchValue.length > 0;

                // Reset and hide all cards
                $(".col-card").hide();
                currentCount = 0;

                if (searchActive) {
                    $('.col-card').filter(function() {
                        let title = $(this).find('.each-card .heading-sm').text().toLowerCase();
                        return title.includes(searchValue);
                    }).slice(0, cardsPerPage).fadeIn();

                    currentCount = $('.col-card').filter(function() {
                        return $(this).is(':visible');
                    }).length;

                    let matchingSpeciality = $('.col-card').filter(function() {
                        let title = $(this).find('.each-card .heading-sm').text().toLowerCase();
                        return title.includes(searchValue);
                    }).length;

                    if (currentCount >= matchingSpeciality) {
                        $("#load-more").hide();
                    } else {
                        $("#load-more").show();
                    }
                } else {
                    $('.col-card').slice(0, cardsPerPage).fadeIn();
                    currentCount = cardsPerPage;
                    if (currentCount >= totalCards) {
                        $("#load-more").hide();
                    } else {
                        $("#load-more").show();
                    }
                }
            }

            function debounce(func, wait) {
                let timeout;
                return function() {
                    const context = this;
                    const args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => {
                        func.apply(context, args);
                    }, wait);
                };
            }

            $('#search-speciality').on("keyup", debounce(filterSpeciality, 300));
        });
    </script>
@endpush

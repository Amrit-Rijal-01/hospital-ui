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
                <input type="text" id="search-all-blogs" name="allBlogs" class="form-control" placeholder="Search All Blogs">
                <div class="search-icon"><i class="bi bi-search"></i></div>
            </div>
         </div>
            <div class="specialities-cards">
                <div class="row">
                    @php
                        $specialities = array_fill(0, 20, [
                            'image' => asset('front/img/health-library/diseases.png'),
                            'title' => 'Diseases & Conditions',
                        ]);
                    @endphp

                    @foreach ($specialities as $speciality)
                        <div class="card-col col-lg-3 col-md-6 col-sm-6 p-2">
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
            let cardsPerPage = 16;
            let totalCards = $(".card-col").length;
            let currentCount = 0;

            function showMoreCards() {
                $(".card-col").slice(currentCount, currentCount + cardsPerPage).fadeIn();
                currentCount += cardsPerPage;
                console.log($('.card-col'), currentCount);


                if (currentCount >= totalCards) {
                    $("#load-more").hide(); // Hide button when all cards are shown
                }
            }

            showMoreCards(); // Load the first 16 cards initially

            $("#load-more").on("click", function() {
                showMoreCards();
            });
        });
    </script>
@endpush

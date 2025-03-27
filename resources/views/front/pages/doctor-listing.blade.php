@extends('front.layout.app')

@section('title', 'Doctor List')
@section('meta', 'List of doctor page for the website')

@section('content')
    <section id="listing-banner">
        <picture class="img-wrap">
            <source media="(min-width: 768px)" srcset="{{ asset('front/img/doctor-listing/banner.jpg') }}" width="1920"
                height="500" alt="Medical Experts">
            <source media="(min-width: 320px)" srcset="{{ asset('front/img/doctor-listing/banner-md.jpg') }}" width="480"
                height="320" alt="Medical Experts">
            <img src="https://medanta.s3.ap-south-1.amazonaws.com/banners/October2023/u6JyySMlXNGHQESP34oHfVViZp7IJc-metaRG9jdG9yLUxpc3RpbmcuanBn-.jpg"
                class="img-fluid w-100" alt="Medical Experts">
        </picture>
        <div class="banner-title">Medical Experts</div>
    </section>
    <section id="doctor-list">
        <div class="main-container">
            <div class="filter d-flex justify-content-start">
                <div class="select-field">
                    <div class="default-select d-flex" id="default-select">
                        <span class="default-item text-truncate">Cardiac Care</span>
                        <span class="anchor-down-btn" style="border-color: #000"></span>
                    </div>
                    <div class="select-wrap" id="select-wrap">
                        <ul class="select-list" id="select-list">
                            <li data-value="1">Liver Transplant</li>
                            <li data-value="2">Cancer Care</li>
                            <li data-value="3">Neuro Science</li>
                        </ul>
                        <input type="hidden" name="find-doc-speciality" id="find-doc-speciality-input">
                    </div>
                </div>
            </div>
            <div class="list mt-4 mb-2">
                <div class="row">
                    @for ($i = 0; $i < 30; $i++)
                        <div class="col-md-6 col-xl-4">
                            <div class="doctor-card">
                                <div class="header">
                                    <div class="doc-img">
                                        <img src="{{ asset('front/img/doctor-listing/chairman.png') }}" alt="Doctor Image">
                                    </div>
                                    <div class="doc-desc">
                                        <button class="share-btn">
                                            <i class="bi bi-share"></i>
                                        </button>
                                        <div class="heading-sm">
                                            Dr. Name {{ $i + 1 }}
                                        </div>
                                        <div class="post">
                                            Dr. post
                                        </div>
                                        <div class="doc-specialization">
                                            <span>Specialization Name</span>
                                            <a href="/doctor-profile">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <div class="tabs d-flex justify-content-evenly">
                                        <button class="tab active">SPECIALIZATION</button>
                                        <button class="tab">QUALIFICATION</button>
                                    </div>
                                    <div class="tab-container">
                                        <div class="tab-panel active">
                                            <ul>
                                                <li>
                                                    <span> <i class="bi bi-check2-circle"></i></span>
                                                    Specialization Name
                                                </li>
                                                <li>
                                                    <span> <i class="bi bi-check2-circle"></i></span>
                                                    Specialization Name
                                                </li>
                                                <li>
                                                    <span> <i class="bi bi-check2-circle"></i></span>
                                                    Specialization Name
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-panel">
                                            <ul>
                                                <li>
                                                    <span><i class="bi bi-check2-circle"></i></span>
                                                    Qualification Name
                                                </li>
                                                <li>
                                                    <span><i class="bi bi-check2-circle"></i></span>
                                                    Qualification Name
                                                </li>
                                                <li>
                                                    <span><i class="bi bi-check2-circle"></i></span>
                                                    Qualification Name
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href="/doctor-profile" class="meet-doc">Meet The Doctor</a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="pagination-container d-flex justify-content-center mt-4">
                <button id="prevPage" class="left-arrow mx-4"><img src="{{ asset('front/img/vector-left.png') }}"
                        alt="Left Arrow"></button>
                <div id="paginationButtons" class="d-flex"></div>
                <button id="nextPage" class="right-arrow mx-4"><img src="{{ asset('front/img/vector-right.png') }}"
                        alt="Right Arrow"></button>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // Pagination variables
            const cardsPerPage = 12;
            const totalCards = $('.doctor-card').length;
            const totalPages = Math.ceil(totalCards / cardsPerPage);
            let currentPage = 1;

            // Function to show cards for current page
            function showPage(page) {
                // Hide all cards first
                $('.doctor-card').hide();

                // Calculate start and end index for current page
                const startIndex = (page - 1) * cardsPerPage;
                const endIndex = startIndex + cardsPerPage;

                // Show cards for current page
                $('.doctor-card').slice(startIndex, endIndex).show();

                // Update pagination buttons
                updatePaginationButtons(page);

                // Scroll to the top of the doctor list section
                $('html, body').scrollTop($('#doctor-list').offset().top);
            }

            // Function to create pagination buttons
            function createPaginationButtons() {
                const paginationContainer = $('#paginationButtons');
                paginationContainer.empty();

                for (let i = 1; i <= totalPages; i++) {
                    const button = $('<button>', {
                        text: i,
                        class: 'page-button mx-1 px-3 py-1' + (i === currentPage ? ' active' : '')
                    }).on('click', function(event) {
                        // Completely stop event propagation and prevent default
                        event.stopPropagation();
                        event.preventDefault();

                        // Prevent scrolling
                        $(this).blur();

                        currentPage = i;
                        showPage(currentPage);

                        // Return false to further prevent any default actions
                        return false;
                    });
                    paginationContainer.append(button);
                }
            }

            // Function to update pagination buttons' active state
            function updatePaginationButtons(page) {
                // Remove active class from all pagination buttons
                $('.page-button').removeClass('active');

                // Add active class to the current page button
                $('.page-button').eq(page - 1).addClass('active');

                // Disable/enable prev and next buttons
                $('#prevPage').prop('disabled', page === 1);
                $('#nextPage').prop('disabled', page === totalPages);
            }

            // Previous page button
            $('#prevPage').on('click', function(event) {
                // Completely stop event propagation and prevent default
                event.stopPropagation();
                event.preventDefault();

                $(this).blur();

                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }

                return false;
            });

            // Next page button
            $('#nextPage').on('click', function(event) {
                // Completely stop event propagation and prevent default
                event.stopPropagation();
                event.preventDefault();

                $(this).blur();

                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }

                return false;
            });

            // Initial setup
            createPaginationButtons();
            showPage(1);

            // Existing dropdown and tab scripts
            $('.default-select').click(function() {
                $('.select-wrap').toggleClass('active');
            });

            $('.select-list li').click(function() {
                let selectedText = $(this).text();
                $('.default-item').text(selectedText);
                $('.select-wrap').removeClass('active');
                $('#find-doc-speciality-input').val($(this).data('value'));
            });

            $('.tab').click(function() {
                let card = $(this).closest('.doctor-card');
                card.find('.tab').removeClass('active');
                card.find('.tab-panel').removeClass('active');

                $(this).addClass('active');

                let index = $(this).index();
                card.find('.tab-panel').eq(index).addClass('active');
            });
        });
    </script>
@endpush

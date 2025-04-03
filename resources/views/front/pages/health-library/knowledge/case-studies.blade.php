@extends('front.layout.app')

@section('title', 'Case Study')
@section('meta', 'Case Study page for the website')

@section('content')
    <section id="case-studies" data-content="Case Studies">
        <div class="main-container">
            <div class="heading text-center mb-4">Case Studies</div>
            <div class="filters">
                <div class="select-field">
                    <div class="default-select d-flex" id="default-select">
                        <span class="default-item text-truncate">All</span>
                        <span class="anchor-down-btn" style="border-color: #000"></span>
                    </div>
                    <div class="select-wrap" id="select-wrap">
                        <ul class="select-list" id="select-list">
                            <li data-content="All">All</li>
                            <li data-target="liver-transplant">Liver Transplant</li>
                            <li data-target="cancer-care">Cancer Care</li>
                        </ul>
                        <input type="hidden" name="find-case-study" id="find-case-study-input">
                    </div>
                </div>
                <div class="search-field">
                    <input type="text" class="form-control rounded-5" placeholder="Search by Topic" id="search-input">
                    <i class="bi bi-search"></i>
                </div>
            </div>
            <div class="case-study-content">
                <div class="row g-2" id="case-study-list">
                    @for ($i = 0; $i < 50; $i++)
                        <div class="col-xl-4 col-md-6 case-study-item" data-content="liver-transplant">
                            <div class="slide m-3">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image"
                                        class="img-fluid w-100">
                                    <div class="heading-xs date">Chaitra 10, 2081</div>
                                </div>
                                <div class="body">
                                    <div class="para-wrap">Case Study</div>
                                    <h3 class="title heading-sm">test liver Title</h3>
                                    <div class="name-post">
                                        <span class="name">
                                            Dr Name
                                        </span>
                                        <br>
                                        <span class="post">Post, Nobel</span>
                                    </div>
                                    <div class="speciality">Liver Transplant <a href="">View Profile</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 case-study-item" data-content="cancer-care">
                            <div class="slide m-3">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image"
                                        class="img-fluid w-100">
                                    <div class="heading-xs date">Chaitra 10, 2081</div>
                                </div>
                                <div class="body">
                                    <div class="para-wrap">Case Study</div>
                                    <h3 class="title heading-sm">cancer title</h3>
                                    <div class="name-post">
                                        <span class="name">
                                            Dr Name
                                        </span>
                                        <br>
                                        <span class="post">Post, Nobel</span>
                                    </div>
                                    <div class="speciality">Liver Transplant <a href="">View Profile</a> </div>
                                </div>
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
            const selectWrap = $('#select-wrap');
            const defaultSelect = $('#default-select');
            const searchInput = $('#search-input');
            const caseStudyItems = $('.case-study-item');

            defaultSelect.on('click', function(e) {
                e.stopPropagation();
                selectWrap.toggleClass('active');
            });

            $('#select-list li').on('click', function() {
                let selectedText = $(this).text();
                let selectedContent = $(this).data('content');
                let selectedTarget = $(this).data('target');

                // Set the displayed text in the dropdown
                $('.default-item').text(selectedText);

                // Store the selected value (prioritize content over target)
                let selectedValue = selectedContent || selectedTarget || 'All';
                $('#find-case-study-input').val(selectedValue);

                selectWrap.removeClass('active');

                // Apply filtering when option is selected
                filterItems();
            });

            $(document).on('click', function() {
                selectWrap.removeClass('active');
            });

            // Pagination variables
            const cardsPerPage = 9;
            let currentPage = 1;
            let filteredItems = caseStudyItems;

            function filterItems() {
                const searchTerm = searchInput.val().toLowerCase();
                const selectedCategory = $('#find-case-study-input').val();

                filteredItems = caseStudyItems.filter(function() {
                    const title = $(this).find('.title').text().toLowerCase();
                    const speciality = $(this).find('.speciality').text().toLowerCase();
                    const itemContent = $(this).data('content') || '';

                    // Match search term (title or speciality contains search term)
                    const matchesSearch = title.includes(searchTerm) ||
                        speciality.includes(searchTerm);

                    // Match category filter
                    let matchesCategory = true;
                    if (selectedCategory && selectedCategory !== 'All') {
                        matchesCategory = itemContent === selectedCategory;
                    }

                    return matchesSearch && matchesCategory;
                });

                // Update counts and UI elements
                const totalItems = filteredItems.length;
                const totalPages = Math.ceil(totalItems / cardsPerPage);

                // Display message if no results found
                if (totalItems === 0) {
                    $('#case-study-list').append(
                        '<div class="col-12 text-center my-5"><h3>No case studies found</h3></div>');
                }

                // Reset to first page after filtering
                currentPage = 1;

                // Recreate pagination buttons
                createPaginationButtons(totalPages);

                // Show first page of filtered results
                showPage(1);
            }

            function showPage(page) {
                // Remove any "no results" message
                $('#case-study-list .col-12.text-center').remove();

                // Hide all items first
                caseStudyItems.hide();

                // Show only the filtered items for current page
                filteredItems.slice((page - 1) * cardsPerPage, page * cardsPerPage).show();

                // If no items to show and no message displayed, show message
                if (filteredItems.length === 0) {
                    $('#case-study-list').append(
                        '<div class="col-12 text-center my-5"><h3>No case studies found</h3></div>');
                }

                updatePaginationButtons(page);
            }

            function createPaginationButtons(totalPages) {
                const paginationContainer = $('#paginationButtons').empty();

                // Only create pagination if there are multiple pages
                if (totalPages > 1) {
                    for (let i = 1; i <= totalPages; i++) {
                        $('<button>', {
                            text: i,
                            class: 'page-button mx-1 px-3 py-1' + (i === currentPage ? ' active' : ''),
                            click: function(event) {
                                event.stopPropagation();
                                event.preventDefault();
                                $(this).blur();
                                currentPage = i;
                                showPage(currentPage);
                                return false;
                            }
                        }).appendTo(paginationContainer);
                    }
                }
            }

            function updatePaginationButtons(page) {
                const totalPages = Math.ceil(filteredItems.length / cardsPerPage);

                // Update active state
                $('.page-button').removeClass('active');
                $(`.page-button:contains(${page})`).addClass('active');

                // Enable/disable prev/next buttons
                $('#prevPage').prop('disabled', page === 1);
                $('#nextPage').prop('disabled', page === totalPages || totalPages === 0);

                // Show/hide pagination container based on results
                $('.pagination-container').toggle(filteredItems.length > cardsPerPage);
            }

            // Event listeners for pagination
            $('#prevPage').on('click', function(event) {
                event.stopPropagation();
                event.preventDefault();
                $(this).blur();
                if (currentPage > 1) {
                    showPage(--currentPage);
                }
                return false;
            });

            $('#nextPage').on('click', function(event) {
                event.stopPropagation();
                event.preventDefault();
                $(this).blur();
                const totalPages = Math.ceil(filteredItems.length / cardsPerPage);
                if (currentPage < totalPages) {
                    showPage(++currentPage);
                }
                return false;
            });

            // Search input event
            searchInput.on('input', filterItems);

            // Initial setup
            createPaginationButtons(Math.ceil(caseStudyItems.length / cardsPerPage));
            showPage(1);
        });
    </script>
@endpush

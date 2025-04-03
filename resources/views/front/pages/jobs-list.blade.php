@extends('front.layout.app')

@section('title', 'Jobs List')
@section('meta', 'Jobs List page for the website')

@section('content')
    <section id="job-career">
        <div class="main-container">
            <div class="heading mb-3">
                Join Our Team
            </div>
            <div class="para-wrap mb-3">
                We are committed to building a team that represents the diverse communities we serve, and we believe that
                our differences make us stronger. If you are looking for a rewarding career where you can make a meaningful
                impact, we encourage you to explore our current openings and consider joining our team.
            </div>
            <div class="filters mb-4">
                <div class="select-field">
                    <div class="default-select d-flex" id="default-select">
                        <span class="default-item text-truncate">All</span>
                        <span class="anchor-down-btn"></span>
                    </div>
                    <div class="select-wrap" id="select-wrap">
                        <ul class="select-list" id="select-list">
                            <li data-target="all">All</li>
                            <li data-target="doctor">Doctor</li>
                            <li data-target="nursing">Nursing</li>
                            <li data-target="administrative-staff">Administrative Staff</li>
                            <li data-target="paramedic">Paramedic</li>
                            <li data-target="no-result">For No Result</li>
                        </ul>
                        <input type="hidden" name="find-job" id="find-job-input">
                    </div>
                </div>
            </div>
            <div class="job-list">
                @for ($i = 0; $i < 8; $i++)
                    <div class="job" data-content="doctor">
                        <div class="desc">
                            <div class="heading-sm mb-2">Doctor</div>
                            <div class="category-type mb-1 para-wrap">
                                <div class="category">Category: <strong>Doctor</strong></div>
                                <div class="type">
                                    Type: <strong>Full Time</strong>
                                </div>
                            </div>
                            <div class="date">
                                <i class="bi bi-calendar"></i> : <strong>Jan 28, 2025</strong>
                            </div>
                        </div>
                        <div class="apply-btn">
                            <x-hoverBtn href="/job-detail">Apply</x-hoverBtn>
                        </div>
                    </div>
                    <div class="job" data-content="nursing">
                        <div class="desc">
                            <div class="heading-sm mb-2">Nursing</div>
                            <div class="category-type mb-1 para-wrap">
                                <div class="category">Category: <strong>Nursing</strong></div>
                                <div class="type">
                                    Type: <strong>Full Time</strong>
                                </div>
                            </div>
                            <div class="date">
                                <i class="bi bi-calendar"></i> : <strong>Jan 28, 2025</strong>
                            </div>
                        </div>
                        <div class="apply-btn">
                            <x-hoverBtn href="/job-detail">Apply</x-hoverBtn>
                        </div>
                    </div>
                    <div class="job" data-content="paramedic">
                        <div class="desc">
                            <div class="heading-sm mb-2">Paramedic</div>
                            <div class="category-type mb-1 para-wrap">
                                <div class="category">Category: <strong>Paramedic</strong></div>
                                <div class="type">
                                    Type: <strong>Full Time</strong>
                                </div>
                            </div>
                            <div class="date">
                                <i class="bi bi-calendar"></i> : <strong>Jan 28, 2025</strong>
                            </div>
                        </div>
                        <div class="apply-btn">
                            <x-hoverBtn href="/job-detail">Apply</x-hoverBtn>
                        </div>
                    </div>
                    <div class="job" data-content="administrative-staff">
                        <div class="desc">
                            <div class="heading-sm mb-2">Administrative Staff</div>
                            <div class="category-type mb-1 para-wrap">
                                <div class="category">Category: <strong>Administrative Staff</strong></div>
                                <div class="type">
                                    Type: <strong>Full Time</strong>
                                </div>
                            </div>
                            <div class="date">
                                <i class="bi bi-calendar"></i> : <strong>Jan 28, 2025</strong>
                            </div>
                        </div>
                        <div class="apply-btn">
                            <x-hoverBtn href="/job-detail">Apply</x-hoverBtn>
                        </div>
                    </div>
                @endfor
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
    <section id="job-bottom-banner">
        <picture class="img-wrap">
            <source media="(min-width: 768px)" srcset="{{ asset('front/img/jobs/banner.jpg') }}" width="1920"
                height="500">
            <source media="(min-width: 320px)" srcset="{{ asset('front/img/jobs/banner-md.jpg') }}" width="480"
                height="320">
            <img srcset="{{ asset('front/img/jobs/banner.jpg') }}" width="1920" height="500">
        </picture>
        <div class="banner-desc">
            <div class="banner-title">Not Sure Where you fit in?</div>
            <button class="resume-btn" data-bs-toggle="modal" data-bs-target="#resumeModal">Submit your Resume</button>
        </div>
    </section>
    <div class="modal fade" id="resumeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-4">
                <div class="modal-header p-0 pb-3 border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Full Name *"
                                    required>
                                <label for="name">Full Name *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" name="phoneNumber"
                                    placeholder="Phone Number *" required>
                                <label for="phoneNumber">Phone Number *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email Address *"
                                    required>
                                <label for="email">Email
                                    Address *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="location" placeholder="Location*"
                                    required>
                                <label for="location">Location *</label>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="resumeFile">Upload File (accepted only pdf, docx) *</label>
                            <input type="file" name="resumeFile" class="form-control" accept=".pdf,.docx" required>
                        </div>
                        <div class="col-md-6">
                            <div class="submit-btn">
                                <button id="submit-resume">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        // Wait for the document to be ready
        $(document).ready(function() {
            // Configuration
            const itemsPerPage = 5;
            let currentPage = 1;
            let filteredJobs = [];

            // Initialize the system
            initializeJobsSystem();

            function initializeJobsSystem() {
                // Get all jobs initially
                filteredJobs = $('.job').toArray();

                // Set up event listeners
                setupFilterListeners();
                setupPaginationListeners();

                // Initial display
                filterItems();
            }

            function setupFilterListeners() {
                // Select dropdown functionality
                const selectWrap = $('#select-wrap');
                const defaultSelect = $('#default-select');

                defaultSelect.on('click', function(e) {
                    e.stopPropagation();
                    selectWrap.toggleClass('active');
                });

                // Close dropdown when clicking elsewhere
                $(document).on('click', function() {
                    selectWrap.removeClass('active');
                });

                // Handle filter selection
                $('#select-list li').on('click', function() {
                    let selectedText = $(this).text();
                    let selectedTarget = $(this).data('target');

                    // Set the displayed text in the dropdown
                    $('.default-item').text(selectedText);

                    // Store the selected value
                    $('#find-job-input').val(selectedTarget || 'all');

                    // Reset to first page when changing filter
                    currentPage = 1;

                    // Apply filtering
                    filterItems();
                });
            }

            function setupPaginationListeners() {
                // Previous page button
                $('#prevPage').on('click', function() {
                    if (currentPage > 1) {
                        currentPage--;
                        updateDisplay();
                    }
                });

                // Next page button
                $('#nextPage').on('click', function() {
                    const totalPages = Math.ceil(filteredJobs.length / itemsPerPage);
                    if (currentPage < totalPages) {
                        currentPage++;
                        updateDisplay();
                    }
                });

                // Page number buttons will be added dynamically
                $('#paginationButtons').on('click', '.page-number', function() {
                    currentPage = parseInt($(this).text());
                    updateDisplay();
                });
            }

            function filterItems() {
                const selectedFilter = $('#find-job-input').val() || 'all';

                // Apply filter
                if (selectedFilter === 'all') {
                    filteredJobs = $('.job').toArray();
                } else {
                    filteredJobs = $(`.job[data-content="${selectedFilter}"]`).toArray();
                }

                // Always reset to first page when filtering
                currentPage = 1;

                // Update display with filtered items
                updateDisplay();
            }

            function updateDisplay() {
                // Hide all jobs first
                $('.job').hide();

                // Calculate start and end indices for current page
                const startIndex = (currentPage - 1) * itemsPerPage;
                const endIndex = Math.min(startIndex + itemsPerPage - 1, filteredJobs.length - 1);

                // Show only jobs for current page
                for (let i = startIndex; i <= endIndex; i++) {
                    $(filteredJobs[i]).show();
                }

                // Update pagination UI
                updatePaginationUI();
            }

            function updatePaginationUI() {
                const totalPages = Math.ceil(filteredJobs.length / itemsPerPage);
                const paginationButtons = $('#paginationButtons');

                // Clear previous buttons
                paginationButtons.empty();

                // Create pagination buttons
                for (let i = 1; i <= totalPages; i++) {
                    const pageButton = $('<button></button>')
                        .addClass('page-number mx-1')
                        .text(i);

                    // Highlight current page
                    if (i === currentPage) {
                        pageButton.addClass('active');
                    }

                    paginationButtons.append(pageButton);
                }

                // Hide/show navigation buttons based on current page
                $('#prevPage').prop('disabled', currentPage === 1);
                $('#nextPage').prop('disabled', currentPage === totalPages || totalPages === 0);

                // Show message if no results
                if (filteredJobs.length === 0) {
                    // Create a no results message if it doesn't exist
                    if ($('.no-results-message').length === 0) {
                        const noResultsMsg = $('<div></div>')
                            .addClass('no-results-message text-center my-4')
                            .text('No matching jobs found.');
                        $('.job-list').after(noResultsMsg);
                    } else {
                        $('.no-results-message').show();
                    }
                } else {
                    $('.no-results-message').hide();
                }
            }
        });
    </script>
@endpush

@extends('front.layout.app')

@section('title', 'Events & News')
@section('meta', 'Events & News page for the website')

@section('content')
    <section id="downloads">
        <div class="main-container">
            <div class="tabs-container mb-4">
                <button class="tab active">All</button>
                <button class="tab" data-target="info-graphics">Info-Graphics</button>
                <button class="tab" data-target="leaflets">Leaflets</button>
                <button class="tab" data-target="brochures">Brochures</button>
            </div>
            <div class="row content-row">
                <div class="col-md-4 filter-desktop">
                    <div class="form-floating mb-4">
                        <input type="text" name="name" class="form-control" placeholder="Search">
                        <label for="name">Search</label>
                        <div class="search-icon"><i class="bi bi-search"></i></div>
                    </div>
                    <div class="filter-list">
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class="col-md-8 content-col">
                    <div class="row g-3 card-row">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="col-md-6 col-xl-4" data-content="info-graphics">
                                <div class="download-card" data-bs-target="#disease-modal">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image"
                                            class="w-100 img-fluid">
                                        <div class="logo d-flex justify-content-between">
                                            <a class="z-1" href="#" target="_blank">
                                                <i class="bi bi-file-earmark"></i>
                                            </a>
                                            <div class="end d-flex gap-3">
                                                <a class="z-1" href="#">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a class="z-1" href="#">
                                                    <i class="bi bi-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <h3 class="title heading-sm mb-2">{{ $i }}{{ $i }} for
                                            info-graphics Title</h3>
                                        <div class="para-wrap date">12/12/2081</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4" data-content="leaflets">
                                <div class="download-card" data-bs-target="#disease-modal">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image"
                                            class="w-100 img-fluid">
                                        <div class="logo d-flex justify-content-between">
                                            <a class="z-1" href="#" target="_blank">
                                                <i class="bi bi-file-earmark"></i>
                                            </a>
                                            <div class="end d-flex gap-3">
                                                <a class="z-1" href="#">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a class="z-1" href="#">
                                                    <i class="bi bi-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <h3 class="title heading-sm mb-2">{{ $i }}{{ $i }} for
                                            leaflets Title</h3>
                                        <div class="para-wrap date">12/12/2081</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4" data-content="brochures">
                                <div class="download-card" data-bs-target="#disease-modal">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image"
                                            class="w-100 img-fluid">
                                        <div class="logo d-flex justify-content-between">
                                            <a class="z-1" href="#" target="_blank">
                                                <i class="bi bi-file-earmark"></i>
                                            </a>
                                            <div class="end d-flex gap-3">
                                                <a class="z-1" href="#">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a class="z-1" href="#">
                                                    <i class="bi bi-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <h3 class="title heading-sm mb-2">{{ $i }}{{ $i }} for
                                            brochures Title</h3>
                                        <div class="para-wrap date">12/12/2081</div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="modal" tabindex="-1" id="disease-modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <div class="modal-title heading-md">
                                    Disease Name
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <button class="modal-body-btn">View PDF</button>
                                <button class="modal-body-btn">Download PDF</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // Modal functionality
            $('.download-card').click(function(e) {
                if (!$(e.target).closest('a').length) {
                    $('#disease-modal').modal('show');
                }
            });

            // Tab switching functionality
            $('.tab').click(function() {
                $('.tab').removeClass('active');
                $(this).addClass('active');

                const target = $(this).data('target');
                filterContent(target);

                // Apply search filter after changing tabs
                const searchText = $('input[name="name"]').val().toLowerCase();
                if (searchText) {
                    applySearch(searchText);
                }
            });

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

            // Apply debounce to search input
            $('input[name="name"]').on('keyup', debounce(function() {
                const searchText = $(this).val().toLowerCase();
                applySearch(searchText);
            }, 300)); // 300ms debounce time - adjust as needed

            // Function to filter content based on tab selection
            function filterContent(target) {
                if (!target) {
                    // "All" tab selected
                    $('.card-row > div').show();
                } else {
                    // Specific tab selected
                    $('.card-row > div').hide();
                    $(`.card-row > div[data-content="${target}"]`).show();
                }
            }

            // Function to apply search filter
            function applySearch(searchText) {
                const activeTab = $('.tab.active').data('target');

                // If searchText is empty, just apply the tab filter
                if (!searchText) {
                    filterContent(activeTab);
                    return;
                }

                // Start by hiding all items
                $('.card-row > div').hide();

                // Select which elements to search through based on active tab
                let selector;
                if (!activeTab) {
                    // "All" tab is active
                    selector = '.card-row > div';
                } else {
                    // Specific tab is active
                    selector = `.card-row > div[data-content="${activeTab}"]`;
                }

                // Show items that match the search
                $(selector).each(function() {
                    const title = $(this).find('.title').text().toLowerCase();
                    const date = $(this).find('.date').text().toLowerCase();

                    if (title.includes(searchText) || date.includes(searchText)) {
                        $(this).show();
                    }
                });
            }
        });
    </script>
@endpush

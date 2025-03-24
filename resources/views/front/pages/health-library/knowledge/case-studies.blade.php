@extends('front.layout.app')

@section('title', 'Blogs')
@section('meta', 'Blogs page for the website')

@section('content')
    <section id="case-studies">
        <div class="main-container">
            <div class="heading text-center mb-4">Case Studies</div>
            <div class="filters">
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
                <div class="search-field">
                    <input type="text" class="form-control rounded-5" placeholder="Search by Topic" id="search-input">
                    <i class="bi bi-search"></i>
                </div>
            </div>
            <div class="case-study-content">
                <div class="row g-2" id="case-study-list">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="col-xl-4 col-md-6 case-study-item">
                            <div class="slide m-3">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/service-img.jpg') }}" alt="Service Image"
                                        class="img-fluid w-100">
                                    <div class="heading-xs date">Chaitra 10, 2081</div>
                                </div>
                                <div class="body">
                                    <div class="para-wrap mb-1">Case Study</div>
                                    <h3 class="title heading-sm mb-3">News Title</h3>
                                    <div class="name-post mb-2">
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
        </div>
    </section>
@endsection

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectWrap = document.getElementById('select-wrap');
            const defaultSelect = document.getElementById('default-select');
            const searchInput = document.getElementById('search-input');
            const caseStudyList = document.getElementById('case-study-list');
            const caseStudyItems = document.querySelectorAll('.case-study-item');

            defaultSelect.addEventListener('click', function() {
                selectWrap.classList.toggle('active');
            });

            searchInput.addEventListener('input', function() {
                const searchTerm = searchInput.value.toLowerCase();
                caseStudyItems.forEach(function(item) {
                    const title = item.querySelector('.title').textContent.toLowerCase();
                    if (title.includes(searchTerm)) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endpush

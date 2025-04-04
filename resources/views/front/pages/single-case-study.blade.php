@extends('front.layout.app')

@section('title', 'Case Study Name')
@section('meta', 'Case Study Name page for the website')

@section('content')
    <section id="per-case-study">
        <div class="main-container">
            <div class="row g-5">
                <div class="col-lg-9">
                    <div class="case-study">

                        <div class="case-study-main-img mb-3">
                            <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}" alt="case-study Image">
                        </div>
                        <div class="case-study-header">
                            <div class="heading mb-4">
                                Heading of the case-study
                            </div>
                            <div class="heading-sm mb-1">
                                By <strong>Dr. Name</strong> in <strong>Speciality Name</strong>
                            </div>
                            <div class="heading-sm date mb-3">Feb 26, 2025</div>
                            <div class="share-links d-flex gap-3 fs-2 mb-4">
                                <a href="#">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-envelope"></i>
                                </a>
                            </div>
                        </div>
                        <div class="case-study-content">
                            <p class="para-wrap my-3">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, assumenda quidem.
                                Molestiae,
                                rem
                                reprehenderit sint, assumenda libero illum omnis ea non laborum distinctio aspernatur
                                molestias
                                dolorem dolor eligendi. Repellendus corporis minima ipsa ipsam, molestiae consequuntur
                                mollitia
                                aperiam architecto atque culpa doloribus temporibus tempora eaque laudantium libero dolor
                                eos!
                                Sit,
                                explicabo.
                            </p>
                        </div>
                        <div class="author-profile">
                            <div class="author-img">
                                <img src="{{ asset('front/img/speciality/chairman.png') }}" alt="Author Image">
                            </div>
                            <div class="author-desc">
                                <div class="heading-sm">Author Name</div>
                                <div class="para-wrap mb-3">Speciality</div>
                                <a href="/doctor-profile">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="second-col">
                        <div class="query-form mb-4">
                            <form action="">
                                <div class="heading-md">Query Form</div>
                                <div class="input-wrap">
                                    <label for="name">Name *</label>
                                    <input type="text" name="name" placeholder="Enter Your Name" required>
                                </div>
                                <div class="input-wrap">
                                    <label for="mobileNumber">Mobile Number *</label>
                                    <input type="text" name="mobileNumber" placeholder="Enter Your Phone Number"
                                        required>
                                </div>
                                <div class="input-wrap">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" placeholder="Enter Your E-mail">
                                </div>
                                <div class="btn-wrap w-100">
                                    <button>Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="recent-case-study ">
                            <div class="heading mb-4">Recent case-study</div>
                            <div class="case-study-card mb-4">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="case-study Image">
                                </div>
                                <div class="body">
                                    <div class="heading-md "><a href="/single-case-study">Heading of the case-study</a></div>
                                    <div class="date">Mar 27, 2025</div>
                                </div>
                            </div>
                            <div class="case-study-card mb-4">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="case-study Image">
                                </div>
                                <div class="body">
                                    <div class="heading-md"><a href="/single-case-study">Heading of the case-study</a></div>
                                    <div class="date">Mar 27, 2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

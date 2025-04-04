@extends('front.layout.app')

@section('title', 'Update Name')
@section('meta', 'Update Name page for the website')

@section('content')
    <section id="each-update">
        <div class="main-container">
            <div class="row g-5">
                <div class="col-lg-9">
                    <div class="single-update">
                        <div class="event-main-img mb-3">
                            <a href="{{ asset('front/img/test.mp4') }}" class="glightbox">
                                <img src="{{ asset('front/img/career/staff.jpg') }}" alt="Staff">
                                <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                            </a>

                        </div>
                        <div class="update-header">
                            <div class="heading mb-4">
                                Heading of the event
                            </div>
                            <div class="heading-sm date mb-3">Feb 26, 2025 | Read Time</div>
                            <div class="share-links d-flex gap-3 fs-2 mb-5">
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
                        <p class="para-wrap my-3">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, assumenda quidem. Molestiae,
                            rem
                            reprehenderit sint, assumenda libero illum omnis ea non laborum distinctio aspernatur molestias
                            dolorem dolor eligendi. Repellendus corporis minima ipsa ipsam, molestiae consequuntur mollitia
                            aperiam architecto atque culpa doloribus temporibus tempora eaque laudantium libero dolor eos!
                            Sit,
                            explicabo.
                        </p>
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
                        <div class="recent-event ">
                            <div class="heading mb-4">Recent event</div>
                            <div class="event-card mb-4">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="event Image">
                                </div>
                                <div class="body">
                                    <div class="heading-md "><a href="/each-event">Heading of the event</a></div>
                                    <div class="date">Mar 27, 2025</div>
                                </div>
                            </div>
                            <div class="event-card mb-4">
                                <div class="img-wrapper">
                                    <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="event Image">
                                </div>
                                <div class="body">
                                    <div class="heading-md"><a href="/each-event">Heading of the event</a></div>
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

@push('js')
    <script>
        $(document).ready(function() {
            const lightBox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true
            });
        });
    </script>
@endpush

<section id="health-wellness" data-content="Health Wellness">
    <div class="main-container">
        <div class="heading text-center mb-4">
            Health & Wellness Blog
        </div>
        <div class="desktop-blogs">
            <div class="row g-4">
                <div class="col-12 col-lg-6">
                    <div class="big-col">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                alt="Blog">
                        </div>
                        <div class="content p-4">
                            <div class="heading-md mb-2">
                                Heading of the blog
                            </div>
                            <button class="heading-xs">Continue Reading</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <a href="#" class="small-col">
                                <div class="blog-img">
                                    <img class="img-fluid"
                                        src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="Blog">
                                </div>
                                <div class="heading-sm">Heading for the blog</div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="small-col">
                                <div class="blog-img">
                                    <img class="img-fluid"
                                        src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="Blog">
                                </div>
                                <div class="heading-sm">Heading for the blog</div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="small-col">
                                <div class="blog-img">
                                    <img class="img-fluid"
                                        src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="Blog">
                                </div>
                                <div class="heading-sm">Heading for the blog</div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="small-col">
                                <div class="blog-img">
                                    <img class="img-fluid"
                                        src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                                        alt="Blog">
                                </div>
                                <div class="heading-sm">Heading for the blog</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-blog-slide">
            <div class="blog-card">
                <a href="#" class="small-col">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                            alt="Blog">
                    </div>
                    <div class="heading-sm">Heading for the blog</div>
                </a>
            </div>
            <div class="blog-card">
                <a href="#" class="small-col">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                            alt="Blog">
                    </div>
                    <div class="heading-sm">Heading for the blog</div>
                </a>
            </div>
            <div class="blog-card">
                <a href="#" class="small-col">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}"
                            alt="Blog">
                    </div>
                    <div class="heading-sm">Heading for the blog</div>
                </a>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.mobile-blog-slide').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',

            })
        })
    </script>
@endpush

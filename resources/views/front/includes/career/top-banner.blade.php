<section class="top-banner">
    <div class="main-container">
        <div class="slider" id="slick-slider">
            <div class="image-card">
                <img class="img-fluid" src="{{ asset('front/img/career/slide-banner-1.jpg') }}" alt="Slider Image">

            </div>
            <div class="image-card">
                <img class="img-fluid" src="{{ asset('front/img/career/slide-banner-2.jpg') }}" alt="Slider Image">

            </div>
            <div class="image-card">
                <img class="img-fluid" src="{{ asset('front/img/career/slide-banner-3.png') }}" alt="Slider Image">

            </div>
        </div>
        <button class="explore-btn">Explore Jobs</button>
    </div>
</section>

@push('js')
    <script>
        $(document).ready(function() {
            $('#slick-slider').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: true
            })
        })
    </script>
@endpush

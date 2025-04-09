<section class="top-banner">
    <div class="main-container">
        <div class="slider" id="slick-slider">
            <div class="image-card">
                <picture>
                    <source height="500" width="1920" media="(min-width: 768px)" srcset="{{ asset('front/img/career/slide-banner-1.jpg') }}">
                    <source width="480" height="320" media="(max-width: 767px)" srcset="{{ asset('front/img/career/slide-banner-mob-1.jpg') }}">
                    <img height="500" width="1920" class="img-fluid" src="{{ asset('front/img/career/slide-banner-1.jpg') }}" alt="Slider Image">
                </picture>
            </div>
            <div class="image-card">
                <picture>
                    <source height="500" width="1920" media="(min-width: 768px)" srcset="{{ asset('front/img/career/slide-banner-2.jpg') }}">
                    <source width="480" height="320" media="(max-width: 767px)" srcset="{{ asset('front/img/career/slide-banner-mob-2.jpg') }}">
                    <img height="500" width="1920" class="img-fluid" src="{{ asset('front/img/career/slide-banner-2.jpg') }}" alt="Slider Image">
                </picture>

            </div>
            <div class="image-card">
                <picture>
                    <source height="500" width="1920" media="(min-width:768px)" srcset="{{ asset('front/img/career/slide-banner-3.png') }}">
                    <source width="480" height="320" media="(max-width:767px)" srcset="{{ asset('front/img/career/slide-banner-mob-3.jpg') }}">
                    <img height="500" width="1920" src="{{ asset('front/img/career/slide-banner-3.png') }}" alt="Slider Image" class="img-fluid">
                </picture>
            </div>
        </div>
        <x-hoverBtn class="explore-btn">Explore Jobs</x-hoverBtn>
    </div>
</section>

@push('js')
    <script>
        $(document).ready(function() {
            $('#slick-slider').slick({
                // autoplay: true,
                // autoplaySpeed: 2000,
                arrows: false,
                dots: true
            })
        })
    </script>
@endpush

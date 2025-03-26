@props(['heading' => 'Default Heading', 'subHeading' => '', 'sliderId' => uniqid('slider-')])

<div class="slider-component">
    <div class="heading-group mb-4">
        @if ($subHeading)
            <div class="heading mb-2">{{ $heading }}</div>
            <div class="heading-xs">{{ $subHeading }}</div>
        @else
            <div class="heading">{{ $heading }}</div>
        @endif
    </div>
    <div class="{{ $sliderId }}">
        {{ $slot }}
    </div>
</div>
@push('js')
    <script>
        $(document).ready(function() {

            $('.{{ $sliderId }}').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',

                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 650,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            })
        });
    </script>
@endpush

<section id="single-service-elder">
    <div class="main-container">
        <div class="heading text-center mb-4">
            Our Packages
        </div>
        <div class="package-list">
            <div class="package-slider">
                @php
$packages = [
    'first' => [
        'title' => 'silver',
        'features' => [
            'Basis services worth Rs 4,900 and above',
            '2 General Physician and 1 Specialist Doctor consultations*',
            '3 vital checks at home'
        ],
        'price' => '5000'

    ],
    'second' => [
        'title' => 'gold',
        'features' => [
            'Comprehensive services worth Rs 7,568 and above'
        ],
        'price' => '7000'
    ],
    'third' => [
        'title' => 'diamond',
        'features' => [
            'All-inclusive services worth Rs 17,575 and above',
            '6 General Physician and 3 Specialist Doctor consultations*',
            '12 vital checks at home',
            'Up to 30% instant savings on select services*'
        ],
        'price' => '10000'
    ],
    'fourth' => [
        'title' => 'diamond',
        'features' => [
            'Maximized services worth Rs 24,650 and above'
        ],
        'price' => '15000'
    ]
]
                @endphp
                @foreach ($packages as $package)
                    <div class="each-package">
                        <div class="heading-sm">{{$package['title']}}</div>
                        <div class="package-body">
                            <ul>
                                @foreach ($package['features'] as $feature)
                                    <li>{{$feature}} </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="package-price">
                            <div class="price">Rs. {{$package['price']}}</div>
                            <button data-package="{{$package['title']}}" class="enroll-btn" data-bs-toggle="modal" data-bs-target="#enrollModal">
                                Enroll Now
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="enrollModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Full Name *" required>
                                <label for="name">Full Name *</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" name="phoneNumber" placeholder="Phone Number *"
                                    required>
                                <label for="phoneNumber">Phone Number *</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email Address *"
                                    required>
                                <label for="email">Email
                                    Address *</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <select name="package" class="form-select" id="floatingSelect">
                                    @foreach ($packages as $package)
                                        <option value="{{$package['title']}}">{{$package['title']}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Select Package *</label>
                            </div>
                        </div>
                        <div class="col-12 submit-btn">
                            <button class="w-100" id="submit-callback">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        $(document).ready(function () {
            $('.enroll-btn').on('click', function() {
                const name = $(this).data('package');
                $('#floatingSelect').val(name);
            })
            $('.package-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',

                responsive: [
                    {
                        breakpoint: 1299,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            })

        })
    </script>
@endpush
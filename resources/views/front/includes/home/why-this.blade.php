<section class="why-hospital">
    <div>
        <div class="why-wrapper">
            <h2 class="text-center heading mb-4">
                Medanta Model of Care</h2>
            <div class="why-details">
                <div class="why-list">
                    <div class="images">
                        <img src="{{ asset('front/img/center-1.webp') }}" alt="Center Image" class="center-image">
                    </div>
                    <div class="why-block-a why-block active-why blocking-hover wow fadeInDown">
                        <div class="click-text">
                            <div class="block-head active">Exceptional clinical talent </div>
                            <div class="common-button">
                                <x-hoverBtn href="/why-us#talent" class="anchor-button">Know
                                    More
                                </x-hoverBtn>
                            </div>
                        </div>
                        <a href="#" class="abc">
                            <div datasrc="{{ asset('front/img/center-1.webp') }}" class="click-circle active"></div>
                        </a>
                    </div>

                    <div class="why-block-b why-block blocking-hover wow fadeInRight">

                        <a href="#" class="abc">
                            <div datasrc="{{ asset('front/img/center-2.webp') }}" class="click-circle"></div>
                        </a>
                        <div class="click-text">
                            <div class="block-head ">World-class infrastructure</div>
                            <div class="common-button">
                                <x-hoverBtn href="/why-us#infrastructure" class="anchor-button">Know More
                                </x-hoverBtn>
                            </div>
                        </div>
                    </div>

                    <div class="why-block-c why-block blocking-hover wow fadeInRight">

                        <a href="#">
                            <div datasrc="{{ asset('front/img/center-3.webp') }}" class="click-circle "></div>
                        </a>
                        <div class="click-text">
                            <div class="block-head ">Latest high-end technology</div>
                            <div class="common-button">
                                <x-hoverBtn href="/why-us#technology" class="anchor-button">Know More
                                </x-hoverBtn>
                            </div>
                        </div>
                    </div>

                    <div class="why-block-d why-block blocking-hover wow fadeInLeft">
                        <div class="click-text">
                            <div class="block-head ">Caring systems and processes</div>
                            <div class="common-button">
                                <x-hoverBtn href="/why-us#care" class="anchor-button">Know
                                    More
                                </x-hoverBtn>
                            </div>
                        </div>
                        <a href="#">
                            <div datasrc="{{ asset('front/img/center-4.webp') }}" class="click-circle "></div>
                        </a>
                    </div>

                    <div class="why-block-e why-block blocking-hover wow fadeInLeft">
                        <div class="click-text">
                            <div class="block-head">Trust-based compassionate care</div>
                            <div class="common-button">
                                <x-hoverBtn href="/why-us#trust" class="anchor-button">Know More
                                </x-hoverBtn>
                            </div>
                        </div>
                        <a href="#">
                            <div datasrc="{{ asset('front/img/center-5.webp') }}" class="click-circle "></div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="why-resp-wrapper">
            <div class="text-center heading">Medanta Model of Care</div>
            <div class="why-resp-content">

                <div class="accor-list wow fadeInUp">
                    <ul class="list-accor">
                        <li onclick="expand(this)">
                            <h3 class="heading-sm accor-heading">Exceptional clinical talent</h3>
                            <div class="accor-collapse-wrapper">
                                <img loading="lazy" src="{{ asset('front/img/center-1.webp') }}" alt="Why Nobel"
                                    width="460" height="460">
                                <div class="common-button">
                                    <x-hoverBtn href="/why-us#talent" class="anchor-button">Know More </x-hoverBtn>
                                </div>
                            </div>
                        </li>
                        <li onclick="expand(this)">
                            <h3 class="heading-sm accor-heading ">World-class infrastructure</h3>
                            <div class="accor-collapse-wrapper">
                                <img loading="lazy" src="{{ asset('front/img/center-2.webp') }}" alt="Why Nobel">
                                <div class="common-button">
                                    <x-hoverBtn href="/why-us#infrastructure" class="anchor-button">Know More </x-hoverBtn>
                                </div>
                            </div>
                        </li>
                        <li onclick="expand(this)">
                            <h3 class="heading-sm accor-heading ">Latest high-end technology</h3>
                            <div class="accor-collapse-wrapper">
                                <img loading="lazy" src="{{ asset('front/img/center-3.webp') }}" alt="Why Nobel">
                                <div class="common-button">
                                    <x-hoverBtn href="/why-us#technology" class="anchor-button">Know More </x-hoverBtn>
                                </div>
                            </div>
                        </li>
                        <li onclick="expand(this)">
                            <h3 class="heading-sm accor-heading ">Caring systems and processes</h3>
                            <div class="accor-collapse-wrapper">
                                <img loading="lazy" src="{{ asset('front/img/center-4.webp') }}" alt="Why Nobel">
                                <div class="common-button">
                                    <x-hoverBtn href="/why-us#care" class="anchor-button">Know More </x-hoverBtn>
                                </div>
                            </div>
                        </li>
                        <li onclick="expand(this)">
                            <h3 class="heading-sm accor-heading ">Trust-based compassionate care</h3>
                            <div class="accor-collapse-wrapper">
                                <img loading="lazy" src="{{ asset('front/img/center-5.webp') }}" alt="Why Nobel">
                                <div class="common-button">
                                    <x-hoverBtn href="/why-us#trust" class="anchor-button">Know More </x-hoverBtn>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>

@push('js')
    <script>
        $(document).ready(function() {
            $('.click-circle').on('click', function(e) {
                console.log('logged');

                e.preventDefault();
                let imgSrc = $(this).attr('datasrc');

                $('.center-image').attr('src', imgSrc);

                let $image = $('.center-image');

                 $image.css('transition', 'none');
                $image.css({
                    'transform': 'scale(0.01)',
                    'opacity': '0'
                });
                $image[0].offsetHeight;

                setTimeout(function() {
                    $image.css('transition', 'transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0.8s ease');

                    $image.css({
                        'transform': 'scale(1)',
                        'opacity': '1'
                    });
                }, 50);

                $('.click-circle').removeClass('active');
                $(this).addClass('active');
                $('.why-block').removeClass('active-why');
                $(this).closest('.why-block').addClass('active-why');
            });
            $('.center-image').addClass('normal');
        })
    </script>
@endpush

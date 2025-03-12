<section class="why-hospital py-75 pb-0">
    <div>
        <div class="why-wrapper">
            <h2 class="text-center heading pb-40 wow fadeInDown">
                Medanta Model of Care</h2>
            <div class="why-details">
                <div class="why-list">
                    {{-- <div class="images"> --}}
                        <img src="{{ asset('front/img/center-1.webp') }}" alt="Center Image 1" class="center-image img-1">
                        <img src="{{ asset('front/img/center-2.webp') }}" alt="Center Image 2" class="center-image img-2">
                        <img src="{{ asset('front/img/center-3.webp') }}" alt="Center Image 3" class="center-image img-3">
                        <img src="{{ asset('front/img/center-4.webp') }}" alt="Center Image 4" class="center-image img-4">
                        <img src="{{ asset('front/img/center-5.webp') }}" alt="Center Image 5" class="center-image img-5">
                    {{-- </div> --}}
                    <div class="why-block-a why-block blocking-hover wow fadeInDown">
                        <div class="click-text">
                            <div class="block-head active">Exceptional clinical talent </div>
                            <div class="common-button">
                                <x-hoverBtn href="#" class="anchor-button">Know
                                    More
                                     </x-hoverBtn>
                            </div>
                        </div>
                        <a href="#" class="abc">
                            <div datasrc="{{ asset('front/img/center-1.webp') }}"
                                class="click-circle active"></div>
                        </a>
                    </div>

                    <div class="why-block-b why-block blocking-hover wow fadeInRight" >

                        <a href="#" class="abc">
                            <div datasrc="{{ asset('front/img/center-2.webp') }}"
                                class="click-circle" ></div>
                        </a>
                        <div class="click-text">
                            <div class="block-head ">World-class infrastructure</div>
                            <div class="common-button">
                                <x-hoverBtn href="#" class="anchor-button">Know More
                                     </x-hoverBtn>
                            </div>
                        </div>
                    </div>

                    <div class="why-block-c why-block blocking-hover wow fadeInRight">

                        <a href="#">
                            <div datasrc="{{ asset('front/img/center-3.webp') }}"
                                class="click-circle "></div>
                        </a>
                        <div class="click-text">
                            <div class="block-head ">Latest high-end technology</div>
                            <div class="common-button">
                                <x-hoverBtn href="#"
                                    class="anchor-button">Know More
                                     </x-hoverBtn>
                            </div>
                        </div>
                    </div>

                    <div class="why-block-d why-block blocking-hover wow fadeInLeft">
                        <div class="click-text">
                            <div class="block-head ">Caring systems and processes</div>
                            <div class="common-button">
                                <x-hoverBtn href="#" class="anchor-button">Know
                                    More
                                     </x-hoverBtn>
                            </div>
                        </div>
                        <a href="#" >
                            <div datasrc="{{ asset('front/img/center-4.webp') }}"
                                class="click-circle "></div>
                        </a>
                    </div>

                    <div class="why-block-e why-block blocking-hover wow fadeInLeft" >
                        <div class="click-text">
                            <div class="block-head">Trust-based compassionate care</div>
                            <div class="common-button">
                                <x-hoverBtn href="#"
                                    class="anchor-button">Know More
                                     </x-hoverBtn>
                            </div>
                        </div>
                        <a href="#">
                            <div datasrc="{{ asset('front/img/center-5.webp') }}"
                                class="click-circle "></div>
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
                            <h3 class="heading-sm accor-heading" >Exceptional clinical talent</h3>
                            <div class="accor-collapse-wrapper">
                                <img loading="lazy"
                                    src="{{asset('front/img/center-1.webp')}}"
                                    alt="Why Nobel" width="460" height="460">
                                <div class="common-button">
                                    <x-hoverBtn href="#"
                                        class="anchor-button">Know More  </x-hoverBtn>
                                </div>
                            </div>
                        </li>
                        <li onclick="expand(this)">
                            <h3 class="heading-sm accor-heading " >World-class infrastructure</h3>
                            <div class="accor-collapse-wrapper" >
                                <img loading="lazy"
                                    src="{{asset('front/img/center-2.webp')}}"
                                    alt="Why Nobel">
                                <div class="common-button">
                                    <x-hoverBtn href="#"
                                        class="anchor-button">Know More  </x-hoverBtn>
                                </div>
                            </div>
                        </li>
                        <li onclick="expand(this)">
                            <h3 class="heading-sm accor-heading " >Latest high-end technology</h3>
                            <div class="accor-collapse-wrapper">
                                <img loading="lazy"
                                    src="{{asset('front/img/center-3.webp')}}"
                                    alt="Why Nobel" >
                                <div class="common-button">
                                    <x-hoverBtn href="#"
                                        class="anchor-button">Know More  </x-hoverBtn>
                                </div>
                            </div>
                        </li>
                        <li onclick="expand(this)">
                            <h3 class="heading-sm accor-heading " >Caring systems and processes</h3>
                            <div class="accor-collapse-wrapper">
                                <img loading="lazy"
                                    src="{{asset('front/img/center-4.webp')}}"
                                    alt="Why Nobel">
                                <div class="common-button">
                                    <x-hoverBtn href="#"
                                        class="anchor-button">Know More  </x-hoverBtn>
                                </div>
                            </div>
                        </li>
                        <li onclick="expand(this)">
                            <h3 class="heading-sm accor-heading " >Trust-based compassionate care</h3>
                            <div class="accor-collapse-wrapper" >
                                <img loading="lazy"
                                    src="{{asset('front/img/center-5.webp')}}"
                                    alt="Why Nobel">
                                <div class="common-button">
                                    <x-hoverBtn href="#"
                                        class="anchor-button">Know More  </x-hoverBtn>
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
        function expand(el) {
            alert('click');
            $(el).toggleClass('.active');
        }
    </script>
@endpush

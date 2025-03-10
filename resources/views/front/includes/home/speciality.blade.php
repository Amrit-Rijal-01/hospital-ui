<section class="specialities pb-5">

    <div class="pt-5 main-container">
        <div class="specialities-inner pt-5 d-flex flex-column flex-xl-row gap-2">
            <div class="sp-inner-heading">
                <h4 class="sp-subheading">Specialities</h4>
                <h2 class="sp-heading">An Ecosystem for Clinical Excellence</h2>
            </div>
            <div class="sp-inner-care p-3 pt-0 fw-bold">
                <div class="sp-wrapper">
                    <a href="#">
                        <div class="speciality-row">
                            <img src="{{ asset('front/img/heart.svg') }}" alt="Heart">
                            <span>
                                Cardiac Care
                            </span>
                        </div> <i class="bi bi-chevron-right"></i>
                    </a>
                    <hr>
                    <a href="#">
                        <div class="speciality-row">
                            <img src="{{ asset('front/img/cancer.svg') }}" alt="Cancer">
                            <span>
                                Cancer Care
                            </span>
                        </div> <i class="bi bi-chevron-right"></i>
                    </a>
                    <hr>
                    <a href="#">
                        <div class="speciality-row">
                            <img src="{{ asset('front/img/neuro.svg') }}" alt="Neuro Science">
                            <span>
                                Neuroscience
                            </span>
                        </div> <i class="bi bi-chevron-right"></i>
                    </a>
                    <hr>
                    <a href="#">
                        <div class="speciality-row">
                            <img src="{{ asset('front/img/gastro.svg') }}" alt="Gastro Science">
                            <span>
                                Gastro Science
                            </span>
                        </div> <i class="bi bi-chevron-right"></i>
                    </a>
                    <hr>
                    <a href="#">
                        <d class="speciality-row">
                            <img src="{{ asset('front/img/ortho.svg') }}" alt="Orthopaedics">
                            <span>
                                Orthopaedics
                            </span>
                        </d><i class="bi bi-chevron-right"></i>
                    </a>
                    <hr>
                    <a href="#">
                        <div class="speciality-row">
                            <img src="{{ asset('front/img/renal.svg') }}" alt="Renal Care">
                            <span>
                                Renal Care
                            </span>
                        </div>
                        <i class="bi bi-chevron-right"></i>
                    </a>
                    <hr>
                </div>
                <div class="hover-button">
                    <x-hoverBtn href="https://www.google.com" target="_blank">
                        View All Specialities
                    </x-hoverBtn>
                </div>
            </div>
            <div class="sp-inner-search p-3 pt-0">
                <div class="sp-wrapper">
                    <h4 class="sp-subheading">Search By</h4>
                    <div class="sp-search-by d-flex justify-content-evenly gap-1">
                        <a href="#" class="flex-fill sp-btn active-btn" onclick="setActive(this)">Ailments</a>
                        <a href="#" class="flex-fill sp-btn" onclick="setActive(this)">Treatments</a>
                        <a href="#" class="flex-fill sp-btn" onclick="setActive(this)">Technologies</a>
                    </div>
                    <div class="sp-search-letter">
                        <div class="letter-wrap"><a href="#" class=""><span class="">a</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">b</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">c</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">d</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">e</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">f</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">g</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">h</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">i</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">j</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">k</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">l</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">m</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">n</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">o</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">p</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">q</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">r</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">s</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">t</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">u</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">v</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">w</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">x</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">y</span></a>
                        </div>
                        <div class="letter-wrap"><a href="#" class=""><span class="">z</span></a>
                        </div>
                    </div>
                </div>
                <div class="hover-button">
                    <x-hoverBtn href="#">View All Technologies</x-hoverBtn>
                </div>

            </div>
        </div>
    </div>
    </div>

</section>

@push('js')
    <script>
        function setActive(el) {
            $('.sp-btn').removeClass('active-btn');
            $(el).addClass('active-btn');
        }
    </script>
@endpush

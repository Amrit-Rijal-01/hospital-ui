<section class="specialities">

    <div class="main-container">
        <div class="specialities-inner d-flex flex-column flex-xl-row gap-2">
            <div class="sp-inner-heading">
                <h4 class="sp-subheading">Specialities</h4>
                <h2 class="sp-heading">An Ecosystem for Clinical Excellence</h2>
            </div>
            <div class="sp-inner-care  fw-bold">
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
                    <x-hoverBtn class="hover-btn" href="https://www.google.com" target="_blank">
                        View All Specialities
                    </x-hoverBtn>
                </div>
            </div>
            <div class="sp-inner-search">
                <div class="sp-wrapper">
                    <h4 class="sp-subheading">Search By</h4>
                    <div class="sp-search-by d-flex justify-content-evenly gap-1">
                        <button class="flex-fill sp-btn active-btn" onclick="setActive(this)">Ailments</button>
                        <button class="flex-fill sp-btn" onclick="setActive(this)">Treatments</button>
                        <button class="flex-fill sp-btn" onclick="setActive(this)">Technologies</button>
                    </div>
                    <div class="sp-search-letter">
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>a</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>b</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>c</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>d</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>e</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>f</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>g</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>h</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>i</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>j</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>k</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>l</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>m</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>n</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>o</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>p</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>q</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>r</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>s</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>t</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>u</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>v</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>w</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>x</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>y</span></button>
                        </div>
                        <div class="letter-wrap"><button onclick="setActiveLetter(this)"><span>z</span></button>
                        </div>
                    </div>
                </div>
                <div class="hover-button">
                    <x-hoverBtn class="hover-btn" href="#"><a href="/ailments" class="hover-btn-text">View All Ailments</a></x-hoverBtn>
                </div>

            </div>
        </div>
    </div>
    </div>

</section>

@push('js')
    <script>
        $(document).ready(function() {
            // Function to set active button and update hover button link
            window.setActive = function(button) {
                // Remove active class from all buttons
                $('.sp-search-by .sp-btn').removeClass('active-btn');

                // Add active class to clicked button
                $(button).addClass('active-btn');

                // Get the category text from the active button
                const category = $(button).text().trim();

                // Update the hover button text and link
                const $hoverBtn = $('.hover-btn-text');
                $hoverBtn.text(`View All ${category}`);

                // Set the appropriate link based on the category
                switch (category) {
                    case 'Ailments':
                        $hoverBtn.attr('href', '/ailments');
                        break;
                    case 'Treatments':
                        $hoverBtn.attr('href', '/treatments');
                        break;
                    case 'Technologies':
                        $hoverBtn.attr('href', '/technologies');
                        break;
                    default:
                        $hoverBtn.attr('href', '/ailments');
                }
            };

            // Function to handle letter button clicks
            window.setActiveLetter = function(letterButton) {
                // Get all letter buttons
                const $letterButtons = $('.sp-search-letter .letter-wrap button');

                // Remove active class from all letter buttons
                $letterButtons.removeClass('active');

                // Add active class to clicked letter
                $(letterButton).addClass('active');

                // Get the letter from the button
                const letter = $(letterButton).find('span').text().trim();

                // Get the current category from active button
                const activeCategory = $('.sp-search-by .active-btn').text().trim();

                // Update hover button to include the letter
                const $hoverBtn = $('.hover-btn');
                $hoverBtn.text(`View ${letter.toUpperCase()} ${activeCategory}`);

                // Update the link to include the letter parameter
                const currentHref = $hoverBtn.attr('href').split('?')[0]; // Get base URL without query params
                $hoverBtn.attr('href', `${currentHref}?letter=${letter.toLowerCase()}`);
            };

            // Set initial hover button state based on default active button
            const $defaultActiveBtn = $('.sp-search-by .active-btn');
            if ($defaultActiveBtn.length) {
                setActive($defaultActiveBtn[0]);
            }

            // Add click event listeners to all letter buttons
            $('.sp-search-letter .letter-wrap button').each(function() {
                $(this).on('click', function() {
                    setActiveLetter(this);
                });
            });
        });
    </script>
@endpush

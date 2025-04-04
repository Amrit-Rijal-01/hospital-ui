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
                <div class="hover-button-sp active">
                    <x-hoverBtn class="hover-btn" href="/ailments" data-content="ailments"><span
                            class="hover-text">View All Ailments</span></x-hoverBtn>
                </div>
                <div class="hover-button-sp">
                    <x-hoverBtn class="hover-btn" href="/treatments" data-content="treatments"><span
                            class="hover-text">View All Treatments</span></x-hoverBtn>
                </div>
                <div class="hover-button-sp">
                    <x-hoverBtn class="hover-btn" href="/technologies" data-content="technologies"><span
                            class="hover-text">View All Technologies</span></x-hoverBtn>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

@push('js')
    <script>
        $(document).ready(function() {
            // Function to set active button and update hover button href
            window.setActive = function(button) {
                // Remove active class from all buttons
                $('.sp-search-by .sp-btn').removeClass('active-btn');

                // Add active class to clicked button
                $(button).addClass('active-btn');

                // Get the category text from the active button
                const category = $(button).text().trim().toLowerCase();

                // Get the appropriate URL based on category
                let targetUrl = '/ailments'; // Default
                if (category === 'treatments') {
                    targetUrl = '/treatments';
                } else if (category === 'technologies') {
                    targetUrl = '/technologies';
                }

                // Store the current category URL for letter buttons to use
                $('.sp-search-letter').attr('data-current-category', category);
                $('.sp-search-letter').attr('data-current-url', targetUrl);

                // Update the hover button href and text without changing inner structure
                $('.hover-button-sp .hover-btn').each(function() {
                    // Update href
                    $(this).attr('href', targetUrl);

                    // Try to find a text element to update
                    let textEl = $(this).find('.hover-text');
                    if (textEl.length === 0) {
                        // If no dedicated text element exists, update text carefully
                        const newText = 'View All ' + category.charAt(0).toUpperCase() + category.slice(
                            1);

                        // Clone to work with its contents
                        const $clone = $(this).clone();
                        $clone.children().remove();

                        // Store original HTML
                        const originalHTML = $(this).html();

                        // Replace the text content
                        const originalText = $clone.text().trim();
                        if (originalText) {
                            const newHTML = originalHTML.replace(originalText, newText);
                            $(this).html(newHTML);
                        }
                    } else {
                        // If we found a dedicated text element, just update it
                        textEl.text('View All ' + category.charAt(0).toUpperCase() + category.slice(1));
                    }
                });
            };

            // Function to handle letter button clicks - now directly navigates
            window.setActiveLetter = function(letterButton) {
                // Add active class to clicked letter
                $('.sp-search-letter .letter-wrap button').removeClass('active');
                $(letterButton).addClass('active');

                // Get the letter from the button
                const letter = $(letterButton).find('span').text().trim().toLowerCase();

                // Get the current category base URL from data attribute
                const categoryUrl = $('.sp-search-letter').attr('data-current-url') || '/ailments';

                // Directly navigate to the category+letter page
                window.location.href = `${categoryUrl}?letter=${letter}`;
            };

            // Set initial state based on default active button
            const $defaultActiveBtn = $('.sp-search-by .active-btn');
            if ($defaultActiveBtn.length) {
                setActive($defaultActiveBtn[0]);
            }
        });
    </script>
@endpush

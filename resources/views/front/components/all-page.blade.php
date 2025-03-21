<section id="all-section">
    <div class="main-container">
        <div class="heading mb-4 text-center">All Heading</div>
        <div class="letter-slider">
            <div class="char-wrapper"><button class="char char-all active">All</button></div>
            <div class="char-wrapper"><button class="char char-a">A</button></div>
            <div class="char-wrapper"><button class="char char-b">B</button></div>
            <div class="char-wrapper"><button class="char char-c">C</button></div>
            <div class="char-wrapper"><button class="char char-d">D</button></div>
            <div class="char-wrapper"><button class="char char-e">E</button></div>
            <div class="char-wrapper"><button class="char char-f">F</button></div>
            <div class="char-wrapper"><button class="char char-g">G</button></div>
            <div class="char-wrapper"><button class="char char-h">H</button></div>
            <div class="char-wrapper"><button class="char char-i">I</button></div>
            <div class="char-wrapper"><button class="char char-j">J</button></div>
            <div class="char-wrapper"><button class="char char-k">K</button></div>
            <div class="char-wrapper"><button class="char char-l">L</button></div>
            <div class="char-wrapper"><button class="char char-m">M</button></div>
            <div class="char-wrapper"><button class="char char-n">N</button></div>
            <div class="char-wrapper"><button class="char char-o">O</button></div>
            <div class="char-wrapper"><button class="char char-p">P</button></div>
            <div class="char-wrapper"><button class="char char-q">Q</button></div>
            <div class="char-wrapper"><button class="char char-r">R</button></div>
            <div class="char-wrapper"><button class="char char-s">S</button></div>
            <div class="char-wrapper"><button class="char char-t">T</button></div>
            <div class="char-wrapper"><button class="char char-u">U</button></div>
            <div class="char-wrapper"><button class="char char-v">V</button></div>
            <div class="char-wrapper"><button class="char char-w">W</button></div>
            <div class="char-wrapper"><button class="char char-x">X</button></div>
            <div class="char-wrapper"><button class="char char-y">Y</button></div>
            <div class="char-wrapper"><button class="char char-z">Z</button></div>
        </div>
        <div class="search-input mb-4">
            <form action="">
                <div class="form-floating">
                    <input type="text" name="searchBox" class="form-control" placeholder="Search for Treatments">
                    <label for="searchBox">Search for Treatments</label>
                    <i class="bi bi-search"></i>
                </div>
            </form>
        </div>
        <div class="cards-container">
            <div class="row g-3">
                @for ($i = 0; $i < 50; $i++)
                    <div class="col-md-6 treatment-card">
                        <x-card class="bg-white rounded-4" title="{{ $i }} Title For Treatment">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                @endfor
            </div>
        </div>
        <div class="pagination-container d-flex justify-content-center mt-4">
            <button id="prevPage" class="left-arrow mx-4"><img
                    src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>
            <div id="paginationButtons" class="d-flex"></div>
            <button id="nextPage" class="right-arrow mx-4"><img
                    src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>
        </div>

    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.letter-slider').slick({
                slidesToShow: 10,
                slidesToScroll: 3,
                infinite: false,
                arrows: true,
                prevArrow: '<button class="slick-prev left-arrow"><img src="{{ asset('front/img/vector-left.png') }}" alt="Left Arrow"></button>',
                nextArrow: '<button class="slick-next right-arrow"><img src="{{ asset('front/img/vector-right.png') }}" alt="Right Arrow"></button>',
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 8,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2
                        }
                    }
                ]
            });

            const itemsPerPage = 10;
            let currentPage = 1;
            const cards = $(".treatment-card");
            const totalPages = Math.ceil(cards.length / itemsPerPage);
            const paginationContainer = $("#paginationButtons");

            function showPage(page) {
                cards.hide(); // Hide all cards
                const start = (page - 1) * itemsPerPage;
                const end = start + itemsPerPage;
                cards.slice(start, end).show(); // Show only the selected page cards
                $("#prevPage").prop("disabled", page === 1);
                $("#nextPage").prop("disabled", page === totalPages);
                $(".page-btn").removeClass("active");
                $(`#page-${page}`).addClass("active");
            }

            function createPaginationButtons() {
                paginationContainer.empty(); // Clear existing buttons
                for (let i = 1; i <= totalPages; i++) {
                    let button = $(
                        `<button class="mx-1 heading page-btn " id="page-${i}">${i}</button>`);
                    button.click(() => {
                        currentPage = i;
                        showPage(currentPage);
                    });
                    paginationContainer.append(button);
                }
            }

            // Handle button clicks
            $("#prevPage").click(() => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            $("#nextPage").click(() => {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Initialize pagination
            createPaginationButtons();
            showPage(currentPage);
        });
    </script>
@endpush

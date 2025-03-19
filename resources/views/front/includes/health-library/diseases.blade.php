<section id="diseases-section">
    <div class="main-container">
        <div class="search">
            <form action="">
                <div class="form-floating">
                    <input type="text" name="searchBox" class="form-control"
                        placeholder="Search for Ailments and Conditions">
                    <label for="searchBox">Search for Ailments and Conditions</label>
                    <button><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
        <div class="diseases row">
            <div class="col-md-8">
                <div class="heading-sm">Most Searched</div>
                <div class="most-searched-terms">
                    <ul>
                        <li>
                            <a href="#" onclick="setMostSearched(event)">
                                <span>Cancer <i class="bi bi-chevron-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="setMostSearched(this)">
                                <span>Diabetes <i class="bi bi-chevron-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="setMostSearched(this)">
                                <span>Allergies <i class="bi bi-chevron-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="setMostSearched(this)">
                                <span>Fracture <i class="bi bi-chevron-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="heading-sm">
                    Find Diseases & Conditions By First Letter
                </div>
                <div class="sp-search-letter">
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">all</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">a</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">b</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">c</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">d</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">e</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">f</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">g</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">h</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">i</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">j</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">k</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">l</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">m</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">n</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">o</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">p</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">q</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">r</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">s</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">t</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">u</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">v</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">w</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">x</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">y</span></button>
                    </div>
                    <div class="letter-wrap"><button class="" onclick="setLetter(this)"><span class="">z</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        function setMostSearched(el) {
            el.preventDefault();
            console.log('click');

        }
        function setLetter(el) {

        }
    </script>
@endpush

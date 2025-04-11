<header class="site-header" id="site-header">
    <div class="main-container" id="mainNavbar">
        <a href="/" class="logo-link"><img height="75" width="250" src="{{ asset('front/img/logo.png') }}" class="logo"
                alt=""></a>
        <nav class="navbar navbar-expand p-0" id="navbar">
            <div class="">
                <ul class="nav-ul">
                    <li class="navbar-item" onclick="extendSubMenu(this)">
                        <a class="navbar-link">
                            Speciality <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="/speciality" class="drop-item">Speciality 1</a>
                            </li>
                            <li>
                                <a href="/speciality" class="drop-item">Speciality 2</a>
                            </li>
                            <li>
                                <a href="/speciality" class="drop-item">Speciality 3</a>
                            </li>
                            <li>
                                <a href="/all-specialities" class="drop-item">All Specialities</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item" onclick="extendSubMenu(this)">
                        <a href="#" class="navbar-link">
                            Health Library <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="/health-library" class="drop-item">Health Library</a>
                            </li>
                            <li>
                                <a href="/treatments" class="drop-item">Treatments</a>
                            </li>
                            <li>
                                <a href="/technologies" class="drop-item">Technologies</a>
                            </li>
                            <li>
                                <a href="/ailments" class="drop-item">Ailments</a>
                            </li>
                            <li class="navbar-item knowledge-drop" onclick="extendKnowledgeSubMenu(this, event)">
                                <a href="#" class="drop-item navbar-link knowledge-link d-flex justify-content-between">
                                    <span>Knowledge</span> <i class="bi bi-chevron-right"></i>
                                </a>
                                <ul class="knowledge-drop-menu">
                                    <li>
                                        <a href="/blogs" class="drop-item">Blogs</a>
                                    </li>
                                    <li>
                                        <a href="/videos" class="drop-item">Videos</a>
                                    </li>
                                    <li>
                                        <a href="/case-studies" class="drop-item">Case Studies</a>
                                    </li>
                                    <li>
                                        <a href="/news-letter" class="drop-item">News Letter</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/events" class="drop-item">Events</a>
                            </li>
                            <li>
                                <a href="/downloads" class="drop-item">Downloads</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item" onclick="extendSubMenu(this)">
                        <a href="#" class="navbar-link">
                            Services <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="#" class="drop-item">Services 1</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Services 2</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Services 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                        <a href="/career" class="navbar-link ">Career</a>
                    </li>
                    <li class="navbar-item" onclick="extendSubMenu(this)">
                        <a href="#" class="navbar-link">
                            Contact Us <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="/contact-us" class="drop-item">Contact Us</a>
                            </li>
                            <li>
                                <a href="mailto:hello@example.com" class="drop-item">Mail</a>
                            </li>
                            <li>
                                <a href="tel:+9779876543210" class="drop-item">number</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="feedback-contact">
            <div class="cancer-care">
                <img src="{{ asset('front/img/nobel cancer.png') }}" alt="">
            </div>
           
        </div>
    </div>
    <div class="sectionNavbarMainContainer d-none">
        <hr>
        <div class="main-container">
            <nav class="section-nav" id="section-nav">
                <div class="section-navbar-container">
                    <ul id="sectionLinks">

                    </ul>
                </div>
            </nav>
        </div>

    </div>
</header>

@push('js')
    <script>
        $(function () {
            const $sections = $('section[data-content]');
            const $sectionLinks = $('#sectionLinks');
            const $mainSectionNavbarContainer = $('.sectionNavbarMainContainer');
            let scrolling = false;
            let scrollTimeout;

            // Generate section nav links

            if (window.appConfig.showSectionNav && $sectionLinks.length) {
                $mainSectionNavbarContainer.show();

                $sections.each(function () {
                    const sectionId = $(this).attr('id');
                    const sectionName = $(this).data('content');

                    $('<li>')
                        .append(
                            $('<a>')
                                .attr('href', `#${sectionId}`)
                                .text(sectionName)
                                .on('click', function (e) {
                                    e.preventDefault();
                                    scrolling = true;

                                    $('#sectionLinks a').removeClass('active');
                                    $(this).addClass('active');

                                    $('html, body').animate({
                                        scrollTop: $(`#${sectionId}`).offset().top - 120
                                    }, 10, function () {
                                        setTimeout(() => scrolling = false, 100);
                                    });

                                    scrollActiveLinkIntoView();
                                })
                        )
                        .appendTo($sectionLinks);
                });

                $(window).on('scroll', function () {
                    if (scrolling) return;

                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(() => {
                        let currentId = '';

                        $($sections.get().reverse()).each(function () {
                            if ($(window).scrollTop() >= $(this).offset().top - 150) {
                                currentId = $(this).attr('id');
                                return false;
                            }
                        });

                        if (currentId) {
                            $('#sectionLinks a').removeClass('active');
                            $(`#sectionLinks a[href="#${currentId}"]`).addClass('active');
                            scrollActiveLinkIntoView();
                        }
                    }, 100);
                });
            } else {
                $mainSectionNavbarContainer.hide();
            }

            function scrollActiveLinkIntoView() {
                if ($(window).width() < 1200) {
                    const $activeLink = $('#sectionLinks a.active');

                    if ($activeLink.length) {
                        const $ul = $('#sectionLinks');
                        const linkOffset = $activeLink.parent().position().left + 23;

                        $ul.css({
                            'transition': 'transform 0.3s ease',
                            'transform': `translateX(${-linkOffset}px)`
                        });
                    }
                }
            }


        });

        function extendSubMenu(el) {
            if ($(window).width() < 1300) {
                if ($(el).hasClass('active-list')) {
                    $(el).removeClass('active-list');
                    return;
                }
                $('.navbar-item').removeClass('active-list');
                $(el).addClass('active-list');
            }
        }

        function extendKnowledgeSubMenu(el, event) {
            event.stopPropagation();
            $(el).toggleClass('active-knowledge');
        }

        function toggleFeedback() {
            if ($(window).width() < 481) {
                $(window).on("scroll", function () {
                    $(".feedback-contact").toggleClass('hide-feedback', $(window).scrollTop() > 100);
                });
            } else {
                $(window).off("scroll");
            }
        }

        toggleFeedback();
        $(window).on('resize', toggleFeedback);


    </script>
@endpush
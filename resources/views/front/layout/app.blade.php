<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('meta')">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <link rel="preload" as="image" href="{{ asset('front/img/logo.png') }}">
    
    <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">

    <title>@yield('title')</title>
    @stack('css')
</head>

<body>
    <div id="app">
        @include('front.layout.header')
        <main>
            <div id="breadcrumbs-section" class="d-none">
                <div class="main-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" id="dynamic-breadcrumbs">

                        </ol>
                    </nav>
                </div>
            </div>
            @yield('content')
        </main>
        @include('front.layout.footer')
        @include('front.layout.mobile-nav')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        window.appConfig = window.appConfig || {};
        window.appConfig.showSectionNav = false;


        function toggleSectionNav(show) {
            window.appConfig.showSectionNav = show;

            if (show) {
                $('.sectionNavbarMainContainer').show().removeClass('d-none');
            } else {
                $('.sectionNavbarMainContainer').hide();
            }
        }

        function adjustMainMargin() {

            $('.site-header').css('display', 'none').height();
            $('.site-header').css('display', '');

            let headerBaseHeight = $('.site-header').outerHeight();

            if (!window.appConfig.showSectionNav && $('.sectionNavbarMainContainer').length) {
                // Subtract the section nav container height from total header height
                headerBaseHeight -= $('.sectionNavbarMainContainer').outerHeight();
            }

            console.log($('.site-header').outerHeight(), 'outer');

            $('main').css('margin-top', headerBaseHeight + 'px');
        }

        // function equalizeCardHeight(selector) {
        //     let maxHeight = 0;

        //     $(selector).css('height', 'auto').each(function () {
        //         maxHeight = Math.max(maxHeight, $(this).height());
        //     });

        //     $(selector).height(maxHeight);
        // }


    </script>

    <script>
        // Breadcrumbs functionality
        let breadcrumbsVisible = false; // Default setting (hidden)

        // Function to generate breadcrumbs from URL
        function generateBreadcrumbs() {
            const pathname = window.location.pathname;
            const pathSegments = pathname.split('/').filter(segment => segment !== '');

            const breadcrumbsContainer = $('#dynamic-breadcrumbs');
            breadcrumbsContainer.empty();

            // Always add Home as the first item
            breadcrumbsContainer.append(`
    <li class="breadcrumb-item">
      <a href="/">Home</a>
    </li>
  `);

            // Build up the path as we go
            let currentPath = '';

            // Map common path segments to readable names
            const segmentNames = {
                'doctors': 'Doctors',
                'doctor-profile': 'Doctor Profile',
                'medical-experts': 'Medical Experts',
                'services': 'Services',
                'about': 'About Us',
                'contact': 'Contact Us'
                // Add more mappings as needed
            };

            // Add intermediate paths
            for (let i = 0; i < pathSegments.length; i++) {
                const segment = pathSegments[i];
                currentPath += '/' + segment;

                // Replace hyphens with spaces and capitalize for display
                const displayName = segmentNames[segment] ||
                    segment.replace(/-/g, ' ')
                        .replace(/\b\w/g, l => l.toUpperCase());

                // If it's the last segment, mark it as active
                if (i === pathSegments.length - 1) {
                    breadcrumbsContainer.append(`
        <li class="breadcrumb-item active" aria-current="page">${displayName}</li>
      `);
                } else {
                    breadcrumbsContainer.append(`
        <li class="breadcrumb-item">
          <a href="${currentPath}">${displayName}</a>
        </li>
      `);
                }
            }

            // If we're at the root path, add a default second item
            if (pathSegments.length === 0) {
                breadcrumbsContainer.append(`
      <li class="breadcrumb-item active" aria-current="page">Home</li>
    `);
            }
        }

        function toggleBreadcrumbs(show = null) {
            // If show parameter is provided, use it; otherwise toggle current state
            breadcrumbsVisible = show !== null ? show : !breadcrumbsVisible;

            const breadcrumbsSection = $('#breadcrumbs-section');

            if (breadcrumbsVisible) {
                // Generate breadcrumbs before showing them
                generateBreadcrumbs();
                breadcrumbsSection.removeClass('d-none').addClass('show');
            } else {
                breadcrumbsSection.removeClass('show').addClass('d-none');
            }

            // Return current state
            return breadcrumbsVisible;
        }

        // Example of how to call the function:
        // toggleBreadcrumbs(true); // Show breadcrumbs
        // toggleBreadcrumbs(false); // Hide breadcrumbs
        // toggleBreadcrumbs(); // Toggle current state
    </script>
    @stack('js')
    <script>
        setTimeout(() => {
            adjustMainMargin();
        }, 1);
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="description" content="@yield('meta')">
   <link rel="dns-prefetch" href="//fonts.googleapis.com">
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
   <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
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
                  <ol class="breadcrumb">
                     
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
      window.appConfig.showSectionNav = true;

      function toggleSectionNav(show) {
         window.appConfig.showSectionNav = show;

         if (show) {
            $('.sectionNavbarMainContainer').show();
         } else {
            $('.sectionNavbarMainContainer').hide();
         }
      }
      function equalizeCardHeight(selector) {
         let maxHeight = 0;

         $(selector).css('height', 'auto').each(function () {
            maxHeight = Math.max(maxHeight, $(this).height());
         });

         $(selector).height(maxHeight);
      }

      
   </script>
   @stack('js')
</body>

</html>
<section id="single-service-package">
   <div class="main-container">
      <div class="heading text-center mb-4">
         Package List
      </div>
      <div class="filters">
         <div class="filter gender-filter">
            <div class="default-select default-select-gender">
               <span class="name gender-name">
                  Gender
               </span>
               <i class="bi bi-chevron-down"></i>
            </div>
            <div class="list gender-list">
               <ul>
                  <li data-gender-target="male">Male</li>
                  <li data-gender-target="female">Female</li>
               </ul>
               <input type="hidden" name="packageGender" id="package-gender">
            </div>

         </div>
         <div class="filter package-category-filter">
            <div class="default-select default-select-category">
               <span class="name category-name">
                  All
               </span>
               <i class="bi bi-chevron-down"></i>
            </div>
            <div class="list category-list">
               <ul>
                  <li data-category-target="all">All</li>
                  <li data-category-target="category-1">Category 1</li>
                  <li data-category-target="category-2">Category 2</li>
               </ul>
               <input type="hidden" name="packageCategory" id="package-category">
            </div>
         </div>
         <button class="go-btn">Go</button>
      </div>
      <div class="package-list">
         <div class="row g-4">
            <div class="col-md-6 col-lg-4 col-xl-3 package-card-col" data-gender="male" data-category="category-1">
               <div class="package-card">
                  <div class="img-wrapper">
                     <img src="{{ asset('front/img/service-package.png') }}" alt="Service Image">
                  </div>
                  <div class="body">
                     <div class="package-title">
                        Name of the package
                     </div>
                     <span class="price">Rs. 20,000</span>
                     <x-hoverBtn class="para-wrap">Know More</x-hoverBtn>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 package-card-col" data-gender="female" data-category="category-1">
               <div class="package-card">
                  <div class="img-wrapper">
                     <img src="{{ asset('front/img/service-package.png') }}" alt="Service Image">
                  </div>
                  <div class="body">
                     <div class="package-title">
                        Name of the package
                     </div>
                     <span class="price">Rs. 20,000</span>
                     <x-hoverBtn class="para-wrap">Know More</x-hoverBtn>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 package-card-col" data-gender="male" data-category="category-2">
               <div class="package-card">
                  <div class="img-wrapper">
                     <img src="{{ asset('front/img/service-package.png') }}" alt="Service Image">
                  </div>
                  <div class="body">
                     <div class="package-title">
                        Name of the package
                     </div>
                     <span class="price">Rs. 20,000</span>
                     <x-hoverBtn class="para-wrap">Know More</x-hoverBtn>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 package-card-col" data-gender="female" data-category="category-2">
               <div class="package-card">
                  <div class="img-wrapper">
                     <img src="{{ asset('front/img/service-package.png') }}" alt="Service Image">
                  </div>
                  <div class="body">
                     <div class="package-title">
                        Name of the package
                     </div>
                     <span class="price">Rs. 20,000</span>
                     <x-hoverBtn class="para-wrap">Know More</x-hoverBtn>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@push('js')
   <script>
      $(document).ready(function () {
        $('.default-select').on('click', function () {
          $(this).closest('.filter').toggleClass('active');
        })

        let selectedGender = '';
        let selectedCategory = '';

        $('.list li').on('click', function () {
          let $filter = $(this).closest('.filter');

          $filter.find('.name').text($(this).text());

          if ($filter.hasClass('gender-filter')) {
            selectedGender = $(this).data('gender-target');
          } else if ($filter.hasClass('package-category-filter')) {
            selectedCategory = $(this).data('category-target')
          }

          $filter.removeClass('active');
        });

        $('.go-btn').on('click', function () {
          filterCards();
        });

        function filterCards() {
          if (selectedGender) {
            $('.package-card-col').not(`[data-gender="${selectedGender}"]`).hide();
          }
  
          if (selectedCategory && selectedCategory !== 'all') {
            $('.package-card-col').not(`[data-category="${selectedCategory}"]`).hide();
          }
        }
      });
   </script>
@endpush
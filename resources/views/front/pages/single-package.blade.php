@extends('front.layout.app')

@section('title', 'Package Name')
@section('meta', 'Package Name page for the website')

@section('content')
      <section id="single-package-top-banner">
        <div class="package-top-banner">
         <div class="img-wrapper">
           <img src="{{ asset('front/img/service-package.png') }}" alt="Package Image">
         </div>
         <div class="about-package">
           <div class="heading-lg mb-4">Name of the package</div>
           <ul>
            <li>Lab Tests: 21</li>
            <li>Parameters: 80</li>
            <li>Ideal for: Male/Female</li>
            <li>Age Group: >18 years</li>
           </ul>
           <div class="heading-md price">Rs. 15,000</div>
           <button>Enquire Now</button>
         </div>
        </div>
      </section>
      <section id="single-package-overview">
        <div class="main-container">
         <div class="heading mb-4">
           Name of the Service
         </div>
         <div class="content-wrapper">
           <p class="para-wrap">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ab dolorum accusantium sit est, fuga fugit
            animi exercitationem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ab dolorum
            accusantium sit est, fuga fugit
            animi exercitationem Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis minima libero
            eligendi commodi cumque tempore maxime! Consectetur ex qui error quo recusandae quam ipsum? Voluptatem
            itaque molestias sequi facere laborum?
           </p>
           <button class="read-more-btn">Read More <i class="bi bi-chevron-down"></i></button>
         </div>
        </div>
      </section>
      <section id="single-package-content">
        <div class="main-container">
         <div class="tabs heading-sm">
           <div class="tab active" data-target="#tab-1">Inclusion</div>
           <div class="tab" data-target="#tab-2">Who Should Buy?</div>
           <div class="tab" data-target="#tab-3">Guidelines</div>
         </div>
         <div class="tabs-content">
           <div class="tab-content active" id="tab-1">
            <h6>Blood Investigation</h6>
            <ul>
               <li>Hemogram</li>
               <li>Blood group & ABO screening</li>
            </ul>
            <h6>KIDNEY HEALTH</h6>
            <ul>
               <li>Renal Function Test</li>
               <li>Ultrasound Doppler Renal</li>
               <li>Urine Creatinine Albumin Ratio</li>
            </ul>
           </div>
           <div class="tab-content " id="tab-2">
            <p>
               The package is designed by our expert team of cardiologist for people suffering from high blood pressure for
               more than 5
               years
            </p>
           </div>
           <div class="tab-content " id="tab-3">
            <h6>General Instructions:</h6>
            <ul>
               <li>Get Sufficient Rest.</li>
               <li>
                Please do not eat or drink anything (no tea coffee lime water etc. ) except water for a minimum of 10
                to 12 hours (Plain
                water is permitted) and abstinence from excessive fatty meal and meat for dinner in the evening before
                is essential.
               </li>
               <li>Renal Doppler test (included in the Hypertension package) requires 12 hours fasting.</li>
            </ul>
            <h6>Other Instructions:</h6>
            <ul>
               <li>
                If you are a diabetic/cardiac/BP patient or have suffered any illness or fever in the recent past
                please inform the EHC
                reception in advance.
               </li>
               <li>
                All corporate clients are requested to bring the original credit letter from your company.
               </li>
               <li>
                For identification kindly bring a valid photo ID Card.
               </li>
            </ul>
           </div>
         </div>
        </div>
      </section>
@endsection
@push('js')
       <script>
        toggleBreadcrumbs(true);
          $('#single-package-overview .read-more-btn').on('click', function () {
            $('#single-package-overview').find('.content-wrapper').toggleClass('active');
          })

          $('.tab').on('click', function () {
            $('.tab').removeClass('active');
            $(this).addClass('active');

            let $tab = $(this).data('target');
            $('.tab-content').removeClass('active');

            $($tab).addClass('active');

          })
       </script>
@endpush
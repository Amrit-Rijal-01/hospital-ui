<section id="single-service-top-banner">
   <div class="wrapper">
      <picture class="img-wrap">
         <source media="(min-width: 768px)" srcset="{{ asset('front/img/per-technology/banner.jpg') }}">
         <source media="(min-width: 320px)" srcset="{{ asset('front/img/per-technology/banner-md.jpg') }}">

         <img src="{{ asset('front/img/per-technology/banner.jpg') }}" class="img-fluid" alt="Treatment Banner Image">
      </picture>
      <div class="banner-wrapper">
         <div class="banner-title">
            Name of the Service
         </div>
      </div>
   </div>
   <div class="callback-form">
      <form action="">
         <div class="heading-md">Request a Callback</div>
         <div class="input-wrap">
            <label for="name">Name *</label>
            <input type="text" name="name" placeholder="Enter Your Name" required>
         </div>
         <div class="input-wrap">
            <label for="mobileNumber">Mobile Number *</label>
            <input type="text" name="mobileNumber" placeholder="Enter Your Phone Number" required>
         </div>
         <div class="input-wrap">
            <label for="email">Email Address</label>
            <input type="text" name="email" placeholder="Enter Your E-mail">
         </div>
         <div class="input-wrap">
            <label for="message">Message</label>
            <input type="text" name="message" placeholder="Enter Your Message">
         </div>
         <div class="btn-wrap w-100">
            <button>Submit</button>
         </div>
      </form>
   </div>
</section>
<section id="cpr-banner">
    <div class="wrapper">
        <picture class="img-wrap">
                <source media="(min-width: 768px)" srcset="{{ asset('front/img/cpr/banner.jpg') }}" width="1920" height="500" alt="CPR">
                <source media="(min-width: 320px)" srcset="{{ asset('front/img/cpr/banner-md.jpg') }}" width="480" height="320" alt="CPR">
                <img src="{ asset('front/img/cpr/banner.jpg') }}"" width="1920" height="500" alt="CPR">
            </picture>
        <div class="banner-wrapper">
            <div class="banner-title">
                CPR
            </div>
            <div class="download-btn"><a href="#">Download Brochure</a></div>
        </div>
    </div>
    <div class="callback-form">
        <form action="">
            <div class="heading-md">Enroll Now</div>
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
            <div class="btn-wrap w-100">
               <button>Submit</button>
            </div>
        </form>
    </div>
</section>

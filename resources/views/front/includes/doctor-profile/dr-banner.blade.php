<section id="dr-banner">
    <div class="main-container">
        <div class="content-wrapper d-flex flex-column flex-lg-row justify-content-center gap-4">
            <div class="img-container">
                <img src="{{ asset('front/img/doctor-profile/chairman.png') }}" alt="Doctor Image">
            </div>
            <div class="details align-self-center">
                <h4 class="name">Dr. Name</h4>
                <p class="post"> Dr. Post</p>
                <p class="dr-info">
                    <span>Types of surgery done</span>
                    <span>Specialization</span>
                </p>
                <p>Education Degree</p>
                <p class="location"><i class="bi bi-geo-alt"> Nobel Biratnagar</i></p>
                <button class="share-btn" data-bs-toggle="modal" data-bs-target="#shareModal"><i class="bi bi-share"></i> Share Doctor Profile</button>

                <div class="modal" id="shareModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0 pb-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0">
                              <div class="heading text-center mb-3">
                                 Share Profile Via
                              </div>
                                <div class="share-links d-flex justify-content-center gap-3 fs-2 mb-5">
                                    <a href="#">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-twitter-x"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

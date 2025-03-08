<section class="team-section mt-5">
        <div class="main-container">
            <div class="meet-doc-content">
                <h3 class="text-center fw-bold mb-4">Doctors, Pioneers, Life Savers</h3>
                <div class="text-center mb-5">
                    <p>
                        Our superspecialist doctors provide the highest quality of care through a team-based,
                        doctor-led model. Trained at some of the world's most renowned institutions,
                        our highly experienced doctors are distinguished experts in their respective specialities.
                        Our doctors work full-time and exclusively across Medanta hospitals.
                        In addition to offering superspecialised care in their own field,
                        the Medanta organisational structure enables every doctor to help
                        create a culture of collaboration and multispecialty care integration.
                    </p>
                </div>
                <div class="find-doc">
                    <form>
                        <div class="find-doc-form">
                            <div class="select-wrap d-flex justify-content-center gap-2">
                                <div class="find-doc-location-wrap">
                                    <div class="default-location-item">
                                        <span>Kathmandu</span>
                                    </div>
                                    <ul class="find-doc-list location" id="find-doc-location">
                                        {{-- <li data-value="0">Kathmandu</li> --}}
                                        <li data-value="1">Pokhara</li>
                                        <li data-value="2">Biratnagar</li>
                                    </ul>
                                    <input type="hidden" name="find-doc-location" id="find-doc-location-input">
                                </div>
                                <div class="find-doc-speciality-wrap">
                                    <div class="default-speciality-item">
                                        <span>All Specialities</span>
                                    </div>
                                    <ul class="find-doc-list speciality" id="find-doc-speciality">
                                        <li data-value="1">Cardiac Care</li>
                                        <li data-value="2">Cancer Care</li>
                                        <li data-value="3">Neuro Science</li>
                                    </ul>
                                    <input type="hidden" name="find-doc-speciality" id="find-doc-location-input">
                                </div>
                                <button type="submit" class="find-doc-btn">Go</button>
                            </div>
                        </div>
                        @push('js')
                            <script>
                                $(function() {


                                })
                            </script>
                        @endpush
                    </form>
                </div>
            </div>
        </div>
        <picture class="image-block">
            <source media="(min-width:768px)" srcset="{{ asset('front/img/doctors-desktop.webp') }}"
                alt="meet-our-doctors">
            <source media="(min-width:320px)" srcset="{{ asset('front/img/doctor-mobile.webp') }}"
                alt="meet-our-doctors">
            <img class="img-fluid" src="{{ asset('front/img/doctors-desktop.webp') }}" alt="meet-our-doctors">
        </picture>
    </section>

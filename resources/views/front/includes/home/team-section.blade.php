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
                            <div class="find-doc-speciality-wrap">
                                <div class="default-speciality-wrap d-flex justify-content-between gap-5" id="default-speciality-wrap">
                                    <span class="default-speciality-item d-inline-block text-truncate">All
                                        Specialities</span>
                                    <div class="position-relative">
                                        <span class="anchor-down-btn d-inline-block" style="border-color: #000"></span>
                                    </div>
                                </div>
                                <div class="list-wrap" id="list-wrap">
                                    <ul class="find-doc-list-speciality" id="find-doc-speciality">
                                        <li data-value="1">Cardiac Care</li>
                                        <li data-value="2">Cancer Care</li>
                                        <li data-value="3">Neuro Science</li>
                                    </ul>
                                    <input type="hidden" name="find-doc-speciality" id="find-doc-speciality-input">
                                </div>
                            </div>
                            <button type="submit" class="find-doc-btn">Go</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <picture class="image-block">
        <source media="(min-width:768px)" srcset="{{ asset('front/img/doctors-desktop.webp') }}" alt="meet-our-doctors">
        <source media="(min-width:320px)" srcset="{{ asset('front/img/doctor-mobile.webp') }}" alt="meet-our-doctors">
        <img class="img-fluid" src="{{ asset('front/img/doctors-desktop.webp') }}" alt="meet-our-doctors">
    </picture>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('#default-speciality-wrap').click(function() {
                console.log('clicked');
                if($('#list-wrap').css('display') == 'block') {
                    $('#list-wrap').css('display', 'none');
                }
                $('#list-wrap').css('display', 'block');
            });

            $('#list-wrap ul li').click(function() {
                const selectedText = $(this).text();
                const selectedValue = $(this).data('value');

                $('#default-speciality-wrap span.default-speciality-item').text(selectedText);
                $('#find-doc-location-input').val(selectedValue);
                $('#find-doc-speciality').css('display', 'none');
            });
        });
    </script>
@endpush

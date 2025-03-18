<section class="treatment">
    <div class="main-container">
        <div class="heading-group text-center">
            <div class="heading">
                Treatments
            </div>
            <div class="heading-xs">
                Team approach and compassionate care for holistic heart health
            </div>
        </div>
        <div class="content-wrapper d-flex">
            <div class="desktop-list align-self-start align-self-xl-center px-3">
                <ul>
                    <li>
                        <button class="treatment-tab heading-xs active-btn d-flex justify-content-between"
                            onclick="setTreatmentActive(this)" data-target="ailment-1">Transcatheter
                            aortic valve
                            implantation (TAVI) <i class="bi bi-chevron-right"></i></button>
                    </li>
                    <li>
                        <button class="treatment-tab heading-xs d-flex justify-content-between" onclick="setTreatmentActive(this)"
                            data-target="ailment-2">
                            Peripheral Angioplasty
                            <i class="bi bi-chevron-right"></i></button>
                    </li>
                    <li>
                        <button class="treatment-tab heading-xs d-flex justify-content-between" onclick="setTreatmentActive(this)"
                            data-target="ailment-3">Coronary Artery Bypass
                            Graft surgery (CABG) <i class="bi bi-chevron-right"></i></button>
                    </li>
                    <li>
                        <button class="treatment-tab heading-xs d-flex justify-content-between" onclick="setTreatmentActive(this)"
                            data-target="ailment-4">Aneurysm Repair <i class="bi bi-chevron-right"></i></button>
                    </li>
                </ul>
            </div>

            <div class="info-container">
                <div class="treatment-tabs active" data-content="ailment-1">
                    <button class="treatment-tab heading-xs active-btn px-3 d-flex justify-content-between"
                        onclick="setTreatmentActive(this)" data-target="ailment-1">
                        Transcatheter aortic valve implantation (TAVI)
                        <i class="bi bi-chevron-up"></i>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="treatment-container" data-content="ailment-1">
                        <div class="img-side px-3">
                            <div class="treatment-img">
                                <img src="{{ asset('front/img/speciality/treatment.jpg') }}" alt="Treatment Image">
                            </div>
                        </div>
                        <div class="para-wrap">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus ab magnam accusamus
                            cupiditate veniam inventore fugiat adipisci ut, reiciendis voluptatum non quis a dolore
                            consectetur!
                        </div>
                    </div>
                </div>

                <div class="treatment-tabs" data-content="ailment-2">
                    <button class="treatment-tab heading-xs px-3 d-flex justify-content-between"
                        onclick="setTreatmentActive(this)" data-target="ailment-2">
                        Peripheral Angioplasty
                        <i class="bi bi-chevron-up"></i>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="treatment-container" data-content="ailment-2">
                        <div class="img-side px-3">
                            <div class="treatment-img">
                                <img src="{{ asset('front/img/speciality/treatment-2.jpg') }}" alt="Treatment Image">
                            </div>
                        </div>
                        <div class="para-wrap">
                            Peripheral angioplasty is a minimally invasive procedure used to widen narrowed or blocked
                            arteries in the peripheral vascular system. A stent is placed to help keep the artery open.
                            This approach aims to alleviate symptoms such as leg pain or cramping caused by reduced
                            blood flow and can also reduce the risk of more serious complications, such as peripheral
                            artery disease.
                        </div>
                    </div>
                </div>

                <div class="treatment-tabs" data-content="ailment-3">
                    <button class="treatment-tab heading-xs px-3 d-flex justify-content-between"
                        onclick="setTreatmentActive(this)" data-target="ailment-3">
                        Coronary Artery Bypass Graft surgery (CABG)
                        <i class="bi bi-chevron-up"></i>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="treatment-container" data-content="ailment-3">
                        <div class="img-side px-3">
                            <div class="treatment-img">
                                <img src="{{ asset('front/img/speciality/treatment.jpg') }}" alt="Treatment Image">
                            </div>
                        </div>
                        <div class="para-wrap">
                            Coronary Artery Bypass Graft surgery (CABG) is a procedure that improves blood flow to the heart.
                            It's used for patients with severe coronary heart disease, creating new routes around blocked arteries
                            using blood vessels taken from other parts of the body.
                        </div>
                    </div>
                </div>

                <div class="treatment-tabs" data-content="ailment-4">
                    <button class="treatment-tab heading-xs px-3 d-flex justify-content-between"
                        onclick="setTreatmentActive(this)" data-target="ailment-4">
                        Aneurysm Repair
                        <i class="bi bi-chevron-up"></i>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="treatment-container" data-content="ailment-4">
                        <div class="img-side px-3">
                            <div class="treatment-img">
                                <img src="{{ asset('front/img/speciality/treatment-2.jpg') }}" alt="Treatment Image">
                            </div>
                        </div>
                        <div class="para-wrap">
                            Aneurysm repair is a surgical procedure to correct an aneurysm, a bulge in a blood vessel caused by
                            weakness in the vessel wall. This procedure prevents rupture of the aneurysm, which can be life-threatening.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
    function setTreatmentActive(el) {
        console.log('clicked');
        let targetId = $(el).attr('data-target');

        $('.treatment-tab').removeClass('active-btn');
        $('.treatment-tabs').removeClass('active');

        // Set active state on clicked button
        $(el).addClass('active-btn');

        // Handle desktop vs mobile view differently
        if ($(el).closest('.desktop-list').length) {
            // Desktop list item was clicked
            $(`.treatment-tabs[data-content="${targetId}"]`).addClass('active');
            $(`.treatment-tabs[data-content="${targetId}"] .treatment-tab`).addClass('active-btn');
        } else {
            // Mobile tab was clicked
            $(el).closest('.treatment-tabs').addClass('active');
        }
    }
</script>
@endpush

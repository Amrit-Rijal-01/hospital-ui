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
                        <button class="custom-tab heading-xs active-btn d-flex justify-content-between"
                            onclick="setActive(this)" data-target="treatment-1">Transcatheter
                            aortic valve
                            implantation (TAVI) <i class="bi bi-chevron-right"></i></button>
                    </li>
                    <li>
                        <button class="custom-tab heading-xs d-flex justify-content-between" onclick="setActive(this)"
                            data-target="treatment-2">
                            Peripheral Angioplasty
                            <i class="bi bi-chevron-right"></i></button>
                    </li>
                    <li>
                        <button class="custom-tab heading-xs d-flex justify-content-between" onclick="setActive(this)"
                            data-target="treatment-3">Coronary Artery Bypass
                            Graft surgery (CABG) <i class="bi bi-chevron-right"></i></button>
                    </li>
                    <li>
                        <button class="custom-tab heading-xs d-flex justify-content-between" onclick="setActive(this)"
                            data-target="treatment-4">Aneurysm Repair <i class="bi bi-chevron-right"></i></button>
                    </li>
                </ul>
            </div>

            <div class="info-container">
                <div class="custom-tabs active" data-content="treatment-1">
                    <button class="custom-tab heading-xs active-btn px-3 d-flex justify-content-between"
                        onclick="setActive(this)" data-target="treatment-1">
                        Transcatheter aortic valve implantation (TAVI)
                        <i class="bi bi-chevron-up"></i>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="treatment-container" data-content="treatment-1">
                        <div class="img-side px-3">
                            <div class="treatment-img">
                                <img src="front/img/speciality/treatment.jpg" alt="Treatment Image">
                            </div>
                        </div>
                        <div class="para-wrap">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus ab magnam accusamus
                            cupiditate veniam inventore fugiat adipisci ut, reiciendis voluptatum non quis a dolore
                            consectetur!
                        </div>
                    </div>
                </div>

                <div class="custom-tabs" data-content="treatment-2">
                    <button class="custom-tab heading-xs px-3 d-flex justify-content-between"
                        onclick="setActive(this)" data-target="treatment-2">
                        Peripheral Angioplasty
                        <i class="bi bi-chevron-up"></i>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="treatment-container" data-content="treatment-2">
                        <div class="img-side px-3">
                            <div class="treatment-img">
                                <img src="front/img/speciality/treatment-2.jpg" alt="Treatment Image">
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

                <div class="custom-tabs" data-content="treatment-3">
                    <button class="custom-tab heading-xs px-3 d-flex justify-content-between"
                        onclick="setActive(this)" data-target="treatment-3">
                        Coronary Artery Bypass Graft surgery (CABG)
                        <i class="bi bi-chevron-up"></i>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="treatment-container" data-content="treatment-3">
                        <div class="img-side px-3">
                            <div class="treatment-img">
                                <img src="front/img/speciality/treatment.jpg" alt="Treatment Image">
                            </div>
                        </div>
                        <div class="para-wrap">
                            Coronary Artery Bypass Graft surgery (CABG) is a procedure that improves blood flow to the heart.
                            It's used for patients with severe coronary heart disease, creating new routes around blocked arteries
                            using blood vessels taken from other parts of the body.
                        </div>
                    </div>
                </div>

                <div class="custom-tabs" data-content="treatment-4">
                    <button class="custom-tab heading-xs px-3 d-flex justify-content-between"
                        onclick="setActive(this)" data-target="treatment-4">
                        Aneurysm Repair
                        <i class="bi bi-chevron-up"></i>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="treatment-container" data-content="treatment-4">
                        <div class="img-side px-3">
                            <div class="treatment-img">
                                <img src="front/img/speciality/treatment-2.jpg" alt="Treatment Image">
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
<script>
    function setActive(el) {
        console.log('clicked');
        let targetId = $(el).attr('data-target');

        $('.custom-tab').removeClass('active-btn');
        $('.custom-tabs').removeClass('active');

        // Set active state on clicked button
        $(el).addClass('active-btn');

        // Handle desktop vs mobile view differently
        if ($(el).closest('.desktop-list').length) {
            // Desktop list item was clicked
            $(`.custom-tabs[data-content="${targetId}"]`).addClass('active');
            $(`.custom-tabs[data-content="${targetId}"] .custom-tab`).addClass('active-btn');
        } else {
            // Mobile tab was clicked
            $(el).closest('.custom-tabs').addClass('active');
        }
    }
</script>

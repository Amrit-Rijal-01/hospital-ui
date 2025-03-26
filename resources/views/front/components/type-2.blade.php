@props(['heading' => 'Default Heading', 'subHeading' => 'Default sub-heading'])
<div class="type-2">
    <div class="heading-group mb-4">
        @if ($subHeading)
            <div class="heading mb-2"> {{ $heading }} </div>
            <div class="para-wrap">{{ $subHeading }}</div>
        @else
            <div class="heading"> {{ $heading }} </div>
        @endif
    </div>
    <div class="content-wrapper d-flex">
        <div class="desktop-list align-self-start align-self-xl-center px-3">
            <ul>
                <li>
                    <button class="type-2-tab heading-xs active-btn d-flex justify-content-between"
                        data-target="treatment-1">Coronary Artery Disease <i class="bi bi-chevron-right"></i></button>
                </li>
                <li>
                    <button class="type-2-tab heading-xs d-flex justify-content-between" data-target="treatment-2">
                        Rheumatic Heart Disease
                        <i class="bi bi-chevron-right"></i></button>
                </li>
                <li>
                    <button class="type-2-tab heading-xs d-flex justify-content-between" data-target="treatment-3">Heart
                        Failure<i class="bi bi-chevron-right"></i></button>
                </li>
                <li>
                    <button class="type-2-tab heading-xs d-flex justify-content-between"
                        data-target="treatment-4">Hypertension <i class="bi bi-chevron-right"></i></button>
                </li>
            </ul>
        </div>

        <div class="info-container">
            <div class="type-2-tabs active" data-content="treatment-1">
                <button class="type-2-tab heading-xs active-btn px-3 d-flex justify-content-between"
                    data-target="treatment-1">
                    Coronary Artery Disease
                    <i class="bi bi-chevron-up"></i>
                    <i class="bi bi-chevron-down"></i>
                </button>
                <div class="treatment-container" data-content="treatment-1">
                    <div class="img-side px-3">
                        <div class="treatment-img">
                            <img src="{{ asset('front/img/speciality/ailment-1.jpg') }}" alt="Treatment Image">
                        </div>
                    </div>
                    <div class="para-wrap">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus ab magnam accusamus
                        cupiditate veniam inventore fugiat adipisci ut, reiciendis voluptatum non quis a dolore
                        consectetur!
                    </div>
                </div>
            </div>

            <div class="type-2-tabs" data-content="treatment-2">
                <button class="type-2-tab heading-xs px-3 d-flex justify-content-between" data-target="treatment-2">
                    Rheumatic Heart Disease
                    <i class="bi bi-chevron-up"></i>
                    <i class="bi bi-chevron-down"></i>
                </button>
                <div class="treatment-container" data-content="treatment-2">
                    <div class="img-side px-3">
                        <div class="treatment-img">
                            <img src="{{ asset('front/img/speciality/ailment-2.jpg') }}" alt="Treatment Image">
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

            <div class="type-2-tabs" data-content="treatment-3">
                <button class="type-2-tab heading-xs px-3 d-flex justify-content-between" data-target="treatment-3">
                    Heart Failure
                    <i class="bi bi-chevron-up"></i>
                    <i class="bi bi-chevron-down"></i>
                </button>
                <div class="treatment-container" data-content="treatment-3">
                    <div class="img-side px-3">
                        <div class="treatment-img">
                            <img src="{{ asset('front/img/speciality/ailment-1.jpg') }}" alt="Treatment Image">
                        </div>
                    </div>
                    <div class="para-wrap">
                        Coronary Artery Bypass Graft surgery (CABG) is a procedure that improves blood flow to the
                        heart.
                        It's used for patients with severe coronary heart disease, creating new routes around blocked
                        arteries
                        using blood vessels taken from other parts of the body.
                    </div>
                </div>
            </div>

            <div class="type-2-tabs" data-content="treatment-4">
                <button class="type-2-tab heading-xs px-3 d-flex justify-content-between" data-target="treatment-4">
                    Hypertension
                    <i class="bi bi-chevron-up"></i>
                    <i class="bi bi-chevron-down"></i>
                </button>
                <div class="treatment-container" data-content="treatment-4">
                    <div class="img-side px-3">
                        <div class="treatment-img">
                            <img src="{{ asset('front/img/speciality/ailment-2.jpg') }}" alt="Treatment Image">
                        </div>
                    </div>
                    <div class="para-wrap">
                        Aneurysm repair is a surgical procedure to correct an aneurysm, a bulge in a blood vessel caused
                        by
                        weakness in the vessel wall. This procedure prevents rupture of the aneurysm, which can be
                        life-threatening.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        $(document).ready(function() {
            // Use event delegation on the document
            $(document).on('click', '.type-2-tab', function(event) {
                // Find the parent component container
                const componentContainer = $(this).closest('.type-2');

                // Remove active states within this specific component
                componentContainer.find('.type-2-tab').removeClass('active-btn');
                componentContainer.find('.type-2-tabs').removeClass('active');

                // Add active state to clicked button
                $(this).addClass('active-btn');

                // Get the target content ID
                const targetId = $(this).data('target');

                // Activate the corresponding content
                const targetContent = componentContainer.find(`.type-2-tabs[data-content="${targetId}"]`);

                if (targetContent.length) {
                    targetContent.addClass('active');
                    targetContent.find('.type-2-tab').addClass('active-btn');
                }
            });
        });
    </script>
@endpush

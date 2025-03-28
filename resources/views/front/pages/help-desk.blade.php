@extends('front.layout.app')

@section('title', 'Help Desk')
@section('meta', 'Help Desk page for the website')

@section('content')
    <section id="help-desk-container">
        <div class="main-container">
            <div class="content">
                <div class="content-wrapper d-flex gap-3">
                    <div class="desktop-list align-self-start px-3">
                        <ul>
                            <li>
                                <button class="type-2-tab heading-xs active-btn d-flex justify-content-between"
                                    data-target="treatment-1">Getting To The Hospital 
                            </li>
                            <li>
                                <button class="type-2-tab heading-xs d-flex justify-content-between"
                                    data-target="treatment-2">
                                    Meeting Doctors</button>
                            </li>
                            <li>
                                <button class="type-2-tab heading-xs d-flex justify-content-between"
                                    data-target="treatment-3">Getting Admitted</button>
                            </li>
                            <li>
                                <button class="type-2-tab heading-xs d-flex justify-content-between"
                                    data-target="treatment-4">Hypertension </button>
                            </li>
                        </ul>
                    </div>

                    <div class="info-container">
                        <div class="type-2-tabs active" data-content="treatment-1">
                            <button class="type-2-tab heading-xs active-btn px-3 d-flex justify-content-between"
                                data-target="treatment-1">
                                Getting To The Hospital
                            </button>
                            <div class="treatment-container" data-content="treatment-1">

                                <div class="para-wrap">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus ab magnam accusamus
                                    cupiditate veniam inventore fugiat adipisci ut, reiciendis voluptatum non quis a dolore
                                    consectetur!
                                </div>
                            </div>
                        </div>

                        <div class="type-2-tabs" data-content="treatment-2">
                            <button class="type-2-tab heading-xs px-3 d-flex justify-content-between"
                                data-target="treatment-2">
                                Meeting Doctors
                            </button>
                            <div class="treatment-container" data-content="treatment-2">

                                <div class="para-wrap">
                                    Peripheral angioplasty is a minimally invasive procedure used to widen narrowed or
                                    blocked
                                    arteries in the peripheral vascular system. A stent is placed to help keep the artery
                                    open.
                                    This approach aims to alleviate symptoms such as leg pain or cramping caused by reduced
                                    blood flow and can also reduce the risk of more serious complications, such as
                                    peripheral
                                    artery disease.
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt consectetur autem
                                    architecto praesentium, sapiente harum quia ad repellendus velit neque aspernatur
                                    debitis rerum sequi facere ea animi alias nulla nisi, culpa, quas quos quam perferendis?
                                    Veniam in sint alias, quaerat nesciunt quo dignissimos inventore eveniet accusantium
                                    quos suscipit a officiis sunt pariatur hic, excepturi quas. Libero veritatis dignissimos
                                    ad. Sit sapiente ducimus temporibus quos doloremque ullam et deserunt ratione at fugiat
                                    repudiandae quasi explicabo necessitatibus iste veniam, impedit cum iusto officia
                                    eveniet porro, culpa facilis doloribus repellendus rem? Placeat minima sed non rem,
                                    sequi sapiente mollitia optio facilis explicabo aperiam.
                                </div>
                            </div>
                        </div>

                        <div class="type-2-tabs" data-content="treatment-3">
                            <button class="type-2-tab heading-xs px-3 d-flex justify-content-between"
                                data-target="treatment-3">
                                Getting Admitted
                            </button>
                            <div class="treatment-container" data-content="treatment-3">

                                <div class="para-wrap">
                                    Coronary Artery Bypass Graft surgery (CABG) is a procedure that improves blood flow to
                                    the
                                    heart.
                                    It's used for patients with severe coronary heart disease, creating new routes around
                                    blocked
                                    arteries
                                    using blood vessels taken from other parts of the body.
                                </div>
                            </div>
                        </div>

                        <div class="type-2-tabs" data-content="treatment-4">
                            <button class="type-2-tab heading-xs px-3 d-flex justify-content-between"
                                data-target="treatment-4">
                                Hypertension
                            </button>
                            <div class="treatment-container" data-content="treatment-4">
                                <div class="para-wrap">
                                    Aneurysm repair is a surgical procedure to correct an aneurysm, a bulge in a blood
                                    vessel caused
                                    by
                                    weakness in the vessel wall. This procedure prevents rupture of the aneurysm, which can
                                    be
                                    life-threatening.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // More specific selector for desktop list and mobile tabs
            $('.desktop-list .type-2-tab, .info-container .type-2-tab').on('click', function(event) {
                // Find the closest parent container
                const componentContainer = $(this).closest('#help-desk-container');

                // Remove active states
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

@props(['heading' => 'Default Heading', 'subHeading' => '', 'item' => ''])
<div class="type-1">
    <div class="heading-group mb-4">
        @if ($subHeading)
            <div class="heading mb-2"> {{ $heading }} </div>
            <div class="para-wrap">{{ $subHeading }}</div>
        @else
            <div class="heading"> {{ $heading }} </div>
        @endif
    </div>
    <div class="content-wrapper">
        <div class="custom-tabs-desktop">
            <ul>
                <li>
                    <a class="custom-tab active" href="#tab1">Preparation<span class="icon"><svg width="7"
                                height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.64062 1.77973L5.36063 5.49973L1.64062 9.21973" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="custom-tab" href="#tab2">Treatment
                        Procedure<span class="icon"><svg width="7" height="11" viewBox="0 0 7 11"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.64062 1.77973L5.36063 5.49973L1.64062 9.21973" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="custom-tab" href="#tab3">Post Treatment<span class="icon"><svg width="7"
                                height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.64062 1.77973L5.36063 5.49973L1.64062 9.21973" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="list">
            <div class="custom-tab-content">
                <div class="custom-tab-panel active" id="tab1">
                    <a href="#tab1" class="custom-tab active">
                        Preparation
                        <span class="icon"><svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.64062 1.77973L5.36063 5.49973L1.64062 9.21973" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span></a>
                    <div class="content">
                        <div class="col-wrap">
                            <div class="para">
                                <ul>
                                    <li>
                                        <div class="para-wrap">
                                            <p><strong>Steps to take before Anastomosis

                                                </strong></p>
                                            <br>
                                            <p class="para-wrap-para">
                                                Our doctors at Medanta will prepare you for the entire procedure,
                                                right from the diagnosis to the post-surgery medicines.</p>
                                            <p></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="img-wrap square-image">
                                <img src="https://medanta.s3.ap-south-1.amazonaws.com/new-treatment/Preparation.jpg"
                                    class="img-fluid w-100 object-fit-cover" alt="Preparation">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-tab-panel" id="tab2">
                    <a href="#tab2" class="custom-tab">
                        Treatment Procedure
                        <span class="icon"><svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.64062 1.77973L5.36063 5.49973L1.64062 9.21973" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span></a>
                    <div class="content">
                        <div class="col-wrap">
                            <div class="para">
                                <ul>
                                    <li>
                                        <div class="para-wrap">
                                            <p><strong>What happens during the procedure?</strong></p>
                                            <br>
                                            <p class="para-wrap-para">
                                                Anastomosis is conducted under general anaesthesia. A surgical cut
                                                is made to reach the organs to be sewn. For example, in the case of
                                                bowel surgery, a surgical incision is made around colostomy (the
                                                opening of the bowel). The colostomy is then removed, and the
                                                opening in the bowel is closed by stitch or staple.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="img-wrap square-image">
                                <img src="https://medanta.s3.ap-south-1.amazonaws.com/new-treatment/Preparation.jpg"
                                    class="img-fluid w-100 object-fit-cover" alt="Preparation">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-tab-panel" id="tab3">
                    <a href="#tab3" class="custom-tab">
                        Post Treatment
                        <span class="icon"><svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.64062 1.77973L5.36063 5.49973L1.64062 9.21973" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span></a>
                    <div class="content">
                        <div class="col-wrap">
                            <div class="para">
                                <ul>
                                    <li>
                                        <div class="para-wrap">
                                            <p><strong>After the procedure

                                                </strong></p>
                                            <br>
                                            <p class="para-wrap-para">
                                                The surgery usually requires a hospital stay of 7-10 days. An
                                                endoscope is used by the surgeon to closely monitor the surgery, and
                                                do it with better medical precision. Doctors will give antibiotics
                                                post the surgery.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="img-wrap square-image">
                                <img src="https://medanta.s3.ap-south-1.amazonaws.com/new-treatment/Preparation.jpg"
                                    class="img-fluid w-100 object-fit-cover" alt="Preparation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        $(document).ready(function() {
            // Desktop Tab Navigation
            $('.custom-tab').on('click', function(e) {
                e.preventDefault();

                // Remove active class from all tabs and tab panels
                $('.custom-tab').removeClass('active');
                $('.custom-tab-panel').removeClass('active');

                // Add active class to clicked tab
                $(this).addClass('active');

                // Get the target tab panel ID
                var targetTabId = $(this).attr('href');

                // Activate corresponding tab panel
                $(targetTabId).addClass('active');
            });

            // Mobile Tab Navigation (if you want similar functionality for mobile)
            $('.custom-tab-panel .custom-tab').on('click', function(e) {
                e.preventDefault();

                // Remove active class from all mobile tab panels
                $('.custom-tab-panel').removeClass('active');

                // Get the parent tab panel
                var $parentPanel = $(this).closest('.custom-tab-panel');

                // Toggle active class on parent panel
                $parentPanel.toggleClass('active');
            });
        });
    </script>
@endpush

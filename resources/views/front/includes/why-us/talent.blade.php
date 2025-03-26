<section id="talent">
    <div class="main-container">
        <x-sliderComponent heading="Exceptional Clinical Talent"
            subHeading="The company takes pride in engaging clinicians who are leaders in their respective fields, dedicated to delivering integrated care across multiple specialties. The vast majority of Nobel doctors work exclusively with Nobel and enjoy a high degree of clinical autonomy. The doctor led model of work allows our clinicians to focus on the medicine and driving clinical excellence. By fostering a culture of collaboration, cooperation, and teamwork, the company ensures effective integration of multi-specialty care enabling high quality treatment, particularly in complex multidisciplinary cases.">
            <a href="{{ asset('front/img/test.mp4') }}" class="glightbox col-xl-4 col-xxl-3">
                <div class="each-video m-3">
                    <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                    <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    <div class="caption">
                        <div class="heading-md">
                            title of the video
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('front/img/test.mp4') }}" class="glightbox col-xl-4 col-xxl-3">
                <div class="each-video m-3">
                    <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                    <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    <div class="caption">
                        <div class="heading-md">
                            title of the video
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('front/img/test.mp4') }}" class="glightbox col-xl-4 col-xxl-3">
                <div class="each-video m-3">
                    <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                    <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    <div class="caption">
                        <div class="heading-md">
                            title of the video
                        </div>
                    </div>
                </div>
            </a>
        </x-sliderComponent>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            const lightBox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true
            });
        })
    </script>
@endpush

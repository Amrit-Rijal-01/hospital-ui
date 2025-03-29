<section id="message">
    <div class="main-container">
        <x-sliderComponent heading="Key Message"
            subHeading="Aim to train as many people, etc. To train people as much as possible for CPR, which should be started in school or college training program, non-healthcare facilities such">
            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox col-xl-4 col-xxl-3">
                <div class="each-video m-3">
                    <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                    <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    <div class="heading-sm">Heading of the video</div>
                </div>
            </a>
            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox col-xl-4 col-xxl-3">
                <div class="each-video m-3">
                    <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                    <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    <div class="heading-sm">Heading of the video</div>
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

<section id="dr-media">
    <div class="main-container">
        <x-sliderComponent heading="Media">
            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox m-3">
                <div class="each-video">
                    <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                    <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    <div class="heading-sm">Heading of the video</div>
                </div>
            </a>
            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="glightbox m-3">
                <div class="each-video">
                    <img src="{{ asset('front/img/video-thumb.jpg') }}" alt="Thumbnail">
                    <img class="play-icon" src="{{ asset('front/img/play-icon.png') }}" alt="Play Icon">
                    <div class="heading-sm">Heading of the video</div>
                </div>
            </a>
        </x-sliderComponent>
        <div class="all-btn">
            <x-hoverBtn>View All Media</x-hoverBtn>
        </div>
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

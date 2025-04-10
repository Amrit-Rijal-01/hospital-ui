<section id="ailment-overview" data-content="Overview">
    <div class="main-container d-block d-md-flex">
        <div class="heading mb-4">
            What Is an Achilles Tendon Injury?
        </div>
        <div class="content-wrapper">
            <p class="para-wrap collapsed">
                The Achilles tendon is the largest and strongest tendon in the human body. It can be found at the
                posterior of your ankle and links your heel bone to your calf muscles. By enabling you to move your foot
                and flex your toes downwards, it plays a crucial role in movement.

                The Achilles tendon is susceptible to injury when it is pulled, overstretched, or ruptured due to rapid
                jerky motions such as jumping or pivoting, or repetitive stress such as running extended distances.

                If you have a suspicion of Achilles tendon injury, it is crucial to quickly look for medical aid. The
                physician may advise utilising the RICE method, which involves rest, ice, compression, and elevation to
                alleviate inflammation and pain. Occasionally, surgical intervention or physical therapy might be
                required.

                It is crucial to take preventive measures against Achilles tendon injuries, such as adequately warming
                up and stretching before any physical activity, donning suitable footwear, and gradually intensifying
                your exercise routine.
            </p>
            <button class="read-more-btn">Read More <i class="bi bi-chevron-down"></i></button>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            const $para = $('.para-wrap');
            const $btn = $('.read-more-btn');

            function checkOverflow() {
                const $clone = $para.clone()
                    .css({
                        display: 'block',
                        visibility: 'hidden',
                        position: 'absolute',
                        width: $para.width(),
                        maxHeight: 'none',
                        overflow: 'visible'
                    })
                    .appendTo('body');

                const fullHeight = $clone[0].scrollHeight;
                const displayHeight = $para.height();

                $clone.remove();
                return fullHeight > displayHeight;
            }

            if (checkOverflow()) {
                $btn.show();
                $para.addClass('collapsed');
            } else {
                $btn.hide();
                $para.removeClass('collapsed');
            }

            $btn.on('click', function() {
                $para.toggleClass('collapsed');
                $(this).html($para.hasClass('collapsed') ? 'Read More <i class="bi bi-chevron-down"></i>' :
                    'Read Less <i class="bi bi-chevron-up"></i>');
            });
        });
    </script>
@endpush

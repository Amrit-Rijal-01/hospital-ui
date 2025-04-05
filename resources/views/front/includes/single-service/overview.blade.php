<section id="single-service-overview">
   <div class="main-container d-block d-md-flex">
      <div class="heading mb-4">
         Name of the Service
      </div>
      <div class="content-wrapper">
         <p class="para-wrap collapsed">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ab dolorum accusantium sit est, fuga fugit
            animi exercitationem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ab dolorum
            accusantium sit est, fuga fugit
            animi exercitationem Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis minima libero
            eligendi commodi cumque tempore maxime! Consectetur ex qui error quo recusandae quam ipsum? Voluptatem
            itaque molestias sequi facere laborum?
         </p>
         <button class="read-more-btn">Read More <i class="bi bi-chevron-down"></i></button>
      </div>
   </div>
</section>
@push('js')
   <script>
      $(document).ready(function () {
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

        $btn.on('click', function () {
          $para.toggleClass('collapsed');
          $(this).html($para.hasClass('collapsed') ? 'Read More <i class="bi bi-chevron-down"></i>' :
            'Read Less <i class="bi bi-chevron-up"></i>');
        });
      });
   </script>
@endpush
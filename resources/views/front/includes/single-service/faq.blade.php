<section id="single-service-faq">
   <div class="main-container">
      <div class="heading text-center mb-2">FAQ's</div>
      <div class="faq-container">
         @for ($i = 0; $i < 10; $i++)
          <div class="question-answer para-wrap">
            <div class="question">
               <p>How many questions can I ask the expert? {{$i}} </p> <i class="bi bi-chevron-right"></i>
            </div>
            <div class="answer">
               We want you to feel comfortable and informed. During your consultation, you can ask as many questions
               as
               needed to
               understand your diagnosis and treatment options clearly. While there isn't a strict limit, it's
               advisable to
               focus on
               key concerns to facilitate a more effective and detailed response from the specialist. Our specialists
               are
               dedicated to
               addressing your concerns in a patient and informative manner.
            </div>
          </div>
       @endfor
      </div>
   </div>
</section>
@push('js')
   <script>
      $('.question').on('click', function () {
        if ($(this).closest('.question-answer').hasClass('active')) {
          $('.question-answer').removeClass('active');
          return;
        }
        $('.question-answer').removeClass('active');
        $(this).closest('.question-answer').addClass('active');
      })
   </script>
@endpush
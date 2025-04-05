<section id="single-service-our-services">
   <div class="main-container">
      <x-sliderComponent>
         @for ($i = 0; $i < 5; $i++)
          <div class="our-service-card">
            <div class="logo">
               <i class="bi bi-person-circle"></i>
            </div>
            <div class="card-title">
               Name of service Name of service Name of service
            </div>
            <x-hoverBtn class="para-wrap">Know More</x-hoverBtn>
          </div>
       @endfor
      </x-sliderComponent>
   </div>
</section>
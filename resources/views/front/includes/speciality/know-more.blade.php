<section class="know-more">
    <div class="main-container px-3">
        <div class="heading mb-5 text-center">
            Cardiology
        </div>
        <div class="text-container">
            <p class="para-wrap">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium corrupti maiores eos at ratione debitis, ipsum eaque. Quam molestias incidunt minima explicabo, assumenda voluptatibus, voluptatem voluptas maxime quidem debitis sequi blanditiis provident ad nulla inventore adipisci? Repudiandae impedit incidunt, soluta cum nam hic, ab ea maxime quod vel alias autem deleniti facere, id excepturi quis eos placeat corrupti cupiditate pariatur nostrum. Illum libero maxime tempore, saepe quo aliquid laboriosam quia aspernatur dolorem consectetur mollitia, explicabo iste minus voluptates delectus dolor eaque facere dolorum necessitatibus qui officiis facilis unde? Corporis dicta ab ea unde temporibus itaque laudantium est quo officia in. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium corrupti maiores eos at ratione debitis, ipsum eaque. Quam molestias incidunt minima explicabo, assumenda voluptatibus, voluptatem voluptas maxime quidem debitis sequi blanditiis provident ad nulla inventore adipisci? Repudiandae impedit incidunt, soluta cum nam hic, ab ea maxime quod vel alias autem deleniti facere, id excepturi quis eos placeat corrupti cupiditate pariatur nostrum. Illum libero maxime tempore, saepe quo aliquid laboriosam quia aspernatur dolorem consectetur mollitia, explicabo iste minus voluptates delectus dolor eaque facere dolorum necessitatibus qui officiis facilis unde? Corporis dicta ab ea unde temporibus itaque laudantium est quo officia in.
            </p>
            <div class="fade-effect"></div>
        </div>
        <button class="read-more">Read More
        </button>
        <span class="arrow">
            <i class="bi bi-chevron-down"></i>
            <i class="bi bi-chevron-up"></i>
        </span>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function() {
            $('.read-more').on('click', function() {
                $('.text-container').toggleClass('expanded');
                $('.arrow').toggleClass('arrowToggle');

                if ($('.text-container').hasClass('expanded')) {
                    $(this).text('Read Less');
                    $('.fade-effect').hide();
                } else {
                    $(this).text('Read More');
                    $('.fade-effect').show();
                }
            });
        });
    </script>
@endpush

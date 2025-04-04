@extends('front.layout.app')

@section('title', 'Job Form')
@section('meta', 'Job Form page for the website')

@section('content')
    <section id="job-form-links">
        <div class="main-container d-flex justify-content-between">
            <x-hoverBtn class="heading-xs" href="/career">Back to Careers</x-hoverBtn>
            <x-hoverBtn class="heading-xs" href="/jobs">Look for another position</x-hoverBtn>
        </div>
    </section>
    <section id="job-form-header">
        <div class="main-container">
            <div class="desc">
                <div class="heading mb-3">Doctor</div>
                <div class="content-wrapper mb-3">
                    <p class="para-wrap collapsed">
                        To assist in delivering high quality nursing care in the hospital.Treat emergency injuriesDocument
                        all injuries and illnessesAdminister medication, change wound dressings and care for other treatment
                        optionsPerforms assigned duties as per the department’s protocolPerforms comprehensive nursing
                        assessment on all patients with consideration to clinical condition, pain activities of daily living
                        , skin allergies, integrity, valuables, safety needs, age ,mental, social and physical
                        status.Assesses vital signs, important information and reports abnormalities to the consultant and
                        team and carries out orders as per instructions.Accurately and thoroughly documents nursing
                        assessment and patient problems using appropriate clinical terminology.
                    </p>
                    <button class="read-more-btn">Read More <i class="bi bi-chevron-down"></i></button>
                </div>
                <div class="category-type mb-3 para-wrap">
                    <div class="category">Department: <strong>Doctor</strong></div>
                    <div class="type">
                        Type: <strong>Full Time</strong>
                    </div>
                </div>
                <div class="date">
                    <i class="bi bi-calendar"></i> : <strong>Jan 28, 2025</strong>
                </div>
            </div>
        </div>
    </section>
    @include('front.includes.job-form.form')
@endsection
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

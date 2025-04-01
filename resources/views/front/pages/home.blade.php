@extends('front.layout.app')

@section('title', 'Home')
@section('meta', 'Home page for the website')

@section('content')
    <div class="modal fade" id="homepageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="w-100 img-fluid" src="{{ asset('front/img/modal-test.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    @include('front.includes.home.top-banner')
    @include('front.includes.home.speciality')
    @include('front.includes.home.team-section')
    @include('front.includes.home.why-this')
    @include('front.includes.home.services')
    @include('front.includes.home.story')
    @include('front.includes.home.national')
    @include('front.includes.home.updates')
    @include('front.includes.home.award')
    @include('front.includes.home.events')
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#homepageModal").modal("show");
            }, 500);
        });
    </script>
@endpush

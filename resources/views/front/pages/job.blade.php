@extends('front.layout.app')

@section('title', 'Home')
@section('meta', 'Home page for the website')

@section('content')
   <section id="job-career">
      <div class="main-container">
         <div class="heading">
            
         </div>
      </div>
   </section>

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
@endsection



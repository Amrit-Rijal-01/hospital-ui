@extends('front.layout.app')

@section('title', 'Job Detail')
@section('meta', 'Job Detail page for the website')

@section('content')
    <section id="job-detail-links">
        <div class="main-container d-flex justify-content-between">
            <x-hoverBtn class="heading-xs" href="/career">Back to Careers</x-hoverBtn>
            <x-hoverBtn class="heading-xs" href="/jobs">Back to Job Listing</x-hoverBtn>
        </div>
    </section>
    <section id="job-detail-header">
        <div class="main-container">
            <div class="desc">
                <div class="heading mb-3"><span class="me-2">Doctor</span>
                  <i class="bi bi-share" data-bs-toggle="modal" data-bs-target="#shareModal"></i></div>
                <div class="category-type mb-3 para-wrap">
                    <div class="category">Category: <strong>Doctor</strong></div>
                    <div class="type">
                        Type: <strong>Full Time</strong>
                    </div>
                </div>
                <div class="date">
                    <i class="bi bi-calendar"></i> : <strong>Jan 28, 2025</strong>
                </div>
            </div>
        </div>
        <div class="modal" id="shareModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0 pb-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="heading text-center mb-3">
                            Share Profile Via
                        </div>
                        <div class="share-links d-flex justify-content-center gap-3 fs-2 mb-5">
                            <a href="#">
                                <i class="bi bi-link-45deg"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="job-detail-description">
      <div class="main-container">
         <div class="job-desc">
            <div class="job-detail-title heading-md">
               Job Description
            </div>
            <ul>
               <li>Lorem ipsum dolor sit amet.</li>
               <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quia?</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
               <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
            </ul>
         </div>
         <div class="job-obj">
            <div class="job-detail-title heading-md">
               Job Objective
            </div>
            <ul>
               <li>Lorem ipsum dolor sit amet.</li>
               <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quia?</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
               <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
            </ul>
         </div>
         <div class="job-qualification">
            <div class="job-detail-title heading-md">
               Job Qualification
            </div>
            <ul>
               <li>Lorem ipsum dolor sit amet.</li>
               <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quia?</li>
            </ul>
         </div>
         <div class="job-exp">
            <div class="job-detail-title heading-md">
               Job Experience
            </div>
            <ul>
               <li>Lorem ipsum dolor sit amet.</li>
         </div>
         <x-hoverBtn href="/job-form">Apply for this position</x-hoverBtn>
      </div>
    </section>
@endsection

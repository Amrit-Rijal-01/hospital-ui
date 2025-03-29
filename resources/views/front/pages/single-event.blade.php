@extends('front.layout.app')

@section('title', 'Home')
@section('meta', 'Home page for the website')

@section('content')
    <section id="single-event">
        <div class="main-container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-wrapper">
                        <div class="img-wrap mb-4">
                            <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}" alt="">
                        </div>
                        <div class="heading mb-4">
                            Heading of the event
                        </div>
                        <div class="by-data heading-xs mb-4">
                            <div class="by">By <strong>Name</strong></div>
                            <div class="date">March 10, 2025</div>
                        </div>
                        <div class="para-wrap mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta necessitatibus rem,
                            veritatis
                            consequatur animi dolores temporibus asperiores accusantium dolor eius, assumenda nobis autem
                            consequuntur distinctio laborum illo? Quidem sed natus, iusto iste quasi sunt. Illo nam ex
                            distinctio
                            consequuntur minus vero facilis doloremque rerum, odit alias. Voluptate eveniet nihil delectus,
                            ad
                            possimus, aliquam numquam ipsa ipsam dolore alias reprehenderit eum commodi perferendis earum,
                            sint
                            quisquam accusamus tenetur asperiores dignissimos cupiditate provident est odio architecto
                            doloribus?
                            Excepturi, eos. Sit consequuntur eius qui molestias doloremque ipsa ut, assumenda blanditiis
                            temporibus
                            laborum quia dolor perspiciatis amet iusto similique ipsam corporis alias maxime.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="recent-event ">
                        <div class="heading mb-4">Recent Event</div>
                        <div class="event-card mb-4">
                            <div class="img-wrapper">
                                <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}" alt="Blog Image">
                            </div>
                            <div class="body">
                                <div class="heading-md "><a href="/per-blog">Heading of the Event</a></div>
                                <div class="date">Mar 27, 2025</div>
                            </div>
                        </div>
                        <div class="event-card mb-4">
                            <div class="img-wrapper">
                                <img src="{{ asset('front/img/health-library/blog-placeholder.jpg') }}" alt="Blog Image">
                            </div>
                            <div class="body">
                                <div class="heading-md"><a href="/per-blog">Heading of the Event</a></div>
                                <div class="date">Mar 27, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('front.layout.app')

@section('title', 'All Treatments')
@section('meta', 'All Treatments page for the website')

@section('content')
    <x-allPage title="All Treatments">
        @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-6 each-card">
                        <x-card class="bg-white" title="B {{ $i }} Title For Treatment" image="{{ asset('front/img/health-library/technologies.jpg') }}">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                    <div class="col-md-6 each-card">
                        <x-card class="bg-white" title="E {{ $i }} Title For Treatment" image="{{ asset('front/img/health-library/technologies.jpg') }}">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                    <div class="col-md-6 each-card">
                        <x-card class="bg-white" title="J {{ $i }} Title For Treatment" image="{{ asset('front/img/health-library/technologies.jpg') }}">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                @endfor
    </x-allPage>
@endsection

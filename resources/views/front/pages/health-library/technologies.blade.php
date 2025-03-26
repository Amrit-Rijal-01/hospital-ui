@extends('front.layout.app')

@section('title', 'All Technologies')
@section('meta', 'All TEchnologies page for the website')

@section('content')
    <x-allPage title="All Technologies">
        @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-6 each-card">
                        <x-card class="bg-white rounded-4" title="B {{ $i }} Title For Technology" href="/per-technology">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                    <div class="col-md-6 each-card">
                        <x-card class="bg-white rounded-4" title="E {{ $i }} Title For Technology">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                    <div class="col-md-6 each-card">
                        <x-card class="bg-white rounded-4" title="J {{ $i }} Title For Technology">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                @endfor
    </x-allPage>
@endsection

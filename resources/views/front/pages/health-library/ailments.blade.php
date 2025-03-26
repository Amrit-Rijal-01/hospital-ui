@extends('front.layout.app')

@section('title', 'All Ailments')
@section('meta', 'All Ailments page for the website')

@section('content')
    <x-allPage title="All Ailments">
        @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-6 each-card">
                        <x-card class="bg-white rounded-4" title="B {{ $i }} Title For Ailments" href="{{ asset('/per-ailment') }}">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                    <div class="col-md-6 each-card">
                        <x-card class="bg-white rounded-4" title="E {{ $i }} Title For Ailments">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                    <div class="col-md-6 each-card">
                        <x-card class="bg-white rounded-4" title="J {{ $i }} Title For Ailments">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Alias natus tenetur hic doloribus ea, corrupti est praesentium
                            amet ipsam deserunt.</x-card>
                    </div>
                @endfor
    </x-allPage>
@endsection

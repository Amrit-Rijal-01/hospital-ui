@extends('front.layout.app')
@section('title', 'Ailment Name')
@section('meta', 'Ailment-Name page for the website')
@section('content')
    @include('front.includes.per-ailment.ailment-banner')
    @include('front.includes.per-ailment.overview')
    @include('front.includes.per-ailment.ailment-type')
@endsection
@push('js')
    <script>
        toggleSectionNav(true);
    </script>
@endpush
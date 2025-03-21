@props(['class' => '', 'image' => '', 'title' => '', 'btn' => 'Know More'])
<div class="main-card {{ $class }}">
    @if($image)
        <img src="{{ $image }}" alt="{{ $title ?? 'Card Image' }}" class="img-fluid">
    @endif
    <div class="body">
        <h3 class="title heading-md">{{ $title ?? 'Default Title' }}</h3>
        <p class="para-wrap content">{{ $slot ?? 'Default content' }}</p>
        <div class="d-flex justify-content-between know-btn">
            <x-hoverBtn>{{ $btn }}</x-hoverBtn>
            {{-- <div class="service-logo">
                <img src="{{ asset('front/img/homecare.svg') }}" alt="Home Care">
            </div> --}}
        </div>
    </div>
</div>

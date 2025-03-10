<div class="card shadow-lg rounded-lg overflow-hidden {{$class}}">
    @if (!empty($image))
        <img src="{{ asset($image) }}" alt="{{ $title ?? 'Card Image' }}" class="w-full h-48 object-cover">
    @endif
    <div class="p-4">
        <h3 class="text-lg font-bold">{{ $title ?? 'Default Title' }}</h3>
        <p class="text-gray-600">{{ $content ?? 'Default content' }}</p>
        <div class="d-flex justify-content-between p-2">
            <x-hoverBtn>Know More</x-hoverBtn>
            <div class="service-logo"></div>
        </div>
    </div>
</div>

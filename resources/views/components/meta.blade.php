@props([
    "property",
    "content",
])

@if ($content)
    <meta property="{{ $property }}" content="{{ $content }}" />
@endif

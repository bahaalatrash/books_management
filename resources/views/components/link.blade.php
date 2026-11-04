@props(['href','type'])


<a href="{{ $href }}" class="btn btn-outline-{{ $type }}">
    {{ $slot }}
</a>

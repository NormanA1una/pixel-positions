@props(['width' => 90])

<img src="http://picsum.photos/seed/{{ rand(1, 1000) }}/{{ $width }}/{{ $width }}" alt="Company Logo"
    class="rounded-lg" />
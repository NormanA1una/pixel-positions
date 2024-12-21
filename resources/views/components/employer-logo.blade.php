@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" width="{{ $width }}" alt="Company Logo" class="rounded-lg" />

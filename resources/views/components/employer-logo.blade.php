@props(['employer', 'width' => 90])

<img src="{{ (strpos($employer->logo, 'http') ===0) ? $employer->logo : asset('storage/' . $employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}">
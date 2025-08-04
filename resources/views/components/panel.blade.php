@php
    $classes = 'bg-white/5 p-4 rounded-xl flex border border-transparent hover:border-blue-800 group transition-colors duration-200';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>

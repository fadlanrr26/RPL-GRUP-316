@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#1A4B83]']) }}>
    {{ $value ?? $slot }}
</label>

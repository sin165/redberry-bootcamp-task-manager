@props(['name', 'label', 'existingData' => null])

@php
    $key = str_ends_with($name, ']') ? str_replace(['[', ']'], ['.', ''], $name) : $name;
@endphp

<fieldset>
    <label class="h-17.5 bg-gray-70 rounded-1.5xl flex items-center gap-3 px-6 py-4 border {{ $errors->has($key) ? 'border-red-error' : 'border-transparent focus-within:border-blue-primary' }} group">
        <div class="flex-1 h-full flex flex-col justify-center relative">
            <p class="{{ $attributes['disabled'] ? 'text-gray-420' : 'text-gray-720' }} text-xs group-has-[:placeholder-shown]:text-base group-has-[:placeholder-shown:focus-within]:text-xs group-has-[:focus-within]:text-xs">
                {{ $label }}
            </p>
            <input
                class="{{ $attributes['disabled'] ? 'text-gray-420' : 'text-gray-720' }} leading-4 bg-gray-70 mt-2 h-auto placeholder-shown:h-0 placeholder-shown:mt-0 focus:mt-2 focus:h-auto focus:outline-none"
                name="{{ $name }}"
                value="{{ old($key, $existingData) }}"
                {{ $attributes }}
            >
        </div>
        @if (str_ends_with($name, 'password'))
            <div class="group-has-[:placeholder-shown]:hidden group-has-[:focus-within]:block group-has-[:focus-within:placeholder-shown]:block group-has-[:placeholder-shown:active]:block">
                <div class="eye hidden"><x-svg.eye /></div>
                <div class="eye-off"><x-svg.eye-off /></div>
            </div>
        @endif
        @pushOnce('scripts')
            @vite(['resources/js/password.js'])
        @endpushOnce
    </label>
    @error($key)
        <p class="text-red-error text-xs mt-2">{{ $message }}</p>
    @enderror
</fieldset>

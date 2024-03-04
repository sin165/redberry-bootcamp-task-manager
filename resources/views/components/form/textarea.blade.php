@props(['name', 'label'])

<fieldset>
    <label class="h-max min-h-40 bg-gray-70 rounded-1.5xl flex items-start gap-3 px-6 py-7 border {{ $errors->has($name) ? 'border-red-error' : 'border-transparent focus-within:border-blue-primary' }} group">
        <div class="flex-1 h-full flex flex-col justify-center relative">
            <p class="text-xs text-gray-720 group-has-[:placeholder-shown]:text-base group-has-[:placeholder-shown:focus-within]:text-xs group-has-[:focus-within]:text-xs">
                {{ $label }}
            </p>
            <textarea
                class="leading-4 text-gray-720 bg-gray-70 mt-2 h-auto placeholder-shown:h-0 placeholder-shown:mt-0 focus:mt-2 focus:h-auto focus:outline-none"
                name="{{ $name }}"
                rows="4"
                {{ $attributes }}
            >{{ old($name) }}</textarea>
        </div>
        @if ($name === 'password')
            <div class="group-has-[:placeholder-shown]:hidden group-has-[:focus-within]:block group-has-[:focus-within:placeholder-shown]:block">
                <x-svg.eye-off />
            </div>
        @endif
    </label>
    @error($name)
        <p class="text-red-error text-xs mt-2">{{ $message }}</p>
    @enderror
</fieldset>

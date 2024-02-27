@props(['name', 'label'])

<fieldset>
    <label class="h-17.5 bg-gray20 rounded-1.5xl flex items-center gap-3 px-6 py-4 border border-transparent focus-within:border-blue-primary group">
        <div class="flex-1 h-full flex flex-col justify-center relative">
            <p class="text-xs text-gray90 group-has-[:placeholder-shown]:text-base group-has-[:placeholder-shown:focus-within]:text-xs group-has-[:focus-within]:text-xs">
                {{ $label }}
            </p>
            <input
                class="leading-4 text-gray90 bg-gray20 mt-2 h-auto placeholder-shown:h-0 placeholder-shown:mt-0 focus:mt-2 focus:h-auto focus:outline-none"
                name="{{ $name }}"
                {{ $attributes }}
            >
        </div>
        @if ($name === 'password')
            <div class="group-has-[:placeholder-shown]:hidden group-has-[:focus-within]:block group-has-[:focus-within:placeholder-shown]:block">
                <x-svg.eye-off />
            </div>
        @endif
    </label>
</fieldset>

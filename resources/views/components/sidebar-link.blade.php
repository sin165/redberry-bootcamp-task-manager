@props(['svg'])

<a class="flex gap-2 items-center" {{ $attributes }} >
    <div class="size-8 flex justify-center items-center">
        {{ $svg }}
    </div>
    <span class="text-lg leading-4 text-gray-720">
        {{ $slot }}
    </span>
</a>

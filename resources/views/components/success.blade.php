<div id="flash-message" class="flex gap-2 justify-start items-center p-7 min-w-80 h-24 fixed top-5 right-10 bg-white border-b border-green-success shadow-message-box z-50 text-gray-720">
    <x-svg.smile />
    {{ $slot }}
</div>

@pushOnce('scripts')
    @vite(['resources/js/flash-message.js'])
@endpushOnce

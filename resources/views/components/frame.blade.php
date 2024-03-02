<x-layout>
    <div class="flex">
        <div class="h-dvh p-10 sticky top-0">
            <x-sidebar />
        </div>
        <div class="py-10 size-full">
            <main class="size-full">
                {{ $slot }}
            </main>
        </div>
    </div>
    <x-language />
</x-layout>

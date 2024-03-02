<aside class="left-0 bg-gray20 h-full w-max min-w-44 p-6 pb-9 rounded-1.5xl flex flex-col justify-between flex-shrink-0">
    <div>
        <img src="{{ asset('images/default_profile_picture.jpg') }}" alt="profile picture" class="size-16 rounded-full block mx-auto">
        <nav class="flex flex-col gap-7 pt-28">
            <x-sidebar-link href="{{ route('home') }}">
                <x-slot name="svg"><x-svg.my-tasks /></x-slot>
                {{ __('sidebar.my_tasks') }}
            </x-sidebar-link>
            <x-sidebar-link href="#">
                <x-slot name="svg"><x-svg.due-tasks /></x-slot>
                {{ __('sidebar.due_tasks') }}
            </x-sidebar-link>
            <x-sidebar-link href="#">
                <x-slot name="svg"><x-svg.profile /></x-slot>
                {{ __('sidebar.profile') }}
            </x-sidebar-link>
        </nav>
    </div>
    <form action="{{ route('sessions.destroy') }}" method="POST">
        @csrf
        <button class="flex gap-2 items-center mx-auto pr-4">
            <div class="size-8 flex justify-center items-center">
                <x-svg.logout />
            </div>
            <span class="text-lg leading-4 text-gray90">
                {{ __('sidebar.logout') }}
            </span>
        </button>
    </form>
</aside>

<x-frame>
    <div class="relative pr-10 pt-16">
        <div class="w-2/5 min-w-80 mx-auto -translate-x-5 mt-6">
            <h1 class="text-gray-720 font-bold text-3.5xl text-center mb-4">
                {{ __('tasks.create_task') }}
            </h1>
            <form class="flex flex-col gap-6" method="POST" action="{{ route('tasks.store') }}">
                <x-form.task-fields />
                <x-form.button>{{ __('tasks.create_task') }}</x-form.button>
            </form>
        </div>
    </div>
</x-frame>

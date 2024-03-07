<x-frame>
    <div class="relative pr-10 pt-16">
        <a href="{{ url()->previous() }}" class="relative left-7/40 -translate-x-10 w-max flex gap-4 items-center">
            <x-svg.back />
            {{ __('tasks.back') }}
        </a>
        <div class="w-2/5 min-w-80 mx-auto -translate-x-5">
            <h1 class="text-gray-720 font-bold text-3.5xl text-center mb-4">
                {{ __('tasks.edit_task') }}
            </h1>
            <form class="flex flex-col gap-6" method="POST" action="{{ route('tasks.update', $task->id) }}">
                @method('PATCH')
                <x-form.task-fields :task="$task" />
                <x-form.button>{{ __('tasks.edit_changes') }}</x-form.button>
            </form>
        </div>
    </div>
</x-frame>

@props(['tasks'])

<x-frame>
    <div class="flex justify-between items-end mb-6 h-36 pl-6 pr-10">
        <h1 class="text-gray-720 font-bold text-3xl leading-4">
            {{ __('tasks.your_tasks') }}
        </h1>
        <div class="flex gap-4">
            <form method="POST" action="{{ route('tasks.destroy_overdue_tasks') }}">
                @csrf
                @method('DELETE')
                <button class="font-bold leading-4 px-6 py-4 rounded-1.5xl border border-blue-primary text-blue-primary hover:bg-blue-transparent">
                    {{ __('tasks.delete_old_tasks') }}
                </button>
            </form>
            <a href="#" class="rounded-1.5xl bg-blue-primary hover:bg-blue-darker flex gap-2 items-center px-6 text-white">
                <x-svg.plus-circle />
                {{ __('tasks.add_task') }}
            </a>
        </div>
    </div>
    <div class="w-full pr-20">
        <x-table :tasks="$tasks" />
    </div>
    {{ $tasks->onEachSide(1)->links() }}
</x-frame>

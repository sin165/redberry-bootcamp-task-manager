@props(['task'])

<x-frame>
    <div class="flex justify-between items-end mb-17.5 h-36 pl-6 pr-10">
        <h1 class="text-gray-720 font-bold text-3.5xl uppercase">
            {{ $task->name }}
        </h1>
        <a
            class="font-bold leading-4 rounded-1.5xl flex gap-2 items-center px-6 py-3 border border-blue-primary text-blue-primary hover:bg-blue-transparent"
            href="{{ route('tasks.edit', ['task' => $task->id]) }}"
        >
            <x-svg.edit />
            <span class="w-max">{{ __('tasks.edit_task') }}</span>
        </a>
    </div>
    <div class="pl-6 pr-52">
        <h4 class="text-gray-510 leading-4 mb-4">
            {{ __('tasks.description') }}
        </h4>
        <p>{{ $task->description }}</p>
        <div class=" mt-11 flex  gap-17.5 " >
            <div>
                <h4 class="text-gray-510 leading-4 mb-4">
                    {{ __('tasks.created_date') }}
                </h4>
                {{ $task->created_at->format('d/m/Y') }}
            </div>
            <div>
                <h4 class="text-gray-510 leading-4 mb-4">
                    {{ __('tasks.due_date') }}
                </h4>
                {{ $task->due_date->format('d/m/Y') }}
            </div>
        </div>
    </div>
</x-frame>

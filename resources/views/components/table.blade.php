@props(['tasks'])

@php
    $sortBy = request()->query('sort_by');
    $sortByCreatedAt = ($sortBy == 'created_at' && !Str::endsWith($sortBy, '_desc')) ? 'created_at_desc' : 'created_at';
    $sortByDueDate = ($sortBy == 'due_date' && !Str::endsWith($sortBy, '_desc')) ? 'due_date_desc' : 'due_date';
@endphp

<table class="table w-full border-collapse border-spacing-x-6 border-spacing-y-8">
    <thead class="w-full text-lg leading-4">
        <tr class="w-full border-b border-gray-220">
            <x-table-header class="w-1/4">{{ __('tasks.task_name') }}</x-table-header>
            <x-table-header class="w-3/10">{{ __('tasks.description') }}</x-table-header>
            <x-table-header class="w-12/100">
                <div class="flex items-center gap-2">
                    <span class="w-max">{{ __('tasks.created_at') }}</span>
                    <a href="{{ route('home', array_merge(request()->except('sort_by'), ['sort_by' => $sortByCreatedAt])) }}">
                        <x-svg.sort />
                    </a>
                </div>
            </x-table-header>
            <x-table-header class="w-12/100">
                <div class="flex items-center gap-2">
                    <span class="w-max">{{ __('tasks.due_date') }}</span>
                    <a href="{{ route('home', array_merge(request()->except('sort_by'), ['sort_by' => $sortByDueDate])) }}">
                        <x-svg.sort />
                    </a>
                </div>
            </x-table-header>
            <x-table-header class="w-21/100">{{ __('tasks.actions') }}</x-table-header>
        </tr>
    </thead>
    <tbody class="w-full text-gray-510 leading-4">
        @foreach ($tasks as $task)
            <x-table-row :task="$task" />
        @endforeach
    </tbody>
</table>

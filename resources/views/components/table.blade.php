<table class="table w-full border-collapse border-spacing-x-6 border-spacing-y-8">
    <thead class="w-full text-lg leading-4">
        <tr class="w-full border-b border-gray10">
            <x-table-header class="w-1/4">{{ __('tasks.task_name') }}</x-table-header>
            <x-table-header class="w-3/10">{{ __('tasks.description') }}</x-table-header>
            <x-table-header class="w-12/100">
                <div class="flex items-center gap-2">
                    <span class="w-max">{{ __('tasks.created_at') }}</span>
                    <x-svg.sort />
                </div>
            </x-table-header>
            <x-table-header class="w-12/100">
                <div class="flex items-center gap-2">
                    <span class="w-max">{{ __('tasks.due_date') }}</span>
                    <x-svg.sort />
                </div>
            </x-table-header>
            <x-table-header class="w-21/100">{{ __('tasks.actions') }}</x-table-header>
        </tr>
    </thead>
    <tbody class="w-full text-gray60 leading-4">
        <x-table-row />
    </tbody>
</table>

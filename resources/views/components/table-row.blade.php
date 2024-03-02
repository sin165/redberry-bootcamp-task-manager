@props(['task'])

<tr class="w-full">
    <td class="p-6 w-1/4 truncate">
        <p class="w-24">
            {{ $task->name }}
        </p>
    </td>
    <td class="p-6 w-3/10 truncate">
        <p class="w-24">
            {{ $task->description }}
        </p>
    </td>
    <td class="p-6 w-12/100">
        {{ $task->created_at->format('d/m/Y') }}
    </td>
    <td class="p-6 w-12/100">
        {{ $task->due_date->format('d/m/Y') }}
    </td>
    <td class="p-6 w-21/100">
        <div class="flex gap-7 text-gray-720">
            <a href="#" class="underline">{{ __('tasks.delete') }}</a>
            <a href="#" class="underline">{{ __('tasks.edit') }}</a>
            <a href="#" class="underline">{{ __('tasks.show') }}</a>
        </div>
    </td>
</tr>

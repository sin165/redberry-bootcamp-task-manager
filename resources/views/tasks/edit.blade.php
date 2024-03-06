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
                @csrf
                @method('PATCH')
                <x-form.input name="name[en]" label="{{ __('forms.name_en') }}" placeholder="{{ __('forms.name_en_placeholder') }}" required existingData="{{ $task->getTranslation('name', 'en') }}" />
                <x-form.input name="name[ka]" label="{{ __('forms.name_ka') }}" placeholder="{{ __('forms.name_ka_placeholder') }}" required existingData="{{ $task->getTranslation('name', 'ka') }}" />
                <x-form.textarea name="description[en]" label="{{ __('forms.description_en') }}" placeholder="{{ __('forms.description_en_placeholder') }}" required existingData="{{ $task->getTranslation('description', 'en') }}" />
                <x-form.textarea name="description[ka]" label="{{ __('forms.description_ka') }}" placeholder="{{ __('forms.description_ka_placeholder') }}" required existingData="{{ $task->getTranslation('description', 'ka') }}" />
                <x-form.date-input name="due_date" label="{{ __('forms.due_date') }}" required  existingData="{{ $task->due_date->format('Y-m-d') }}" />
                <x-form.button>{{ __('tasks.edit_changes') }}</x-form.button>
            </form>
        </div>
    </div>
</x-frame>

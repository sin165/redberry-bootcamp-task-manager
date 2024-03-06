<x-frame>
    <div class="relative pr-10 pt-16">
        <div class="w-2/5 min-w-80 mx-auto -translate-x-5 mt-6">
            <h1 class="text-gray-720 font-bold text-3.5xl text-center mb-4">
                {{ __('tasks.create_task') }}
            </h1>
            <form class="flex flex-col gap-6" method="POST" action="{{ route('tasks.store') }}">
                @csrf
                <x-form.input name="name[en]" label="{{ __('forms.name_en') }}" placeholder="{{ __('forms.name_en_placeholder') }}" required />
                <x-form.input name="name[ka]" label="{{ __('forms.name_ka') }}" placeholder="{{ __('forms.name_ka_placeholder') }}" required />
                <x-form.textarea name="description[en]" label="{{ __('forms.description_en') }}" placeholder="{{ __('forms.description_en_placeholder') }}" required />
                <x-form.textarea name="description[ka]" label="{{ __('forms.description_ka') }}" placeholder="{{ __('forms.description_ka_placeholder') }}" required />
                <x-form.date-input name="due_date" label="{{ __('forms.due_date') }}" required  />
                <x-form.button>{{ __('tasks.create_task') }}</x-form.button>
            </form>
        </div>
    </div>
</x-frame>

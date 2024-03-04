<x-frame>
    <div class="relative pr-10 pt-16">
        <div class="w-2/5 min-w-80 mx-auto -translate-x-5 mt-6">
            <h1 class="text-gray-720 font-bold text-3.5xl text-center mb-4">
                {{ __('tasks.create_task') }}
            </h1>
            <form class="flex flex-col gap-6" method="POST">
                <x-form.input name="name_en" label="{{ __('forms.name_en') }}" placeholder="{{ __('forms.name_en_placeholder') }}" required />
                <x-form.input name="name_ka" label="{{ __('forms.name_ka') }}" placeholder="{{ __('forms.name_ka_placeholder') }}" required />
                <x-form.textarea name="description_en" label="{{ __('forms.description_en') }}" placeholder="{{ __('forms.description_en_placeholder') }}" required />
                <x-form.textarea name="description_ka" label="{{ __('forms.description_ka') }}" placeholder="{{ __('forms.description_ka_placeholder') }}" required />
                <x-form.input name="due_date" label="{{ __('forms.due_date') }}" placeholder="DD/MM/YY" required />
                <x-form.button>{{ __('tasks.create_task') }}</x-form.button>
            </form>
        </div>
    </div>
</x-frame>

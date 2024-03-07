@props(['task' => null])

@csrf
<x-form.input
    name="name[en]"
    label="{{ __('forms.name_en') }}"
    placeholder="{{ __('forms.name_en_placeholder') }}"
    existingData="{{ $task?->getTranslation('name', 'en') }}"
    required
/>
<x-form.input
    name="name[ka]"
    label="{{ __('forms.name_ka') }}"
    placeholder="{{ __('forms.name_ka_placeholder') }}"
    existingData="{{ $task?->getTranslation('name', 'ka') }}"
    required
/>
<x-form.textarea
    name="description[en]"
    label="{{ __('forms.description_en') }}"
    placeholder="{{ __('forms.description_en_placeholder') }}"
    existingData="{{ $task?->getTranslation('description', 'en') }}"
    required
/>
<x-form.textarea
    name="description[ka]"
    label="{{ __('forms.description_ka') }}"
    placeholder="{{ __('forms.description_ka_placeholder') }}"
    existingData="{{ $task?->getTranslation('description', 'ka') }}"
    required
/>
<x-form.date-input
    name="due_date"
    label="{{ __('forms.due_date') }}"
    existingData="{{ $task?->due_date->format('Y-m-d') }}"
    required
/>

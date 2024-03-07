<x-frame>
    <div class="relative pr-10 pt-16">
        <div class="w-2/5 min-w-80 mx-auto -translate-x-5 mt-6">
            <h1 class="text-gray-720 font-bold text-3.5xl text-center mb-11">
                {{ __('general.profile') }}
            </h1>
            <form class="flex flex-col gap-6 mb-14" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <x-form.input name="email" label="{{ __('forms.email') }}" existingData="{{ auth()->user()->email }}" disabled />
                <h3 class="text-gray-720 text-center mt-10">
                    {{ __('general.change_password') }}
                </h3>
                <div class="space-y-6">
                    <x-form.input
                        name="current_password"
                        label="{{ __('forms.current_password') }}"
                        placeholder="{{ __('forms.current_password_placeholder') }}"
                        type="password"
                    />
                    <x-form.input
                        name="new_password"
                        label="{{ __('forms.new_password') }}"
                        placeholder="{{ __('forms.new_password_placeholder') }}"
                        type="password"
                    />
                    <x-form.input
                        name="retype_password"
                        label="{{ __('forms.retype_password') }}"
                        placeholder="{{ __('forms.retype_password_placeholder') }}"
                        type="password"
                    />
                </div>
                <h3 class="text-gray-720 text-center mt-10">
                    {{ __('general.change_photos') }}
                </h3>
                <fieldset class="flex items-center gap-5">
                    <img src="{{ asset('images/default_profile_picture.jpg') }}" alt="profile picture" class="size-14 md:size-32 rounded-full shrink-0 block">
                    <label class="font-bold leading-4 rounded-1.5xl flex gap-2 items-center px-12 py-4 border border-blue-primary text-blue-primary hover:bg-blue-transparent">
                        <x-svg.upload />
                        <span class="w-max">{{ __('forms.upload_profile') }}</span>
                        <input name="profile_picture" type="file" class="hidden">
                    </label>
                    <button  class="text-gray-720 disabled:text-gray-550">
                        {{ __('forms.delete') }}
                    </button>
                </fieldset>
                @error('profile_picture')
                    <p class="text-red-error text-xs mt-2">{{ $message }}</p>
                @enderror
                <fieldset class="flex items-center gap-5 mt-1.5 mb-11">
                    <img src="{{ asset('images/default_cover.png') }}" alt="profile picture" class="size-14 md:size-32 shrink-0 block">
                    <label class="font-bold leading-4 rounded-1.5xl flex gap-2 items-center px-12 py-4 border border-blue-primary text-blue-primary hover:bg-blue-transparent">
                        <x-svg.upload />
                        <span class="w-max">{{ __('forms.upload_cover') }}</span>
                        <input name="cover" type="file" class="hidden">
                    </label>
                    <button class="text-gray-720 disabled:text-gray-550">
                        {{ __('forms.delete') }}
                    </button>
                </fieldset>
                @error('cover')
                    <p class="text-red-error text-xs mt-2">{{ $message }}</p>
                @enderror
                <x-form.button>{{ __('forms.change') }}</x-form.button>
            </form>
        </div>
    </div>
</x-frame>

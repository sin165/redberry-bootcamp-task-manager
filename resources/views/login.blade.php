@props(['cover'])

<x-layout>
    <div class="h-dvh p-10">
        <div class="h-full flex">
            <div class="h-full w-1/2 overflow-hidden rounded-l-5xl ">
                <img src="{{ asset($cover) }}" alt="cover" class="h-full w-full overflow-hidden object-cover">
            </div>
            <main class="w-1/2 flex justify-center items-center relative">
                <section class="w-116 h-92.5 relative">
                    <h1 class="{{ app()->getLocale() === 'ka' ? 'text-xl' : 'text-3.5xl' }} font-bold leading-4 text-gray-720">{{ __('general.welcome') }}</h1>
                    <p class="leading-4 mt-4 text-gray-510 ">{{ __('general.enter_details') }}</p>
                    <div class="absolute right-4 top-[-0.35rem]">
                        <x-svg.smiley />
                    </div>
                    <form method="POST" action="/login" class="flex flex-col gap-6 absolute bottom-0 w-full">
                        @csrf
                        <x-form.input name="email" label="{{ __('forms.email') }}" placeholder="{{ __('forms.email_placeholder') }}" required />
                        <x-form.input name="password" label="{{ __('forms.password') }}" placeholder="{{ __('forms.password_placeholder') }}" type="password" required />
                        <x-form.button>{{ __('forms.login') }}</x-form.button>
                    </form>
                </section>
                <section class="absolute bottom-0">
                    <x-language />
                </section>
            </main>
        </div>
    </div>
</x-layout>

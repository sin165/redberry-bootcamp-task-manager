<x-layout>
    <div class="h-dvh p-10">
        <div class="h-full flex">
            <div class="h-full w-1/2 overflow-hidden rounded-l-5xl ">
                <img src="{{ asset('images/default_cover.png') }}" alt="cover" class="h-full w-full overflow-hidden object-cover">
            </div>
            <main class="w-1/2 flex justify-center items-center relative">
                <section class="w-116 h-92.5 relative">
                    <h1 class="text-4xl leading-4 text-gray-720">Welcome Back!</h1>
                    <p class="leading-4 mt-4 text-gray-510 ">Please enter your details</p>
                    <div class="absolute right-4 top-[-0.35rem]">
                        <x-svg.smiley />
                    </div>
                    <form method="POST" action="/login" class="flex flex-col gap-6 absolute bottom-0 w-full">
                        @csrf
                        <x-form.input name="email" label="E-mail" placeholder="Write your email" required />
                        <x-form.input name="password" label="Password" placeholder="Write your password" type="password" required />
                        <x-form.button>LOG IN</x-form.button>
                    </form>
                </section>
                <section class="absolute bottom-0">
                    <x-language />
                </section>
            </main>
        </div>
    </div>
</x-layout>

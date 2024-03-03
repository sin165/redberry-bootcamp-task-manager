@props(['language'])

<form action="{{ route('language.switch') }}" method="POST">
    @csrf
    <input name="language" type="text" value="{{ $language }}" hidden>
    @if ($language === app()->getLocale())
        <button class="h-10 px-4 py-3 text-sm leading-4 rounded-0.5xl text-gray-720 bg-gray-70" disabled>{{ $slot }}</button>
    @else
        <button class="h-10 px-4 py-3 text-sm leading-4 text-gray-510">{{ $slot }}</button>
    @endif
</form>

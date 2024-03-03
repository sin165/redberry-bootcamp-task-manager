@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center mt-9 justify-center gap-1.5">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span aria-disabled="true">
                    <span class="text-gray-510 px-3.5 py-2.5 relative inline-flex items-center text-sm cursor-default leading-4">{{ $element }}</span>
                </span>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page">
                            <span class="bg-blue-transparent text-blue-primary px-3.5 py-2.5 rounded-0.5xl relative inline-flex items-center text-sm cursor-default leading-4">{{ $page }}</span>
                        </span>
                    @else
                        <a href="{{ $url }}" class="text-gray-510 px-3.5 py-2.5 relative inline-flex items-center text-sm leading-4" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </nav>
@endif

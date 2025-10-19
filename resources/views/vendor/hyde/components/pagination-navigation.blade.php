@php
    /** @var \Hyde\Support\Paginator $paginator */
@endphp

<nav aria-label="Pagination" class="flex justify-center items-center space-x-4 mt-16">

    {{-- Previous Page Link --}}
    @if ($paginator->previous())
        <x-link :href="$paginator->previous()"
            class="inline-flex items-center justify-center size-10 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-full shadow-sm transition-colors hover:bg-gray-50">
            <span class="sr-only">Previous</span>
            &laquo;
        </x-link>
    @else
        <span
            class="inline-flex items-center justify-center size-10 text-sm font-medium text-gray-400 bg-white border border-gray-200 rounded-full shadow-sm cursor-not-allowed opacity-60">
            <span class="sr-only">Previous</span>
            &laquo;
        </span>
    @endif

    {{-- Pagination Elements --}}
    <div class="flex items-center space-x-2">
        @foreach ($paginator->getPageLinks() as $pageNumber => $destination)
            @if ($paginator->currentPage() === $pageNumber)
                {{-- Current Page --}}
                <span aria-current="page"
                    class="inline-flex items-center justify-center size-10 text-sm font-bold text-white bg-teal-600 border border-teal-600 rounded-full shadow-sm">
                    {{ $pageNumber }}
                </span>
            @else
                {{-- Other Pages --}}
                <x-link :href="$destination"
                    class="inline-flex items-center justify-center size-10 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-full shadow-sm transition-colors hover:bg-gray-50">
                    {{ $pageNumber }}
                </x-link>
            @endif
        @endforeach
    </div>

    {{-- Next Page Link --}}
    @if ($paginator->next())
        <x-link :href="$paginator->next()"
            class="inline-flex items-center justify-center size-10 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-full shadow-sm transition-colors hover:bg-gray-50">
            <span class="sr-only">Next</span>
            &raquo;
        </x-link>
    @else
        <span
            class="inline-flex items-center justify-center size-10 text-sm font-medium text-gray-400 bg-white border border-gray-200 rounded-full shadow-sm cursor-not-allowed opacity-60">
            <span class="sr-only">Next</span>
            &raquo;
        </span>
    @endif
</nav>

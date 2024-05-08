@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span style="font-family: 'Montserrat', sans-serif;" class="btn btn-dark disabled">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" style="font-family: 'Montserrat', sans-serif;" class="btn btn-primary">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" style="font-family: 'Montserrat', sans-serif;" class="btn btn-primary">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span style="font-family: 'Montserrat', sans-serif;" class="btn btn-dark disabled">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>
    </nav>
@endif

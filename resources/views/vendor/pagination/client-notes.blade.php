@if ($paginator->hasPages())
<nav>


    <ul class="pagination d-flex flex-wrap justify-content-center">


        @if ($paginator->onFirstPage())
        <li class="disabled p-1" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span class="btn btn-sm btn-outline-primary" aria-hidden="true">&lsaquo;</span>
        </li>
        @else
        <li class="p-1">
            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-sm btn-outline-primary" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
        @endif


        @foreach ($elements as $element)

        @if (is_string($element))

        <li class="disabled p-1" aria-disabled="true">
            <span class="btn btn-sm btn-primary">{{ $element }}</span>
        </li>

        @endif


        @if (is_array($element))
        @foreach ($element as $page => $url)



        @if ($page == $paginator->currentPage())

        <li class="active p-1" aria-current="page">
            <span class="btn btn-sm btn-primary">{{ $page }}</span>
        </li>

        @else

        <li class="p-1">
            <a href="{{ $url }}" class="btn btn-sm btn-outline-primary">{{ $page }}</a>
        </li>

        @endif



        @endforeach
        @endif

        @endforeach


        @if ($paginator->hasMorePages())
        <li class="p-1">
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-sm btn-outline-primary" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li>
        @else
        <li class="disabled p-1" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span class="btn btn-sm btn-outline-primary" aria-hidden="true">&rsaquo;</span>
        </li>
        @endif


    </ul>
</nav>
@endif

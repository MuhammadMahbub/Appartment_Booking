@if ($paginator->hasPages())
    <nav>
        <ul class="pagination" role="navigation">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">@lang('pagination.previous')</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->appends(['from' => request()->from, 'to' => request()->to])->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@lang('pagination.previous')</a>
                </li>
            @endif

            <?php
                $start = $paginator->currentPage() - 1;
                $end = $paginator->currentPage() + 1;
                if($start < 1) {
                    $start = 1;
                    $end += 1;
                }
                if($end >= $paginator->lastPage() ) $end = $paginator->lastPage(); // reset end to last page
            ?>

            @if($start > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url(1) }}">{{1}}</a>
                </li>
                @if($paginator->currentPage() != 3)
                    {{-- "Three Dots" Separator --}}
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                @endif
            @endif

            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{$i}}</a>
                </li>
            @endfor

            @if($end < $paginator->lastPage())
                @if($paginator->currentPage() + 2 != $paginator->lastPage())
                    {{-- "Three Dots" Separator --}}
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                @endif
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{$paginator->lastPage()}}</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->appends(['from' => request()->from, 'to' => request()->to])->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@lang('pagination.next')</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif

{{--<div class="card-footer clearfix">--}}
{{--    <ul class="pagination pagination-sm m-0 float-right">--}}
{{--        <li class="page-item"><a class="page-link" href="#">«</a></li>--}}
{{--        <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--        <li class="page-item"><a class="page-link" href="#">»</a></li>--}}
{{--    </ul>--}}
{{--</div>--}}

@if ($paginator->hasPages())
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true">
                    <span aria-hidden="true">«</span>
                </li>
            @else
{{--                <li>--}}
{{--                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--                </li>--}}
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">«</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </div>
@endif

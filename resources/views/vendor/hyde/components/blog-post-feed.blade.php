@php
    $paginator =
        $page->matter('paginator') ??
        new \Hyde\Support\Paginator(
            items: MarkdownPost::getLatestPosts(),
            pageSize: 6,
            currentPageNumber: 1,
            paginationRouteBasename: 'posts',
        );
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($paginator->getItemsForPage() as $post)
        @include('hyde::components.article-excerpt')
    @endforeach
</div>

@include('hyde::components.pagination-navigation')

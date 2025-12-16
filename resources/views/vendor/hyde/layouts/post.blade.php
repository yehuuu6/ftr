{{-- The Post Page Layout --}}
@extends('hyde::layouts.app')
@push('title', $page->title . ' - Ebru Başak FTR')
@section('content')
    <div class="mt-10 mb-16 p-10 lg:p-0">
        @include('hyde::components.post.article')
    </div>
@endsection

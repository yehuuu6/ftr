{{-- The Post Page Layout --}}
@extends('hyde::layouts.app')
@section('content')
    <div class="my-20 lg:my-32 p-10 lg:p-0">
        @include('hyde::components.post.article')
    </div>
@endsection

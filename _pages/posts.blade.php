@extends('hyde::layouts.app')
@push('title', 'Blog Gönderileri - Ebru Başak FTR')
@section('content')
    <div id="post-feed" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Tüm Blog Gönderilerimiz
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Sağlıklı yaşam ve fizyoterapi hakkında yazdığımız tüm makaleleri buradan inceleyebilirsiniz.
            </p>
        </div>
        @include('hyde::components.blog-post-feed')
    </div>
@endsection

@php
    /** @var \Hyde\Pages\MarkdownPost $post */
    use Carbon\Carbon;
@endphp

<article
    class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col"
    itemprop="item" itemscope itemtype="https://schema.org/BlogPosting">

    <meta itemprop="identifier" content="{{ $post->identifier }}">
    @if ($post->getCanonicalUrl())
        <meta itemprop="url" content="{{ $post->getCanonicalUrl() }}">
    @endif

    @if ($post->image)
        @php
            $imageUrl = $post->image;

            // Check if it's a full URL
if (str_starts_with($imageUrl, 'http')) {
    // It's a full URL, so we use it as-is
            } else {
                // It's a local file.
    // We must remove any leading slashes from the post's image path
                // to prevent double slashes (e.g., /media//image.jpg)
                $imagePath = ltrim($imageUrl, '/');

                // Now we safely build the asset path
                $imageUrl = asset('media/' . $imagePath);
            }
        @endphp

        {{-- Use the resulting $imageUrl variable here --}}
        <a href="{{ $post->getRoute() }}">
            <img src="{{ $imageUrl }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
        </a>
        {{-- And also here --}}
        <meta itemprop="image" content="{{ $imageUrl }}">
    @else
        {{-- Fallback Gradient --}}
        <a href="{{ $post->getRoute() }}">
            <div class="w-full h-48 bg-gradient-to-br from-teal-400 to-teal-600"></div>
        </a>
    @endif

    <div class="p-6 flex-1 flex flex-col">

        <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
            @if ($post->date)
                <span class="inline-flex items-center gap-1.5">
                    <x-tabler-calendar class="w-4 h-4 text-teal-600" />
                    <time itemprop="datePublished" datetime="{{ $post->date->datetime }}">
                        {{ Carbon::parse($post->date)->locale('tr_TR')->translatedFormat('j F Y') }}
                    </time>
                </span>
            @endif
        </div>

        <a href="{{ $post->getRoute() }}">
            <h2 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2 hover:text-teal-700 transition-colors"
                itemprop="headline">
                {{ $post->data('title') ?? $post->title }}
            </h2>
        </a>

        <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3 flex-1" itemprop="description">
            {{ $post->data('description') ?? ($post->excerpt ?? 'Yazıyı okumak için tıklayın...') }}
        </p>

        <div class="flex items-center justify-between pt-4 border-t border-gray-100">

            @isset($post->author)
                <span class="text-sm text-gray-500" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <meta itemprop="name" content="{{ $post->author->name ?? $post->author->username }}">
                    Fzt. {{ $post->author->name ?? $post->author->username }}
                </span>
            @endisset
        </div>
    </div>
</article>

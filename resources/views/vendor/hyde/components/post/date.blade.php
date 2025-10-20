Yayınlanma: <time itemprop="dateCreated datePublished" datetime="{{ $page->date->datetime }}"
    title="{{ $page->date->sentence }}">{{ \Carbon\Carbon::parse($page->date->datetime)->locale('tr_TR')->translatedFormat('j F Y') }}</time>

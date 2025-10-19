<!DOCTYPE html>
<html lang="{{ config('hyde.language', 'en') }}">

    <head>
        @include('hyde::layouts.head')
    </head>

    <body id="app" class="antialiased relative">
        <x-navbar />
        <main id="content">
            @yield('content')
        </main>
        <x-footer />

        <a href="https://web.whatsapp.com/send?phone=905077113318&text=Merhaba.%20Mesaj%C4%B1n%C4%B1z%C4%B1%20buraya%20yazabilirsiniz!"
            target="_blank" rel="noopener noreferrer" aria-label="WhatsApp ile İletişime Geçin"
            class="fixed bottom-6 right-6 z-50 flex size-16 items-center justify-center rounded-full bg-green-500 text-white shadow-lg transition-transform duration-200 ease-in-out hover:scale-110 hover:bg-green-600">
            <x-tabler-brand-whatsapp class="size-8" />
        </a>

        @include('hyde::layouts.scripts')

    </body>

</html>

<nav x-data="{ open: false }" class="fixed w-full top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto lg:px-0 px-6">
        <div class="flex justify-between items-center h-18">

            <a href="/"
                class="flex items-center justify-center w-fit gap-1 text-xl font-bold tracking-tight bg-gradient-to-r from-teal-900 to-green-700 text-transparent bg-clip-text hover:opacity-80 transition-opacity">
                <x-tabler-diamonds-f class="size-8 mr-0.5 -rotate-12 text-teal-900" />
                Ebru Başak FTR
            </a>

            <div class="hidden md:flex items-center gap-x-6 lg:gap-x-8">
                <a href="/"
                    class="group text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                    Ana Sayfa
                    <span
                        class="block max-w-0 group-hover:max-w-full transition-all duration-300 h-0.5 bg-teal-600"></span>
                </a>
                <a href="/#hizmetler"
                    class="group text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                    Hizmetler
                    <span
                        class="block max-w-0 group-hover:max-w-full transition-all duration-300 h-0.5 bg-teal-600"></span>
                </a>
                <a href="/#iletisim"
                    class="group text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                    İletişim
                    <span
                        class="block max-w-0 group-hover:max-w-full transition-all duration-300 h-0.5 bg-teal-600"></span>
                </a>
                <a href="/posts"
                    class="group text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                    Blog
                    <span
                        class="block max-w-0 group-hover:max-w-full transition-all duration-300 h-0.5 bg-teal-600"></span>
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button @click="open = !open"
                    class="p-2 inline-flex items-center justify-center text-gray-700 hover:text-teal-600 rounded-lg hover:bg-gray-100 transition">
                    <span class="sr-only">Menüyü aç</span>
                    <x-tabler-menu-2 x-show="!open" class="size-6" />
                    <x-tabler-x x-show="open" class="size-6" x-cloak />
                </button>
            </div>

        </div>
    </div>

    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="md:hidden w-full absolute bg-white border-t border-gray-100 shadow-lg" x-cloak>

        <div class="flex flex-col space-y-1 p-4">
            <a href="/"
                class="block px-4 py-2 text-gray-700 font-medium rounded-md hover:bg-teal-50 hover:text-teal-600">Ana
                Sayfa</a>
            <a href="/#hizmetler"
                class="block px-4 py-2 text-gray-700 font-medium rounded-md hover:bg-teal-50 hover:text-teal-600">Hizmetler</a>
            <a href="/#iletisim"
                class="block px-4 py-2 text-gray-700 font-medium rounded-md hover:bg-teal-50 hover:text-teal-600">İletişim</a>
            <a href="/posts"
                class="block px-4 py-2 text-gray-700 font-medium rounded-md hover:bg-teal-50 hover:text-teal-600">Blog</a>
        </div>
    </div>
</nav>

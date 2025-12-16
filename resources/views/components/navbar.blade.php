<div class="fixed w-full top-0 z-50">
    {{-- Top Banner --}}
    <div class="bg-gradient-to-r from-teal-900 via-teal-800 to-emerald-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto lg:px-0 px-5 py-2.5">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-4 text-sm">
                <div class="flex items-center gap-2">
                    <x-tabler-map-pin class="size-4 flex-shrink-0 text-teal-200" />
                    <span class="text-xs sm:text-sm font-medium">Atakent Mah. Şehit Celal İşen Cad. No 64 B, Etimesgut
                        Ankara</span>
                </div>
                <div class="flex items-center gap-4">
                    <a href="tel:+905077113318"
                        class="flex items-center gap-2 hover:text-teal-200 transition-colors group">
                        <x-tabler-phone class="size-4 flex-shrink-0 group-hover:scale-110 transition-transform" />
                        <span class="text-xs sm:text-sm font-semibold tracking-wide">+90 (507) 711 33 18</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Navigation --}}
    <nav x-data="{ open: false }" class="bg-white/90 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto lg:px-0 px-5">
            <div class="flex justify-between items-center h-18">

                <a href="/"
                    class="flex items-center justify-center w-fit gap-1 text-xl font-bold tracking-tight bg-gradient-to-r from-teal-900 to-green-700 text-transparent bg-clip-text hover:opacity-80 transition-opacity">
                    <x-tabler-diamonds-f class="size-8 mr-0.5 -rotate-12 text-teal-900" />
                    Ebru Başak FTR
                </a>

                <div class="hidden text-sm md:flex items-center gap-x-2">
                    <a href="/"
                        class="group text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                        Ana Sayfa
                        <span
                            class="block max-w-0 group-hover:max-w-full transition-all duration-300 h-0.5 bg-teal-600"></span>
                    </a>
                    <x-tabler-point-f class="size-2.5 text-gray-900" />
                    <a href="/#hizmetler"
                        class="group text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                        Hizmetler
                        <span
                            class="block max-w-0 group-hover:max-w-full transition-all duration-300 h-0.5 bg-teal-600"></span>
                    </a>
                    <x-tabler-point-f class="size-2.5 text-gray-900" />
                    <a href="/#iletisim"
                        class="group text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                        İletişim
                        <span
                            class="block max-w-0 group-hover:max-w-full transition-all duration-300 h-0.5 bg-teal-600"></span>
                    </a>
                    <x-tabler-point-f class="size-2.5 text-gray-900" />
                    <a href="/posts"
                        class="group text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                        Blog
                        <span
                            class="block max-w-0 group-hover:max-w-full transition-all duration-300 h-0.5 bg-teal-600"></span>
                    </a>
                    <a href="https://www.doktortakvimi.com/ebru-basak/fizyoterapi-ve-rehabilitasyon/ankara?utm_source=widget-null&utm_medium=link"
                        rel="nofollow" target="_blank"
                        class="ml-3.5 border border-teal-600 text-teal-600 shadow px-5 py-2 rounded-full font-semibold hover:bg-teal-600 hover:text-white transition">
                        Randevu Al
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
                    class="flex items-center gap-2 px-4 py-2 text-gray-700 font-medium rounded-md hover:bg-teal-50 hover:text-teal-600">
                    <x-tabler-home class="w-4 h-4" />
                    Ana Sayfa
                </a>
                <a href="/#hizmetler"
                    class="flex items-center gap-2 px-4 py-2 text-gray-700 font-medium rounded-md hover:bg-teal-50 hover:text-teal-600">
                    <x-tabler-heart-handshake class="w-4 h-4" />
                    Hizmetler
                </a>
                <a href="/#iletisim"
                    class="flex items-center gap-2 px-4 py-2 text-gray-700 font-medium rounded-md hover:bg-teal-50 hover:text-teal-600">
                    <x-tabler-mail class="w-4 h-4" />
                    İletişim
                </a>
                <a href="/posts"
                    class="flex items-center gap-2 px-4 py-2 text-gray-700 font-medium rounded-md hover:bg-teal-50 hover:text-teal-600">
                    <x-tabler-news class="w-4 h-4" />
                    Blog
                </a>
                <a href="https://www.doktortakvimi.com/ebru-basak/fizyoterapi-ve-rehabilitasyon/ankara?utm_source=widget-null&utm_medium=link"
                    rel="nofollow" target="_blank"
                    class="flex items-center gap-2 px-4 py-2 text-gray-700 font-medium rounded-md hover:bg-teal-50 hover:text-teal-600">
                    <x-tabler-calendar-check class="w-4 h-4" />
                    Randevu Al
                </a>
            </div>
        </div>
    </nav>

</div>

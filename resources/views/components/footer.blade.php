<footer class="py-16 bg-teal-950">
    <div class="max-w-7xl mx-auto lg:px-0 px-6">
        <div class="grid gap-8 sm:gap-12 md:grid-cols-[1.5fr_1fr] lg:grid-cols-[2fr_1fr_1fr] mb-12 sm:mb-16">
            <div class="space-y-4">
                <a href="{{ url('/') }}"
                    class="flex items-center w-fit gap-1 text-3xl font-bold tracking-tight bg-gradient-to-r from-teal-400 to-emerald-500 text-transparent bg-clip-text hover:opacity-80 transition-opacity">
                    <x-tabler-diamonds-f class="size-10 mr-1.5 -rotate-12 text-teal-400" />
                    Ebru Başak FTR
                </a>
                <p class="text-base font-medium text-gray-300 leading-relaxed max-w-md">
                    Sağlıklı yaşam ve ağrısız hareket için fizyoterapi çözümleri.
                </p>
                <div class="flex items-center gap-7 pt-3">
                    <a href="https://tr.linkedin.com/in/ebru-ba%C5%9Fak-73391b217" target="_blank"
                        rel="noopener noreferrer" class="text-gray-300 hover:text-teal-500 transition-all duration-150">
                        <x-tabler-brand-linkedin class="size-7" />
                    </a>
                    <a href="https://www.instagram.com/fztebrubasak/" target="_blank" rel="noopener noreferrer"
                        class="text-gray-300 hover:text-teal-500 transition-all duration-150">
                        <x-tabler-brand-instagram class="size-7" />
                    </a>
                    <a href="https://x.com/yehuuu6_" target="_blank" rel="noopener noreferrer"
                        class="text-gray-300 hover:text-teal-500 transition-all duration-150">
                        <x-tabler-brand-x class="size-7" />
                    </a>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-semibold uppercase tracking-wider text-white">
                    Hızlı Bağlantılar
                </h3>
                <nav class="flex flex-col gap-3">
                    <a href="/" class="text-gray-300 hover:text-teal-500 transition-colors w-fit">
                        Anasayfa
                    </a>
                    <a href="/#hizmetler" class="text-gray-300 hover:text-teal-500 transition-colors w-fit">
                        Hizmetler
                    </a>
                    <a href="/#iletisim" class="text-gray-300 hover:text-teal-500 transition-colors w-fit">
                        İletişim
                    </a>
                    <a href="/posts" class="text-gray-300 hover:text-teal-500 transition-colors w-fit">
                        Blog
                    </a>
                </nav>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-semibold uppercase tracking-wider text-white">
                    İletişim
                </h3>
                <div class="flex flex-col gap-3 text-gray-300">
                    <p>Atakent Mah. Şehit Celal İşen Cad. No 64 B, Elvankent Etimesgut Ankara</p>
                    <p>+90 (507) 711 33 18</p>
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-teal-700 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-gray-300 text-center sm:text-left">
                © {{ date('Y') }} Ebru Başak FTR. All rights reserved.
            </p>
            <span class="text-gray-300">
                Made with 🧠 by
                <a href="https://yehuuu.dev" target="_blank" class="text-green-500 hover:underline">@yehuuu6</a>
            </span>
        </div>
    </div>
</footer>

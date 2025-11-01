@extends('hyde::layouts.app')
@push('title', 'Ebru Başak FTR - Manuel Terapi ve Klinik Egzersiz Merkezi')
@section('content')
    <section id="anasayfa" class="relative pt-28 md:pt-36 pb-24 px-4 sm:px-6 lg:px-8 overflow-hidden">
        <div class="absolute inset-0 -z-10 bg-gradient-to-b from-white via-teal-50 to-cyan-50">
            <div class="absolute inset-0 opacity-70 animate-[moveGrid_20s_linear_infinite]"
                style="
        background-image:
          linear-gradient(to right, rgba(0, 200, 200, 0.25) 1px, transparent 1px),
          linear-gradient(to bottom, rgba(0, 200, 200, 0.25) 1px, transparent 1px);
        background-size: 120px 120px;
        filter: drop-shadow(0 0 6px rgba(0, 255, 255, 0.15));
      ">
            </div>
        </div>

        <div class="max-w-7xl mx-auto text-center relative z-10">
            <div class="inline-block mb-5 px-4 py-1.5 bg-teal-100 rounded-full backdrop-blur">
                <span class="text-teal-700 text-sm font-medium">Manuel Terapi ve Klinik Egzersiz Merkezi</span>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                Sağlıklı Yaşam,
                <span class="gradient-text block mt-2">
                    Ağrısız Hareket
                </span>
            </h1>

            <p class="text-lg text-gray-600 mb-8 leading-relaxed max-w-2xl mx-auto">
                Güncel tedavi ve rehabilitasyon yöntemleri ile kas-iskelet sistemi, sinir sistemi problemlerinizi
                çözmek için buradayız.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center w-fit mx-auto">
                <a href="https://www.doktortakvimi.com/ebru-basak/fizyoterapi-ve-rehabilitasyon/ankara?utm_source=widget-null&utm_medium=link"
                    rel="nofollow" target="_blank"
                    class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-gradient-to-t from-teal-600 to-cyan-600 text-white rounded-full font-semibold shadow-md transition hover:opacity-90">
                    <x-tabler-clipboard-check class="size-5 mr-2 shrink-0" />
                    Randevu Al
                </a>
                <a href="#hizmetler"
                    class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-white text-gray-900 rounded-full font-semibold border border-gray-200 shadow-sm transition hover:bg-gray-50">
                    <x-tabler-box class="size-5 mr-2 shrink-0" />
                    Hizmetlerimiz
                </a>
            </div>

            <div
                class="text-gray-700 font-medium mt-16 md:mt-24 flex flex-col lg:flex-row items-center justify-center gap-2 md:gap-1">
                <span class="text-black font-extrabold text-2xl sm:text-3xl inline-flex items-center gap-1">
                    Bireye Özgü Tedavi <x-tabler-bolt-f class="size-8 text-teal-400/50 md:ml-3 mr-0 md:mr-2" />
                </span>
                <span class="text-base sm:text-lg text-center md:text-left">
                    <span class="text-black font-semibold">
                        Güncel tedavi
                    </span>
                    yaklaşımları ile,
                    <span class="text-black font-semibold">
                        sağlığınıza
                    </span>
                    kavuşun.
                </span>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <hr class="border-t border-gray-200/75">
    </div>

    <section id="hizmetler" class="py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                    Hizmetlerimiz
                </h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto">
                    Fizyoterapi ve rehabilitasyon alanında sunduğumuz kapsamlı hizmetler
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="group rounded-3xl p-6 md:p-8 border border-gray-200 bg-gradient-to-br from-white to-gray-50/70 transition-all duration-300 hover:border-teal-200/80 hover:bg-white">
                    <div class="w-14 h-14 bg-teal-100 rounded-xl flex items-center justify-center mb-6">
                        <x-tabler-massage class="w-8 h-8 text-teal-600" />
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 transition-colors duration-300 group-hover:text-teal-700">
                        Manuel Terapi</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        El teknikleri ile kas-iskelet sistemi problemlerinize özel tedavi. Ağrı yönetimi ve hareket
                        kısıtlılıklarının giderilmesi.
                    </p>
                </div>

                <div
                    class="group rounded-3xl p-6 md:p-8 border border-gray-200 bg-gradient-to-br from-white to-gray-50/70 transition-all duration-300 hover:border-cyan-200/80 hover:bg-white">
                    <div class="w-14 h-14 bg-cyan-100 rounded-xl flex items-center justify-center mb-6">
                        <x-tabler-stretching class="w-8 h-8 text-cyan-600" />
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 transition-colors duration-300 group-hover:text-cyan-700">
                        Klinik Pilates</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Bireysel ihtiyaçlara yönelik klinik pilates seansları ile postür düzeltme ve fonksiyonel
                        güçlendirme.
                    </p>
                </div>

                <div
                    class="group rounded-3xl p-6 md:p-8 border border-gray-200 bg-gradient-to-br from-white to-gray-50/70 transition-all duration-300 hover:border-emerald-200/80 hover:bg-white">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <x-tabler-run class="w-8 h-8 text-emerald-600" />
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 transition-colors duration-300 group-hover:text-emerald-700">
                        Spor Yaralanmaları</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Spor yaralanmalarının tedavisi ve performans artırıcı egzersiz programları ile sporcu
                        sağlığı.
                    </p>
                </div>

                <div
                    class="group rounded-3xl p-6 md:p-8 border border-gray-200 bg-gradient-to-br from-white to-gray-50/70 transition-all duration-300 hover:border-blue-200/80 hover:bg-white">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <x-tabler-bone class="w-8 h-8 text-blue-600" />
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 transition-colors duration-300 group-hover:text-blue-700">
                        Ortopedik Rehabilitasyon</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Ameliyat sonrası iyileşme, kırık ve çıkık tedavileri için kapsamlı rehabilitasyon
                        programları.
                    </p>
                </div>

                <div
                    class="group rounded-3xl p-6 md:p-8 border border-gray-200 bg-gradient-to-br from-white to-gray-50/70 transition-all duration-300 hover:border-green-200/80 hover:bg-white">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <x-tabler-brain class="w-8 h-8 text-green-600" />
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 transition-colors duration-300 group-hover:text-green-700">
                        Nörolojik Rehabilitasyon</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        İnme, MS, Parkinson gibi nörolojik hastalıklarda fonksiyonel bağımsızlığı artırma.
                    </p>
                </div>

                <div
                    class="group rounded-3xl p-6 md:p-8 border border-gray-200 bg-gradient-to-br from-white to-gray-50/70 transition-all duration-300 hover:border-indigo-200/80 hover:bg-white">
                    <div class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <x-tabler-accessible class="w-8 h-8 text-indigo-600" />
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 transition-colors duration-300 group-hover:text-indigo-700">
                        Geriatrik Fizyoterapi</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Yaşlılarda denge, mobilite ve yaşam kalitesini artırmaya yönelik özel tedavi programları.
                    </p>
                </div>

                <div
                    class="group rounded-3xl p-6 md:p-8 border border-gray-200 bg-gradient-to-br from-white to-gray-50/70 transition-all duration-300 hover:border-violet-200/80 hover:bg-white">
                    <div class="w-14 h-14 bg-violet-100 rounded-xl flex items-center justify-center mb-6">
                        <x-tabler-bandage class="w-8 h-8 text-violet-600" />
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 transition-colors duration-300
                        group-hover:text-violet-700">
                        Ağrı Yönetimi</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Kronik ağrı, baş ağrısı ve bel ağrısı gibi durumların yönetimi için bireysel tedavi
                        planları.
                    </p>
                </div>

                <div
                    class="group rounded-3xl p-6 md:p-8 border border-gray-200 bg-gradient-to-br from-white to-gray-50/70 transition-all duration-300 hover:border-sky-200/80 hover:bg-white">
                    <div class="w-14 h-14 bg-sky-100 rounded-xl flex items-center justify-center mb-6">
                        <x-tabler-weight class="w-8 h-8 text-sky-600" />
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 transition-colors duration-300 group-hover:text-sky-700">
                        Bireysel Egzersiz</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Bireysel egzersiz programları ile hastaların ihtiyaçlarına özel çözümler sunuyoruz.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="iletisim" class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                    İletişime Geçin
                </h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto">
                    Randevu almak veya sorularınız için bizimle iletişime geçebilirsiniz
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">

                <div class="bg-white rounded-3xl shadow-lg p-6 sm:p-8 lg:p-10 flex flex-col h-full">
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-8">Klinik Bilgileri</h3>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <x-tabler-map-pin />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Adres</h4>
                                <p class="text-gray-600 leading-relaxed">
                                    Atakent Mahallesi Şehit Celal İşen Caddesi No 64 B <br> Elvankent Etimesgut, Ankara
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-cyan-100 text-cyan-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <x-tabler-phone />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Telefon</h4>
                                <p class="text-gray-600 leading-relaxed">
                                    +90 (507) 711 33 18
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <x-tabler-clock />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Çalışma Saatleri</h4>
                                <p class="text-gray-600 leading-relaxed">
                                    Pazartesi: Kapalı <br>
                                    Salı - Pazar: 10:00 - 22:00
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-auto pt-10">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="tel:+905077113318"
                                class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-gradient-to-t from-teal-600 to-cyan-600 text-white rounded-full font-semibold shadow-md transition hover:opacity-90">
                                <x-tabler-phone-call class="size-5 mr-2" />
                                Hemen Ara
                            </a>
                            <a href="https://wa.me/905077113318?text=Merhaba.%20Mesaj%C4%B1n%C4%B1z%C4%B1%20buraya%20yazabilirsiniz!"
                                target="_blank" rel="noopener noreferrer"
                                class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-white text-gray-900 rounded-full font-semibold border border-gray-200 shadow-sm transition hover:bg-gray-50">
                                <x-tabler-brand-whatsapp class="size-5 mr-2" />
                                WhatsApp'tan Yaz
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full h-[400px] sm:h-[500px] lg:h-full rounded-3xl overflow-hidden shadow-lg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1529.158277611564!2d32.61102819975162!3d39.956674697161084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d33b53911440d9%3A0x64e148ccb77ed9dc!2sFizyoterapist%20Ebru%20Ba%C5%9Fak!5e0!3m2!1str!2str!4v1760894732923!5m2!1str!2str"
                        class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>

    <section id="blog" class="py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                    Blog Gönderilerimiz
                </h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto">
                    Sağlıklı yaşam ve fizyoterapi hakkında en son gönderilerimizi keşfedin
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach (Hyde\Pages\MarkdownPost::all()->sortByDesc('date')->take(3) as $post)
                    @php
                        $imageUrl = $post->image;
                        if ($imageUrl) {
                            if (str_starts_with($imageUrl, 'http')) {
                            } else {
                                $imagePath = ltrim($imageUrl, '/');
                                $imageUrl = asset('media/' . $imagePath);
                            }
                        }
                    @endphp

                    <article
                        class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col"
                        itemprop="item" itemscope itemtype="https://schema.org/BlogPosting">

                        <meta itemprop="identifier" content="{{ $post->identifier }}">
                        @if ($post->getCanonicalUrl())
                            <meta itemprop="url" content="{{ $post->getCanonicalUrl() }}">
                        @endif

                        @if ($imageUrl)
                            <a href="{{ $post->getRoute() }}">
                                <img src="{{ $imageUrl }}" alt="{{ $post->title }}"
                                    class="w-full h-48 object-cover">
                            </a>
                            <meta itemprop="image" content="{{ $imageUrl }}">
                        @else
                            <a href="{{ $post->getRoute() }}">
                                <div class="w-full h-48 bg-gradient-to-br from-teal-400 to-teal-600"></div>
                            </a>
                        @endif

                        <div class="p-6 flex-1 flex flex-col">

                            <a href="{{ $post->getRoute() }}">
                                <h2 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2 hover:text-teal-700 transition-colors"
                                    itemprop="headline">
                                    {{ $post->data('title') ?? $post->title }}
                                </h2>
                            </a>

                            <div class="flex-1"></div>

                            <div
                                class="flex items-center justify-between gap-4 text-sm text-gray-500 pt-4 border-t border-gray-100">
                                @if ($post->date)
                                    <span class="inline-flex items-center gap-1.5">
                                        <x-tabler-calendar class="w-4 h-4 text-teal-600" />
                                        <time itemprop="datePublished" datetime="{{ $post->date->datetime }}">
                                            {{ Carbon\Carbon::parse($post->date)->locale('tr_TR')->translatedFormat('j F Y') }}
                                        </time>
                                    </span>
                                @endif
                                <x-tabler-arrow-right class="size-5 text-teal-500" />
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="text-center mt-16">
                <a href="/posts"
                    class="px-8 py-2.5 bg-white text-gray-900 rounded-full font-semibold text-sm border border-gray-900/10 transition-all duration-300 hover:border-gray-900/30 hover:bg-gray-50">
                    Tüm Yazıları Görüntüle
                </a>
            </div>
        </div>
    </section>
@endsection

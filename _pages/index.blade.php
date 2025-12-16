@extends('hyde::layouts.app')
@section('content')
    <section id="anasayfa" class="relative pt-28 pb-24 px-4 sm:px-6 lg:px-8 overflow-hidden">
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
                Güncel tedavi ve rehabilitasyon yöntemleri ile kas-iskelet sistemi ve sinir sistemi problemlerinizi
                çözmek için buradayız.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center w-fit mx-auto">
                <a href="#iletisim"
                    class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-gradient-to-t from-teal-600 to-cyan-600 text-white rounded-full font-semibold shadow-md transition hover:opacity-90">
                    <x-tabler-clipboard-check class="size-5 mr-2 shrink-0" />
                    Randevu Al
                </a>
                <a href="#hizmetler"
                    class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-white text-gray-900 rounded-full font-semibold border border-gray-200 shadow-sm transition hover:bg-gray-50">
                    <x-tabler-heart-handshake class="size-5 mr-2 shrink-0" />
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

    <section id="hizmetler"
        class="relative py-24 px-4 sm:px-6 lg:px-8 pb-40 bg-gradient-to-b from-slate-50 via-white to-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto relative z-10">
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
                    class="group relative bg-white rounded-2xl p-6 border border-gray-200 hover:border-teal-300 transition-all duration-300 hover:shadow-lg overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-teal-50 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-teal-50 text-teal-600 mb-4">
                            <x-tabler-massage class="w-5 h-5" />
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Manuel Terapi</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            El teknikleri ile kas-iskelet sistemi problemlerinize özel tedavi. Ağrı yönetimi ve hareket
                            kısıtlılıklarının giderilmesi.
                        </p>
                    </div>
                </div>

                <div
                    class="group relative bg-white rounded-2xl p-6 border border-gray-200 hover:border-cyan-300 transition-all duration-300 hover:shadow-lg overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-cyan-50 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-cyan-50 text-cyan-600 mb-4">
                            <x-tabler-stretching class="w-5 h-5" />
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Klinik Pilates</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Bireysel ihtiyaçlara yönelik klinik pilates seansları ile postür düzeltme ve fonksiyonel
                            güçlendirme.
                        </p>
                    </div>
                </div>

                <div
                    class="group relative bg-white rounded-2xl p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300 hover:shadow-lg overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-emerald-50 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 mb-4">
                            <x-tabler-run class="w-5 h-5" />
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Spor Yaralanmaları</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Spor yaralanmalarının tedavisi ve performans artırıcı egzersiz programları ile sporcu
                            sağlığı.
                        </p>
                    </div>
                </div>

                <div
                    class="group relative bg-white rounded-2xl p-6 border border-gray-200 hover:border-blue-300 transition-all duration-300 hover:shadow-lg overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-50 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-blue-50 text-blue-600 mb-4">
                            <x-tabler-bone class="w-5 h-5" />
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Ortopedik Rehabilitasyon</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Ameliyat sonrası iyileşme, kırık ve çıkık tedavileri için kapsamlı rehabilitasyon
                            programları.
                        </p>
                    </div>
                </div>

                <div
                    class="group relative bg-white rounded-2xl p-6 border border-gray-200 hover:border-purple-300 transition-all duration-300 hover:shadow-lg overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-50 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-purple-50 text-purple-600 mb-4">
                            <x-tabler-brain class="w-5 h-5" />
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Nörolojik Rehabilitasyon</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            İnme, MS, Parkinson gibi nörolojik hastalıklarda fonksiyonel bağımsızlığı artırma.
                        </p>
                    </div>
                </div>

                <div
                    class="group relative bg-white rounded-2xl p-6 border border-gray-200 hover:border-indigo-300 transition-all duration-300 hover:shadow-lg overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-indigo-50 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-indigo-50 text-indigo-600 mb-4">
                            <x-tabler-accessible class="w-5 h-5" />
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Geriatrik Fizyoterapi</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Yaşlılarda denge, mobilite ve yaşam kalitesini artırmaya yönelik özel tedavi programları.
                        </p>
                    </div>
                </div>

                <div
                    class="group relative bg-white rounded-2xl p-6 border border-gray-200 hover:border-rose-300 transition-all duration-300 hover:shadow-lg overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-rose-50 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-rose-50 text-rose-600 mb-4">
                            <x-tabler-bandage class="w-5 h-5" />
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Ağrı Yönetimi</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Kronik ağrı, baş ağrısı ve bel ağrısı gibi durumların yönetimi için bireysel tedavi
                            planları.
                        </p>
                    </div>
                </div>

                <div
                    class="group relative bg-white rounded-2xl p-6 border border-gray-200 hover:border-sky-300 transition-all duration-300 hover:shadow-lg overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-sky-50 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-sky-50 text-sky-600 mb-4">
                            <x-tabler-weight class="w-5 h-5" />
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Bireysel Egzersiz</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Bireysel egzersiz programları ile hastaların ihtiyaçlarına özel çözümler sunuyoruz.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tilted section divider --}}
        <div class="absolute bottom-0 left-0 right-0 h-24">
            <svg class="absolute bottom-0 w-full h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120"
                preserveAspectRatio="none">
                <path d="M0,60 Q180,100 360,60 T720,60 Q900,100 1080,60 T1440,60 L1440,120 L0,120 Z" fill="#f0fdfa"></path>
            </svg>
        </div>
    </section>

    <section id="iletisim"
        class="relative pt-16 px-4 sm:px-6 lg:px-8 pb-40 bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                    İletişime Geçin
                </h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto">
                    Randevu almak veya sorularınız için bizimle iletişime geçebilirsiniz
                </p>
            </div>

            {{-- DoktorTakvimi Randevu Widgeti ve Klinik Bilgileri --}}
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 max-w-6xl mx-auto">
                {{-- Randevu Widget --}}
                <div class="bg-white rounded-3xl shadow-lg p-6 sm:p-8 flex flex-col md:h-full h-[800px] lg:max-h-[800px]">
                    <div class="mb-6 pb-6 border-b border-gray-100">
                        <h3 class="text-xl font-semibold text-gray-900">Online Randevu</h3>
                        <p class="text-sm text-gray-500 mt-1">Müsait saatleri görüntüleyin ve randevu alın</p>
                    </div>
                    <div class="flex-1 flex items-center justify-center relative overflow-hidden">
                        {{-- Loading Placeholder --}}
                        <div id="widget-loading"
                            class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl z-20 pointer-events-none">
                            <div class="text-center">
                                <div
                                    class="inline-block w-12 h-12 border-4 border-teal-200 border-t-teal-600 rounded-full animate-spin mb-4">
                                </div>
                                <p class="text-gray-600 font-medium">Randevu takvimi yükleniyor...</p>
                            </div>
                        </div>
                        {{-- Widget --}}
                        <div class="w-full h-full">
                            <a id="zl-url" class="zl-url block"
                                href="https://www.doktortakvimi.com/ebru-basak/fizyoterapi-ve-rehabilitasyon/ankara"
                                rel="nofollow" data-zlw-doctor="ebru-basak" data-zlw-type="big_with_calendar"
                                data-zlw-opinion="false" data-zlw-hide-branding="true" data-zlw-saas-only="true"
                                data-zlw-a11y-title="Doktor randevu widgeti">Ebru Başak - DoktorTakvimi.com</a>
                        </div>
                    </div>
                </div>

                {{-- Klinik Bilgileri --}}
                <div
                    class="bg-white rounded-3xl shadow-lg p-6 sm:p-8 lg:p-10 flex flex-col h-full max-h-full lg:max-h-[800px]">
                    <div class="mb-8 pb-6 border-b border-gray-100">
                        <h3 class="text-xl font-semibold text-gray-900">Klinik Bilgileri</h3>
                        <p class="text-sm text-gray-500 mt-1">İletişim ve çalışma saatleri</p>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <h4 class="text-sm font-semibold text-gray-900 mb-2">Adres</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Atakent Mahallesi Şehit Celal İşen Caddesi No 64 B <br> Elvankent Etimesgut, Ankara
                            </p>
                        </div>

                        <div class="h-px bg-gray-100"></div>

                        <div>
                            <h4 class="text-sm font-semibold text-gray-900 mb-2">Telefon</h4>
                            <a href="tel:+905077113318"
                                class="text-gray-600 text-sm hover:text-teal-600 transition-colors">
                                +90 (507) 711 33 18
                            </a>
                        </div>

                        <div class="h-px bg-gray-100"></div>

                        <div>
                            <h4 class="text-sm font-semibold text-gray-900 mb-2">Çalışma Saatleri</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Pazartesi: Kapalı <br>
                                Salı - Pazar: 10:00 - 22:00
                            </p>
                        </div>

                        <div class="pt-6 mt-6 border-t border-gray-200">
                            <div class="rounded-xl p-5 bg-gradient-to-br from-teal-50 to-cyan-50">
                                <h4 class="text-sm font-semibold text-gray-900 mb-2">Randevu Bilgisi</h4>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    Randevu sistemi <a href="https://doktortakvimi.com" target="_blank"
                                        class="text-emerald-500 hover:underline font-semibold">Doktor Takvimi</a>
                                    tarafından
                                    sağlanmaktadır. Doğrudan iletişim için aşağıdaki butonları kullanabilirsiniz.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100 mt-6">
                        <div class="flex flex-col gap-4">
                            <a href="tel:+905077113318"
                                class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-t from-teal-600 to-cyan-600 text-white rounded-full font-semibold shadow-md transition hover:opacity-90">
                                <x-tabler-phone-call class="size-5 mr-2" />
                                Hemen Ara
                            </a>
                            <a href="https://wa.me/905077113318?text=Merhaba.%20Mesaj%C4%B1n%C4%B1z%C4%B1%20buraya%20yazabilirsiniz!"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center px-6 py-3 bg-white text-gray-900 rounded-full font-semibold border border-gray-200 shadow-sm transition hover:bg-gray-50">
                                <x-tabler-brand-whatsapp class="size-5 mr-2" />
                                WhatsApp'tan Yaz
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Google Maps --}}
            <div
                class="w-full h-[400px] sm:h-[500px] lg:h-[600px] rounded-3xl overflow-hidden shadow-lg max-w-6xl mx-auto mt-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1529.158277611564!2d32.61102819975162!3d39.956674697161084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d33b53911440d9%3A0x64e148ccb77ed9dc!2sFizyoterapist%20Ebru%20Ba%C5%9Fak!5e0!3m2!1str!2str!4v1760894732923!5m2!1str!2str"
                    class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        {{-- Tilted section divider --}}
        <div class="absolute bottom-0 left-0 right-0 h-24">
            <svg class="absolute bottom-0 w-full h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120"
                preserveAspectRatio="none">
                <path d="M0,60 Q180,100 360,60 T720,60 Q900,100 1080,60 T1440,60 L1440,120 L0,120 Z" fill="#ffffff"></path>
            </svg>
        </div>
    </section>

    <section id="blog" class="pt-16 pb-28 px-4 sm:px-6 lg:px-8 bg-white">
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
                    class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-white text-gray-900 rounded-full font-semibold border border-gray-200 shadow-sm transition hover:bg-gray-50">
                    Tüm Yazıları Görüntüle
                    <x-tabler-arrow-right class="size-5 ml-2 shrink-0" />
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- DoktorTakvimi Widget Script --}}
    <script>
        ! function($_x, _s, id) {
            var js, fjs = $_x.getElementsByTagName(_s)[0];
            if (!$_x.getElementById(id)) {
                js = $_x.createElement(_s);
                js.id = id;
                js.src = "//platform.docplanner.com/js/widget.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, "script", "zl-widget-s");

        // Hide loading placeholder once widget is loaded
        setTimeout(function() {
            const loadingElement = document.getElementById('widget-loading');
            if (loadingElement) {
                loadingElement.style.opacity = '0';
                loadingElement.style.transition = 'opacity 0.3s ease-out';
                setTimeout(function() {
                    loadingElement.style.display = 'none';
                }, 300);
            }
        }, 2000);

        // Also check if widget content is loaded via MutationObserver
        const observer = new MutationObserver(function(mutations) {
            const zlUrl = document.getElementById('zl-url');
            if (zlUrl && zlUrl.children.length > 0) {
                const loadingElement = document.getElementById('widget-loading');
                if (loadingElement) {
                    loadingElement.style.opacity = '0';
                    loadingElement.style.transition = 'opacity 0.3s ease-out';
                    setTimeout(function() {
                        loadingElement.style.display = 'none';
                    }, 300);
                }
                observer.disconnect();
            }
        });

        // Start observing the widget container
        const zlUrl = document.getElementById('zl-url');
        if (zlUrl) {
            observer.observe(zlUrl, {
                childList: true,
                subtree: true
            });
        }
    </script>
@endpush

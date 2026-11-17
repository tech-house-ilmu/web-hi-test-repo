@extends('layout.app')

@section('title', 'Mitra Media & Konten | House Ilmu Indonesia')
@section('meta_description', 'Mitra Media dan Kreator Konten bersama House Ilmu Indonesia. Berkolaborasi menyebarkan konten positif dan inspiratif bagi generasi muda.')

@section('hide_comments', true)

@php
    $collabType = rescue(fn() => \App\Models\CollaborationType::where('slug', 'media_partner')->first(), null, false);
    $dbPartners = rescue(fn() => \App\Models\CollaborationPartner::where('is_active', true)->orderBy('sort_order')->get(), collect(), false);
    if ($dbPartners->isNotEmpty()) {
        $partners = $dbPartners->map(fn($p) => [
            'name' => $p->name,
            'file' => $p->logo,
            'alt' => 'Logo ' . $p->name,
            'url' => $p->url,
        ])->toArray();
    } else {
        $partners = [
            ['name' => 'Black Swan Community', 'file' => 'black-swan-community.jpg', 'alt' => 'Logo Black Swan Community'],
            ['name' => 'Doteens', 'file' => 'doteens.png', 'alt' => 'Logo Doteens'],
            ['name' => 'FYI Psikologi', 'file' => 'fyi-psikologi.jpg', 'alt' => 'Logo FYI Psikologi'],
            ['name' => 'Gritty.', 'file' => 'gritty.jpg', 'alt' => 'Logo Gritty.'],
            ['name' => 'ImproveHub', 'file' => 'improve-hub.png', 'alt' => 'Logo ImproveHub'],
            ['name' => 'Kelas Kampus', 'file' => 'kelas-kampus.png', 'alt' => 'Logo Kelas Kampus'],
            ['name' => 'Growth Education', 'file' => 'growth-education.png', 'alt' => 'Logo Growth Education'],
            ['name' => 'GrowthHub', 'file' => 'growth-hub.png', 'alt' => 'Logo GrowthHub'],
            ['name' => 'HCK', 'file' => 'hck.png', 'alt' => 'Logo HCK'],
            ['name' => 'Ideal', 'file' => 'ideal.png', 'alt' => 'Logo Ideal'],
            ['name' => 'Kejar Mimpi Jakarta', 'file' => 'kejar-mimpi-jakarta.png', 'alt' => 'Logo Kejar Mimpi Jakarta'],
            ['name' => 'Mataharikita', 'file' => 'mataharikita.png', 'alt' => 'Logo Mataharikita'],
            ['name' => 'Oh Be Shine', 'file' => 'oh-be-shine.png', 'alt' => 'Logo Oh Be Shine'],
            ['name' => 'Ousean', 'file' => 'ousean.png', 'alt' => 'Logo Ousean'],
            ['name' => 'Quria', 'file' => 'quria.jpg', 'alt' => 'Logo Quria'],
            ['name' => 'Teman Ambiss', 'file' => 'teman-ambiss.png', 'alt' => 'Logo Teman Ambiss'],
            ['name' => 'Young On Top (YOT)', 'file' => 'yot.png', 'alt' => 'Logo Young On Top'],
            ['name' => 'Omah Jiwa', 'file' => 'omah-jiwa.png', 'alt' => 'Logo Omah Jiwa'],
            ['name' => 'Cakap', 'file' => 'cakap.png', 'alt' => 'Logo Cakap'],
            ['name' => 'Indorelawan', 'file' => 'indorelawan.png', 'alt' => 'Logo Indorelawan'],
            ['name' => 'Pemimpin.id', 'file' => 'pemimpin-id.jpg', 'alt' => 'Logo Pemimpin.id'],
            ['name' => 'Institut.id', 'file' => 'institut-id.png', 'alt' => 'Logo Institut.id'],
            ['name' => 'Phillip Sekuritas', 'file' => 'phillip-sekuritas.png', 'alt' => 'Logo Phillip Sekuritas'],
            ['name' => 'Girls Beyond', 'file' => 'girls-beyond.png', 'alt' => 'Logo Girls Beyond'],
        ];
    }
    $dbDocs = rescue(fn() => \App\Models\CollaborationDocumentation::where('is_active', true)
        ->whereIn('collaboration_type', ['all', 'media_partner'])
        ->orderBy('sort_order')
        ->get(), collect(), false);
    $collaborationDocs = $dbDocs ? $dbDocs->map(fn($d) => [
        'img' => str_starts_with($d->image, 'http') ? $d->image : (str_starts_with($d->image, 'img/') ? asset($d->image) : asset('storage/' . $d->image)),
        'alt' => $d->title ?? 'Dokumentasi Kolaborasi',
    ])->toArray() : [];
@endphp

@section('content')
<div class="min-h-screen bg-[#FFFDF8] py-10 sm:py-14">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Back Link -->
        <div class="mb-6">
            <a href="{{ route('partnership.index') }}#partnership-list" 
               class="inline-flex items-center gap-2 text-xs sm:text-sm font-semibold text-[#092C5B] hover:text-[#FF8A16] transition-colors">
                <span class="text-base leading-none">&larr;</span>
                <span>Kembali ke Kolaborasi Komunitas</span>
            </a>
        </div>

        <!-- Header Section -->
        <div class="text-center max-w-3xl mx-auto mb-10">
            <h1 class="font-serif text-[#FF8A16] text-2xl sm:text-3xl lg:text-4xl font-bold uppercase tracking-wide">
                MITRA MEDIA & KONTEN
            </h1>
            <div class="w-12 h-1 bg-[#FF8A16] rounded-full mx-auto my-3"></div>
            <p class="font-sans text-xs sm:text-sm md:text-[15px] text-[#334155] leading-relaxed mt-4">
                Kolaborasi bersama konten kreator, platform digital, dan media untuk menyebarkan informasi edukasi, peluang karier, serta inspirasi positif bagi anak muda Indonesia.
            </p>
        </div>

        <!-- 3 Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <!-- Card 1: Untuk Siapa & Proses Kolaborasi -->
            <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-6 sm:p-7 flex flex-col justify-start text-left shadow-xs">
                <h3 class="font-serif font-bold text-[#FF8A16] text-center text-sm sm:text-base uppercase tracking-wider mb-2.5">
                    UNTUK SIAPA
                </h3>
                <p class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed text-center mb-6">
                    Konten kreator, media digital, dan komunitas kreatif yang ingin menciptakan konten edukatif dan berdampak.
                </p>

                <h3 class="font-serif font-bold text-[#FF8A16] text-center text-sm sm:text-base uppercase tracking-wider mb-3">
                    PROSES KOLABORASI
                </h3>
                <ol class="space-y-2.5">
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">1</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Sampaikan kebutuhan dan ide konten.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">2</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Diskusikan konsep serta pembagian peran.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">3</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Publikasikan, evaluasi, dan dokumentasikan bersama.</span>
                    </li>
                </ol>
            </div>

            <!-- Card 2: Aktivitas -->
            <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-6 sm:p-7 flex flex-col justify-start text-left shadow-xs">
                <h3 class="font-serif font-bold text-[#FF8A16] text-center text-sm sm:text-base uppercase tracking-wider mb-4">
                    AKTIVITAS
                </h3>
                <ol class="space-y-2.5">
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">1</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Pembuatan konten bersama</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">2</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Kampanye media sosial</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">3</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Kolaborasi live session & webinar</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">4</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Wawancara narasumber / praktisi</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">5</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Distribusi informasi program</span>
                    </li>
                </ol>
            </div>

            <!-- Card 3: Manfaat -->
            <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-6 sm:p-7 flex flex-col justify-start text-left shadow-xs">
                <h3 class="font-serif font-bold text-[#FF8A16] text-center text-sm sm:text-base uppercase tracking-wider mb-4">
                    MANFAAT
                </h3>
                <ol class="space-y-2.5">
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">1</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Memperluas jangkauan konten</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">2</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Meningkatkan engagement audiens</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">3</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Membangun reputasi kolaboratif</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#FFF3E8] text-[#FF8A16] font-bold text-xs shrink-0 mt-0.5 border border-[#FF8A16]/30">4</span>
                        <span class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">Memberikan dampak nyata bagi anak muda</span>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Contoh Kolaborasi Box -->
        <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-6 sm:p-7 max-w-5xl mx-auto mt-6 mb-16 sm:mb-20 shadow-xs text-left" style="margin-bottom: 4rem;">
            <h4 class="font-sans font-bold text-[#092C5B] text-xs sm:text-sm uppercase tracking-wider mb-2">
                CONTOH KOLABORASI
            </h4>
            <p class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">
                Pembuatan video edukasi karier bersama, podcast atau Instagram Live bersama mentor ahli, serta kampanye konten inspiratif lintas platform.
            </p>
        </div>

        {{-- =========================================================================
             COLLABORATION DOCUMENTATION (DINONAKTIFKAN SEMENTARA - AKAN MUNCUL JIKA DIISI DARI ADMIN)
             ========================================================================= --}}
        @if(!empty($collaborationDocs) && count($collaborationDocs) > 0)
        <div class="mt-16 text-center" x-data="{
            activeDoc: 0,
            docs: {{ json_encode($collaborationDocs) }},
            next() {
                this.activeDoc = (this.activeDoc + 1) % this.docs.length;
            },
            prev() {
                this.activeDoc = (this.activeDoc - 1 + this.docs.length) % this.docs.length;
            }
        }">
            <h2 class="font-serif text-[#FF8A16] text-2xl sm:text-3xl font-bold uppercase tracking-wide">
                COLLABORATION DOCUMENTATION
            </h2>
            <div class="w-12 h-1 bg-[#FF8A16] rounded-full mx-auto my-3"></div>

            <div class="relative max-w-5xl mx-auto mt-8 px-4 sm:px-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <template x-for="(offset, i) in [0, 1, 2]" :key="i">
                        <div class="relative aspect-[16/10] bg-[#0A192F] rounded-2xl overflow-hidden shadow-md border border-[#1E40AF]/30 group">
                            <img :src="docs[(activeDoc + offset) % docs.length].img"
                                 :alt="docs[(activeDoc + offset) % docs.length].alt"
                                 class="w-full h-full object-cover select-none transition-transform duration-300 group-hover:scale-105" />
                        </div>
                    </template>
                </div>

                <button @click="prev()" type="button" aria-label="Previous slide"
                        class="absolute left-0 sm:left-1 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-[#092C5B] text-white flex items-center justify-center hover:bg-[#FF8A16] transition-colors shadow-md z-10">
                    <i class="fa-solid fa-chevron-left text-xs sm:text-sm"></i>
                </button>
                <button @click="next()" type="button" aria-label="Next slide"
                        class="absolute right-0 sm:right-1 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-[#092C5B] text-white flex items-center justify-center hover:bg-[#FF8A16] transition-colors shadow-md z-10">
                    <i class="fa-solid fa-chevron-right text-xs sm:text-sm"></i>
                </button>
            </div>

            <div class="flex items-center justify-center gap-2 mt-6">
                <template x-for="(dot, dIdx) in docs" :key="dIdx">
                    <button @click="activeDoc = dIdx"
                            :class="activeDoc === dIdx ? 'w-8 bg-[#FF8A16]' : 'w-2.5 bg-gray-300 hover:bg-gray-400'"
                            class="h-2.5 rounded-full transition-all duration-200"
                            :aria-label="'Go to slide ' + (dIdx + 1)"></button>
                </template>
            </div>
        </div>
        @endif

        <!-- CTA Box -->
        <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-8 sm:p-10 max-w-xl mx-auto my-16 sm:my-20 text-center shadow-xs" style="margin-top: 4rem; margin-bottom: 5rem; padding: 2.5rem 2rem;">
            <h3 class="font-serif font-bold text-[#FF8A16] text-base sm:text-xl uppercase tracking-wider mb-5">
                MARI MENCIPTAKAN DAMPAK BERMAKNA BERSAMA
            </h3>
            <a href="https://bit.ly/PartnershipHouseilmu" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2 bg-[#FF8A16] hover:bg-[#E67808] text-white text-xs sm:text-sm font-semibold px-8 py-3 rounded-xl shadow-sm transition-all duration-200">
                <span>Mari Berkolaborasi</span>
                <i class="fa-solid fa-arrow-trend-up text-xs"></i>
            </a>
        </div>

        <!-- Our Partner & Collaborator (Full 24 Partner Grid) -->
        <div class="mt-20 text-center max-w-5xl mx-auto mb-16" style="margin-top: 5rem;">
            <h2 class="font-serif text-[#092C5B] text-xl sm:text-2xl font-bold uppercase tracking-wide">
                OUR PARTNER & COLLABORATOR
            </h2>
            <p class="font-sans text-xs sm:text-sm text-[#5A6A80] mt-2 mb-8">
                Ruang kolaborasi yang tumbuh bersama House Ilmu Indonesia.
            </p>

            <div class="bg-[#DDE7F3] rounded-2xl p-6 sm:p-8 md:p-10">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 sm:gap-4">
                    @foreach ($partners as $partner)
                        <div class="bg-white rounded-xl shadow-xs p-3 aspect-[4/3] flex items-center justify-center border border-gray-100 hover:shadow-md hover:scale-105 transition-all duration-200">
                            @php
                                $logoSrc = str_starts_with($partner['file'], 'http') 
                                    ? $partner['file'] 
                                    : (str_starts_with($partner['file'], 'partners/') 
                                        ? asset('storage/' . $partner['file']) 
                                        : asset('img/partners/' . $partner['file']));
                            @endphp
                            <img src="{{ $logoSrc }}" 
                                 alt="{{ $partner['alt'] }}" 
                                 title="{{ $partner['name'] }}"
                                 loading="lazy"
                                 class="max-h-10 sm:max-h-12 max-w-full object-contain select-none">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

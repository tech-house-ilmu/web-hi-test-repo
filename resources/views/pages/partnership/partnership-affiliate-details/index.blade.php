@extends('layout.app')

@section('title', 'Affiliate | House Ilmu Indonesia')
@section('meta_description', 'Affiliate bersama House Ilmu Indonesia. Memperkenalkan dan mempromosikan programme serta peluang karir House Ilmu Indonesia.')

@section('hide_comments', true)

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
                AFFILIATE
            </h1>
            <div class="w-12 h-1 bg-[#FF8A16] rounded-full mx-auto my-3"></div>
            <p class="font-sans text-xs sm:text-sm md:text-[15px] text-[#334155] leading-relaxed mt-4">
                Affiliate adalah kolaborasi ketika individu, komunitas, kreator, atau partner membantu memperkenalkan dan mempromosikan programme serta opportunity House Ilmu Indonesia kepada audiens atau jaringan mereka.
            </p>
        </div>

        <!-- 3 Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <!-- Card 1: Untuk Siapa & Proses Kolaborasi -->
            <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-6 sm:p-7 flex flex-col justify-start text-center shadow-xs">
                <h3 class="font-serif font-bold text-[#FF8A16] text-sm sm:text-base uppercase tracking-wider mb-2.5">
                    UNTUK SIAPA
                </h3>
                <p class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed mb-6">
                    Komunitas, organisasi, perusahaan, kreator, dan media yang ingin menciptakan dampak relawan bagi generasi muda.
                </p>

                <h3 class="font-serif font-bold text-[#FF8A16] text-sm sm:text-base uppercase tracking-wider mb-2.5">
                    PROSES KOLABORASI
                </h3>
                <div class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed space-y-2">
                    <p>Sampaikan kebutuhan dan tujuan.</p>
                    <p>Diskusikan konsep serta pembagian peran.</p>
                    <p>Jalankan, evaluasi, dan dokumentasikan kolaborasi.</p>
                </div>
            </div>

            <!-- Card 2: Aktivitas -->
            <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-6 sm:p-7 flex flex-col justify-start text-center shadow-xs">
                <h3 class="font-serif font-bold text-[#FF8A16] text-sm sm:text-base uppercase tracking-wider mb-3">
                    AKTIVITAS
                </h3>
                <div class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed space-y-2">
                    <p>Membagikan program HI</p>
                    <p>Mempromosikan pendaftaran</p>
                    <p>Membagikan konten media sosial</p>
                    <p>Memperkenalkan kesempatan relawan</p>
                    <p>Mendukung jangkauan program</p>
                </div>
            </div>

            <!-- Card 3: Manfaat -->
            <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-6 sm:p-7 flex flex-col justify-start text-center shadow-xs">
                <h3 class="font-serif font-bold text-[#FF8A16] text-sm sm:text-base uppercase tracking-wider mb-3">
                    MANFAAT
                </h3>
                <div class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed space-y-2">
                    <p>Membantu kesempatan pendidikan menjangkau lebih banyak anak muda</p>
                    <p>Menghubungkan audiens dengan peluang karier yang relevan</p>
                </div>
            </div>
        </div>

        <!-- Contoh Kolaborasi Box -->
        <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-6 sm:p-7 max-w-5xl mx-auto mt-6 shadow-xs text-left">
            <h4 class="font-sans font-bold text-[#092C5B] text-xs sm:text-sm uppercase tracking-wider mb-2">
                CONTOH KOLABORASI
            </h4>
            <p class="font-sans text-xs sm:text-[13px] text-[#475569] leading-relaxed">
                Sesi pengembangan karier bersama, kampanye edukasi lintas kanal, atau kegiatan komunitas yang mempertemukan peserta dengan praktisi.
            </p>
        </div>

        <!-- Collaboration Documentation -->
        <div class="mt-16 text-center" x-data="{
            activeDoc: 0,
            docs: [
                { img: '{{ asset('img/partnership/doc-1.png') }}', alt: 'Collaboration Documentation Zoom 1' },
                { img: '{{ asset('img/partnership/doc-2.png') }}', alt: 'Collaboration Documentation Zoom 2' },
                { img: '{{ asset('img/partnership/doc-3.png') }}', alt: 'Collaboration Documentation Zoom 3' },
                { img: '{{ asset('img/partnership/hero-zoom.png') }}', alt: 'Collaboration Documentation Zoom 4' },
                { img: '{{ asset('img/partnership-hero-zoom.webp') }}', alt: 'Collaboration Documentation Zoom 5' }
            ],
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
                <!-- 3 Cards Row -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <template x-for="(offset, i) in [0, 1, 2]" :key="i">
                        <div class="relative aspect-[16/10] bg-[#0A192F] rounded-2xl overflow-hidden shadow-md border border-[#1E40AF]/30 group">
                            <img :src="docs[(activeDoc + offset) % docs.length].img"
                                 :alt="docs[(activeDoc + offset) % docs.length].alt"
                                 class="w-full h-full object-cover select-none transition-transform duration-300 group-hover:scale-105" />
                        </div>
                    </template>
                </div>

                <!-- Navigation Arrows -->
                <button @click="prev()" type="button" aria-label="Previous slide"
                        class="absolute left-0 sm:left-1 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-[#092C5B] text-white flex items-center justify-center hover:bg-[#FF8A16] transition-colors shadow-md z-10">
                    <i class="fa-solid fa-chevron-left text-xs sm:text-sm"></i>
                </button>
                <button @click="next()" type="button" aria-label="Next slide"
                        class="absolute right-0 sm:right-1 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-[#092C5B] text-white flex items-center justify-center hover:bg-[#FF8A16] transition-colors shadow-md z-10">
                    <i class="fa-solid fa-chevron-right text-xs sm:text-sm"></i>
                </button>
            </div>

            <!-- Dots Indicator -->
            <div class="flex items-center justify-center gap-2 mt-6">
                <template x-for="(dot, dIdx) in docs" :key="dIdx">
                    <button @click="activeDoc = dIdx"
                            :class="activeDoc === dIdx ? 'w-8 bg-[#FF8A16]' : 'w-2.5 bg-gray-300 hover:bg-gray-400'"
                            class="h-2.5 rounded-full transition-all duration-200"
                            :aria-label="'Go to slide ' + (dIdx + 1)"></button>
                </template>
            </div>
        </div>

        <!-- CTA Box -->
        <div class="bg-white border-2 border-[#1E40AF] rounded-2xl p-6 sm:p-8 max-w-xl mx-auto mt-14 text-center shadow-xs">
            <h3 class="font-serif font-bold text-[#FF8A16] text-base sm:text-lg uppercase tracking-wider mb-4">
                MARI MENCIPTAKAN DAMPAK BERMAKNA BERSAMA
            </h3>
            <a href="https://bit.ly/PartnershipHouseilmu" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2 bg-[#FF8A16] hover:bg-[#E67808] text-white text-xs sm:text-sm font-semibold px-6 py-2.5 rounded-lg shadow-sm transition-all duration-200">
                <span>Mari Berkolaborasi</span>
                <span>&#x2197;</span>
            </a>
        </div>

        <!-- Our Partner & Collaborator -->
        <div class="mt-16 text-center max-w-5xl mx-auto mb-16">
            <h2 class="font-serif text-[#092C5B] text-xl sm:text-2xl font-bold uppercase tracking-wide">
                OUR PARTNER & COLLABORATOR
            </h2>
            <p class="font-sans text-xs sm:text-sm text-[#5A6A80] mt-2 mb-8">
                Ruang kolaborasi yang tumbuh bersama House Ilmu Indonesia.
            </p>

            <div class="bg-[#DDE7F3] rounded-2xl p-6 sm:p-10 flex flex-wrap items-center justify-center gap-6 sm:gap-10">
                <div class="bg-white rounded-xl shadow-xs p-3 sm:p-4 w-28 h-20 sm:w-36 sm:h-24 flex items-center justify-center">
                    <img src="{{ asset('img/partnership/partner-girls-beyond.png') }}" alt="Girls Beyond" class="max-h-12 max-w-full object-contain">
                </div>
                <div class="bg-white rounded-xl shadow-xs p-3 sm:p-4 w-28 h-20 sm:w-36 sm:h-24 flex items-center justify-center">
                    <img src="{{ asset('img/partnership/partner-ideal.png') }}" alt="Ideal" class="max-h-12 max-w-full object-contain">
                </div>
                <div class="bg-[#1E5799] rounded-xl shadow-xs p-3 sm:p-4 w-28 h-20 sm:w-36 sm:h-24 flex items-center justify-center">
                    <img src="{{ asset('img/partnership/partner-pemimpin.png') }}" alt="Pemimpin.id" class="max-h-12 max-w-full object-contain">
                </div>
                <div class="bg-white rounded-xl shadow-xs p-3 sm:p-4 w-28 h-20 sm:w-36 sm:h-24 flex items-center justify-center">
                    <img src="{{ asset('img/partnership/partner-phillip.png') }}" alt="Phillip Sekuritas Indonesia" class="max-h-12 max-w-full object-contain">
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

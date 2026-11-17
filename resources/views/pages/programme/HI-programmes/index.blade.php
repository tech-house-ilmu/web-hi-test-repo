@extends('layout.app')

@section('title', 'HI Programmes | House Ilmu Indonesia')
@section('meta_description', 'Temukan program yang bisa membantumu belajar, berkembang, dan mempersiapkan langkah karirmu bersama House Ilmu Indonesia.')
@section('hide_comments', true)

@section('content')
@php
    $heroItems = $heroItems ?? \App\Repositories\HIProgrammeRepository::getHeroItems();
    $onlinePrograms = $onlinePrograms ?? \App\Repositories\HIProgrammeRepository::getOnlineProgrammes();
    $offlinePrograms = $offlinePrograms ?? \App\Repositories\HIProgrammeRepository::getOfflineProgrammes();
    $upcomingEvents = $upcomingEvents ?? \App\Repositories\HIProgrammeRepository::getUpcomingEvents();
@endphp

<!-- =========================================================================
     HERO SECTION - 1:1 FIGMA IMPLEMENTATION
     ========================================================================= -->
<section class="programme-hero-section">
    <div class="programme-hero-container">
        
        <!-- Left Column: Headline & CTA -->
        <div class="programme-hero-left">
            <span class="programme-hero-tag">
                HI PROGRAM
            </span>
            
            <h1 class="programme-hero-title">
                Learn, Grow,<br>
                and Get<br>
                Achievement<br>
                Together
            </h1>

            <p class="programme-hero-desc">
                Temukan program yang bisa membantumu belajar, berkembang, dan mempersiapkan langkah berikutnya.
            </p>

            <a href="#explore-programmes" class="programme-hero-btn">
                <span>Jelajahi Semua Program</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <!-- Right Column: Interactive 3D Card Carousel -->
        <div class="programme-hero-right">
            
            <!-- Cards Stage Container -->
            <div class="hero-carousel-stage select-none">
                
                @foreach($heroItems as $index => $item)
                    @php
                        $slideStateClass = $index === 0 ? 'active' : ($index === 5 ? 'prev' : ($index === 1 ? 'next' : 'hidden-slide'));
                    @endphp
                    <div 
                        class="carousel-slide-item {{ $slideStateClass }}"
                        data-index="{{ $index }}"
                        data-title="{{ $item['title'] }}"
                        data-type="{{ $item['type'] }}"
                    >
                        <img 
                            src="{{ asset($item['image']) }}" 
                            alt="{{ $item['title'] }}" 
                            loading="{{ $index === 0 ? 'eager' : 'lazy' }}" 
                            decoding="async"
                        >
                    </div>
                @endforeach

                <!-- Prev & Next Overlay Buttons -->
                <button 
                    type="button" 
                    id="carousel-prev-btn" 
                    class="carousel-nav-btn carousel-prev-btn"
                    aria-label="Previous Slide"
                >
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button 
                    type="button" 
                    id="carousel-next-btn" 
                    class="carousel-nav-btn carousel-next-btn"
                    aria-label="Next Slide"
                >
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <!-- Slide Status: Title, Type & Numeric Counter -->
            <div class="carousel-status-bar">
                <div class="carousel-status-top">
                    <div>
                        <h2 id="carousel-active-title" class="carousel-status-title">
                            {{ $heroItems[0]['title'] }}
                        </h2>
                        <p id="carousel-active-type" class="carousel-status-type">
                            {{ $heroItems[0]['type'] }}
                        </p>
                    </div>
                    <div id="carousel-active-counter" class="carousel-status-counter">
                        01 / 06
                    </div>
                </div>

                <!-- Navigation Indicator Dots (Bars) -->
                <div class="carousel-dots-container">
                    @foreach($heroItems as $index => $item)
                        <button 
                            type="button" 
                            class="carousel-dot {{ $index === 0 ? 'active-dot' : 'inactive-dot' }}" 
                            data-dot-index="{{ $index }}"
                            aria-label="Slide {{ $index + 1 }}"
                        ></button>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================================
     EXPLORE OUR PROGRAMMES SECTION - 1:1 FIGMA IMPLEMENTATION
     ========================================================================= -->
<section id="explore-programmes" class="programme-explore-section">
    <div class="programme-explore-container">
        
        <!-- Section Header -->
        <div class="programme-section-header">
            <h2 class="programme-section-title">
                EXPLORE OUR PROGRAMMES
            </h2>
            <div class="programme-title-accent"></div>
            <p class="programme-section-subtitle">
                Temukan program untuk belajar, terhubung, dan bertumbuh bersama.
            </p>
        </div>

        <!-- Category 1: Online Programmes -->
        <div class="explore-category-block">
            <h3 class="explore-category-title">
                ONLINE PROGRAMMES
            </h3>
            <div class="explore-cards-grid">
                @foreach($onlinePrograms as $prog)
                    <div class="programme-feature-card">
                        <div>
                            <h4 class="programme-card-title">
                                {{ $prog['title'] }}
                            </h4>
                            <p class="programme-card-desc">
                                {{ $prog['desc'] }}
                            </p>
                        </div>
                        <div>
                            <a 
                                href="#{{ $prog['target'] }}" 
                                class="programme-card-link explore-program-link"
                                data-target="{{ $prog['target'] }}"
                            >
                                <span>Selengkapnya</span>
                                <span>&#8599;</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Category 2: Offline Programmes -->
        <div class="explore-category-block">
            <h3 class="explore-category-title">
                OFFLINE PROGRAMMES
            </h3>
            <div class="explore-cards-grid">
                @foreach($offlinePrograms as $prog)
                    <div class="programme-feature-card">
                        <div>
                            <h4 class="programme-card-title">
                                {{ $prog['title'] }}
                            </h4>
                            <p class="programme-card-desc">
                                {{ $prog['desc'] }}
                            </p>
                        </div>
                        <div>
                            <a 
                                href="#{{ $prog['target'] }}" 
                                class="programme-card-link explore-program-link"
                                data-target="{{ $prog['target'] }}"
                            >
                                <span>Selengkapnya</span>
                                <span>&#8599;</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- =========================================================================
     UPCOMING EVENT SECTION - 1:1 FIGMA IMPLEMENTATION
     ========================================================================= -->
<section id="upcoming-events" class="programme-upcoming-section">
    <div class="programme-upcoming-container">
        
        <!-- Section Header -->
        <div class="programme-section-header">
            <h2 class="programme-section-title">
                UPCOMING EVENT
            </h2>
            <div class="programme-title-accent"></div>
        </div>

        @php
            $activeEvents = \App\Models\Event::where('is_active', true)->get();
        @endphp

        @if($activeEvents->count() > 0)
            <!-- Events List dari Database (dikelola melalui Admin Site) -->
            <div class="upcoming-cards-stack">
                @foreach($activeEvents as $event)
                    @php
                        $firstImg = null;
                        if (!empty($event->images)) {
                            $firstImg = is_array($event->images) ? ($event->images[0] ?? null) : $event->images;
                        }
                        $imgUrl = $firstImg ? (file_exists(public_path('storage/' . $firstImg)) ? asset('storage/' . $firstImg) : (file_exists(public_path($firstImg)) ? asset($firstImg) : asset('img/programmes/poster-webskill.webp'))) : asset('img/programmes/poster-webskill.webp');
                        $desc = Str::limit(strip_tags($event->description ?? ''), 130);
                    @endphp
                    <div class="upcoming-event-card event-card">
                        <!-- Left: Poster Image -->
                        <div class="upcoming-card-poster">
                            <img 
                                src="{{ $imgUrl }}" 
                                alt="{{ $event->title }}" 
                                loading="lazy" 
                                decoding="async"
                            >
                        </div>

                        <!-- Right: Info Details -->
                        <div class="upcoming-card-content">
                            <div>
                                <!-- Header Row: Category Pill & Status Tag -->
                                <div class="upcoming-card-top">
                                    <span class="upcoming-badge-pill">
                                        {{ $event->tagline ?: 'House Ilmu' }}
                                    </span>
                                    <span class="upcoming-status-tag">
                                        Akan datang
                                    </span>
                                </div>

                                <!-- Title -->
                                <h3 class="upcoming-card-title">
                                    {{ $event->title }}
                                </h3>

                                <!-- Schedule & Announcement Note -->
                                <div>
                                    <p class="upcoming-meta-status">
                                        Pendaftaran Dibuka
                                    </p>
                                    <p class="upcoming-meta-note">
                                        {{ $desc }}
                                    </p>
                                </div>
                            </div>

                            <!-- Action Link -->
                            <div>
                                <a 
                                    href="{{ $event->registration_link ?: '#' }}" 
                                    target="_blank" 
                                    rel="noopener noreferrer" 
                                    class="upcoming-detail-link"
                                >
                                    <span>Lihat Detail / Daftar</span>
                                    <span>&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Coming Soon State -->
            <div class="programme-upcoming-coming-soon">
                <h3 class="programme-cs-title">COMING SOON</h3>
                <p class="programme-cs-desc">
                     Tim House Ilmu Indonesia sedang merancang agenda belajar dan kegiatan interaktif berikutnya. Nantikan informasinya melalui halaman ini atau media sosial kami.
                </p>
            </div>
        @endif

    </div>
</section>

<!-- =========================================================================
     INTERACTIVE DETAIL MODAL
     ========================================================================= -->
<div 
    id="event-detail-modal" 
    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-xs opacity-0 pointer-events-none transition-all duration-300"
    role="dialog"
    aria-modal="true"
>
    <div 
        id="modal-card" 
        class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-all duration-300 relative border border-gray-100"
    >
        <button 
            id="close-modal-btn" 
            type="button" 
            class="absolute top-5 right-5 w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-500 hover:text-gray-800 flex items-center justify-center transition cursor-pointer"
            aria-label="Tutup Modal"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="flex flex-col sm:flex-row gap-5 items-center sm:items-start">
            <div class="w-36 h-48 rounded-2xl overflow-hidden shrink-0 border border-gray-100 shadow-sm bg-gray-50">
                <img id="modal-img" src="" alt="Poster Event" class="w-full h-full object-cover">
            </div>

            <div class="flex-1 text-center sm:text-left">
                <span id="modal-badge" class="px-3 py-1 rounded-full text-xs font-semibold bg-[#EBF3FF] text-[#1856C9] inline-block mb-2 font-sans-clean"></span>
                <h3 id="modal-title" class="font-editorial text-lg sm:text-xl font-bold text-[#152A5E] leading-snug mb-1"></h3>
                <p id="modal-status" class="text-xs font-bold text-[#FF8A18] mb-2 font-sans-clean"></p>
                <p id="modal-desc" class="text-xs text-gray-600 font-sans-clean leading-relaxed"></p>
            </div>
        </div>

        <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-end gap-3 font-sans-clean">
            <button 
                id="modal-cancel-btn"
                type="button"
                class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 text-xs font-semibold transition cursor-pointer"
            >
                Tutup
            </button>
            <a 
                href="https://www.instagram.com/houseilmu.id" 
                target="_blank" 
                rel="noopener noreferrer"
                class="px-5 py-2.5 rounded-xl bg-[#FF8A16] hover:bg-[#E8730C] text-white text-xs font-bold transition shadow-sm inline-flex items-center gap-1.5 cursor-pointer"
            >
                <i class="fa-brands fa-instagram"></i>
                <span>Follow IG House Ilmu</span>
            </a>
        </div>
    </div>
</div>
@endsection

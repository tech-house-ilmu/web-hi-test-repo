@extends('layout.app')

@section('title', 'HI Opportunities | House Ilmu Indonesia')

@section('head')

@section('content')
      <!-- Main -->
    <section class="container-xxl my-4">
      <!-- Search Bar -->
      <div class="search-container container text-white">
        <div class="input-group">
          <input type="text" id="searchInput" class="form-control" placeholder="Search by Internship, competition, volunteer, & exchange"/>
          <button class="btn search-btn-custom btn-lg"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
        </div>
        <!-- button filtered -->
        <!-- filter masih d-none karna belum fix isinya -->
        <div class="filter-component d-none align-items-center mt-3 gap-2">
          <span class="text-white">Urutkan:</span>
          <button class="btn filter-btn-custom text-white">Terbaru <i class="fa-solid fa-chevron-down ms-1"></i></button>
          <button class="btn filter-btn-custom text-white">Jenis <i class="fa-solid fa-chevron-down ms-1"></i></button>
          <button class="btn filter-btn-custom text-white">Tipe<i class="fa-solid fa-chevron-down ms-1"></i></button>
          <button class="btn filter-btn-custom text-white">Lokasi<i class="fa-solid fa-chevron-down ms-1"></i></button>
        </div>
      </div>

      <!-- Category Cards -->
      <div class="category-card container justify-content-between mt-4 gap-1">
        <div class="category-item text-center border-custom p-0">
          <img src="{{ asset('img/homepage/img-opp/semua.jpg') }}" alt="Logo House Ilmu Indonesia"/>
          <div class="d-flex justify-content-center card-img">
            <span class="category-label">Semua</span>
          </div>
        </div>
        <div class="category-item text-center border-custom p-0">
          <img src="{{ asset('img/homepage/img-opp/internship.jpg') }}" alt="Logo House Ilmu Indonesia"/>
          <div class="card-img d-flex justify-content-center">
            <span class="category-label">Internship</span>
          </div>
        </div>
        <div class="category-item text-center border-custom p-0">
          <img src="{{ asset('img/homepage/img-opp/competition.jpg') }}" alt="Logo House Ilmu Indonesia"/>
          <div class="card-img d-flex justify-content-center">
            <span class="category-label">Competition</span>
          </div>
        </div>
        <div class="category-item text-center border-custom p-0">
          <img src="{{ asset('img/homepage/img-opp/volunteer.jpg') }}" alt="Logo House Ilmu Indonesia"/>
          <div class="card-img d-flex justify-content-center">
            <span class="category-label">Volunteer</span>
          </div>
        </div>
        <div class="category-item text-center border-custom p-0">
          <img src="{{ asset('img/homepage/img-opp/exchange.jpg') }}" alt="Logo House Ilmu Indonesia"/>
          <div class="card-img d-flex justify-content-center">
            <span class="category-label">Exchange</span>
          </div>
        </div>
        <div class="category-item text-center border-custom p-0">
            <img src="{{ asset('img/homepage/img-opp/beasiswa.jpeg') }}" alt="Logo House Ilmu Indonesia">
            <div class="card-img d-flex justify-content-center">
                <span class="category-label">Beasiswa</span>
            </div>
        </div>
      </div>

      <div class="cards-container container-xxl d-flex flex-wrap my-4 gap-3 justify-content-center align-items-start">
        <div class="beasiswa card-box px-4 px-md-0">
            <a href="/programme/beasiswa/beasiswa-iyi-international.html"
                class="card-custom d-flex align-items-center">
                <img src="/assets/img-opp/beasiswa/IVaYF.png" class="card-img-top"
                    alt="Card Image">
                <div class="card-overlay"></div>
                <div style="top: 0%;" class="card-body small-text">
                    <div class="card-title d-flex align-items-center gap-2">
                        <img src="/assets/img-opp/beasiswa/logo-IYI.png" class="logo col-3"
                            alt="Logo House Ilmu Indonesia">
                        <div class="col-9 d-flex flex-column gap-2">
                            <h1 style="font-size: clamp(0.8rem, 1vw, 0.9rem);">Beasiswa International Volunteer and Youth Fellowship
                                IYI Chapter 3 Malaysia - Singapura
                            </h1>
                            <h5 style="font-size: clamp(0.8rem, 1vw, 0.8rem);">International Youth Impact</h5>
                        </div>
                    </div>
                    <div class="card-details mt-3 d-flex flex-row align-items-center gap-2">
                        <div
                            class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3">
                            <i class="fa-solid fa-money-bill-wave"></i>
                            <i class="fa-solid fa-graduation-cap"></i>
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="card-info col-9 d-flex flex-column align-items-start gap-2">
                            <p>Fully Funded</p>
                            <p>Beasiswa</p>
                            <p>07 Juni 2025</p>
                        </div>
                    </div>
                    <!-- <span class="badge custom-badge mt-5">Kesempatan lebih tinggi</span> -->
                </div>
            </a>
        </div>
      </div>

    </section>
@endsection


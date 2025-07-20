@extends('layout.app')

@section('title', 'HI Opportunities | House Ilmu Indonesia')

@section('head')

@section('content')
      <!-- Main -->
    <section class="container-xxl my-4">
      <!-- Search Bar -->
      <div class="search-container container text-white">
        <div class="input-group">
          <input
            type="text"
            id="searchInput"
            class="form-control"
            placeholder="Search by Internship, competition, volunteer, & exchange"
          />
          <button class="btn search-btn-custom btn-lg">
            <i class="fa-solid fa-magnifying-glass"></i>
            Search
          </button>
        </div>
        <!-- button filtered -->
        <!-- filter masih d-none karna belum fix isinya -->
        <div class="filter-component d-none align-items-center mt-3 gap-2">
          <span class="text-white">Urutkan:</span>
          <button class="btn filter-btn-custom text-white">
            Terbaru
            <i class="fa-solid fa-chevron-down ms-1"></i>
          </button>
          <button class="btn filter-btn-custom text-white">
            Jenis
            <i class="fa-solid fa-chevron-down ms-1"></i>
          </button>
          <button class="btn filter-btn-custom text-white">
            Tipe
            <i class="fa-solid fa-chevron-down ms-1"></i>
          </button>
          <button class="btn filter-btn-custom text-white">
            Lokasi
            <i class="fa-solid fa-chevron-down ms-1"></i>
          </button>
        </div>
      </div>

      <!-- Category Cards -->
      <div class="category-card container justify-content-between mt-4 gap-1">
        <div class="category-item text-center border-custom p-0">
          <img
            src="{{ asset('img/homepage/img-opp/semua.jpg') }}"
            alt="Logo House Ilmu Indonesia"
          />
          <div class="d-flex justify-content-center card-img">
            <span class="category-label">Semua</span>
          </div>
        </div>
        <div class="category-item text-center border-custom p-0">
          <img
            src="{{ asset('img/homepage/img-opp/internship.jpg') }}"
            alt="Logo House Ilmu Indonesia"
          />
          <div class="card-img d-flex justify-content-center">
            <span class="category-label">Internship</span>
          </div>
        </div>
        <div class="category-item text-center border-custom p-0">
          <img
            src="{{ asset('img/homepage/img-opp/competition.jpg') }}"
            alt="Logo House Ilmu Indonesia"
          />
          <div class="card-img d-flex justify-content-center">
            <span class="category-label">Competition</span>
          </div>
        </div>
        <div class="category-item text-center border-custom p-0">
          <img
            src="{{ asset('img/homepage/img-opp/volunteer.jpg') }}"
            alt="Logo House Ilmu Indonesia"
          />
          <div class="card-img d-flex justify-content-center">
            <span class="category-label">Volunteer</span>
          </div>
        </div>
        <div class="category-item text-center border-custom p-0">
          <img
            src="{{ asset('img/homepage/img-opp/exchange.jpg') }}"
            alt="Logo House Ilmu Indonesia"
          />
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

      <div
        class="cards-container container-xxl d-flex flex-wrap my-4 gap-3 justify-content-center align-items-start"
      >

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
            <div class="beasiswa card-box px-4 px-md-0">
                <a href="/programme/beasiswa/beasiswa-u-go.html"
                    class="card-custom d-flex align-items-center">
                    <img src="/assets/img-opp/beasiswa/U-GO.png"
                        class="card-img-top" alt="Card Image">
                    <div class="card-overlay"></div>
                    <div class="card-body small-text">
                        <div class="card-title d-flex align-items-center gap-2">
                            <img src="/assets/img-opp/beasiswa/logo-U-GO.png" class="logo col-3"
                                alt="Logo House Ilmu Indonesia">
                            <div class="col-9 d-flex flex-column gap-2">
                                <h1>U-GO Scholarship 2025</h1>
                                <h5>U-GO</h5>
                            </div>
                        </div>
                        <div class="card-details d-flex flex-row align-items-center gap-3 mt-4">
                            <div
                                class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-2">
                                <i class="fa-solid fa-money-bill-wave"></i>
                                <i class="fa-solid fa-graduation-cap"></i>
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="card-info col-9 d-flex flex-column align-items-start gap-1">
                                <p>Partial Funded</p>
                                <p>Beasiswa</p>
                                <p>23 Mei 2025</p>
                            </div>
                        </div>
                        <!-- <span class="badge custom-badge mt-5">Kesempatan lebih tinggi</span> -->
                    </div>
                </a>
            </div>
            <div class="beasiswa card-box px-4 px-md-0">
                <a href="/programme/beasiswa/beasiswa-bestro.html" class="card-custom d-flex align-items-center">
                    <img src="/assets/img-opp/beasiswa/bestro.png" class="card-img-top" alt="Card Image">
                    <div class="card-overlay"></div>
                    <div class="card-body small-text">
                        <div class="card-title d-flex align-items-center gap-2">
                            <img src="/assets/img-opp/beasiswa/logo-bestro.png" class="logo col-3"
                                alt="Logo House Ilmu Indonesia">
                            <div class="col-9 d-flex flex-column gap-2">
                                <h1>BESTRO S1 2025</h1>
                                <h5>Petrokimia Gresik</h5>
                            </div>
                        </div>
                        <div class="card-details mt-3 d-flex flex-row align-items-center  gap-2">
                            <div
                                class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3">
                                <i class="fa-solid fa-money-bill-wave"></i>
                                <i class="fa-solid fa-graduation-cap"></i>
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="card-info col-9 d-flex flex-column align-items-start gap-2">
                                <p>Fully Funded</p>
                                <p>Beasiswa</p>
                                <p>15 Juni 2025</p>
                            </div>
                        </div>
                        <!-- <span class="badge custom-badge mt-5">Kesempatan lebih tinggi</span> -->
                    </div>
                </a>
            </div>
            <div class="beasiswa card-box px-4 px-md-0">
                <a href="/programme/beasiswa/beasiswa-indonesia-bangkit.html"
                    class="card-custom d-flex align-items-center">
                    <img src="/assets/img-opp/beasiswa/indonesia-bangkit-2025.png" class="card-img-top"
                        alt="Card Image">
                    <div class="card-overlay"></div>
                    <div class="card-body small-text">
                        <div class="card-title d-flex align-items-center gap-2">
                            <img src="/assets/img-opp/beasiswa/logo-kemenag.png" class="logo col-3"
                                alt="Logo House Ilmu Indonesia">
                            <div class="col-9 d-flex flex-column gap-2">
                                <h1 style="font-size: clamp(0.9rem, 1vw, 1rem);">Beasiswa Indonesia Bangkit 2025</h1>
                                <h5>Kementrian Agama</h5>
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
                                <p>31 Mei 2025</p>
                            </div>
                        </div>
                        <!-- <span class="badge custom-badge mt-5">Kesempatan lebih tinggi</span> -->
                    </div>
                </a>
            </div>

            <div class="competition card-box px-4 px-md-0">
                <a href="/programme/lomba/lomba-rencana-bisnis-berkelanjutan-kemendag.html"
                    class="card-custom d-flex align-items-center">
                    <img src="/assets/img-opp/lomba/lomba-rencana-bisnis-kemendag.png" class="card-img-top"
                        alt="Card Image">
                    <div class="card-overlay"></div>
                    <div style="top: 0%;" class="card-body small-text">
                        <div class="card-title d-flex align-items-center gap-2">
                            <img src="/assets/img-opp/lomba/logo-kemendag.png" class="logo col-3"
                                alt="Logo House Ilmu Indonesia">
                            <div class="col-9 d-flex flex-column gap-2">
                                <h1>Kompetisi Nasional rencana Bisnis Berkelanjutan</h1>
                                <h5>Universitas Sebelas Maret</h5>
                            </div>
                        </div>
                        <div class="card-details mt-3 d-flex flex-row align-items-center gap-2">
                            <div
                                class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3">
                                <i class="fa-solid fa-user"></i>
                                <i class="fa-solid fa-award"></i>
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="card-info col-9 d-flex flex-column align-items-start gap-2">
                                <p>Mahasiswa</p>
                                <p>Lomba Akademik</p>
                                <p>23 Mei 2025</p>
                            </div>
                        </div>
                        <!-- <span class="badge custom-badge mt-5">Kesempatan lebih tinggi</span> -->
                    </div>
                </a>
            </div>

            <div class="competition card-box px-4 px-md-0">
                <a href="/programme/lomba/lomba-leaders.html"
                    class="card-custom d-flex align-items-center">
                    <img src="/assets/img-opp/lomba/lomba-leadersid.png" class="card-img-top"
                        alt="Card Image">
                    <div class="card-overlay"></div>
                    <div class="card-body small-text">
                        <div class="card-title d-flex align-items-center gap-2">
                            <img src="/assets/img-opp/lomba/logo-leadersid.png" class="logo col-3"
                                alt="Logo House Ilmu Indonesia">
                            <div class="col-9 d-flex flex-column gap-2">
                                <h1>Diponegoro Poster Competition</h1>
                                <h5>Leaders.id</h5>
                            </div>
                        </div>
                        <div class="card-details mt-3 d-flex flex-row align-items-center gap-2">
                            <div
                                class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3">
                                <i class="fa-solid fa-user"></i>
                                <i class="fa-solid fa-award"></i>
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="card-info col-9 d-flex flex-column align-items-start gap-2">
                                <p>Umum</p>
                                <p>Lomba Seni</p>
                                <p>30 Juni 2025</p>
                            </div>
                        </div>
                        <!-- <span class="badge custom-badge mt-5">Kesempatan lebih tinggi</span> -->
                    </div>
                </a>
            </div>

        <div class="internship card-box px-4 px-md-0">
          <a
            href="/programme/internship/intern-jackal-holidays-content-creator.html"
            class="card-custom d-flex align-items-center"
          >
            <img
              src="/assets/img-opp/internship/internship-jackal.png"
              class="card-img-top"
              alt="Card Image"
            />
            <div class="card-overlay"></div>
            <div class="card-body small-text">
              <div class="card-title d-flex align-items-center gap-2">
                <img
                  src="/assets/img-opp/internship/logo_jackal.png"
                  class="logo col-3"
                  alt="Logo Jackal Holidays"
                />
                <div class="col-9 d-flex flex-column gap-2">
                  <h1>Paid Internship - Content Creator</h1>
                  <h5>Jackal Holidays</h5>
                </div>
              </div>
              <div
                class="card-details mt-3 d-flex flex-row align-items-center gap-2"
              >
                <div
                  class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3"
                >
                  <i class="fa-solid fa-user"></i>
                  <i class="fa-solid fa-briefcase"></i>
                  <i class="fa-solid fa-calendar-days"></i>
                  <i class="fa-solid fa-clock"></i>
                </div>
                <div
                  class="card-info col-9 d-flex flex-column align-items-start gap-2"
                >
                  <p>Internship Hybrid</p>
                  <p>Content Creator</p>
                  <p>3 Bulan</p>
                  <p>20 Mei 2025</p>
                </div>
              </div>
              <!-- <span class="badge custom-badge mt-5">Kesempatan lebih tinggi</span> -->
            </div>
          </a>
        </div>

        <div class="internship card-box px-4 px-md-0">
            <a
                href="\programme\internship\intern-lkp-grafologi-Indonesia-admin-accountant.html"
                class="card-custom d-flex align-items-center"
            >
                <img
                src="/assets/img-opp/internship/intenship_lkp_grafologi.jpg"
                class="card-img-top"
                alt="Card Image"
                />
                <div class="card-overlay"></div>
                <div class="card-body small-text">
                <div class="card-title d-flex align-items-center gap-2">
                    <img
                    src="/assets/img-opp/internship/logo_lkp.png"
                    class="logo col-3"
                    alt="Logo LKP Grafologi Indonesia"
                    />
                    <div class="col-9 d-flex flex-column gap-2">
                    <h1>LKP Grafologi Indonesia </h1>
                    <h5>LKP Grafologi Indonesia</h5>
                    </div>
                </div>
                <div
                    class="card-details mt-3 d-flex flex-row align-items-center gap-2"
                >
                    <div
                    class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3"
                    >
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-briefcase"></i>
                    <i class="fa-solid fa-calendar-days"></i>
                    <i class="fa-solid fa-clock"></i>
                    </div>
                    <div
                    class="card-info col-9 d-flex flex-column align-items-start gap-2"
                    >
                    <p>Internship WFO (Bandung)</p>
                    <p>Admin/Accounting</p>
                    <p>4 Bulan</p>
                    <p>22 Mei 2025</p>
                    </div>
                </div>
                </div>
            </a>
            </div>

        <div class="internship card-box px-4 px-md-0">
        <a
            href="/programme/internship/intern-lkp-grafologi-Indonesia-content-creator.html"
            class="card-custom d-flex align-items-center"
        >
            <img
            src="/assets/img-opp/internship/intenship_lkp_grafologi.jpg"
            class="card-img-top"
            alt="Card Image"
            />
            <div class="card-overlay"></div>
            <div class="card-body small-text">
            <div class="card-title d-flex align-items-center gap-2">
                <img
                src="/assets/img-opp/internship/logo_lkp.png"
                class="logo col-3"
                alt="Logo LKP Grafologi Indonesia"
                />
                <div class="col-9 d-flex flex-column gap-2">
                <h1>LKP Grafologi Indonesia </h1>
                <h5>LKP Grafologi Indonesia</h5>
                </div>
            </div>
            <div
                class="card-details mt-3 d-flex flex-row align-items-center gap-2"
            >
                <div
                class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3"
                >
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-briefcase"></i>
                <i class="fa-solid fa-calendar-days"></i>
                <i class="fa-solid fa-clock"></i>
                </div>
                <div
                class="card-info col-9 d-flex flex-column align-items-start gap-2"
                >
                <p>Internship WFO (Bandung)</p>
                <p>Content Creator</p>
                <p>4 Bulan</p>
                <p>22 Mei 2025</p>
                </div>
            </div>
            </div>
        </a>
        </div>

        <div class="internship card-box px-4 px-md-0">
        <a
            href="/programme/internship/intern-lkp-grafologi-Indonesia-graphic-designer.html"
            class="card-custom d-flex align-items-center"
        >
            <img
            src="/assets/img-opp/internship/intenship_lkp_grafologi.jpg"
            class="card-img-top"
            alt="Card Image"
            />
            <div class="card-overlay"></div>
            <div class="card-body small-text">
            <div class="card-title d-flex align-items-center gap-2">
                <img
                src="/assets/img-opp/internship/logo_lkp.png"
                class="logo col-3"
                alt="Logo LKP Grafologi Indonesia"
                />
                <div class="col-9 d-flex flex-column gap-2">
                <h1>LKP Grafologi Indonesia</h1>
                <h5>LKP Grafologi Indonesia</h5>
                </div>
            </div>
            <div
                class="card-details mt-3 d-flex flex-row align-items-center gap-2"
            >
                <div
                class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3"
                >
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-briefcase"></i>
                <i class="fa-solid fa-calendar-days"></i>
                <i class="fa-solid fa-clock"></i>
                </div>
                <div
                class="card-info col-9 d-flex flex-column align-items-start gap-2"
                >
                <p>Internship WFO (Bandung)</p>
                <p>Graphic Designer</p>
                <p>4 Bulan</p>
                <p>22 Mei 2025</p>
                </div>
            </div>
            </div>
        </a>
        </div>



        <!-- Volunteeer -->
        <div class="volunteer card-box px-4 px-md-0">
        <a
            href="/programme/volunteer/volunteer-relawan-mengabdi.html"
            class="card-custom d-flex align-items-center"
        >
            <img
            src="/assets/img-opp/volunteer/volunteer_relawan.png"
            class="card-img-top"
            alt="Poster Relawan Mengabdi #7"
            />
            <div class="card-overlay"></div>
            <div class="card-body small-text">
            <div class="card-title d-flex align-items-center gap-2">
                <img
                src="/assets/img-opp/volunteer/logo_relawan.png"
                class="logo col-3"
                alt="Logo Literasi Lumbung Lombok Foundation"
                />
                <div class="col-9 d-flex flex-column gap-2">
                <h1>RELAWAN MENGABDI #7</h1>
                <h5>Literasi Lumbung Lombok Foundation</h5>
                </div>
            </div>
            <div
                class="card-details mt-3 d-flex flex-row align-items-center gap-2"
            >
                <div
                class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3"
                >
                <i class="fa-solid fa-money-bill-wave"></i>
                <i class="fa-solid fa-handshake-angle"></i>
                <i class="fa-solid fa-clock"></i>
                </div>
                <div
                class="card-info col-9 d-flex flex-column align-items-start gap-2"
                >
                <p>Fully Funded</p>
                <p>Volunteer Konservasi</p>
                <p>22 Mei 2025</p>
                </div>
            </div>
            </div>
        </a>
        </div>

        <div class="volunteer card-box px-4 px-md-0">
          <a
            href="\programme\volunteer\volunteer-semesta.html"
            class="card-custom d-flex align-items-center"
          >
            <img
            src="/assets/img-opp/volunteer/volunteer_semesta.png"
            class="card-img-top"
            alt="Poster Semesta Jelajah Nusantara #2"
            />
            <div class="card-overlay"></div>
            <div class="card-body small-text">
            <div class="card-title d-flex align-items-center gap-2">
                <img
                src="/assets/img-opp/volunteer/logo_semesta.png"
                class="logo col-3"
                alt="Logo Semesta Manusia"
                />
                <div class="col-9 d-flex flex-column gap-2">
                <h1>Semesta Jelajah Nusantara #2</h1>
                <h5>Semesta Manusia</h5>
                </div>
            </div>
            <div class="card-details mt-3 d-flex flex-row align-items-center gap-2">
                <div
                class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3"
                >
                <i class="fa-solid fa-money-bill-wave"></i>
                <i class="fa-solid fa-handshake-angle"></i>
                <i class="fa-solid fa-clock"></i>
                </div>
                <div
                class="card-info col-9 d-flex flex-column align-items-start gap-2"
                >
                <p>Fully Funded</p>
                <p>Volunteer Konservasi</p>
                <p>30 Mei 2024</p>
                </div>
            </div>
            <!-- <span class="badge custom-badge mt-5">Kesempatan lebih tinggi</span> -->
            </div>
        </a>
        </div>

        <div class="volunteer card-box px-4 px-md-0">
          <a
            href="\programme\volunteer\volunteer-berchata.html"
            class="card-custom d-flex align-items-center"
          >
            <img
            src="/assets/img-opp/volunteer/poster-bercatha.jpg"
            class="card-img-top"
            alt="Poster Semesta Jelajah Nusantara #2"
            />
            <div class="card-overlay"></div>
            <div class="card-body small-text">
            <div class="card-title d-flex align-items-center gap-2">
                <img
                src="/assets/img-opp/volunteer/logo bercatha.png"
                class="logo col-3"
                alt="Logo Semesta Manusia"
                />
                <div class="col-9 d-flex flex-column gap-2">
                <h1>BERCHATA #5</h1>
                <h5>Catha Indonesia</h5>
                </div>
            </div>
            <div class="card-details mt-3 d-flex flex-row align-items-center gap-2">
                <div
                class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3"
                >
                <i class="fa-solid fa-money-bill-wave"></i>
                <i class="fa-solid fa-handshake-angle"></i>
                <i class="fa-solid fa-clock"></i>
                </div>
                <div
                class="card-info col-9 d-flex flex-column align-items-start gap-2"
                >
                <p>Fully Funded</p>
                <p>Volunteer Konservasi</p>
                <p>09 Juni 2025</p>
                </div>
            </div>
            <!-- <span class="badge custom-badge mt-5">Kesempatan lebih tinggi</span> -->
            </div>
        </a>
        </div>

    </section>
@endsection


@extends('layout.app')

@section('title', 'Career | House Ilmu Indonesia')

@section('head')

@section('content')
        <!-- Start career page title section -->
    <section class="career-title container-xl mt-5">
        <div class="career-title-container d-flex flex-column align-items-start align-items-md-center" data-aos="fade">
            <h1 class="py-4 px-3 px-md-0" style="color: #1746A2;">Grow Together With Us</h1>
            <p class="fs-4 col-12 col-md-10 px-3 px-md-0">Jangan sia-siakan kesempatan ini! Ayo, bergabung dengan kami
                di House Ilmu. Jadilah bagian dari kami bersama tim yang seru dan penuh semangat!</p>
        </div>
    </section>
    <!-- End career page title section -->

    <!-- Start career culture section -->
    <section class="culture container-fluid mt-5" style="background-color: #FF9900;">
        <div class="culture-container container-xxl d-flex flex-column align-items-center">
            <h1 class="py-4 mt-4" style="color: #1746A2;" data-aos="fade-left">Our Culture</h1>
            <!-- Start culture icons -->
            <div class="culture-icons d-flex flex-wrap justify-content-center align-items-center mb-5" data-aos="fade-right">
                <div class="cultures d-flex flex-column align-items-center mx-2 mx-md-2 mx-lg-4 ">
                    <!-- <img class="py-3" src="../assets/img/logo.png" alt=""> -->
                    <i class="fa-regular fa-smile fs-1 py-3"></i>
                    <p class="fw-semibold text-light">Fun</p>
                </div>
                <div class="cultures d-flex flex-column align-items-center mx-2 mx-md-2 mx-lg-4 ">
                    <!-- <img class="py-3" src="../assets/img/logo.png" alt=""> -->
                    <i class="fa-solid fa-lightbulb fs-1 py-3"></i>
                    <p class="fw-semibold text-light">Innovative</p>
                </div>
                <div class="cultures d-flex flex-column align-items-center mx-2 mx-md-2 mx-lg-4 ">
                    <!-- <img class="py-3" src="../assets/img/logo.png" alt=""> -->
                    <i class="fa fa-balance-scale fs-1 py-3"></i>
                    <p class="fw-semibold text-light">Equitable</p>
                </div>
                <div class="cultures d-flex flex-column align-items-center mx-2 mx-md-2 mx-lg-4 ">
                    <!-- <img class="py-3" src="../assets/img/logo.png" alt=""> -->
                    <i class="fa fa-book fs-1 py-3"></i>
                    <p class="fw-semibold text-light">Learning</p>
                </div>
                <div class="cultures d-flex flex-column align-items-center mx-2 mx-md-2 mx-lg-4 ">
                    <!-- <img class="py-3" src="../assets/img/logo.png" alt=""> -->
                    <i class="fa-solid fa-clock fs-1 py-3"></i>
                    <p class="fw-semibold text-light">Discipline</p>
                </div>
                <div class="cultures d-flex flex-column align-items-center mx-2 mx-md-2 mx-lg-4 ">
                    <!-- <img class="py-3" src="../assets/img/logo.png" alt=""> -->
                    <i class="fa fa-heart fs-1 py-3"></i>
                    <p class="fw-semibold text-light">Caring</p>
                </div>
                <div class="cultures d-flex flex-column align-items-center mx-2 mx-md-2 mx-lg-4 ">
                    <!-- <img class="py-3" src="../assets/img/logo.png" alt=""> -->
                    <i class=" fa fa-comments fs-1 py-3"></i>
                    <p class="fw-semibold text-light">Communication</p>
                </div>
            </div>
            <!-- End culture icons -->
        </div>
    </section>
    <!-- End career culture section -->

    <!-- Start career alumni section -->
    <section class="alumni container-xl mt-5">
        <div class="alumni-container container-xl d-flex flex-column justify-content-center align-items-center">
            <h1 class="col-12 text-center fw-bold py-4 my-2" style="color: #083D77;"  data-aos="fade-down">
                From the Alumni to You
            </h1>
            <!-- Start Splide alumni -->
            <div id="alumniSplide" class="splide my-4 w-100" data-aos="fade-up">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- ... slide pertama tetap -->
                        <li class="splide__slide p-4 rounded-lg flex flex-col justify-start items-start">
                        <div class="alumni-img flex flex-row w-full justify-evenly items-center">
                            <img style="width: 60px;" src="{{ asset('img/logo.png') }}" alt="logo house ilmu">
                            <div class="alumni-profile ml-3 mb-2 flex flex-col items-start">
                            <p class="mt-2 m-0" id="testi-name">Putri Amelda</p>
                            <p id="testi-role">Batch 2 Divisi Operation</p>
                            </div>
                        </div>
                        <p class="w-full font-semibold">
                            “HI membantu aku mencoba banyak hal dan menemukan skill baru dalam diriku. HI juga memperluas relasi pertemanan yang aku punya”
                        </p>
                        </li>

                        <!-- Slide 2 -->
                        <li class="splide__slide p-4 rounded-lg flex flex-col justify-start items-start">
                        <div class="alumni-img flex flex-row w-full justify-evenly items-center">
                            <img style="width: 60px;" src="{{ asset('img/logo.png') }}" alt="logo house ilmu">
                            <div class="alumni-profile ml-3 mb-2 flex flex-col items-start">
                            <p class="mt-2 m-0" id="testi-name">Annisa Fakhirah</p>
                            <p id="testi-role">Batch 2 Divisi Operation</p>
                            </div>
                        </div>
                        <p class="w-full font-semibold">
                            “Selama bergabung dengan HI, aku banyak menerima pengalaman baru yang bisa menjadi bahan evaluasi diri dan aku sangat bersyukur ketemu dengan teman-teman hebat yang bisa saling kerja sama untuk menciptakan kegiatan yang berkualitas, thank you HI.”
                        </p>
                        </li>

                        <!-- Slide 3 -->
                        <li class="splide__slide p-4 rounded-lg flex flex-col justify-start items-start">
                        <div class="alumni-img flex flex-row w-full justify-evenly items-center">
                            <img style="width: 60px;" src="{{ asset('img/logo.png') }}" alt="logo house ilmu">
                            <div class="alumni-profile ml-3 mb-2 flex flex-col items-start">
                            <p class="mt-2 m-0" id="testi-name">Alma Yunita</p>
                            <p id="testi-role">Batch 2.5 Divisi Operation</p>
                            </div>
                        </div>
                        <p class="w-full font-semibold">
                            “Di House Ilmu saya mendapatkan banyak pengalaman berharga seperti kedisiplinan, bisa saling menghargai sesama dan pastinya bisa membuat saja memimpin suatu projek. Terima kasih HI.”
                        </p>
                        </li>

                        <!-- Slide 4 -->
                        <li class="splide__slide p-4 rounded-lg flex flex-col justify-start items-start">
                        <div class="alumni-img flex flex-row w-full justify-evenly items-center">
                            <img style="width: 60px;" src="{{ asset('img/logo.png') }}" alt="logo house ilmu">
                            <div class="alumni-profile ml-3 mb-2 flex flex-col items-start">
                            <p class="mt-2 m-0" id="testi-name">Permata Amanda</p>
                            <p id="testi-role">Batch 2 Divisi Technology</p>
                            </div>
                        </div>
                        <p class="w-full font-semibold">
                            “House Ilmu Indonesia membuka wawasan saya di era sekarang ini kita dapat menambah wawasan dari mana saja. Kegiatan online dengan waktu fleksible memberi pengetahuan baru dalam bersosialisasi maupun komunikasi. Perkembangan Technology harus selalu kita ikuti, suatu kebanggan pernah menjadi bagian dari House Ilmu Indonesia.”
                        </p>
                        </li>

                        <!-- Slide 5 -->
                        <li class="splide__slide p-4 rounded-lg flex flex-col justify-start items-start">
                        <div class="alumni-img flex flex-row w-full justify-evenly items-center">
                            <img style="width: 60px;" src="{{ asset('img/logo.png') }}" alt="logo house ilmu">
                            <div class="alumni-profile ml-3 mb-2 flex flex-col items-start">
                            <p class="mt-2 m-0" id="testi-name">Wina Wijayanti</p>
                            <p id="testi-role">Batch 2 Divisi Operation</p>
                            </div>
                        </div>
                        <p class="w-full font-semibold">
                            “House ilmu indonesia jadi tempat yang tepat bagi aku untuk mengembangkan diri. Ada banyak event yang menarik dan pastinya bermanfaat untuk diikuti. Di house ilmu juga ketemu teman-teman dari berbagai macam daerah dan pastinya seru banget!”
                        </p>
                        </li>

                        <!-- Slide 6 -->
                        <li class="splide__slide p-4 rounded-lg flex flex-col justify-start items-start">
                        <div class="alumni-img flex flex-row w-full justify-evenly items-center">
                            <img style="width: 60px;" src="{{ asset('img/logo.png') }}" alt="logo house ilmu">
                            <div class="alumni-profile ml-3 mb-2 flex flex-col items-start">
                            <p class="mt-2 m-0" id="testi-name">Winda Noprika</p>
                            <p id="testi-role">Batch 2 Divisi Winda Noprika</p>
                            </div>
                        </div>
                        <p class="w-full font-semibold">
                            “Jadi bagian dari House Ilmu itu senang banget, ketemu temen temen baru dan belajar banyak hal. Experience yang aku dapet can’t explain word by word. House ilmu forever ever the best!”
                        </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Splide alumni -->
        </div>
    </section>
    <!-- End career alumni section -->

    <!-- Start career info section -->
    <section id="career-info" class="career-info container-xl mt-5">
        <div class="career-info-container container-xl d-flex flex-column justify-content-center align-items-center">
            <h1 class="py-4" style="color: #1746A2;">Career Oportunity</h1>
            <div
                class="career-box container-xl d-flex flex-column justify-content-around align-items-center text-light">
                <!-- Start order box // membuat agar urutan tampilan box berbeda ketika display mobile dan desktop -->
                <div class="order-box-1 container-xl d-flex flex-wrap justify-content-center align-items-stretch">
                    <!-- Start career info apply box -->
                    <div class="career-link odd col-12 col-md-5 col-lg-4 order-0 order-md-0 d-flex flex-column rounded-4 p-5 m-2"
                        data-aos="fade-right">
                        <h2 class="fw-bold py-2 py-xl-3">CEO</h2>
                        <h2 class="fw-bold py-1 opacity-0 d-xl-none">CEO</h2>
                        <div class="d-flex justify-content-start align-items-center">
                            <a class="py-4 rounded-4" href="/career/ceo"><span class="fw-bold p-3 rounded-4">See
                                    More...</span></a>
                        </div>
                    </div>
                    <!-- Start career info apply box -->
                    <!-- Start career info apply box -->
                    <div class="career-link odd col-12 col-md-5 col-lg-4 order-1 order-md-1 d-flex flex-column rounded-4 p-5 m-2"
                        data-aos="fade-left">
                        <h2 class="fw-bold py-3">Human Capital</h2>
                        <div class="d-flex justify-content-start align-items-center">
                            <a class="py-4 rounded-4" href="/career/human-capital"><span class="fw-bold p-3 rounded-4">See
                                    More...</span></a>
                        </div>
                    </div>
                    <!-- Start career info apply box -->
                    <!-- Start career info apply box -->
                    <div class="career-link even col-12 col-md-5 col-lg-4 order-2 order-md-2 d-flex flex-column rounded-4 p-5 m-2"
                        data-aos="fade-right">
                        <h2 class="fw-bold py-3">Product Development</h2>
                        <div class="d-flex justify-content-start align-items-center">
                            <a class="py-4 rounded-4" href="/career/product-development"><span
                                    class="fw-bold p-3 rounded-4">See More...</span></a>
                        </div>
                    </div>
                    <!-- Start career info apply box -->
                    <!-- Start career info apply box -->
                    <div class="career-link even col-12 col-md-5 col-lg-4 order-3 order-md-3 d-flex flex-column rounded-4 p-5 m-2"
                        data-aos="fade-left">
                        <h2 class="fw-bold py-3">Business Development</h2>
                        <div class="d-flex justify-content-start align-items-center">
                            <a class="py-4 rounded-4" href="/career/business-development"><span
                                    class="fw-bold p-3 rounded-4">See More...</span></a>
                        </div>
                    </div>
                    <!-- Start career info apply box -->
                </div>
                <!-- End order box // membuat agar urutan tampilan box berbeda ketika display mobile dan desktop -->

                <!-- Start order box // membuat agar urutan tampilan box berbeda ketika display mobile dan desktop -->
                <div class="order-box-2 container-xl d-flex flex-wrap justify-content-center align-items-start">
                    <!-- Start career info apply box -->
                    <div class="career-link odd col-12 col-md-5 col-lg-4 order-0 order-md-0 d-flex flex-column rounded-4 p-5 m-2"
                        data-aos="fade-right">
                        <h2 class="fw-bold py-3">Technology</h2>
                        <div class="d-flex justify-content-start align-items-center">
                            <a class="py-4 rounded-4" href="/career/technology"><span class="fw-bold p-3 rounded-4">See
                                    More...</span></a>
                        </div>
                    </div>
                    <!-- Start career info apply box -->
                    <!-- Start career info apply box -->
                    <div class="career-link odd col-12 col-md-5 col-lg-4 order-1 order-md-1 d-flex flex-column rounded-4 p-5 m-2"
                        data-aos="fade-left">
                        <h2 class="fw-bold py-3">Marketing</h2>
                        <div class="d-flex justify-content-start align-items-center">
                            <a class="py-4 rounded-4" href="/career/marketing"><span class="fw-bold p-3 rounded-4">See
                                    More...</span></a>
                        </div>
                    </div>
                    <!-- Start career info apply box -->
                    <!-- Start career info apply box -->
                    <!-- <div class="career-link even col-12 col-md-5 col-lg-4 order-1 order-md-2 d-flex flex-column rounded-4 p-5 m-2"
                        data-aos="fade-right">
                        <h2 class="fw-bold py-3">COO</h2>
                        <div class="d-flex justify-content-start align-items-center">
                            <a class="py-4 rounded-4" href="coo/"><span class="fw-bold p-3 rounded-4">See
                                    More...</span></a>
                        </div>
                    </div> -->
                    <!-- Start career info apply box -->
                    <!-- Start career info apply box -->
                    <!-- <div class="career-link even col-12 col-md-5 col-lg-4 order-3 order-md-3 d-flex flex-column rounded-4 p-5 m-2"
                        data-aos="fade-left">
                        <h2 class="fw-bold py-3">Human Capital</h2>
                        <div class="d-flex justify-content-start align-items-center">
                            <a class="py-4 rounded-4" href="human-capital/"><span class="fw-bold p-3 rounded-4">See
                                    More...</span></a>
                        </div>
                    </div> -->
                    <!-- Start career info apply box -->
                </div>
                <!-- End order box // membuat agar urutan tampilan box berbeda ketika display mobile dan desktop -->
            </div>
        </div>
    </section>
    <!-- End career info section -->

    <!-- Start career message section -->
    <section class="message container-xl my-5">
        <div class="message-container container-xl d-flex flex-column justify-content-center align-items-center">
            <h1 class="py-4 text-center"><span id="text-blue">Let’s</span> <span id="text-orange">Learn</span> <span
                    id="text-blue">,</span> <span id="text-orange">Grow</span> <span id="text-blue">and</span> <span
                    id="text-orange">Get <br> Achievement</span> <span id="text-blue">Together</span> </h1>
            <div class="message-sosmed col-md-10 col-lg-6 d-flex flex-column justify-content-center align-items-center p-5 rounded-4"
                style="background-color: #FF9900;">
                <h2 class="col-8 text-center text-light fw-bold">Any Question?</h2>
                <div class="sosmed d-flex flex-column flex-md-row justify-content-center align-items-center py-4">
                    <!-- Start message via email -->
                    <div class="sosmed col-12 d-flex flex-column align-items-center my-2 my-md-0"  data-aos="fade-right">
                        <h4 class="fw-bold" style="color: #1746A2;">Email</h4>
                        <i class="fa-regular fa-envelope my-2" style="color: #1746a2;"></i>
                        <a href="mailto:houseilmu.id@gmail.com" target="_blank"
                            class="py-2 px-4 rounded-4 fw-bold border border-1 border-dark-subtle hover:scale-110">Chat</a>
                    </div>
                    <!-- End message via email -->
                    <!-- Start message via instagram -->
                    <div class="sosmed col-12 d-flex flex-column align-items-center my-2 my-md-0"  data-aos="fade-left">
                        <h4 class="fw-bold" style="color: #1746A2;">Instagram</h4>
                        <i class="fa-brands fa-instagram my-2" style="color: #1746a2;"></i>
                        <a href="https://www.instagram.com/houseilmu.id" target="_blank"
                            class="py-2 px-4 rounded-4 fw-bold border border-1 border-dark-subtle hover:scale-110">Chat</a>
                    </div>
                    <!-- End message via instagram -->
                </div>
            </div>
        </div>
    </section>
    <!-- End career message section -->
@endsection

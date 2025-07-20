@extends('layout.app')

@section('title', 'About Us | House Ilmu Indonesia')

@section('content')
    <!-- Start about title section -->
    <section class="about-title container-xl mt-5">
        <div class="about-title-container container-sm d-flex flex-column justify-content-center align-items-center text-center"
            data-aos="fade">
            <h1 class="py-4"><span style="color: #1746A2;">Better</span> <span style="color: #FF731D;">Career</span>
                <span style="color: #1746A2;">for Better</span> <span style="color: #FF731D;">Future</span></h1>
            <p>House Ilmu adalah sebuah platform yang bergerak di bidang career development dengan mengedepankan unsur
                sosial untuk memberikan impact bagi generasi muda.</p>
        </div>
    </section>
    <!-- End about title section -->

    <!-- Start about mission section -->
    <section class="mission container-xl mt-5">
        <div
            class="mission-container container-xl d-flex flex-column flex-md-row justify-content-around align-items-stretch text-light">
            <!-- Start mission box -->
            <div class="col-12 col-md-5 col-lg-4 d-flex flex-column justify-content-start align-items-center text-center p-4 my-2 my-md-0 rounded-4"
                style="background-color: #1746A2;" data-aos="fade-right">
                <h1 class="fw-bold py-3">Our Mission</h1>
                <ol class="text-light text-start">
                    <li>Memfasilitasi generasi muda untuk mengenali passion diri guna menentukan karir masa depan</li>
                    <li>Meningkatkan soft skill dan life skill generasi muda.</li>
                </ol>
            </div>
            <!-- End mission box -->
            <!-- Start vision box -->
            <div class="col-12 col-md-5 col-lg-4 d-flex flex-column justify-content-start align-items-center text-center p-4 my-2 my-md-0 rounded-4"
                style="background-color: #FF731D;" data-aos="fade-left">
                <h1 class="fw-bold py-3">Our Vision</h1>
                <p class="fw-light">Menjadi kawan bagi generasi muda untuk dalam pengembangan karir yang berfokus pada
                    soft skill dan life skill</p>
            </div>
            <!-- End vision box -->
        </div>
    </section>
    <!-- End about mission section -->

    <!-- Start about timeline section -->
    <section class="timeline container-xl mt-5">
        <div class="timeline-container container-xl d-flex flex-column justify-content-center align-items-center">
            <h1 class="py-4" style="color: #1746A2;">Timeline</h1>
            <div class="timeline-desc-container container-xl d-flex flex-row flex-md-column justify-content-start" data-aos="fade-up">
                <!-- Start timeline bullet image -->
                <div class="timeline-img d-flex justify-content-center my-0 my-md-2 mx-3 mx-md-0">
                    <img class="horizontal-img d-none d-md-block" src="{{ asset('img/homepage/about/timeline-horizontal.png') }}" alt="timeline image">
                    <img class="vertical-img d-block d-md-none" src="{{ asset('img/homepage/about/timeline-vertical.png') }}"
                        alt="timeline image">
                </div>
                <!-- End timeline bullet image -->
                <!-- Start timeline desc -->
                <div class="timeline-desc-box d-flex flex-column flex-md-row justify-content-around">
                    <div
                        class="timeline-desc col-12 col-md-3 col-lg-3 d-flex flex-column justify-content-start align-items-md-start mx-md-2">
                        <h2 class="my-0" style="color: #1746A2;">2021</h2>
                        <p>Educatian, <br> Environment dan Life <br> Style</p>
                    </div>
                    <div
                        class="timeline-desc col-12 col-md-3 col-lg-3 d-flex flex-column justify-content-start align-items-md-center mx-md-2">
                        <h2 class="mt-4 mt-md-0" style="color: #1746A2;">2023</h2>
                        <p class="mb-5 mb-md-0">Education dan Skill</p>
                    </div>
                    <div
                        class="timeline-desc col-12 col-md-3 col-lg-3 d-flex flex-column justify-content-start align-items-md-end mx-md-2">
                        <h2 class="mt-5 mt-md-0" style="color: #1746A2;">2025</h2>
                        <p>Career</p>
                    </div>
                </div>
                <!-- End timeline desc -->
            </div>
        </div>
    </section>
    <!-- End about timeline section -->

    <!-- Start about profile images section -->
    <section class="profiles container-xl my-5">
        <div class="profiles-container container-xl d-flex flex-column justify-content-center align-items-center">
            <h1 class="py-4" style="color: #1746A2;">Board of Director</h1>

            <div class="chief d-flex flex-column w-full justify-content-center align-items-center">
                <h1 class="py-4 my-4 bg-[#04284E] w-full text-center rounded-lg" style="color: #FF731D;">Chief Officer</h1>
                <div class="chief-member d-flex flex-column flex-md-row justify-content-around align-items-start">
                    <div class="chief-desc col-12 col-md-4 d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up">
                        <div class="member-sosmed d-flex flex-column align-items-center position-relative">
                            <img class="rounded-3 w-[50%] md:w-[250px]" src="{{ asset('img/homepage/about/Lutfia Rahmannisa_CEO.png') }}" alt="foto ceo lutfia">
                            <div
                                class="member-sosmed-links d-flex justify-content-evenly align-items-center gap-2 rounded-3">
                                <a href="https://www.linkedin.com/in/lutfia-rahmannisa-3b2679192/" target="_blank"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a href="mailto:nisalutfia28@gmail.com" target="_blank"><i
                                        class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <h3 class="fw-bold py-3 md:text-3xl lg:text-4xl">CEO</h3>
                        <h5 class="text-center md:text-xl lg:text-2xl">Lutfia Rahmannisa</h5>
                    </div>
                    <!-- <div class="chief-desc col-12 col-md-4 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up">
                        <img class="rounded-3 img-fluid" src="../assets/img/Cindy Ayustin Afina_COO.jpg" alt="foto coo cindy">
                        <h3 class="fw-bold py-3">COO</h3>
                        <h5>Cindy Ayustin Afina</h5>
                    </div> -->
                </div>
            </div>

            <div class="vice d-flex flex-column justify-content-center align-items-center my-5">
                <h1 class="py-4 my-4 bg-[#04284E] w-full text-center rounded-lg" style="color: #FF731D;">Vice President</h1>
                <div class="vice-member d-flex flex-wrap justify-content-around align-items-start">
                    <div class="vice-desc col-12 col-md-4 d-flex flex-column justify-content-center align-items-center my-2 text-center"
                        data-aos="fade-up">
                        <div class="member-sosmed d-flex flex-column align-items-center position-relative">
                            <img class="rounded-3 w-[50%]" src="{{ asset('img/homepage/about/Alfianti Yanuar Mega_VP Prodev.png') }}"
                                alt="foto vp prodev alfianti">
                            <div
                                class="member-sosmed-links d-flex justify-content-evenly align-items-center gap-2 rounded-3">
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <h3 class="fw-bold py-3 text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">Product Development</h3>
                        <h5 class="text-center lg:text-xl xl:text-2xl">Alfianti Yanuar Mega</h5>
                    </div>
                    <div class="vice-desc col-12 col-md-4 d-flex flex-column justify-content-center align-items-center my-2 text-center"
                        data-aos="fade-up">
                        <div class="member-sosmed d-flex flex-column align-items-center position-relative">
                            <img class="rounded-3 w-[50%]" src="{{ asset('img/homepage/about/Dhini.png') }}" alt="foto vp finance dhini">
                            <div
                                class="member-sosmed-links d-flex justify-content-evenly align-items-center gap-2 rounded-3">
                                <a href="https://www.linkedin.com/in/dhinipermatasari" target="_blank"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a href="mailto:dhinipermatasari84@gmail.com" target="_blank"><i
                                        class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <h3 class="fw-bold py-3 text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">Finance</h3>
                        <h5 class="text-center lg:text-xl xl:text-2xl">Dhini Permatasari</h5>
                    </div>
                    <div class="vice-desc col-12 col-md-4 d-flex flex-column justify-content-center align-items-center my-2 text-center"
                        data-aos="fade-up">
                        <div class="member-sosmed d-flex flex-column align-items-center position-relative">
                            <img class="rounded-3 w-[50%]" src="{{ asset('img/homepage/about/DWI_PUJI_LESTARI- VP Marketing.png') }}"
                                alt="foto vp marketing dwi">
                            <div
                                class="member-sosmed-links d-flex justify-content-evenly align-items-center gap-2 rounded-3">
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <h3 class="fw-bold py-3 text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">Marketing</h3>
                        <h5 class="text-center lg:text-xl xl:text-2xl">Dwi Puji Lestari</h5>
                    </div>
                    <div class="vice-desc col-12 col-md-4 d-flex flex-column justify-content-center align-items-center my-2 text-center"
                        data-aos="fade-up">
                        <div class="member-sosmed d-flex flex-column align-items-center position-relative">
                            <img class="rounded-3 w-[50%]" src="{{ asset('img/homepage/about/Faiza Kurniawati_VP Technology.png') }}"
                                alt="foto vp technology faiza">
                            <div
                                class="member-sosmed-links d-flex justify-content-evenly align-items-center gap-2 rounded-3">
                                <a href="https://www.linkedin.com/in/faizakurniawati" target="_blank"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a href="mailto:faizaaa.kurniawati@gmail.com" target="_blank"><i
                                        class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <h3 class="fw-bold py-3 text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">Technology</h3>
                        <h5 class="text-center lg:text-xl xl:text-2xl">Faiza Kurniawati</h5>
                    </div>
                    <div class="vice-desc col-12 col-md-4 d-flex flex-column justify-content-center align-items-center my-2 text-center"
                        data-aos="fade-up">
                        <div class="member-sosmed d-flex flex-column align-items-center position-relative">
                            <img class="rounded-3 w-[50%]" src="{{ asset('img/homepage/about/Jesline_Tania_Indah_Pardosi_VP_Bussiness Development.png') }}"
                                alt="foto vp bisdev jesline">
                            <div
                                class="member-sosmed-links d-flex justify-content-evenly align-items-center gap-2 rounded-3">
                                <a href="https://www.linkedin.com/in/jesline-tania-indah-pardosi-5257a6279"
                                    target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="mailto:jeslinepardosi1@gmail.com" target="_blank"><i
                                        class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <h3 class="fw-bold py-3 text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">Business Development</h3>
                        <h5 class="text-center lg:text-xl xl:text-2xl">Jesline Tania Indah Pardosi</h5>
                    </div>
                    <div class="vice-desc col-12 col-md-4 d-flex flex-column justify-content-center align-items-center my-2 text-center"
                        data-aos="fade-up">
                        <div class="member-sosmed d-flex flex-column align-items-center position-relative">
                            <img class="rounded-3 w-[50%]" src="{{ asset('img/homepage/about/Naila_Nariswari_HP_VP Human Capital.png') }}"
                                alt="foto vp hc naila">
                            <div
                                class="member-sosmed-links d-flex justify-content-evenly align-items-center gap-2 rounded-3">
                                <a href="https://www.linkedin.com/in/naila-nariswari-hp-19a25422b" target="_blank"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a href="mailto:nailahalisya87@gmail.com" target="_blank"><i
                                        class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <h3 class="fw-bold py-3 text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">Human Capital</h3>
                        <h5 class="text-center lg:text-xl xl:text-2xl">Naila Nariswari</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about profile images section -->
@endsection

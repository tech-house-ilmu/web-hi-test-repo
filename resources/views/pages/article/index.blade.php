@extends('layout.app')

@section('title', 'Article | House Ilmu Indonesia')

@section('head')

@section('content')
        <!-- Start articles section -->
    <section class="filter container-xxl mt-5">
        <!-- Start filter desktop -->
        <div class="filter-row container-xl d-none d-md-flex flex-wrap justify-content-around align-items-center rounded-4 py-3 px-4 my-4 list-unstyled"
            style="background-color: #1746A2;" data-aos="fade-up">
            <p class="m-0" style="color: #FE9000;">Topic</p>
            <li class="btn-list active" role="button" data-filter="*">All</li>
            <li class="btn-list" data-filter=".entrepreneur">Entrepreneur</li>
            <li class="btn-list" data-filter=".career-development">Career Development</li>
            <li class="btn-list" data-filter=".skill-development">Skill Development</li>
        </div>
        <!-- End filter desktop -->

        <!-- Start filter mobile -->
        <div class="filter-select container-xl d-flex d-md-none justify-content-center align-items-center" data-aos="fade-up">
            <select id="filterSelect">
                <option value="none">All</option>
                <option value="entrepreneur">Entrepreneur</option>
                <option value="career-development">Career Development</option>
                <option value="skill-development">Skill Development</option>
            </select>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
        <!-- End filter mobile -->

        <!-- Start filter articles section -->
        <div class="articles-container container-fluid my-5 p-0">
            <div class="articles d-flex container-xxl flex-wrap justify-content-evenly align-items-stretch p-0">
                <a href="category/skill-development/kamu-harus-tau!-5-fakta-unik-tentang-pendidikan-di-indonesia">
                    <!-- Start articles content href -->
                    <div id="skill-development" data-item="skill-development"
                        class="articles-list skill-development d-flex col-12 col-md-5 col-lg-5 col-xl-3 flex-column justify-content-start align-items-start p-3 my-2 mx-md-4 mx-lg-4 mx-xl-5 rounded-4"
                        style="background-color: #FFDD95;">
                        <img class="img-fluid p-2 my-2" src="{{ asset('img/homepage/article/education1.jpg') }}"
                            alt="gambar article skill-development">
                        <h1 class="my-2 line-clamp-2" style="font-size: clamp(1rem, 1vw, 1.1rem)">5 Skill Development untuk Mencapai Kesuksesan</h1>
                        <p class="mb-2 line-clamp-4">Hola Kawaners! Saat ini, banyak orang merasa sulit untuk mencapai
                            kesuksesan tanpa memiliki keterampilan yang memadai. Oleh karena itu, Hi-Min mau berbagi
                            beberapa tips mudah untuk meningkatkan skill development untuk mencapai tujuan dan menjadi
                            lebih sukses.</p>
                        <div class="footnote d-flex flex-row justify-content-start gap-3 align-items-center mt-auto">
                            <img style="width: 40px;" class="" src="{{ asset('img/logo.png') }}" alt="logo house ilmu">
                            <div class="footnote-tag d-flex flex-column">
                                <h6>House Ilmu</h6>
                                <p>5 November 2023</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End articles content href -->

                <!-- Start articles content href -->
                <a href="category/skill-development/bagaimana-penelitian-memperkuat-perkembangan-pribadi">
                    <div id="skill-development" data-item="skill-development"
                        class="articles-list skill-development d-flex col-12 col-md-5 col-lg-5 col-xl-3 flex-column justify-content-start align-items-start p-3 my-2 mx-md-4 mx-lg-4 mx-xl-5 rounded-4"
                        style="background-color: #FFDD95;">
                        <img class="img-fluid p-2 my-2" src="{{ asset('img/homepage/article/research1.jpg') }}"
                            alt="gambar article skill-development">
                        <h1 class="my-2 line-clamp-2" style="font-size: clamp(1rem, 1vw, 1.1rem)">Bagaimana Penelitian Memperkuat Perkembangan Pribadi? </h1>
                        <p class="mb-2 line-clamp-4">Pada setiap tahap kehidupan, individu mengalami perubahan yang berbeda
                            dalam hal fisik, emosional, dan sosial. Proses ini dikenal sebagai perkembangan pribadi. Ada
                            berbagai faktor yang mempengaruhi perkembangan pribadi seseorang, termasuk lingkungan,
                            genetika, pengalaman hidup, dan pola pikir.</p>
                        <div class="footnote d-flex flex-row justify-content-start gap-3 align-items-center mt-auto">
                            <img style="width: 40px;" class="" src="{{ asset('img/logo.png') }}" alt="logo house ilmu">
                            <div class="footnote-tag d-flex flex-column">
                                <h6>House Ilmu</h6>
                                <p>5 November 2023</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End articles content href -->

                <!-- Start articles content href -->
                <a href="category/skill-development/5-skill-development-untuk-mencapai-kesuksesan">
                    <div id="skill-development" data-item="skill-development"
                        class="articles-list skill-development d-flex col-12 col-md-5 col-lg-5 col-xl-3 flex-column justify-content-start align-items-start p-3 my-2 mx-md-4 mx-lg-4 mx-xl-5 rounded-4"
                        style="background-color: #FFDD95;">
                        <img class="img-fluid p-2 my-2" src="{{ asset('img/homepage/article/skill-development1.jpg') }}"
                            alt="gambar article skill-development">
                        <h1 class="my-2 line-clamp-2" style="font-size: clamp(1rem, 1vw, 1.1rem)">Kamu harus tau! 5 Fakta Unik Tentang Pendidikan di Indonesia</h1>
                        <p class="mb-2 line-clamp-4">Hola Kawaners! Saat ini, banyak orang merasa sulit untuk mencapai
                            kesuksesan tanpa memiliki keterampilan yang memadai. Oleh karena itu, Hi-Min mau berbagi
                            beberapa tips mudah untuk meningkatkan skill development untuk mencapai tujuan dan menjadi
                            lebih sukses.</p>
                        <div class="footnote d-flex flex-row justify-content-start gap-3 align-items-center mt-auto">
                            <img style="width: 40px;" class="" src="{{ asset('img/logo.png') }}" alt="logo house ilmu">
                            <div class="footnote-tag d-flex flex-column">
                                <h6>House Ilmu</h6>
                                <p>5 November 2023</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End articles content href -->
            </div>
        </div>
        <!-- End filter articles section -->
    </section>
    <!-- End articles section -->
@endsection

@section('scripts')
        <!-- Script filtering desktop  -->
    <script class="script-filter">
        $(document).ready(function () {
            var $grid = $(".articles").isotope({
                itemSelector: ".articles-list",
                layoutMode: "fitRows",
                percentPosition: true,
            });

            $(".filter-row li").click(function () {
                $(".filter-row li").removeClass("active");
                $(this).addClass("active");

                var data = $(this).attr("data-filter");
                $grid.isotope({
                    filter: data,
                });
            });
        });
    </script>
    <!-- Script filtering mobile  -->
    <script>
        const filterSelect = document.getElementById('filterSelect');
        const articlesContainer = document.querySelector('.articles-container');

        filterSelect.addEventListener('change', function () {
            const selectedValue = this.value;

            const articles = articlesContainer.querySelectorAll('.articles-list');

            articles.forEach(article => {
                const articleId = article.id;
                if (selectedValue === 'none') {
                    article.style.display = 'flex';
                } else if (articleId === selectedValue) {
                    article.style.display = 'flex';
                } else {
                    article.style.display = 'none';
                }
            });
        });
    </script>
@endsection

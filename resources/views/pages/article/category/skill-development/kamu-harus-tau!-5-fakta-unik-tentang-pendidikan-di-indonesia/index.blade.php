<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education | House Ilmu Indonesia</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <!-- Link CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    @vite(['resources/js/app.js'])

</head>

<body>
    <!-- Navigation content -->
    <div id="nav-container">
        @include('partials.navbar-homepage')
    </div>

    <!-- Start articles section -->
    <section class="article container-xl mt-5">
        <!-- Start back button -->
        <div class="back d-inline">
            <a href="../../../"><i class="fa-solid fa-chevron-left"></i> Kembali</a>
        </div>
        <!-- End back button -->
        <div class="article-container container-xl d-flex flex-column justify-content-center align-items-start">
            <!-- Start title & author details section -->
            <div class="article-info d-flex flex-column">
                <h1 class="py-4 fw-bold" style="color: #174EA6;">Kamu harus tau! 5 Fakta Unik Tentang Pendidikan di
                    Indonesia</h1>
                <p class="py-3" style="color: #797676;">Sabtu, 5 November 2022</p>
                <p>Penulis : House Ilmu</p>
                <p>Editor : House Ilmu</p>
            </div>
            <!-- End title & author details section -->
            <!-- Start article text section -->
            <img class="img-fluid rounded-4 my-5" src="{{ asset('img/homepage/article/education1.jpg') }}"
                alt="gambar article skill-development">
            <div class="article-text container-xl">
                <p class="indent">Hola Kawaners! Saat ini, banyak orang merasa sulit untuk mencapai kesuksesan tanpa
                    memiliki keterampilan yang memadai. Oleh karena itu, Hi-Min mau berbagi beberapa tips mudah untuk
                    meningkatkan skill development untuk mencapai tujuan dan menjadi lebih sukses.</p>

                <ol>
                    <li>
                        <h6>Membaca Buku dan Mempelajari Hal Baru Setiap Hari</h6>
                        <p class="indent">Salah satu cara terbaik untuk meningkatkan skill development adalah dengan
                            membaca buku dan mempelajari hal baru setiap hari. Dengan membaca buku, Kawaners dapat
                            menemukan informasi dan pengetahuan baru, memperluas wawasan dan membangun pemahaman yang
                            lebih baik tentang topik tertentu. Mempelajari hal baru setiap hari akan membantu
                            meningkatkan daya kreativitas dan memperluas kemampuan dalam berpikir dan berkomunikasi.</p>
                    </li>
                    <li>
                        <h6>Berpartisipasi dalam Diskusi Kelompok atau Forum Online</h6>
                        <p class="indent">Berpartisipasi dalam diskusi kelompok atau forum online juga dapat membantu
                            meningkatkan skill development Kawaners, lho. Dalam diskusi kelompok atau forum online,
                            Kawaners dapat berinteraksi dengan orang-orang dari berbagai latar belakang dan mempelajari
                            perspektif baru tentang suatu topik. Ini juga merupakan kesempatan yang baik untuk
                            meningkatkan keterampilan berkomunikasi dan membangun jaringan sosial Kawaners.</p>
                    </li>
                    <li>
                        <h6>Mengikuti Seminar atau Konferensi</h6>
                        <p class="indent">Mengikuti seminar atau konferensi tentang topik yang Kawaners minati juga
                            dapat membantu meningkatkan skill development. Dalam seminar atau konferensi, Kawaners akan
                            bertemu dengan orang-orang yang sama-sama tertarik pada topik yang sama, mendengarkan
                            presentasi dan pemikiran yang baru dan menarik, serta membangun jaringan dengan orang-orang
                            baru.</p>
                    </li>
                    <li>
                        <h6>Berlatih Terus Menerus</h6>
                        <p class="indent">Last but not least, berlatih terus menerus adalah kunci untuk meningkatkan
                            skill development. Kawaners harus rajin berlatih dan mengasah kemampuan dalam bidang yang
                            Kawaners minati. Dengan berlatih terus menerus, Kawaners akan semakin terampil dan percaya
                            diri dalam menghadapi tantangan baru. Jadi, itulah 5 cara mudah untuk meningkatkan skill
                            development dan mencapai kesuksesan. Mari kita mulai menerapkan tips ini dalam kehidupan
                            kita.</p>
                    </li>
                </ol>
            </div>
            <!-- End article text section -->
            <!-- Start article social media section -->
            <div class="article-sosmed container-xl d-flex align-items-center py-5">
                <p style="color: #1746A2;">Share with :</p>
                <a class="rounded-5 mx-3" href="https://www.linkedin.com/company/house-ilmu-indonesia"
                    target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a class="rounded-5 mx-3" href="https://www.tiktok.com/@houseilmu.id" target="_blank"><i
                        class="fa-brands fa-tiktok"></i></a>
                <a class="rounded-5 mx-3" href="https://www.instagram.com/houseilmu.id" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
            </div>
            <!-- End article social media section -->
            <!-- Start article comment form -->
            <div class="article-comment container-xl d-flex flex-column mb-4">
                <h1 class="py-2 fw-bold" style="color: #174EA6;">Leave a Reply</h1>
                <p class="py-2">Your email address will not be published. Required fields are marked <span
                        style="color:#FF0000;">*</span></p>
                <form class="comment-form" action="" method="">
                    <div class="mb-4">
                        <h5 class="fw-bold">Comment <span style="color:#FF0000;">*</span></h5>
                        <textarea class="py-2 px-1 rounded-4" name="comment" id="comment" cols="30" rows="10"
                            required></textarea>
                    </div>
                    <div class="mb-4">
                        <h5 class="fw-bold">Name <span style="color:#FF0000;">*</span></h5>
                        <input class="py-2 px-1 rounded-4" type="text" name="name" id="name" required>
                    </div>
                    <div class="mb-2">
                        <h5 class="fw-bold">Email <span style="color:#FF0000;">*</span></h5>
                        <input class="py-2 px-1 rounded-4" type="email" name="email" id="email" required>
                    </div>
                    <br>
                    <button class="post-btn float-end fw-bold py-3 px-4 rounded-4" type="submit"
                        name="send_comment">Post a comment</button>
                </form>
            </div>
            <!-- End article comment form -->
        </div>
    </section>
    <!-- End articles section -->

    <!-- Footer content -->
    <div id="footer-container">
        @include('partials.footer-homepage')
    </div>

    <!-- CDN Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/jpeg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Lokal -->
    <link href="{{ asset('css/partials.css') }}" rel="stylesheet">
    <!-- CSS Lokal -->
    <link href="{{ asset('css/overview.css') }}" rel="stylesheet">
    <!-- CSS Lokal -->
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
</head>
<body>
    <section class="overview container-xxl d-flex p-0">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <div class="flex-grow-1">
            <!-- Navbar -->
            @include('partials.navbar')

            <!-- Main Content -->
            <div class="overview-menu container-xxl d-flex flex-column justify-content-center align-items-start mt-4">
                <div class="menu-title-container container-xxl d-flex flex-row justify-content-between align-items-center p-4 my-2">
                    <div class="menu-title d-flex flex-column text-light">
                        <h1>Welcome back, <span>Admin</span></h1>
                        <p>Selamat datang di halaman admin website House Ilmu Indonesia.</p>
                    </div>
                    <img src="{{ asset('img/admin-img.png') }}" alt="">
                </div>

                <div class="container-menu container-xxl d-flex flex-wrap justify-content-start align-items-start gap-4 py-4">
                    <div class="menu">
                        <a href="">
                            <img style="border-radius: 20px 20px 0px 0px;" src="{{ asset('img/home-admin.jpeg') }}" alt="">
                        </a>
                        <div class="menu-nav d-flex justify-content-between align-items-start px-3 py-2 text-light">
                            <h4>Home</h4>
                            <i class="fa-solid fa-chevron-down fs-3 toggleIcon"></i>
                        </div>
                        <div class="hiddenText p-3">
                            <p>Home untuk update : 
                                <ol>
                                    <li>Upcoming Event</li>
                                    <li>Learn from the Expert</li>
                                    <li>Testimoni "What They Says"</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                    <div class="menu">
                        <a href="">
                            <img style="border-radius: 20px 20px 0px 0px;" src="{{ asset('img/programme-admin.jpg') }}" alt="">
                        </a>
                        <div class="menu-nav d-flex justify-content-between align-items-start px-3 py-2 text-light">
                            <h4>Programme</h4>
                            <i class="fa-solid fa-chevron-down fs-3 toggleIcon"></i>
                        </div>
                        <div class="hiddenText p-3">
                            <p>Programme untuk update : 
                                <ol>
                                    <li>HI Programme</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                    <div class="menu">
                        <a href="">
                            <img style="border-radius: 20px 20px 0px 0px;" src="{{ asset('img/career-admin.jpg') }}" alt="">
                        </a>
                        <div class="menu-nav d-flex justify-content-between align-items-start px-3 py-2 text-light">
                            <h4>Career</h4>
                            <i class="fa-solid fa-chevron-down fs-3 toggleIcon"></i>
                        </div>
                        <div class="hiddenText p-3">
                            <p>Career untuk update : 
                                <ol>
                                    <li>Availibility Position</li>
                                    <li>Testimoni Alumni</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                    <div class="menu">
                        <a href="">
                            <img style="border-radius: 20px 20px 0px 0px;" src="{{ asset('img/teams-admin.jpeg') }}" alt="">
                        </a>
                        <div class="menu-nav d-flex justify-content-between align-items-start px-3 py-2 text-light">
                            <h4>Teams</h4>
                            <i class="fa-solid fa-chevron-down fs-3 toggleIcon"></i>
                        </div>
                        <div class="hiddenText p-3">
                            <p>Teams untuk update : 
                                <ol>
                                    <li>Administrator account</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                    <div class="menu">
                        <a href="">
                            <img style="border-radius: 20px 20px 0px 0px;" src="{{ asset('img/about-admin.jpeg') }}" alt="">
                        </a>
                        <div class="menu-nav d-flex justify-content-between align-items-start px-3 py-2 text-light">
                            <h4>About</h4>
                            <i class="fa-solid fa-chevron-down fs-3 toggleIcon"></i>
                        </div>
                        <div class="hiddenText p-3">
                            <p>About untuk update : 
                                <ol>
                                    <li>Vice President information</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- JS Lokal -->
    <script src="{{ asset('js/partials.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

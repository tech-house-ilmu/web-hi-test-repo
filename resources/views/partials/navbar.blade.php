{{-- ini adalah componen navbar. silahkan costumize sesuai design dashboard HI --}}

<link rel="stylesheet" href="{{ asset('css/partial.css') }}">

<nav class="navbar navbar-expand-lg navbar-light custom-navbar border-bottom">
    <div class="container-fluid">
        <!-- Button untuk toggle sidebar -->
        <button id="toggleSidebar">
            <img src="{{ asset('img/toggle.png') }}" style="width: 40px; color: black;" alt="">
        </button>
        <h4 class="overview-title">Overview</h4>

        <!-- Toggler untuk menu dropdown di perangkat kecil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-ellipsis-v"></i>
        </button>
    </div>
</nav>


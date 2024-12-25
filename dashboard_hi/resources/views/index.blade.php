{{-- bagian kak fiyo. silahkan dicostumize --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

     <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpeg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
     <!-- CSS Lokal -->
    <link href="{{ asset('css/partials.css') }}" rel="stylesheet">
    {{-- programme css --}}
    <link href="{{ asset('css/programme.css') }}" rel="stylesheet">

  
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <div class="flex-grow-1">
            <!-- Navbar -->
            @include('partials.navbar')

            <!-- Main Content -->
            <div class="container mt-4">
                <h1>Welcome to the Dashboard</h1>
                <p>This is the main content area.</p>
            </div>
        </div>
    </div>

         <!-- JS Lokal -->
    <script src="{{ asset('js/partials.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

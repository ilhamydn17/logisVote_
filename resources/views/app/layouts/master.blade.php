<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-HOme</title>
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer/assets/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/shared/iconly.css') }}">
    <script src="https://kit.fontawesome.com/5f53d78495.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/pages/simple-datatables.css') }}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                @include('app.layouts.sidebar')
            </div>
        </div>
        <div id="main" class="layout-navbar">
            <header class="mb-3">
                @include('app.layouts.navbar')
            </header>

            <div id="main-content">
                <div class="page-heading">
                    @yield('content-admin')
                </div>
            </div>

            <footer>
                <div class="footer mb-0 text-muted">
                    <div class="text-center">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('mazer/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('mazer/assets/js/app.js') }}"></script>

    {{-- Data Table --}}
    <script src="{{ asset('mazer/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('mazer/assets/js/pages/simple-datatables.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('mazer/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/js/pages/dashboard.js') }}"></script>



    {{-- Sweet Alert --}}
    @include('sweetalert::alert')
</body>

</html>

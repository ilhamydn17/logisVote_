<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer/assets/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/shared/iconly.css') }}">
    <script src="https://kit.fontawesome.com/5f53d78495.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/pages/simple-datatables.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/quill/quill.bubble.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/filepond/filepond.css') }}">
    <link rel="stylesheet"
        href="{{ asset('mazer/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/pages/filepond.cs') }}">

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

    {{-- Chart JS CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @isset($labels)
        <script type="text/javascript">
            var labels = {{ Js::from($labels) }};
            var users = {{ Js::from($data) }};

            const data = {
                labels: labels,
                datasets: [{
                    label: 'Voting Count',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 2,
                    data: users,
                }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: true,
                    plugin: {
                        legend:{
                            display:true,
                            labels:{
                                color: 'rgb(255, 99, 132)'
                            }
                        }
                    }
                }
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>
    @endisset

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

    {{-- Quill --}}
    <script src="{{ asset('mazer/assets/extensions/quill/quill.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/js/pages/quill.js') }}"></script>

    {{-- Filepond --}}
    <script src="{{ asset('mazer/assets/extensions/filepond/filepond.js') }}"></script>
    <script src="{{ asset('mazer/assets/js/pages/filepond.js') }}"></script>
</body>

</html>

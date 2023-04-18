<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('custom-css/style.css') }}">
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/components.css" />
</head>

<body>
    <div id="app">

        <div class="container-fluid custom" >
            @yield('in-app')
        </div>


        {{-- footer --}}
        <footer>
            <div class="container-fluid">
                <div class="row text-center mt-3">
                    <div class="col">
                        <figure class="figure">
                            <img src="{{ asset('img/PP.png') }}" class="figure-img img-fluid rounded" alt="..."
                                width="50">
                            <figcaption class="figure-caption">UKM Pendidikan dan Penalaran</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-3">
                    <a href="">
                        <img src="img/instagram.png" alt="" style="width: 30px; margin-right: 50px" />
                    </a>
                    <a href="">
                        <img src="img/twitter.png" alt="" style="width: 30px; margin-right: 50px" />
                    </a>
                    <a href="">
                        <img src="img/youtube.png" alt="" style="width: 30px; margin-top:5px" />
                    </a>
                </div>
            </div>
            <div class="container-fluid p-2 fs-6 text-center" style="background: #EDEDED">
                Made by UKM Pendidikan dan Penalaran © 2023
            </div>
        </footer>
        {{-- end footer --}}
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
    {{-- {{ asset('mazer/') }} --}}
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/main/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer/assets/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('mazer/assets/css/shared/iconly.css') }}">

</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            {{-- BAGIAN HEADER --}}
            <header class="mb-5">
                {{-- NAVBAR PERTAMA --}}
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html">
                                <h2>LogisVote</h2>
                            </a>
                        </div>
                        <div class="header-top-right">
                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="{{ asset('mazer/assets/images/faces/1.jpg') }}" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">{{ auth()->user()->name }}</h6>
                                        <p class="user-dropdown-status text-sm text-muted">{{ auth()->user()->role }}
                                        </p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    {{-- <li><hr class="dropdown-divider"></li> --}}
                                    <li>
                                        <a class="dropdown-item" href=""
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="post">
                                            @csrf
                                            @method('POST')
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- NAVBAR KEDUA --}}
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item">
                                <a href="index.html" class='menu-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            {{-- BAGIAN CONTENT --}}
            <div class="content-wrapper container">
                {{-- SUB-HEADER --}}
                <div class="page-heading text-center">
                    <h3>Kandidat Ketua Umum</h3>
                </div>

                <div class="page-content">
                    <section class="row">
                        {{-- CONTENT KIRI --}}
                        <div class="col-12 col-md-12">
                            <div class="row">
                                @if (auth()->user()->is_voted == 1)
                                    <div class="col-sm-12">
                                        <div class="card shadow text-center">
                                            <div class="card-body text-center">
                                                <img src="{{ Storage::url('icon/voting-box.png') }}" width="100px"
                                                    alt="" srcset="">
                                                <h4 class="mt-3">
                                                    <span class="text-danger">Anda Sudah Melakukan Voting!</span>
                                                    </br>
                                                    Silahkan Logout
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    @forelse ($voteSession->candidates as $item)
                                        <div class="col-sm-3">
                                            <div class="card shadow">
                                                <div class="card-content text-center py-3">
                                                    <img src="{{ Storage::url($item->foto) }}"
                                                        class="rounded rounded-circle" alt="singleminded"
                                                        width="160px">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $item->nama }}</h5>
                                                        <div>
                                                            <h4>{{ $item->no_urut }}</h4>
                                                            <a href="" class="btn btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLong-{{ $item->id }}">Visi
                                                                & Misi</a>

                                                            {{-- button --}}
                                                            <a class="btn btn-warning" data-bs-toggle="modal"
                                                                data-bs-target="#warning-{{ $item->id }}">Vote</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                @endif
                            </div>
                        </div>

                        <!--Modal Visi Misi-->
                        @forelse ($voteSession->candidates as $item)
                            <div class="modal fade" id="exampleModalLong-{{ $item->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Visi & Misi Kandidat</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>
                                                Visi
                                            </h5>
                                            <p>
                                                {{ $item->visi }}
                                            </p>
                                            <hr>
                                            <h5>
                                                Misi
                                            </h5>
                                            <p>
                                                {{ $item->misi }}
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary ml-1"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Okay</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                        <!--Modal Votes -->
                        @forelse ($voteSession->candidates as $item)
                            <div class="modal fade text-left warning" id="warning-{{ $item->id }}"
                                tabindex="-1" role="dialog" aria-labelledby="myModalLabel140" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                    value="$item->id">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title white" id="myModalLabel140">Peringatan!
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Anda yakin ingin memilih kandidat ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>

                                            <a class="btn btn-warning ml-1" href="{{ route('user.vote', $item) }}">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Accept</span>
                                            </a>
                                            {{-- <form id="vote-form" action="{{ route('user.vote') }}" method="post">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" value="{{ $item->id }}" name="candidate_id">
                                            </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </section>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="https://saugi.me">Saugi</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('mazer/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('mazer/assets/js/app.js') }}"></script>
    <script src="{{ asset('mazer/assets/js/pages/horizontal-layout.js') }}"></script>

    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    {{-- Sweet Alert --}}
    @include('sweetalert::alert')
</body>

</html>

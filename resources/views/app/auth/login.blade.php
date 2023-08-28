<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer/assets/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="{{ asset('mazer/assets/images/logo/logo.svg') }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">LogisVote.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data.</p>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" class="form-control form-control-xl @error('username') is-invalid @enderror" placeholder="Username">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>

    </div>
       {{-- Sweet Alert --}}
       @include('sweetalert::alert')
</body>

</html>

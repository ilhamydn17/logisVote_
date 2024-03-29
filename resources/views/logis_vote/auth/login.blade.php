@extends('templates.custom')

@section('title', 'Login Page')

@section('in-app')
    <!-- CARD -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <img src="/img/PP.png" alt="logo" width="150" class="p-2 rounded rounded-5" />
                </div>

                <div class="card card-primary">
                    <div class="card-header text-center">
                        <h4 class="">Login</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input id="nim" type="text" class="form-control @error('nim')
                                    is-invalid
                                @enderror" name="nim" tabindex="1"
                                    autofocus />

                                @error('nim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control @error('password')
                                    is-invalid
                                @enderror" name="password" tabindex="2" />

                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- End CARD -->

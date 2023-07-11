@extends('templates.root')

@section('inside-body')
    <div class="container_custom">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding-left: 50px; padding-right: 50px">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="navbar-brand" href="#">
                    <img src="img/PP.png" alt="Logo" width="50" class="d-inline-block align-text-center"
                        style="margin-right: 30px" />
                    <b>UKM Pendidikan dan Penalaran</b>
                </a>
                <!-- END LOGO -->

                <!-- MENU -->
                <div class="justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><b>HOME</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>CONTACT</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>ABOUT</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>HISTORY</b></a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->

                <!-- LOGIN & SIGNUP -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/loginPage" class="btn btn-outline-primary me-lg-2" style="width: 150px; border: 3px solid"
                        type="button">Login</a>
                    <button class="btn btn-primary" style="width: 150px" type="button">Sign Up</button>
                </div>
                <!-- END LOGIN & SIGNUP -->
            </div>
        </nav>
        <!-- END NAVBAR -->

        <!-- CONTENT -->
        <div class="" style="margin-left: 200px; margin-right: 150px; margin-top: 100px; margin-bottom: 100px">
            <div class="row justify-content-md-center text-left align-items-center">
                <div class="col">
                    <h1><b>Choose Your Leader</b></h1>
                    <br />
                    <p style="font-weight: 600">
                        Let's come together to choose a leader who <br />
                        will inspire and motivate us to reach new <br />
                        heights.
                    </p>
                    <a class="btn btn-primary" href="#" role="button" style="width: 200px; padding: 10px"><b>GET
                            STARTED</b></a>
                </div>
                <div class="col">
                    <img class="mx-auto d-block" src="img/home.png" alt="" style="width: 600px" />
                </div>
            </div>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid justify-content-center" style="padding-top: 20px">
                <img src="img/PP.png" alt="" style="width: 50px" />
            </div>
            <div class="container-fluid justify-content-center">
                <p style="font-weight: 600">UKM Pendidikan dan Penalaran</p>
            </div>
            <div class="container-fluid justify-content-center">
                <a href="">
                    <img src="img/instagram.png" alt="" style="width: 30px; margin-right: 50px" />
                </a>
                <a href="">
                    <img src="img/twitter.png" alt="" style="width: 30px; margin-right: 50px" />
                </a>
                <a href="">
                    <img src="img/youtube.png" alt="" style="width: 30px" />
                </a>
            </div>
            <div class="container-fluid justify-content-center align-items-center"
                style="background-color: #ededed; margin-top: 10px; padding-top: 15px">
                <p class="" style="font-size: 10px; font-weight: 600">Made by UKM Pendidikan dan Penalaran © 2023
                </p>
            </div>
        </nav>
        <!-- END FOOTER -->
    </div>
@endsection

@extends('templates.custom')

@section('in-app')

        <!-- CONTENT -->
        <div class="container mt-5">
            <div class="row" style="margin-top: -26px">
                <div class="col mx-auto">
                    <div class="row d-flex justify-content-center align-items-center  mx-auto">
                        <div class="row d-flex text-center align-items-center" style="0px">
                            <div class="col ">
                                <img class="" src="img/PP.png" alt="" style="width: 40px" /> <span class="text-dark" style="font-weight:bold">UKM Pendidikan dan Penalaran</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex mx-auto align-items-center " style="margin-top:60px">
                <div class="col">
                    <h1 class="mb-3 fw-bold"> <span style="color:#176acf; font-size: 56px">Logis</span> <span style="color:#FFF;  font-size: 56px">Vote</span></h1>
                    <h2 style="color: #292C31"><b>Choose Your Leader</b></h2>
                    <br />
                    <p style="font-weight: 600; color: #292C31">
                        Let's come together to choose a leader who <br />
                        will inspire and motivate us to reach new <br />
                        heights.
                    </p>
                    <a class="btn btn-primary" href="{{ route('login') }}" role="button" style="width: 200px; padding: 10px"><b>GET STARTED</b></a>
                </div>
                <div class="col">
                    <img class="mx-auto d-block" src="img/home.png" alt="" style="width: 566px" />
                </div>
            </div>
        </div>
        <!-- END CONTENT -->

@endsection

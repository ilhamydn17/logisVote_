@extends('app.layouts.master')

@section('title','Monitoring Vote')
@section('content-admin')
    {{-- TITLE PAGE --}}
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Halaman Chart Monitoring Vote</h3>
            </div>
        </div>
    </div>

    <section>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>Chart Penghitungan Voting</h4>
                    <button id="testing" class="btn btn-sm btn-primary">Refresh Chart</button>
                </div>
            </div>
            <div id="bodyChart" class="card-body">
                <canvas id="myChart" height="100px"></canvas>
            </div>
        </div>
    </section>
@endsection

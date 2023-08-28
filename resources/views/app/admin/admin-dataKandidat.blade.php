@extends('app.layouts.master')

@section('title','Halaman Data Kandidat')

@section('content-admin')
 {{-- TITLE PAGE --}}
 <div class="page-title">
    <div class="row">
        <div class="col-12 col-md-7 order-md-1 order-last">
            <h3>Halaman Data Kandidat</h3>
            <p>Periode 2023/2024 - Sekarang</p>
        </div>
    </div>
</div>

 {{-- BODY PAGE --}}
 <section>
    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">List Data Kandidat</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Periode</th>
                        <th>No Urut Kandidat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($candidate as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->vote_session->tahun_periode }}</td>
                            <td>{{ $item->no_urut }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

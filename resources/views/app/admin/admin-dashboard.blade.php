@extends('app.layouts.master')

@section('content-admin')
    {{-- TITLE PAGE --}}
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Halaman Dashboard</h3>
                <p class="text-subtitle text-muted">Selamat Datang Administrator!</p>
            </div>
        </div>
    </div>

    {{-- BODY PAGE --}}
    <section>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Sesi Voting Terakhir</h4>
            </div>
            <div class="card-body">
                <p>Sesi voting terakhir dilakukan pada periode {{ $lastSession->tahun_periode }}, tanggal
                    [{{ \Carbon\Carbon::parse($lastSession->created_at)->format('y/m/d') }}].</p>
                <h6 class="">Data Kandidat Ketua Umum Periode {{ $lastSession->tahun_periode }}</h6>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Nama </td>
                            <td>Nomor Urut Kandidat</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lastSession->candidates as $item)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}.
                                </td>
                                <td>
                                    {{ $item->nama }}
                                </td>
                                <td>
                                    {{ $item->no_urut }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@extends('app.layouts.master')

@section('title','Halaman Dashboard')

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
        <div class="card">
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

    <section>
        <div class="card shadow">
            <div class="card-body">
                <div class="divider">
                    <div class="divider-text">
                        <h4>Kandidat Terpilih</h4>
                    </div>
                </div>
                @if ($choosenCandidate->jumlah_vote == 0)
                <div class="alert alert-info text-center" role="alert">
                   <p>Data Belum Tersedia.</p>
                  </div>
                @else
                    <div class="card-content text-center py-3">
                        <img src="{{ Storage::url($choosenCandidate->foto) }}" class="rounded rounded-circle"
                            alt="singleminded" width="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $choosenCandidate->nama }}</h5>
                            <div>
                                <h4>{{ $choosenCandidate->no_urut }}</h4>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

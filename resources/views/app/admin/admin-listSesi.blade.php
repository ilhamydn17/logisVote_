@extends('app.layouts.master')

@section('title','Halaman List Sesi')

@section('content-admin')
    {{-- TITLE PAGE --}}
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-7 order-md-1 order-last">
                <h3>Halaman List Sesi Voting</h3>
            </div>
        </div>
    </div>

    {{-- BODY PAGE --}}
    <section>
        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Data Kandidat</h4>
                    <a href="{{ route('vote-session.create') }}" class="btn btn-sm btn-primary">Buat Sesi Baru</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Periode Sesi</th>
                            <th>Status Sesi</th>
                            <th>Tanggal Pembuatan Sesi</th>
                            <th>Info Kandidat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listSesi as $item)
                            <tr>
                                <td>{{ $item->tahun_periode }}</td>
                                <td>
                                    @if ($item->session_run == 0)
                                        <span class="badge bg-info">Sesi Siap Dimulai</span>
                                    @elseif($item->session_run == 1)
                                        <span class="badge bg-warning">Sesi Berjalan</span>
                                    @elseif($item->session_run == 2)
                                        <span class="badge bg-success">Sesi Berakhir</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/y') }}</td>
                                <td><a href="{{ route('vote-session.show', $item) }}" class="btn btn-sm btn-primary">lihat</a></td>
                                <td>
                                    @if ($item->session_run == 0)
                                        <a href="" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#warning-{{ $item->id }}">Mulai Sesi</a>
                                    @elseif($item->session_run == 1)
                                        <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#warning-{{ $item->id }}">Akhiri Sesi</a>
                                    @elseif($item->session_run == 2)
                                    <a href="" class="btn btn-sm btn-warning disabled">Selesai</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Modal Confirm Action --}}
                @forelse ($listSesi as $item)
                    <div class="modal fade text-left warning" id="warning-{{ $item->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel140" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" value="$item->id">
                            <div class="modal-content">
                                <div class="modal-header bg-warning">
                                    <h5 class="modal-title white" id="myModalLabel140">Peringatan!
                                    </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Anda yakin menjalankan aksi ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>

                                    <a class="btn btn-warning ml-1" onclick="event.preventDefault(); document.getElementById('action-form').submit()">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Konfirmasi</span>
                                    </a>
                                    <form id="action-form" action="{{ route('admin.action', $item) }}" method="post">
                                        @csrf
                                        @method('POST')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
@endsection

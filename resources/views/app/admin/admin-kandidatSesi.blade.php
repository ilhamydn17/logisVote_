@extends('app.layouts.master')

@section('content-admin')
    {{-- TITLE PAGE --}}
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-2 order-last">
                <h3>Halaman Info Kandidat</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    {{-- BODY PAGE --}}
    <section>
        <div class="row">
            @foreach ($voteSession->candidates as $item)
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="divider">
                            <div class="divider-text">
                                <p>Kandidat {{ $loop->iteration }}</p>
                            </div>
                        </div>
                        <div class="card-content text-center py-3">
                            <img src="{{ Storage::url($item->foto) }}" class="rounded rounded-circle" alt="singleminded"
                                width="200px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama }}</h5>
                                <div>
                                    <h4>{{ $item->no_urut }}</h4>
                                    <a href="{{ route('admin.detail-candidate', $item->id) }}" class="btn btn-primary">Detail Kandidat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

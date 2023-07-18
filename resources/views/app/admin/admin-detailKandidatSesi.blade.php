@extends('app.layouts.master')

@section('content-admin')
    {{-- TITLE PAGE --}}
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-2 order-last">
                <h3>Detail Kandidat</h3>
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
        <div class="card">
            <div class="card-content text-center py-3">
                <img src="{{ Storage::url($candidate->foto) }}" class="rounded rounded-circle" alt="singleminded"
                    width="200px">
                <div class="card-body">
                    <h5 class="card-title">{{ $candidate->nama }}</h5>
                    <div>
                        <h4>{{ $candidate->no_urut }}</h4>
                    </div>
                    <div class="row">
                        <div class="divider">
                            <div class="divider-text">
                                <p>Visi</p>
                            </div>
                        </div>
                        <div class="card border p-3">
                            <p class="text-justify">
                                {{ $candidate->visi }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="divider">
                            <div class="divider-text">
                                <p>Misi</p>
                            </div>
                        </div>
                        <div class="card border p-3">
                            <p class="text-justify">
                                {{ $candidate->misi }}
                            </p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning text-black" style="width: 100%"
                                data-bs-toggle="modal" data-bs-target="#modal-update">
                                Update
                            </button>

                            <!-- Modal -->

                        </div>
                        <div class="col-md-6">
                            <!-- Button trigger modal -->
                            <a href="{{ url()->previous() }}" class="btn btn-primary" style="width: 100%">
                                Kembali
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL --}}
        <div class="modal fade" id="modal-update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-lg modal-dialog  modal-dialog-centered modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.detail-candidate-update',$candidate) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama Kandidat 1</label>
                                <input type="text" value="{{ $candidate->nama }}" name="nama"class="form-control @error('nama_kandidat1') is-invalid @enderror" placeholder="masukkan nama kandidat">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Urut</label>
                                <input type="text" value="{{ $candidate->no_urut }}" name="no_urut" class="form-control @error('no_urut1') is-invalid @enderror" placeholder="01">
                            </div>
                            <div class="form-group">
                                <label for="">Foto Kandidat (ukuran 3x4)</label>
                                <!-- imgBB file uploader -->
                                <input type="file"  value="{{ $candidate->foto }}" class="form-control  @error('foto1') is-invalid @enderror" name="fotoBaru">
                            </div>
                            <div class="form-group">
                                <label for="">Visi</label>
                                <textarea class="form-control @error('foto1') is-invalid @enderror" name="visi" id="" cols="30" rows="6" placeholder="masukkan visi">{{ $candidate->visi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Misi</label>
                                <textarea class="form-control @error('misi1') is-invalid @enderror" name="misi"  value="{{ $candidate->misi }}" id="" cols="30" rows="6" placeholder="masukkan misi">{{ $candidate->misi }}</textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

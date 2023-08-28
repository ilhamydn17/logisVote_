@extends('app.layouts.master')

@section('title','Buat Sesi Baru')

@section('content-admin')
    {{-- TITLE PAGE --}}
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Buat Sesi Baru</h3>
            </div>
        </div>
    </div>

    {{-- BODY PAGE --}}
    <form action="{{ route('vote-session.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <section>
            <div class="card shadow">
                <div class="divider">
                    <div class="divider-text">
                        <p> Data Sesi Baru</p>
                    </div>
                </div>

                <div class="card-body" style="margin-top: -40px">
                    <div class="form-group">
                        <label for="">Periode (contoh: 2021/2022)</label>
                        <input type="text" class="form-control @error('tahun_periode') is-invalid @enderror" name="tahun_periode" placeholder="masukkan periode">
                        @error('tahun_periode')
                        <div class="text-danger">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="card shadow">
                <div class="divider">
                    <div class="divider-text">
                        <p>Kandidat 1</p>
                    </div>
                </div>
                <div class="card-body" style="margin-top: -40px">
                    <div class="form-group">
                        <label for="">Nama Kandidat 1</label>
                        <input type="text" name="nama_kandidat1" class="form-control @error('nama_kandidat1') is-invalid @enderror" placeholder="masukkan nama kandidat">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Urut</label>
                        <input type="text" name="no_urut1" class="form-control @error('no_urut1') is-invalid @enderror" placeholder="01">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Kandidat (ukuran 3x4)</label>
                        <!-- imgBB file uploader -->
                        <input type="file" class="form-control  @error('foto1') is-invalid @enderror" name="foto1">
                    </div>
                    <div class="form-group">
                        <label for="">Visi</label>
                        <textarea  class="form-control @error('foto1') is-invalid @enderror" name="visi1" id="" cols="30" rows="6" placeholder="masukkan visi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Misi</label>
                        <textarea  class="form-control @error('misi1') is-invalid @enderror" name="misi1" id="" cols="30" rows="6" placeholder="masukkan misi"></textarea>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="card shadow">
                <div class="divider">
                    <div class="divider-text">
                        <p>Kandidat 2</p>
                    </div>
                </div>
                <div class="card-body" style="margin-top: -40px">
                    <div class="form-group">
                        <label for="">Nama Kandidat 2</label>
                        <input type="text" name="nama_kandidat2" class="form-control @error('nama_kandidat2') is-invalid @enderror" placeholder="masukkan nama kandidat">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Urut</label>
                        <input type="text" name="no_urut2" class="form-control @error('no_urut2') is-invalid @enderror" placeholder="01">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Kandidat (ukuran 3x4)</label>
                        <!-- imgBB file uploader -->
                        <input type="file" class="form-control @error('foto2') is-invalid @enderror" name="foto2">
                    </div>
                    <div class="form-group">
                        <label for="">Visi</label>
                        <textarea  class="form-control @error('visi2') is-invalid @enderror" name="visi2" id="" cols="30" rows="6" placeholder="masukkan visi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Misi</label>
                        <textarea  class="form-control @error('misi2') is-invalid @enderror" name="misi2" id="" cols="30" rows="6" placeholder="masukkan misi"></textarea>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="card shadow">
                <div class="divider">
                    <div class="divider-text">
                        <p>Kandidat 3</p>
                    </div>
                </div>
                <div class="card-body" style="margin-top: -40px">
                    <div class="form-group">
                        <label for="">Nama Kandidat 3</label>
                        <input type="text" name="nama_kandidat3" class="form-control @error('nama_kandidat3') is-invalid @enderror" placeholder="masukkan nama kandidat">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Urut</label>
                        <input type="text" name="no_urut3" class="form-control @error('no_urut3') is-invalid @enderror" placeholder="01">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Kandidat (ukuran 3x4)</label>
                        <!-- imgBB file uploader -->
                        <input type="file" class="form-control @error('foto3') is-invalid @enderror" name="foto3">
                    </div>
                    <div class="form-group">
                        <label for="">Visi</label>
                        <textarea  class="form-control @error('visi3') is-invalid @enderror" name="visi3" id="" cols="30" rows="6" placeholder="masukkan visi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Misi</label>
                        <textarea  class="form-control @error('misi3') is-invalid @enderror" name="misi3" id="" cols="30" rows="6" placeholder="masukkan misi"></textarea>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="card shadow">
                <div class="divider">
                    <div class="divider-text">
                        <p>Kandidat 4</p>
                    </div>
                </div>
                <div class="card-body" style="margin-top: -40px">
                    <div class="form-group">
                        <label for="">Nama Kandidat 4</label>
                        <input type="text" name="nama_kandidat4" class="form-control @error('nama_kandidat4') is-invalid @enderror" placeholder="masukkan nama kandidat">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Urut</label>
                        <input type="text" name="no_urut4" class="form-control @error('no_urut4') is-invalid @enderror" placeholder="01">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Kandidat (ukuran 3x4)</label>
                        <!-- imgBB file uploader -->
                        <input type="file" class="form-control @error('foto4') is-invalid @enderror" name="foto4">
                    </div>
                    <div class="form-group">
                        <label for="">Visi</label>
                        <textarea  class="form-control @error('visi4') is-invalid @enderror" name="visi4" id="" cols="30" rows="6" placeholder="masukkan visi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Misi</label>
                        <textarea  class="form-control @error('misi4') is-invalid @enderror" name="misi4" id="" cols="30" rows="6" placeholder="masukkan misi"></textarea>
                    </div>
                </div>
            </div>
        </section>

        <div class="form-group d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
        </div>
    </form>
@endsection

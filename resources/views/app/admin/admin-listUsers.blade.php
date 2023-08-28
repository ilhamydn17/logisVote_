@extends('app.layouts.master')

@section('title','Halaman List User')

@section('content-admin')
    {{-- TITLE PAGE --}}
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-7 order-md-1 order-last">
                <h3>Halaman List User</h3>
            </div>
        </div>
    </div>

    {{-- BODY PAGE --}}
    <section>
        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="card-title">List Data User</h4>
                    </div>
                    <div>
                        <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addUser">Tambah Baru</a>
                        <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal"
                            data-bs-target="#importUser">Import Excel</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Status Voting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->username }}</td>
                                <td>
                                    @if ($item->is_voted)
                                        <span class="badge bg-light-success">Sudah Memilih</span>
                                    @else
                                        <span class="badge bg-light-danger">Belum Memilih</span>
                                    @endif
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Export Excel --}}
    <div class="modal fade text-left primary" id="importUser" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel140" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" value="$item->id">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title white" id="myModalLabel140">
                        Upload File Excel
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="action-form" action="{{ route('admin.import-users') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        {{-- INPUT CONTENT --}}
                        <div class="form-group">
                            <div class="form-control">
                                <label for="">File Excel</label>
                                <input type="file" name="file" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button class="btn btn-primary ml-1" type="submit">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Konfirmasi</span>
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Regular Input --}}
    <div class="modal fade text-left primary" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel140"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" value="$item->id">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title white" id="myModalLabel140">
                        Tambah Data User
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="action-form" action="{{ route('admin.add-users') }}" method="post">
                        @csrf
                        @method('POST')
                        {{-- INPUT CONTENT --}}
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input class="form-control  @error('username') is-invalid @enderror" type="text" name="username" >
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" >
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Konfirmasi Password</label>
                            <input class="form-control  @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" >
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button class="btn btn-primary ml-1" type="submit">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Konfirmasi</span>
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

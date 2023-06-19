@extends('master.index')
@section('main')
    <h2 class="text-center">Tambah Siswa</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-primary">Tambah Siswa</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('siswa.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nisn</label>
                            <input type="text" name="nisn" class="form-control" placeholder="Tambahkan Nama lengkap" value="{{ old('nisn') }}">
                            @error('nisn')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nis</label>
                            <input type="text" name="nis" class="form-control" placeholder="Tambahkan Nama lengkap" value="{{ old('nis') }}">
                            @error('nis')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Siswa</label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Tambahkan Nama lengkap" value="{{ old('nama_lengkap') }}">
                            @error('nama_lengkap')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan tempat lahir" value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tambahkan tanggal lahir" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Tambahkan alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex">
                            <button type="submit" class="btn btn-primary ms-auto">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('master.index')
@section('main')
    <h2 class="text-center">Ubah Siswa</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-primary">Ubah Siswa</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('siswa.update',$siswa->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nisn</label>
                            <input type="text" name="nisn" class="form-control" placeholder="Ubah Nama siswa" value="{{ old('nisn',$siswa->nisn) }}">
                            @error('nisn')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nis</label>
                            <input type="text" name="nis" class="form-control" placeholder="Ubah Nama siswa" value="{{ old('nis',$siswa->nis) }}">
                            @error('nis')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Ubah Nama siswa" value="{{ old('nama_lengkap',$siswa->nama_lengkap) }}">
                            @error('nama_lengkap')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Ubah tempat lahir" value="{{ old('tempat_lahir',$siswa->tempat_lahir) }}">
                            @error('tempat_lahir')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Ubah tanggal lahir" value="{{ old('tanggal_lahir',$siswa->tanggal_lahir) }}">
                            @error('tanggal_lahir')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Ubah alamat" value="{{ old('alamat',$siswa->alamat) }}">
                            @error('alamat')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex">
                            <button type="submit" class="btn btn-primary ms-auto">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

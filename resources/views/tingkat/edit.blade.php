@extends('master.index')
@section('main')
    <h2 class="text-center">Ubah Tingkat</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-primary">Ubah Tingkat</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('tingkat.update',$tingkat->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Tingkat</label>
                            <input type="text" name="nama_tingkat" class="form-control" placeholder="Ubah Nama Tingkat" value="{{ old('nama_tingkat',$tingkat->nama_tingkat) }}">
                            @error('nama_tingkat')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kode Tingkat</label>
                            <input type="text" name="kode_tingkat" class="form-control" placeholder="Ubah Kode Tingkat" value="{{ old('kode_tingkat',$tingkat->kode_tingkat) }}">
                            @error('kode_tingkat')
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

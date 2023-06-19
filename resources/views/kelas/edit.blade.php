@extends('master.index')
@section('main')
    <h2 class="text-center">Ubah Kelas</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-primary">Ubah Kelas</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('kelas.update',$kelas->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" placeholder="Ubah Nama Kelas" value="{{ old('nama_kelas',$kelas->nama_kelas) }}">
                            @error('nama_kelas')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kode Kelas</label>
                            <input type="text" name="kode_kelas" class="form-control" placeholder="Ubah Kode Kelas" value="{{ old('kode_kelas',$kelas->kode_kelas) }}">
                            @error('kode_kelas')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Ajaran</label>
                            <select name="tahun_ajaran_id" id="" class="form-control">
                                @foreach ($tahun as $data)
                                    <option value="{{ $data->id }}">{{ $data->kode_tahun_ajaran }}</option>
                                @endforeach
                            </select>
                            @error('tahun_ajaran_id')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tingkat</label>
                            <select name="tingkat_id" id="" class="form-control">
                                @foreach ($tingkat as $data)
                                    <option value="{{ $data->id }}">{{ $data->kode_tingkat }}</option>
                                @endforeach
                            </select>
                            @error('tingkat_id')
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

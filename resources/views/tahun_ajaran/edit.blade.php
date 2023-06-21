@extends('master.index')
@section('main')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-primary">Ubah Tahun Ajaran</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('tahun_ajaran.update',$tahun_ajaran->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Tahun Ajaran</label>
                            <input type="text" name="nama_tahun_ajaran" class="form-control" placeholder="Tambahkan Nama Tahun Ajaran" value="{{ old('nama_tahun_ajaran',$tahun_ajaran->nama_tahun_ajaran) }}">
                            @error('nama_tahun_ajaran')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kode Tahun Ajaran</label>
                            <input type="text" name="kode_tahun_ajaran" class="form-control" placeholder="Tambahkan Kode Tahun Ajaran" value="{{ old('kode_tahun_ajaran',$tahun_ajaran->kode_tahun_ajaran) }}">
                            @error('kode_tahun_ajaran')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Is Active</label>
                            <select name="is_active" class="form-control">
                                <option value=""class="text-center">-----SELECT-----</option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                            @error('is_active')
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

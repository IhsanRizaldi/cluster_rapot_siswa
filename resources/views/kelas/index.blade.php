@extends('master.index')
@section('main')
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if ($message = Session::get('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <h2 class="text-center">Kelas</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="card-title text-primary">Kelas</h6>
                    <a href="{{ route('kelas.create') }}" class="btn btn-primary ms-auto">
                        <i class="fas fa-plus-large">+</i>
                      </a>
                </div>
                <div class="card-body">
                    <table class="table mb-3 mt-3" width="100%" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Kode Kelas</th>
                            <th>Kode Tingkat</th>
                            <th>Kode Tahun Ajaran</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($kelas as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->nama_kelas }}</td>
                                <td>{{ $data->kode_kelas }}</td>
                                <td>{{ $data->tingkat->kode_tingkat }}</td>
                                <td>{{ $data->tahun_ajaran->kode_tahun_ajaran }}</td>
                                <td>
                                    <a href="{{ route('kelas.edit',$data->id) }}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <a href="{{ route('kelas.delete',$data->id) }}" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

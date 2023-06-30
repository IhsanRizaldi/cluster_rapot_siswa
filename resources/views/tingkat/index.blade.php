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
    <div class="row">
        <div class="col-md-6 mb-3 mt-3">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
                <button class="btn btn-outline-primary" type="submit"><i class="fas fa-magnifying-glass">Search</i></button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="card-title text-primary">Tingkat</h6>
                    <a href="{{ route('tingkat.create') }}" class="btn btn-primary btn-sm ml-auto">
                        <i class="fas fa-plus-large">+</i>
                      </a>
                </div>
                <div class="card-body">
                    <table class="table mb-3 mt-3" width="100%" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Nama Tingkat</th>
                            <th>Kode Tingkat</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($tingkat as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->nama_tingkat }}</td>
                                <td>{{ $data->kode_tingkat }}</td>
                                <td>
                                    <a href="{{ route('tingkat.edit',$data->id) }}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <a href="{{ route('tingkat.delete',$data->id) }}" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="d-flex">
                        {!! $tingkat->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

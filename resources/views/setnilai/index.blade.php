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
                    <h6 class="card-title text-primary">Set Nilai</h6>
                    <a href="{{ route('setnilai.store') }}" class="btn btn-primary ml-auto">
                        <i class="fas fa-plus-large">+</i>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table mb-3 mt-3">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($kelas as $data)
                            <tr>
                                <th>{{ $i++ }}</th>
                                <th>{{ $data->kode_kelas }}</th>
                                <th>
                                    <a href="{{ route('setnilai.show',$data->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                </th>
                            </tr>
                        @endforeach
                    </table>
                    <div class="d-flex">
                        {!! $kelas->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

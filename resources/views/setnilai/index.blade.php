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
    <h2 class="text-center">Set Nilai</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="card-title text-primary">Set Nilai</h6>
                    <a href="{{ route('setnilai.store') }}" class="btn btn-primary ms-auto">
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
                </div>
            </div>
        </div>
    </div>
@endsection

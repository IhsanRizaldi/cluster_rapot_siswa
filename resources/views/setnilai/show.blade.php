@extends('master.index')
@section('main')
<style>
    .my-custom-scrollbar {
    position: relative;
    height: 500px;
    overflow-y: auto;
    }
    .table-wrapper-scroll-y {
    display: block;
    }
</style>
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
                    <a href="{{ route('setnilai.edit',$nilai[0]->setkelas->kelas->id) }}" class="btn btn-success ms-auto"><i class="fas fa-pen"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-responsive table-bordered mb-3 mt-3" cellspacing="0" style="overflow-x: auto">

                        <tr>
                            <th>Nama Siswa</th>
                            <th>Bahasa Indonesia</th>
                            <th>Bahasa Inggris</th>
                            <th>Bahasa Jepang</th>
                            <th>IPA</th>
                            <th>IPS</th>
                            <th>Matematika</th>
                            <th>Seni Budaya</th>
                            <th>PJOK</th>
                            <th>PABP</th>
                            <th>PKN</th>
                        </tr>
                        <tr>
                            @foreach ($nilai as $data)
                            <td>{{ $data->setkelas->siswa->nama_lengkap }}</td>
                            <td>{{ $data->bahasa_indonesia }}</td>
                            <td>{{ $data->bahasa_inggris }}</td>
                            <td>{{ $data->bahasa_jepang }}</td>
                            <td>{{ $data->ilmu_pengetahuan_alam }}</td>
                            <td>{{ $data->ilmu_pengetahuan_sosial }}</td>
                            <td>{{ $data->matematika }}</td>
                            <td>{{ $data->seni_budaya }}</td>
                            <td>{{ $data->pendidikan_jasmani_dan_rohani }}</td>
                            <td>{{ $data->pendidikan_agama_dan_budi_pekerti }}</td>
                            <td>{{ $data->pendidikan_kewarganegaraan }}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
@endsection

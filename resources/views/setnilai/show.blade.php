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
    <div class="row justify-content-center">
        <div class="col">
            @if ($nilai[0]->setkelas->walikelas->id == Auth::user()->id)
            <div class="card">
                <div class="card-header">
                    <div class="row ">
                        <div class="col d-flex ml-auto">
                            <h6 class="card-title text-primary">Set Nilai</h6>
                        </div>
                        <a href="{{ route('setnilai.edit',$nilai[0]->setkelas->kelas->id) }}" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                        <a href="{{ route('cluster.index',$nilai[0]->setkelas->kelas->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-print"></i></a>
                    </div>
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
                        @foreach ($nilai as $data)
                        <tr>
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
    @else
        <h1 class="text-center">Anda Bukan Walikelas Kelas Ini!</h1>
    @endif
        </div>
    </div>
@endsection

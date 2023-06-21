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
    <h2 class="text-center">Set Nilai Siswa</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="card-title text-primary">Set Nilai Siswa</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <form action="{{ route('setnilai.update') }}" method="post">
                    @csrf
                    <table class="table-responsive table-bordered" cellspacing="0" style="overflow-x: auto">

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
                            <input type="hidden" name="nilai[{{ $data->setkelas_id }}]" value="{{ $data->setkelas->id }}">
                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][bahasa_indonesia]" value="{{ $data->bahasa_indonesia }}" class="form-control"></td>

                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][bahasa_inggris]" value="{{ $data->bahasa_inggris }}" class="form-control"></td>

                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][bahasa_jepang]" value="{{ $data->bahasa_jepang }}" class="form-control"></td>

                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][ilmu_pengetahuan_alam]" value="{{ $data->ilmu_pengetahuan_alam }}" class="form-control"></td>

                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][ilmu_pengetahuan_sosial]" value="{{ $data->ilmu_pengetahuan_sosial }}" class="form-control"></td>

                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][matematika]" value="{{ $data->matematika }}" class="form-control"></td>

                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][seni_budaya]" value="{{ $data->seni_budaya }}" class="form-control"></td>

                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][pendidikan_jasmani_dan_rohani]" value="{{ $data->pendidikan_jasmani_dan_rohani }}" class="form-control"></td>

                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][pendidikan_agama_dan_budi_pekerti]" value="{{ $data->pendidikan_agama_dan_budi_pekerti }}" class="form-control"></td>

                            <td><input type="number" name="nilai[{{ $data->setkelas_id }}][pendidikan_kewarganegaraan]" value="{{ $data->pendidikan_kewarganegaraan }}" class="form-control"></td>
                        </tr>
                    @endforeach

                    </table>
                    <div class="mb-3 mt-2">
                        <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

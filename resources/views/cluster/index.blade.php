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
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-primary">Itterasi 1</h6>
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
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>Peringkat</th>
                        </tr>
                        @php
                             $total = [];
                        @endphp
                    @foreach ($nilai as $data)
                        @php

                            $centroid = 7;
                            $c1 = sqrt(pow($data->bahasa_indonesia - $centroid,2) + 
                            pow($data->bahasa_inggris - $centroid,2) + 
                            pow($data->bahasa_jepang - $centroid,2) + 
                            pow($data->ilmu_pengetahuan_alam - $centroid,2) + 
                            pow($data->ilmu_pengetahuan_sosial - $centroid,2) + 
                            pow($data->matematika - $centroid,2) + 
                            pow($data->seni_budaya - $centroid,2) + 
                            pow($data->pendidikan_jasmani_dan_rohani - $centroid,2) + 
                            pow($data->pendidikan_agama_dan_budi_pekerti - $centroid,2) + 
                            pow($data->pendidikan_kewarganegaraan - $centroid,2));

                            $x1 = $c1/3; 

                            $centroid2 = 6;
                            $c2 = sqrt(pow($data->bahasa_indonesia - $centroid2,2) + 
                            pow($data->bahasa_inggris - $centroid2,2) + 
                            pow($data->bahasa_jepang - $centroid2,2) + 
                            pow($data->ilmu_pengetahuan_alam - $centroid2,2) + 
                            pow($data->ilmu_pengetahuan_sosial - $centroid2,2) + 
                            pow($data->matematika - $centroid2,2) + 
                            pow($data->seni_budaya - $centroid2,2) + 
                            pow($data->pendidikan_jasmani_dan_rohani - $centroid2,2) + 
                            pow($data->pendidikan_agama_dan_budi_pekerti - $centroid2,2) + 
                            pow($data->pendidikan_kewarganegaraan - $centroid2,2));

                            $x2 = $c2/3; 

                            $centroid3 = 5;
                            $c3 = sqrt(pow($data->bahasa_indonesia - $centroid3,2) + 
                            pow($data->bahasa_inggris - $centroid3,2) + 
                            pow($data->bahasa_jepang - $centroid3,2) + 
                            pow($data->ilmu_pengetahuan_alam - $centroid3,2) + 
                            pow($data->ilmu_pengetahuan_sosial - $centroid3,2) + 
                            pow($data->matematika - $centroid3,2) + 
                            pow($data->seni_budaya - $centroid3,2) + 
                            pow($data->pendidikan_jasmani_dan_rohani - $centroid3,2) + 
                            pow($data->pendidikan_agama_dan_budi_pekerti - $centroid3,2) + 
                            pow($data->pendidikan_kewarganegaraan - $centroid3,2));

                            $x3 = $c3/3; 

                           
                            $total = ($x1+$x2+$x3)/3;


                            

                        @endphp
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
                            <td>{{ $x1 }}</td>
                            <td>{{ $x2 }}</td>
                            <td>{{ $x3 }}</td>
                            <td>Peringkat {{ $total }}</td>
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

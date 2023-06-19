@extends('master.index')
@section('main')
    <h2 class="text-center">Tambah Set Kelas</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-primary">Tambah Set Kelas</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('setkelas.store') }}" method="post">
                        @csrf
                        <div class="row">
                                <div class="mb-3">
                                    <label class="form-label">Kelas</label>
                                    <select name="kelas_id" id="" class="form-control text-center">
                                        @foreach ($kelas as $data)
                                            <option value="{{ $data->id }}">{{ $data->kode_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Wali Kelas</label>
                                <select name="walikelas_id" id="" class="form-control text-center">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-5">
                                <label>Nama Siswa</label>
                                <select name="siswa_semua" id="siswa_semua" class="form-control" multiple>
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2 mt-5">
                                <center>
                                <button type="button" id="tambah" class="btn btn-outline-primary">></button>
                                <button type="button" id="hapus" class="btn btn-outline-primary"><</button>
                                </center>
                            </div>
                            <div class="col-sm-5">
                                <label>Nama Siswa</label>
                                <select name="siswa_id[]" id="siswa_id" class="form-control" multiple>
                                </select>
                            </div>
                        </div>


                        <div class="mb-3 d-flex">
                            <button type="submit" class="btn btn-primary ms-auto">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('/js/pair-select.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#siswa_semua').pairMaster();

            $('#tambah').click(function(){
                $('#siswa_semua').addSelected('#siswa_id');
            });

            $('#hapus').click(function(){
                $('#siswa_id').removeSelected('#siswa_semua');
            })
        })

    </script>

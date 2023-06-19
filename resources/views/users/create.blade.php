@extends('master.index')
@section('main')
    <h2 class="text-center">Tambah User</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-primary">Tambah User</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama User</label>
                            <input type="text" name="name" class="form-control" placeholder="Tambahkan Nama user" value="{{ old('name') }}">
                            @error('name')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Tambahkan Nama user" value="{{ old('email') }}">
                            @error('email')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Tambahkan Nama user" value="{{ old('password') }}">
                            @error('password')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Role</label>
                            <select name="role" class="form-control">
                                <option value="wali_kelas">Walikelas</option>
                                <option value="admin">Admin</option>
                            </select>
                            @error('role')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
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

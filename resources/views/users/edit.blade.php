@extends('master.index')
@section('main')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-primary">Ubah User</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update',$user->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama User</label>
                            <input type="text" name="name" class="form-control" placeholder="Tambahkan Nama User" value="{{ $user->name }}">
                            @error('name')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Tambahkan Email User" value="{{ $user->email }}">
                            @error('email')
                                 <p class="text-danger">
                                    {{ $message }}
                                 </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Tambahkan Password User" value="{{ $user->password }}">
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
                            <button type="submit" class="btn btn-primary ms-auto">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

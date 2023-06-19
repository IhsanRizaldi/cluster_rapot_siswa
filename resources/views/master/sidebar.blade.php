        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #1A2F5E">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Cluster Raport</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ route('home.index') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-house" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tahun_ajaran.index') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-calendar-days" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Tahun Ajaran</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tingkat.index') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-signal" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Tingkat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kelas.index') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-landmark" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Kelas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('setkelas.index') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-gear" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Set Kelas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('setnilai.index') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-graduation-cap" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Set Nilai</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('siswa.index') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-users" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Siswa</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-user" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">User</span>
                        </a>
                    </li>

                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>


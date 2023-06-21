<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home.index') }}">
        <div class="sidebar-brand-text mx-3">Cluster Rapot</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="fas fa-home" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('tahun_ajaran.index') }}" class="nav-link">
                <i class="fas fa-calendar" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Tahun Ajaran</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('tingkat.index') }}" class="nav-link">
                <i class="fas fa-signal" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Tingkat</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('kelas.index') }}" class="nav-link">
                <i class="fas fa-landmark" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Kelas</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('setkelas.index') }}" class="nav-link">
                <i class="fas fa-landmark" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Set Kelas</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('setnilai.index') }}" class="nav-link">
                <i class="fas fa-graduation-cap" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Set Nilai</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('siswa.index') }}" class="nav-link">
                <i class="fas fa-users" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">Siswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link">
                <i class="fas fa-user" style="color: white"></i> <span class="ms-1 d-none d-sm-inline" style="color: white">User</span>
            </a>
        </li>
    </ul>
</ul>
<!-- End of Sidebar -->




<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/jabatan') }}">
                        <i class="bi bi-file-earmark-person"></i><span>Jabatan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/divisi') }}">
                        <i class="bi bi-building"></i><span>Divisi</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/datapegawai') }}">
                <i class="bi bi-people"></i>
                <span>Data Pegawai</span>
            </a>
        </li>
    </ul>
</aside>

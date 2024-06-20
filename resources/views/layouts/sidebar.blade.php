<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/jabatan') }}">
                        <i class="bi bi-circle"></i><span>Jabatan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/divisi') }}">
                        <i class="bi bi-circle"></i><span>Divisi</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{ url('/datapegawai') }}">
                <i class="bi bi-grid"></i>
                <span>Data Pegawai</span>
            </a>
        </li><!-- End Dashboard Nav -->




    </ul>

</aside><!-- End Sidebar-->

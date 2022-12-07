
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="{{ (request()->is('superadmin')) ? 'active' : '' }}"><a href="/superadmin"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="{{ (request()->is('superadmin/pendaftar*')) ? 'active' : '' }}"><a href="/superadmin/pendaftar"><i class="fa fa-users"></i> <span>Pendaftar</span></a></li>
    <li class="{{ (request()->is('superadmin/laporanpendaftar*')) ? 'active' : '' }}"><a href="/superadmin/laporanpendaftar"><i class="fa fa-file"></i> <span>Laporan Pendaftar</span></a></li>
    <li class="{{ (request()->is('superadmin/laporan/tt/d3*')) ? 'active' : '' }}"><a href="/superadmin/laporan/tt/d3"><i class="fa fa-file"></i> <span>Laporan Tes Tertulis <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D3 Keperawatan</span></a></li>
    <li class="{{ (request()->is('superadmin/laporan/tt/s1*')) ? 'active' : '' }}"><a href="/superadmin/laporan/tt/s1"><i class="fa fa-file"></i> <span>Laporan Tes Tertulis <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S1 Administrasi RS</span></a></li>

    <li class="{{ (request()->is('superadmin/laporan/tk/d3*')) ? 'active' : '' }}"><a href="/superadmin/laporan/tk/d3"><i class="fa fa-file"></i> <span>Laporan Tes Kesehatan <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D3 Keperawatan</span></a></li>
    <li class="{{ (request()->is('superadmin/laporan/tk/s1*')) ? 'active' : '' }}"><a href="/superadmin/laporan/tk/s1"><i class="fa fa-file"></i> <span>Laporan Tes Kesehatan <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S1 Administrasi RS</span></a></li>
    <li class="{{ (request()->is('logout')) ? 'active' : '' }}"><a href="/logout" onclick="return confirm('Yakin ingin keluar dari aplikasi');"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
</section>
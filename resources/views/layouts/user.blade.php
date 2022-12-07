
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="{{ (request()->is('pendaftar')) ? 'active' : '' }}"><a href="/pendaftar"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="{{ (request()->is('pendaftar/datanilai*')) ? 'active' : '' }}"><a href="/pendaftar/datanilai"><i class="fa fa-file"></i> <span>Data Nilai</span></a></li>
    <li class="{{ (request()->is('pendaftar/editprofil*')) ? 'active' : '' }}"><a href="/pendaftar/editprofil"><i class="fa fa-user-plus"></i> <span>Edit Profil</span></a></li>
    <li class="{{ (request()->is('logout')) ? 'active' : '' }}"><a href="/logout" onclick="return confirm('Yakin ingin keluar dari aplikasi');"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
  
    </ul>
    <!-- /.sidebar-menu -->
</section>
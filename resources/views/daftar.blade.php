<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/assets/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <!-- IziToast -->
  <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
  <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top"  style="box-shadow: 0 8px 8px 0 rgba(0,0,0,.2);">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>STIKES Intan Martapura</b></a>
          
          {{-- <a href="#" class="navba-brand" style="color: white"><img src="/logo/pemko.png" width="6%">Aplikasi Perizinan Dan Pengawasan Bangunan</a> --}}
          {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button> --}}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        {{-- <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dinas Pekerjaan Umum dan Penataan Ruang</a></li>
          </ul>
          
        </div> --}}
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <b></b>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper"  style="background-image: url('/logo/bg.jpeg')">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        {{-- <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol> --}}
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <div class="text-center">
            <img src="/logo/logo.jpeg" width="100px" ><br/><br/>
            </div>
          <br/><br/>
            <div class="box box-warning"style="box-shadow: 0 8px 8px 0 rgba(0,0,0,.2);border-top-color: #605ca8">
              <div class="box-header with-border text-center">
                <h3 class="box-title">STIKES Intan Martapura</h3>
      
              </div>
              <form class="form-horizontal" method="post" action="/daftar" autocomplete="off" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Jurusan</label>

                  <div class="col-sm-9">
                    <select name="jurusan_id" class="form-control" required>
                      <option value="">-pilih-</option>
                      @foreach ($jurusan as $item)
                          <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama Lengkap</label>

                  <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{old('nama')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Tempat Lahir</label>

                  <div class="col-sm-9">
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="tempat lahir" value="{{old('tempat_lahir')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Lahir</label>

                  <div class="col-sm-9">
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Nama Lengkap" value="{{old('tanggal_lahir')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>

                  <div class="col-sm-9">
                    <select name="jkel" class="form-control" required>
                      <option value="">-pilih-</option>
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>

                  <div class="col-sm-9">
                    <input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{old('alamat')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Agama</label>

                  <div class="col-sm-9">
                    <select name="agama" class="form-control" required>
                      <option value="">-pilih-</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Protestan">Protestan</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buddha">Buddha</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Asal Sekolah</label>

                  <div class="col-sm-9">
                    <input type="text" name="asal_sekolah" class="form-control" placeholder="asal_sekolah" value="{{old('asal_sekolah')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Jurusan Sekolah</label>

                  <div class="col-sm-9">
                    <input type="text" name="jurusan_sekolah" class="form-control" placeholder="jurusan_sekolah" value="{{old('jurusan_sekolah')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Tahun Lulus</label>

                  <div class="col-sm-9">
                    <input type="text" name="tahun_lulus" class="form-control" placeholder="tahun_lulus" value="{{old('tahun_lulus')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Telp</label>

                  <div class="col-sm-9">
                    <input type="text" name="telp" class="form-control" placeholder="telp" value="{{old('telp')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama Ayah</label>

                  <div class="col-sm-9">
                    <input type="text" name="nama_ayah" class="form-control" placeholder="nama_ayah" value="{{old('nama_ayah')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Pekerjaan Ayah</label>

                  <div class="col-sm-9">
                    <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="pekerjaan_ayah" value="{{old('pekerjaan_ayah')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Telp Ayah</label>

                  <div class="col-sm-9">
                    <input type="text" name="telp_ayah" class="form-control" placeholder="telp_ayah" value="{{old('telp_ayah')}}" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama ibu</label>

                  <div class="col-sm-9">
                    <input type="text" name="nama_ibu" class="form-control" placeholder="nama_ibu" value="{{old('nama_ibu')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Pekerjaan ibu</label>

                  <div class="col-sm-9">
                    <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="pekerjaan_ibu" value="{{old('pekerjaan_ibu')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Telp ibu</label>

                  <div class="col-sm-9">
                    <input type="text" name="telp_ibu" class="form-control" placeholder="telp_ibu" value="{{old('telp_ibu')}}" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama Perekomendasi</label>

                  <div class="col-sm-9">
                    <input type="text" name="rekomendasi" class="form-control" placeholder="rekomendasi" value="{{old('rekomendasi')}}" required>
                  </div>
                </div>

                <hr>
                <div class="form-group @error('email') has-error @enderror">
                  <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" placeholder="Email"  value="{{old('email')}}"required>
                    @error('email')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="form-group @error('username') has-error @enderror">
                  <label for="inputEmail3" class="col-sm-3 control-label">Username</label>

                  <div class="col-sm-9">
                    <input type="username" name="username" class="form-control" placeholder="Username"  value="{{old('username')}}" id="inputError" autocomplete="new-password"  required/>
                    @error('username')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group @error('password') has-error @enderror">
                  <label for="inputPassword3" class="col-sm-3 control-label">Password</label>

                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password"/>
                    @error('password')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group @error('password') has-error @enderror">
                  <label for="inputPassword3" class="col-sm-3 control-label">Masukkan Password Lagi</label>

                  <div class="col-sm-9">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Password Lagi" autocomplete="new-password"/>
                    @error('password')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Upload Foto</label>

                  <div class="col-sm-9">
                    <input type="file" name="foto" class="form-control"/>
                  </div>
                </div>
              </div>
              <div class="box-footer social-auth-links">
                <button type="submit" class="btn bg-purple btn-flat btn-block pull-right"><i class="fa fa-save"></i> Daftar</button>
                <a href="/" class="btn bg-gray btn-flat btn-block pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
              </div>
              </form>
            </div>
          </div>
          <div class="col-md-3">
          </div>
        </div>
        
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  {{-- <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2022 Pemerintah Kota Banjarmasin</strong>
    </div>
    <!-- /.container -->
  </footer> --}}
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>

<script type="text/javascript">
  @include('layouts.notif')
  </script>
</body>
</html>

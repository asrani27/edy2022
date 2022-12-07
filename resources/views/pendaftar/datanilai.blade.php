@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content-header">
    <h1>
      STIKES Intan Martapura
      <small>Selamat Datang</small>
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Nilai Pendaftar</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penilaian Tes Tertulis</label>
                        <input type="email" class="form-control" value="{{Auth::user()->pendaftar->tt}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penilaian Tes Kesehatan</label>
                        <input type="email" class="form-control" value="{{Auth::user()->pendaftar->tk}}" readonly>
                    </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pengumuman Hasil Seleksi</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="/storage/foto/{{Auth::user()->pendaftar->foto}}" alt="User profile picture">
    
                  <h3 class="profile-username text-center">{{Auth::user()->pendaftar->nama}}</h3>
                </div>
                  <div class="box-body text-center">
                    @if (Auth::user()->pendaftar->hasil == NULL)
                        <h2>Di Proses</h2>
                    @else
                      <h3>Anda <strong><u>{{strtoupper(Auth::user()->pendaftar->hasil)}}</u></strong> Seleksi!</h3>
                      @if (Auth::user()->pendaftar->hasil == 'LULUS')
                      <br/><br/><br/>
                      Selamat Anda Lulus Seleksi penerimaan Mahasiswa Baru Silahkan Lakukan Registrasi Daftar Ulang
                      Mulai Tanggal :<br/><br/>
                      <button type="button" class="btn bg-gray btn-block">10 Januari 2023</button>
                      @endif
                    @endif
                  </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@push('js')

@endpush

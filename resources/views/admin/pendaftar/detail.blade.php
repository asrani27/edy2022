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
                <form role="form" method="POST" action="/superadmin/pendaftar/detail/{{$data->id}}">
                    @csrf
                  <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penilaian Tes Tertulis</label>
                        <select name="tt" class="form-control">
                            <option value="">-pilih-</option>
                            <option value="LULUS" {{$data->tt =='LULUS' ? 'selected':''}}>LULUS</option>
                            <option value="TIDAK LULUS" {{$data->tt =='TIDAK LULUS' ? 'selected':''}}>TIDAK LULUS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penilaian Tes Kesehatan</label>
                        <select name="tk"  class="form-control">
                            <option value="">-pilih-</option>
                            <option value="LULUS" {{$data->tk =='LULUS' ? 'selected':''}}>LULUS</option>
                            <option value="TIDAK LULUS" {{$data->tk =='TIDAK LULUS' ? 'selected':''}}>TIDAK LULUS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasil Seleksi</label>
                        <select name="hasil"  class="form-control">
                            <option value="">-pilih-</option>
                            <option value="LULUS" {{$data->hasil =='LULUS' ? 'selected':''}}>LULUS</option>
                            <option value="TIDAK LULUS" {{$data->hasil =='TIDAK LULUS' ? 'selected':''}}>TIDAK LULUS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <button type="submit" class='btn btn-primary btn-block'>VALIDASI</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">

            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="/storage/foto/{{$data->foto}}" alt="User profile picture">
  
                <h3 class="profile-username text-center">{{$data->nama}}</h3>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  
            <!-- About Me Box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tentang {{$data->nama}}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i> Jurusan</strong>
  
                <p class="text-muted">
                    {{$data->jurusan->nama}}
                </p>
  
                <hr>
  
                <strong><i class="fa fa-map-marker margin-r-5"></i> Tempat, Tanggal Lahir</strong>
  
                <p class="text-muted">{{$data->tempat_lahir}}, {{\Carbon\Carbon::parse($data->tanggal_lahir)->format('d-m-Y')}},</p>
  
                <hr>
  
                <strong><i class="fa fa-pencil margin-r-5"></i> Jenis Kelamin</strong>
  
                <p class="text-muted">
                    {{$data->jkel}}
                </p>
  
                <hr>
  
                <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
  
                <p class="text-muted">
                    {{$data->alamat}}
                </p>
  
                <hr>
                <strong><i class="fa fa-user margin-r-5"></i> Agama</strong>
  
                <p class="text-muted">
                    {{$data->agama}}
                </p>
  
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
    </div>
</section>
@endsection
@push('js')

@endpush

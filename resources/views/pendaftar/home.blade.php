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
                  <h3 class="box-title">Data Diri</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" value="{{$data->nama}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Jurusan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->jurusan->nama}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->tempat_lahir}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->tanggal_lahir}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->jkel}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Agama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->agama}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Asal Sekolah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->asal_sekolah}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Jurusan Sekolah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->jurusan_sekolah}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Tahun Lulus</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->tahun_lulus}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Telp</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->telp}}" readonly>
                      </div>
                    </div>
                    
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Orang Tua</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Nama Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->nama_ayah}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Pekerjaan Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->pekerjaan_ayah}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Telp Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->telp_ayah}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Nama ibu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->nama_ibu}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Pekerjaan ibu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->pekerjaan_ibu}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Telp ibu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3"  value="{{$data->telp_ibu}}" readonly>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Login</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Username</label>
    
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->username}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
    
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->email}}" readonly>
                      </div>
                    </div>
                    
                  </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@push('js')

@endpush

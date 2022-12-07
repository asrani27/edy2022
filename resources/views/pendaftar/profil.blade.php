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
                  <h3 class="box-title">Edit Profil</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="/pendaftar/editprofil" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="nama" value="{{$data->nama}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Jurusan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" value="{{$data->jurusan->nama}}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="tempat_lahir"  value="{{$data->tempat_lahir}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="tanggal_lahir"  value="{{$data->tanggal_lahir}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <select name="jkel" class="form-control">
                          <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>L</option>
                          <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>P</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Agama</label>
                      <div class="col-sm-8">
                      <select name="agama" class="form-control">
                        <option value="Islam" {{$data->jkel == 'Islam' ? 'selected':''}}>Islam</option>
                        <option value="Kristen" {{$data->jkel == 'Kristen' ? 'selected':''}}>Kristen</option>
                        <option value="Protestan" {{$data->jkel == 'Protestan' ? 'selected':''}}>Protestan</option>
                        <option value="Hindu" {{$data->jkel == 'Hindu' ? 'selected':''}}>Hindu</option>
                        <option value="Buddha" {{$data->jkel == 'Buddha' ? 'selected':''}}>Buddha</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Asal Sekolah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="asal_sekolah"  value="{{$data->asal_sekolah}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Jurusan Sekolah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="jurusan_sekolah"  value="{{$data->jurusan_sekolah}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Tahun Lulus</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="tahun_lulus"  value="{{$data->tahun_lulus}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Telp</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="telp"  value="{{$data->telp}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Nama Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="nama_ayah"  value="{{$data->nama_ayah}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Pekerjaan Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="pekerjaan_ayah"  value="{{$data->pekerjaan_ayah}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Telp Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="telp_ayah" value="{{$data->telp_ayah}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Nama ibu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="nama_ibu"  value="{{$data->nama_ibu}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Pekerjaan ibu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="pekerjaan_ibu"  value="{{$data->pekerjaan_ibu}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Telp ibu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" name="telp_ibu"  value="{{$data->telp_ibu}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Foto</label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control" id="inputPassword3" name="foto">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label"></label>
                      <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary btn-block">UPDATE DATA</button>
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

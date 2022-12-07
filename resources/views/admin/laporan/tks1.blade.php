@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content-header">
    <h1>
        LAPORAN TES KESEHATAN PRODI S1 ADMINISTRASI RS
    </h1>
</section>
<section class="content">

  <div class="row">
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">JUMLAH TES KESEHATAN</span>
          <span class="info-box-number">{{$data}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
              S1 ADMINISTRASI RS
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">LULUS TES KESEHATAN</span>
          <span class="info-box-number">{{$lulus}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            S1 ADMINISTRASI RS
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">TIDAK LULUS TES KESEHATAN</span>
          <span class="info-box-number">{{$tidaklulus}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            S1 ADMINISTRASI RS
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
      <i class="fa fa-users"></i>
      <h3 class="box-title">Data Pendaftar</h3>
      <div class="box-tools">
        {{-- <form class="form" method="get" action="/superadmin/pasien/cari">
            <div class="input-group input-group-sm hidden-xs" style="width: 350px;">
            <input type="text" name="cari" class="form-control pull-right" placeholder="Cari Nama" value="{{old('cari')}}">

            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
            </div>
        </form> --}}
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table class="table table-condensed table-bordered">
        <tr class="bg-primary" style="font-size: 10px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
          <th style="width: 10px">#</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Tempat, Tanggal Lahir</th>
          <th>Tes Kesehatan</th>
        </tr>

        @foreach ($table as $key => $item)
            
        <tr style="font-size: 12px">
            <td style="widtd: 10px">{{$key + 1}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->jurusan->nama}}</td>
            <td>{{$item->tempat_lahir}}, {{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y')}}</td>
            <td>{{$item->tk}}</td>
          </tr>
          
        @endforeach
      </table>
    </div>
    <div class="box-footer clearfix">
        
    </div>
    <!-- /.box-body -->
    </div>
    
    </div>
  </div>
</section>
@endsection
@push('js')

@endpush

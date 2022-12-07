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
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">PENDAFTAR MASUK</span>
          <span class="info-box-number">{{$pendaftar}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-6">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">LULUS SELEKSI</span>
          <span class="info-box-number">{{$lulus}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
  </div>
</section>
@endsection
@push('js')

@endpush

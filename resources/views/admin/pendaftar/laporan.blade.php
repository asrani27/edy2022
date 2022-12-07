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
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">PENDAFTAR MASUK</span>
          <span class="info-box-number">{{$pendaftar}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            TOTAL PENDAFTAR
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">D3 KEPERAWATAN</span>
          <span class="info-box-number">{{$d3}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            
            TOTAL PENDAFTAR
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">S1 ADMINISTRASI RS</span>
          <span class="info-box-number">{{$s1}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            
            TOTAL PENDAFTAR
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">JUMLAH TES TERTULIS</span>
          <span class="info-box-number">{{$a}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
              D3 KEPERAWATAN
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">LULUS TES TERTULIS</span>
          <span class="info-box-number">{{$b}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            D3 KEPERAWATAN
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">TIDAK LULUS TES TERTULIS</span>
          <span class="info-box-number">{{$c}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            D3 KEPERAWATAN
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">JUMLAH TES TERTULIS</span>
          <span class="info-box-number">{{$d}}</span>

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
          <span class="info-box-text">LULUS TES TERTULIS</span>
          <span class="info-box-number">{{$e}}</span>

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
          <span class="info-box-text">TIDAK LULUS TES TERTULIS</span>
          <span class="info-box-number">{{$f}}</span>

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
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">JUMLAH TES KESEHATAN</span>
          <span class="info-box-number">{{$g}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
              D3 KEPERAWATAN
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
          <span class="info-box-number">{{$h}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            D3 KEPERAWATAN
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
          <span class="info-box-number">{{$i}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
            D3 KEPERAWATAN
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">JUMLAH TES KESEHATAN</span>
          <span class="info-box-number">{{$j}}</span>

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
          <span class="info-box-number">{{$k}}</span>

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
          <span class="info-box-number">{{$l}}</span>

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
</section>
@endsection
@push('js')

@endpush

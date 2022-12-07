@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">

  <div class="row">
    <div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
      <i class="fa fa-users"></i>
      <h3 class="box-title">Data Pendaftar</h3>
      <div class="box-tools">
        <form class="form" method="get" action="/superadmin/pasien/cari">
            <div class="input-group input-group-sm hidden-xs" style="width: 350px;">
            <input type="text" name="cari" class="form-control pull-right" placeholder="Cari Nama" value="{{old('cari')}}">

            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
            </div>
        </form>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table class="table table-condensed table-bordered">
        <tr class="bg-primary" style="font-size: 10px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
          <th style="width: 10px">#</th>
          <th>Jurusan</th>
          <th>Nama</th>
          <th>Hasil Seleksi</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>

        @foreach ($data as $key => $item)
            
        <tr style="font-size: 12px">
            <td style="widtd: 10px">{{$data->firstItem() + $key}}</td>
            <td>{{$item->jurusan->nama}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->hasil}}</td>
            <td>Baru</td>
            <td>
              <a href="/superadmin/pendaftar/detail/{{$item->id}}" class="btn btn-success btn-flat btn-xs"><i class="fa fa-eye"></i>detail</a>
              <a href="/superadmin/pendaftar/delete/{{$item->id}}" class="btn btn-danger btn-flat btn-xs" onclick="return confirm('Yakin di hapus?');"><i class="fa fa-trash"></i> hapus</a>
            </td>
          </tr>
          
        @endforeach
      </table>
    </div>
    <div class="box-footer clearfix">
        Total Pendaftar : {{$data->total()}}
        <a href="/superadmin/pendaftar/pdf" class="btn btn-sm btn-primary" target="_blank">PDF</a>
    </div>
    <!-- /.box-body -->
    </div>
    {{$data->withQueryString()->links()}}
    </div>
  </div>
</section>


@endsection
@push('js')
    
@endpush

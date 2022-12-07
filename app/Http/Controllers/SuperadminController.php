<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class SuperadminController extends Controller
{
    public function pendaftar()
    {
        $data = Pendaftar::orderBy('id', 'DESC')->paginate(15);
        return view('admin.pendaftar.index', compact('data'));
    }

    public function hapusPendaftar($id)
    {
        Pendaftar::find($id)->user->delete();
        Pendaftar::find($id)->delete();
        Session::flash('success', 'Berhasil Di Hapus');
        return back();
    }
    public function detailPendaftar($id)
    {
        $data = Pendaftar::find($id);
        return view('admin.pendaftar.detail', compact('data'));
    }
    public function validasi(Request $req, $id)
    {
        $data = Pendaftar::find($id);
        $data->tt = $req->tt;
        $data->tk = $req->tk;
        $data->hasil = $req->hasil;
        $data->save();

        Session::flash('success', 'Berhasil Di Validasi');
        return back();
    }
    public function laporanpendaftar()
    {
        $pendaftar = Pendaftar::count();
        $d3 = Pendaftar::where('jurusan_id', 1)->count();
        $s1 = Pendaftar::where('jurusan_id', 1)->count();

        $a = Pendaftar::where('jurusan_id', 1)->count();
        $b = Pendaftar::where('jurusan_id', 1)->where('tt', 'LULUS')->count();
        $c = Pendaftar::where('jurusan_id', 1)->where('tt', 'TIDAK LULUS')->count();

        $d = Pendaftar::where('jurusan_id', 2)->count();
        $e = Pendaftar::where('jurusan_id', 2)->where('tt', 'LULUS')->count();
        $f = Pendaftar::where('jurusan_id', 2)->where('tt', 'TIDAK LULUS')->count();

        $g = Pendaftar::where('jurusan_id', 1)->count();
        $h = Pendaftar::where('jurusan_id', 1)->where('tk', 'LULUS')->count();
        $i = Pendaftar::where('jurusan_id', 1)->where('tk', 'TIDAK LULUS')->count();

        $j = Pendaftar::where('jurusan_id', 2)->count();
        $k = Pendaftar::where('jurusan_id', 2)->where('tk', 'LULUS')->count();
        $l = Pendaftar::where('jurusan_id', 2)->where('tk', 'TIDAK LULUS')->count();

        return view('admin.pendaftar.laporan', compact('pendaftar', 'd3', 's1', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l'));
    }

    public function tt_d3()
    {
        $data = Pendaftar::where('jurusan_id', 1)->count();
        $lulus = Pendaftar::where('jurusan_id', 1)->where('tt', 'LULUS')->count();
        $tidaklulus = Pendaftar::where('jurusan_id', 1)->where('tt', 'TIDAK LULUS')->count();

        $table = Pendaftar::where('jurusan_id', 1)->get();
        return view('admin.laporan.ttd3', compact('data', 'lulus', 'tidaklulus', 'table'));
    }
    public function tt_s1()
    {
        $data = Pendaftar::where('jurusan_id', 2)->count();
        $lulus = Pendaftar::where('jurusan_id', 2)->where('tt', 'LULUS')->count();
        $tidaklulus = Pendaftar::where('jurusan_id', 2)->where('tt', 'TIDAK LULUS')->count();

        $table = Pendaftar::where('jurusan_id', 2)->get();
        return view('admin.laporan.tts1', compact('data', 'lulus', 'tidaklulus', 'table'));
    }
    public function tk_d3()
    {
        $data = Pendaftar::where('jurusan_id', 1)->count();
        $lulus = Pendaftar::where('jurusan_id', 1)->where('tk', 'LULUS')->count();
        $tidaklulus = Pendaftar::where('jurusan_id', 1)->where('tk', 'TIDAK LULUS')->count();

        $table = Pendaftar::where('jurusan_id', 1)->get();
        return view('admin.laporan.tkd3', compact('data', 'lulus', 'tidaklulus', 'table'));
    }
    public function tk_s1()
    {
        $data = Pendaftar::where('jurusan_id', 2)->count();
        $lulus = Pendaftar::where('jurusan_id', 2)->where('tk', 'LULUS')->count();
        $tidaklulus = Pendaftar::where('jurusan_id', 2)->where('tk', 'TIDAK LULUS')->count();

        $table = Pendaftar::where('jurusan_id', 2)->get();
        return view('admin.laporan.tks1', compact('data', 'lulus', 'tidaklulus', 'table'));
    }

    public function pendaftarPDF()
    {
        $data = Pendaftar::get();
        $pdf = PDF::loadView('admin.laporan.pendaftar_pdf', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
}

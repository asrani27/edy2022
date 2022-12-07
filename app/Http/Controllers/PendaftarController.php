<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PendaftarController extends Controller
{
    public function index()
    {
        $data = Auth::user()->pendaftar;
        return view('pendaftar.home', compact('data'));
    }
    public function datanilai()
    {
        return view('pendaftar.datanilai');
    }
    public function profil()
    {
        $data = Auth::user()->pendaftar;
        return view('pendaftar.profil', compact('data'));
    }
    public function updateProfil(Request $req)
    {
        $filename = $req->foto == null ? Auth::user()->pendaftar->foto : 'FOTO_' . Auth::user()->username . '.' . $req->foto->getClientOriginalExtension();
        //dd($filename);
        if ($req->hasFile('foto')) {
            $req->foto->storeAs('/public/foto/', $filename);
        }

        $attr = $req->all();
        $attr['foto'] = $filename;

        Auth::user()->pendaftar->update($req->all());
        Auth::user()->pendaftar->update([
            'foto' => $filename,
        ]);
        Session::flash('success', 'Berhasil Di Update');
        return back();
    }
}

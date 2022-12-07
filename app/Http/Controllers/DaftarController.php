<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DaftarController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::get();
        return view('daftar', compact('jurusan'));
    }

    public function store(Request $req)
    {

        if ($req->password != $req->password_confirmation) {
            Session::flash('error', 'Confirm password Tidak Sama');
            return back();
        }

        if (User::where('username', $req->username)->first() != null) {
            Session::flash('error', 'Username Sudah ada, silahkan gunakan yang lain');
            return back();
        }


        DB::beginTransaction();

        try {

            $role = Role::where('name', 'user')->first();
            $user = new User;
            $user->name = $req->nama;
            $user->email = $req->email;
            $user->username = $req->username;
            $user->password = bcrypt($req->password);
            $user->save();

            $user->roles()->attach($role);

            $attr = $req->all();

            $filename = $req->foto == null ? null : 'FOTO_' . $req->username . '.' . $req->foto->getClientOriginalExtension();

            if ($req->hasFile('foto')) {
                $req->foto->storeAs('/public/foto/', $filename);
            }

            $attr['user_id'] = $user->id;
            $attr['foto'] = $filename;

            Pendaftar::create($attr);

            Auth::login($user);

            DB::commit();

            Session::flash('success', 'Berhasil Mendaftar');
            return redirect('/pendaftar');
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error', $e);
            return back();
        }
    }
}

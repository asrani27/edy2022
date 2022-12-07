<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Mpoli;
use App\Models\M_poli;
use App\Models\M_pasien;
use App\Models\Pendaftar;
use App\Models\M_diagnosa;
use App\Models\T_diagnosa;
use App\Models\Tpermohonan;
use Illuminate\Http\Request;
use App\Models\T_pendaftaran;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function superadmin()
    {
        $pendaftar = Pendaftar::count();
        $lulus = Pendaftar::where('hasil', 'LULUS')->count();
        return view('admin.home', compact('pendaftar', 'lulus'));
    }
}

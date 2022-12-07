<?php

namespace App\Console\Commands;

use App\Models\M_dokter;
use App\Models\M_pasien;
use App\Models\T_anamnesa;
use App\Models\T_pelayanan;
use Illuminate\Console\Command;

class perbaikandata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'perbaikandata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Perbaikan Data pasien ke pendaftaran';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //perbaikan data nik ke pendaftaran
        $pasien = M_pasien::get();
        foreach ($pasien as $i) {
            if ($i->nik == null) {
            } else {
                $pelayanan = T_pelayanan::where('nik', $i->nik)->get();
                foreach ($pelayanan as $p) {
                    $p->update(['m_pasien_id' => $i->id]);
                }
            }
        }

        //perbaikan data pasien pendaftaran tidak terdaftar di tabel pasien berdasarkan no Kartu
        $pasienPelayanan = T_pelayanan::where('noKartu', '!=', null)->get();
        foreach ($pasienPelayanan as $p) {
            if ($p->m_pasien_id == null) {
                $check = M_pasien::where('noKartu', $p->noKartu)->first();
                if ($check != null) {
                    $p->update([
                        'm_pasien_id' => $check->id,
                    ]);
                } else {
                    //create
                    $n = new M_pasien;
                    $n->nik = $p->nik;
                    $n->noKartu = $p->noKartu;
                    $n->nama = $p->nama;
                    $n->sex = $p->sex;
                    $n->tglLahir = $p->tglLahir;
                    $n->save();

                    $p->update(['m_pasien_id' => $n->id]);
                }
            }
        }

        //perbaikan data pasien pendaftaran tidak terdaftar di tabel pasien berdasarkan NIK
        $pasienPelayanan = T_pelayanan::where('nik', '!=', null)->get();
        foreach ($pasienPelayanan as $p) {
            if ($p->m_pasien_id == null) {
                $check = M_pasien::where('nik', $p->nik)->first();
                if ($check != null) {
                    $p->update([
                        'm_pasien_id' => $check->id,
                    ]);
                } else {
                    //create
                    $n = new M_pasien;
                    $n->nik = $p->nik;
                    $n->noKartu = $p->noKartu;
                    $n->nama = $p->nama;
                    $n->sex = $p->sex;
                    $n->tglLahir = $p->tglLahir;
                    $n->save();

                    $p->update(['m_pasien_id' => $n->id]);
                }
            }
        }

        //perbaikan data status pulang dari tabel anamnesa ke tabel pendaftaran
        $anamnesa = T_anamnesa::get();
        foreach ($anamnesa as $a) {
            $pendaftaran = $a->pendaftaran;
            $pendaftaran->update([
                'kdStatusPulang' => $a->statusPulang == null ? $pendaftaran->kdStatusPulang : $a->statusPulang->kdStatusPulang
            ]);
        }
    }
}

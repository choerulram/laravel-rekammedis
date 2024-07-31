<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Resep;
use App\Models\Selesai;
use Illuminate\Http\Request;

class SelesaiController extends Controller
{
    public function index(Request $request)
    {
        $selesai = Selesai::with(['pasien', 'dokter'])
            ->where('status', 'selesai')
            ->get();

        $pasien = Pasien::all();
        $obat = Obat::all();
        $resep = Resep::all();

        return view('dokter.selesai', [
            'selesaiList' => $selesai,
            'pasienList' => $pasien,
            'obatList' => $obat,
            'resepList' => $resep,
        ]);
    }

    public function lihat($id)
{
    // Mengambil rekam medis berdasarkan ID
    $selesai = Selesai::with(['pasien', 'dokter', 'resep.obat'])
        ->findOrFail($id);

    return view('dokter.lihatresep', [
        'selesai' => $selesai,
    ]);
}

}

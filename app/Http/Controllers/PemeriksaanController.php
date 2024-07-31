<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use App\Models\Resep;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function index(Request $request)
    {
        $pemeriksaan = Pemeriksaan::with(['pasien', 'dokter'])
            ->where('status', 'pemeriksaan')
            ->get();

        $pasien = Pasien::all();
        $obat = Obat::all();
        $resep = Resep::all();

        return view('dokter.pemeriksaan', [
            'pemeriksaanList' => $pemeriksaan,
            'pasienList' => $pasien,
            'obatList' => $obat,
            'resepList' => $resep,
        ]);
    }

    public function edit($id)
    {
        $pemeriksaan = Pemeriksaan::with('pasien', 'dokter')->findOrFail($id);
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $obat = Obat::all();

        $selectedPasien = $pasien->firstWhere('id_pasien', $pemeriksaan->id_pasien);

        return view('dokter.pemeriksaan-edit', [
            'pemeriksaanList' => $pemeriksaan,
            'pasienList' => $pasien,
            'dokterList' => $dokter,
            'obatList' => $obat,
            'selectedPasien' => $selectedPasien,
        ]);
    }

    public function update(Request $request, $id)
    {
        $pemeriksaan = Pemeriksaan::findOrFail($id);
        // Update data pemeriksaan
        $pemeriksaan->update($request->all());

        // Ubah status menjadi "selesai"
        $pemeriksaan->status = 'selesai';
        $pemeriksaan->save();

        // Simpan resep obat jika ada
        if ($request->has('obat')) {
            foreach ($request->input('obat') as $obatId) {
                Resep::create([
                    'id_rekam' => $pemeriksaan->id_rekam,
                    'id_obat' => $obatId,
                    'keterangan' => $request->input('keterangan') ?? '',
                ]);
            }
        }

        return redirect('/pemeriksaan')->with('status', 'Pemeriksaan berhasil diperbarui');
    }
}

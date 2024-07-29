<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pemeriksaan = Pemeriksaan::with(['pasien', 'dokter'])
            ->where('status', 'pemeriksaan')
            ->where(function ($query) use ($keyword) {
                $query->whereHas('pasien', function ($query) use ($keyword) {
                    $query->where('no_kartu', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('nama', 'LIKE', '%'.$keyword.'%');
                })
                ->orWhereHas('dokter', function ($query) use ($keyword) {
                    $query->where('nama', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('spesialis', 'LIKE', '%'.$keyword.'%');
                })
                ->orWhere('keluhan', 'LIKE', '%'.$keyword.'%')
                ->orWhere('tanggal', 'LIKE', '%'.$keyword.'%');
            })
            ->get();

        return view('dokter.pemeriksaan', ['pemeriksaanList' => $pemeriksaan]);
    }

    public function store(Request $request)
    {
        Pemeriksaan::create($request->all());
        return redirect('/pendaftaran');
    }
}

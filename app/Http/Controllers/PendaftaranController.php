<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pendaftaran = Pendaftaran::with(['pasien', 'dokter'])
            ->where('status', 'pendaftaran') // tambahkan kondisi where untuk status 'pendaftaran'
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

        return view('admin.pendaftaran', ['pendaftaranList' => $pendaftaran]);
    }
}

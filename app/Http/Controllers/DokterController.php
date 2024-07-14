<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        return view('admin.datadokter', ['dokterList' => $dokter]);
    }

    public function create()
    {
        $dokter = Dokter::all();
        return view('admin.datadokter-add', ['dokter' => $dokter]);
    }

    public function store(Request $request)
    {
        $dokter = Dokter::create($request->all());
        return redirect('/datadokter');
    }
}

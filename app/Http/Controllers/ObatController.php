<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('admin.dataobat', ['obatList' => $obat]);
    }

    public function create()
    {
        $obat = Obat::all();
        return view('admin.dataobat-add', ['obat' => $obat]);
    }

    public function store(Request $request)
    {
        $obat = Obat::create($request->all());
        return redirect('/dataobat');
    }
}

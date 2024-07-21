<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return view('admin.datapasien', ['pasienList' => $pasien]);
    }

    public function create()
    {
        $pasien = Pasien::all();
        return view('admin.datapasien-add', ['pasien' => $pasien]);
    }

    public function store(Request $request)
    {
        $pasien = Pasien::create($request->all());
        return redirect('/datapasien');
    }

    public function edit(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('admin.datapasien-edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());
        return redirect('/datapasien');
    }

    public function destroy($id)
    {
        $deletedPasien = Pasien::findOrFail($id);
        $deletedPasien->delete();

        if($deletedPasien) {
            Session::flash('status', 'succes');
            Session::flash('message', 'Pasien deleted successfully!');
        }

        return redirect('/datapasien');
    }
}

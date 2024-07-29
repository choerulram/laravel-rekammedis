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
        $pasien = Pasien::firstOrCreate(['no_kartu' => $request->input('no_kartu')], [
            'nama' => $request->input('nama'),
            'jk' => $request->input('jk'),
            'umur' => $request->input('umur'),
        ]);

        if ($pasien->wasRecentlyCreated) {
            return redirect('/datapasien')->with('success', 'Data pasien berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'No kartu sudah ada');
        }
    }

    public function edit(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('admin.datapasien-edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $no_kartu = $request->input('no_kartu');
        $pasien_with_same_no_kartu = Pasien::where('no_kartu', $no_kartu)->where('id_pasien', '!=', $id)->first();
        if ($pasien_with_same_no_kartu) {
            return redirect()->back()->with('error', 'No kartu sudah ada');
        } else {
            $pasien->update($request->all());
            return redirect('/datapasien');
        }
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

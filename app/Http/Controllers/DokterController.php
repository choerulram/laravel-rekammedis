<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Support\Facades\Session;
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

    public function edit(Request $request, $id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('admin.datadokter-edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->update($request->all());
        return redirect('/datadokter');
    }

    // public function delete($id)
    // {
    //     $dokter = Dokter::findOrFail($id);
    //     return view('admin.datadokter-delete', ['dokter' => $dokter]);
    // }

//     public function destroy($id)
// {
//     $dokter = Dokter::findOrFail($id);
//     $dokter->delete();
//     return redirect('/datadokter')->with('success', 'Data dokter berhasil dihapus');
// }

    // public function destroy($id)
    // {
    //     $deletedDokter = Dokter::findOrFail($id);
    //     $deletedDokter->delete();

    //     if($deletedDokter) {
    //         Session::flash('status', 'succes');
    //         Session::flash('message', 'delete dokter success!');
    //     }

    //     return redirect('/dokter');
    // }
}

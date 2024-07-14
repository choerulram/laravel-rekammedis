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

    // public function create()
    // {
    //     $course = Dokter::all();
    //     return view('admin.lecturer-add', ['course' => $course]);
    // }

    // public function store(Request $request)
    // {
    //     $lecturer = Dokter::create($request->all());
    //     return redirect('/lecturer');
    // }
}

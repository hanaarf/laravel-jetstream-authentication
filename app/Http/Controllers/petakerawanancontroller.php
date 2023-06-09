<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\walas;
use Illuminate\Http\Request;
use App\Models\petakerawanan;
use Illuminate\Support\Facades\Auth;

class petakerawanancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petakerawanan = petakerawanan::with('walas','siswa','jenisrawanid','walasid','siswaid')->get();
        return view('walas.petakerawanan', ['petakerawanan'=>$petakerawanan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $walas = $user->walas;

        $siswa = $walas->kelas->siswa;

        return view('walas.create.pk', compact('walas', 'siswa'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'walas_id' => 'required',
            'siswa_id' => 'required',
            'jenis_kerawanan' => 'required|array',
        ]);

        PetaKerawanan::create([
            'walas_id' => $request->walas_id,
            'siswa_id' => $request->siswa_id,
            'jenis_kerawanan' => $request->jenis_kerawanan,
        ]);

        return redirect()->route('dbguru-petakerawanan')->with('success', 'Peta kerawanan siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(petakerawanan $petakerawanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(petakerawanan $petakerawanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, petakerawanan $petakerawanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(petakerawanan $petakerawanan)
    {
        //
    }
}

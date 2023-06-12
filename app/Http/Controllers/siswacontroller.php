<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\guru;
use App\Models\User;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\walas;
use App\Models\jeniskonseling;
use App\Models\konselingpribadi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('siswa.konselingP');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = auth()->user();
        // $siswa = siswa::where('user_id', $user->id)->first();
        // return view('siswa.create.form-kp', compact('user', 'siswa',));


        $user = Auth::user();
        $siswa = $user->siswa;
        $kelas = $siswa->kelas;
        $walas = $kelas->walas;
        $gurubk = $kelas->guru;
        $jeniskonseling = jeniskonseling::all();
        return view('dbsiswa-kp', compact('siswa', 'walas', 'gurubk','jeniskonseling'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'walas_id' => 'required',
            'gurubk_id' => 'required',
            'status' => 'required',
            'jeniskonseling_id' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
        ]);

        $input = $request->all();
        konselingpribadi::create($input);
        return redirect('siswa.create.form-kp')
            ->with('success','data guru berhasil diinput');
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        //
    }




    /**
     * Display a listing of the resource.
     */
    public function indexkp()
    {

        $user = Auth::user();
        $konselingpribadi = konselingpribadi::where('siswa_id', $user->siswa->id)->get();

        // $konselingpribadi = konselingpribadi::with('walasid','siswaid','gurubkid')->get();
        return view('siswa.konselingP',['konselingpribadi'=> $konselingpribadi]);
    }
}

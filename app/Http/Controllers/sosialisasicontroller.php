<?php

namespace App\Http\Controllers;

use App\Models\sosialisasi;
use Hash;
use Session;
use App\Models\User;
use App\Models\siswa;
use App\Models\walas;
use App\Models\jenisrawan;
use App\Models\jeniskonseling;
use App\Models\kelas;
use App\Models\guru;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;


class sosialisasicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sosialisasi = sosialisasi::all();
        return view('guru.sosialisasi', ['sosialisasi'=>$sosialisasi]);
    }

    public function indexsiswa()
    {
        $sosialisasi = sosialisasi::all();
        return view('siswa.sosialisasi', ['sosialisasi'=>$sosialisasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create.sosialisasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
        ]);

        $data = $request->all();

        sosialisasi::create([
            'judul'  =>  $data['judul'],
            'deskripsi' =>  $data['deskripsi'],
            'tempat' =>  $data['tempat'],
            'tanggal' =>  $data['tanggal'],
            'jam' =>  $data['jam'],
        ]);

        return redirect('/dbgurubk-sosialisasi')
            ->with('success','data pelanggaran berhasil diinput');
    }

    /**
     * Display the specified resource.
     */
    public function show(sosialisasi $sosialisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sosialisasi = sosialisasi::findorFail($id);
        return view('guru.update.sosialisasi',['sosialisasi' => $sosialisasi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sosialisasi = sosialisasi::findorFail($id);
        $sosialisasi->update($request->except(['_token','submit']));
        return redirect('/dbgurubk-sosialisasi')
        ->with('success','data User berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Schema::disableForeignKeyConstraints();
        $sosialisasi = sosialisasi::findorFail($id);
        $sosialisasi -> delete();
        Schema::enableForeignKeyConstraints();
        return redirect('/dbgurubk-sosialisasi')
        ->with('success','data sosialisasi berhasil dihapus');
    }
}

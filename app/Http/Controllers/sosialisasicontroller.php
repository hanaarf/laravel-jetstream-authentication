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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(sosialisasi $sosialisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sosialisasi $sosialisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sosialisasi $sosialisasi)
    {
        //
    }
}

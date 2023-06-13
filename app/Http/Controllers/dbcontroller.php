<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\User;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\walas;
use App\Models\jeniskonseling;
use App\Models\konselingpribadi;
use Illuminate\Http\Request;

class dbcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru=guru::count();
        $kelas=kelas::count();
        $siswa=siswa::count();
        $walas=walas::count();
        return view('dashboard', compact('guru','kelas','siswa','walas'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

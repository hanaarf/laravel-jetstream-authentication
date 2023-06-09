<?php

namespace App\Http\Controllers;

use App\Models\walas;
use Illuminate\Http\Request;

class walascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(walas $walas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(walas $walas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, walas $walas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(walas $walas)
    {
        //
    }

    public function Nipd($id)
    {
        $walas = walas::findOrFail($id);

        return view('profile.update-profile-information-form', compact('walas'));
    }
}

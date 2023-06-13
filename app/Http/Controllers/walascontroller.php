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




    //konseling
    public function indexkp()
    {

        $user = Auth::user();
        $konselingpribadi = konselingpribadi::where('siswa_id', $user->siswa->id)->get();
        // $konselingpribadi = konselingpribadi::with('walasid','siswaid','gurubkid')->get();
        $id_siswa = Auth::user()->siswa->id;
        $konselingpribadi = konselingpribadi::where('siswa_id', $id_siswa)
            ->where('status', ['waiting', 'approved', 'reschedule'])
            ->get();

        return view('siswa.konselingP',['konselingpribadi'=> $konselingpribadi]);
    }


    public function indexkpPrivate()
    {
        $id_walas = Auth::user()->walas->id;
        $konselingpribadi = konselingpribadi::where('walas_id', $id_walas)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 1)
            ->get();
        return view('walas.konselingPprivate',['konselingpribadi'=> $konselingpribadi]);
    }
    public function indexkpSosial()
    {
        $id_walas = Auth::user()->walas->id;
        $konselingpribadi = konselingpribadi::where('walas_id', $id_walas)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 2)
            ->get();
        return view('walas.konselingPsosial',['konselingpribadi'=> $konselingpribadi]);
    }
    public function indexkpkarir()
    {
        $id_walas = Auth::user()->walas->id;
        $konselingpribadi = konselingpribadi::where('walas_id', $id_walas)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 3)
            ->get();
        return view('walas.konselingPkarir',['konselingpribadi'=> $konselingpribadi]);
    }
    public function indexkpbelajar()
    {
        $id_walas = Auth::user()->walas->id;
        $konselingpribadi = konselingpribadi::where('walas_id', $id_walas)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 4)
            ->get();
        return view('walas.konselingPbelajar',['konselingpribadi'=> $konselingpribadi]);
    }

    public function indexkphistory()
    {
        $id_walas = Auth::user()->walas->id;
        $konselingpribadi = konselingpribadi::where('walas_id', $id_walas)
            ->where('status', 'done')
            ->get();
        return view('walas.konselingPhistory',['konselingpribadi'=> $konselingpribadi]);
    }

}

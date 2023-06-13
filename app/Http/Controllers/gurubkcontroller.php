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

class gurubkcontroller extends Controller
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
    public function show(guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(guru $guru)
    {
        //
    }

    public function Nipd($id)
    {
        $guru = guru::findOrFail($id);

        return view('profile.update-profile-information-form', compact('guru'));
    }


    public function  historykonseling()
    {
       
        $id_gurubk = Auth::user()->guru->id;
        $konselingpribadi = konselingpribadi::where('gurubk_id', $id_gurubk)
            ->where('status', 'done')
            ->get();
        return view('guru.konselinghistory',['konselingpribadi'=> $konselingpribadi]);
    }



    public function  indexpribadi()
    {
        $id_gurubk = Auth::user()->guru->id;
        $konselingpribadi = konselingpribadi::where('gurubk_id', $id_gurubk)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 1)
            ->get();
        return view('guru.konselingpribadi',['konselingpribadi'=> $konselingpribadi]);
    }
    public function editpribadi($id)
      {
          $konselingpribadi = konselingpribadi::with('siswa8','guruBK8','waliKelas8')->findOrFail($id);
          return view('guru.update.konselingpribadi',['konselingpribadi' => $konselingpribadi]);
      }
      public function updatepribadi(Request $request, $id)
      {
          $konselingpribadi = konselingpribadi::findorFail($id);
          $konselingpribadi->update($request->all());
          return redirect('/dbgurubk-pribadi')
          ->with('success','data User berhasil diedit');
      }








    public function  indexsosial()
    {
       
        $id_gurubk = Auth::user()->guru->id;
        $konselingpribadi = konselingpribadi::where('gurubk_id', $id_gurubk)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 2)
            ->get();
        return view('guru.konselingsosial',['konselingpribadi'=> $konselingpribadi]);
    }
    public function editsosial($id)
    {
        $konselingpribadi = konselingpribadi::with('siswa8','guruBK8','waliKelas8')->findOrFail($id);
        return view('guru.update.konselingsosial',['konselingpribadi' => $konselingpribadi]);
    }
    public function updatesosial(Request $request, $id)
    {
        $konselingpribadi = konselingpribadi::findorFail($id);
        $konselingpribadi->update($request->all());
        return redirect('/dbgurubk-sosial')
        ->with('success','data User berhasil diedit');
    }




    public function  indexkarir()
    {
       
        $id_gurubk = Auth::user()->guru->id;
        $konselingpribadi = konselingpribadi::where('gurubk_id', $id_gurubk)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 3)
            ->get();
        return view('guru.konselingkarir',['konselingpribadi'=> $konselingpribadi]);
    }
    public function editkarir($id)
    {
        $konselingpribadi = konselingpribadi::with('siswa8','guruBK8','waliKelas8')->findOrFail($id);
        return view('guru.update.konselingkarir',['konselingpribadi' => $konselingpribadi]);
    }
    public function updatekarir(Request $request, $id)
    {
        $konselingpribadi = konselingpribadi::findorFail($id);
        $konselingpribadi->update($request->all());
        return redirect('/dbgurubk-karir')
        ->with('success','data User berhasil diedit');
    }



    public function  indexbelajar()
    {
       
        $id_gurubk = Auth::user()->guru->id;
        $konselingpribadi = konselingpribadi::where('gurubk_id', $id_gurubk)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 4)
            ->get();
        return view('guru.konselingbelajar',['konselingpribadi'=> $konselingpribadi]);
    }
    public function editbelajar($id)
    {
        $konselingpribadi = konselingpribadi::with('siswa8','guruBK8','waliKelas8')->findOrFail($id);
        return view('guru.update.konselingbelajar',['konselingpribadi' => $konselingpribadi]);
    }
    public function updatebelajar(Request $request, $id)
    {
        $konselingpribadi = konselingpribadi::findorFail($id);
        $konselingpribadi->update($request->all());
        return redirect('/dbgurubk-belajar')
        ->with('success','data User berhasil diedit');
    }
   
}

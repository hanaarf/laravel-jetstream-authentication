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
        $jeniskonseling = jeniskonseling::whereIn('id', [1, 3, 4])->get();
        return view('siswa.create.form-kp', compact('siswa', 'walas', 'gurubk','jeniskonseling'));

    }


    public function createK()
    {
        // $user = auth()->user();
        // $siswa = siswa::where('user_id', $user->id)->first();
        // return view('siswa.create.form-kp', compact('user', 'siswa',));


        $user = Auth::user();
        $siswa1 = $user->siswa;
        $kelas1 = $siswa1->kelas;
        $walas1 = $kelas1->walas;
        $gurubk1 = $kelas1->guru;

        $siswa = siswa::all();
        $walas = walas::all();
        $gurubk = guru::all();
        $jeniskonseling = jeniskonseling::whereIn('id', [2])->get();
        return view('siswa.create.form-kk', compact('siswa', 'walas', 'gurubk','jeniskonseling','siswa1', 'walas1', 'gurubk1'));

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
        return redirect('dbsiswa-kp')
            ->with('success','data guru berhasil diinput');
    }


    public function storek(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'siswa_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

       
        $validated = $request->validate([
            'siswa_id' => 'required|array',
        ]);

        

            foreach ($validated['siswa_id'] as $siswaId) {
                konselingpribadi::create([
                    'siswa_id' => $siswaId,
                    'walas_id' => $request->walas_id,
                    'gurubk_id' => $request->gurubk_id,
                    'status' => $request->status,
                    'jeniskonseling_id' => $request->jeniskonseling_id,
                    'deskripsi' => $request->deskripsi,
                    'tanggal' => $request->tanggal,
                    'jam' => $request->jam,
                    'tempat' => $request->tempat,
                ]);
            }
            return redirect('dbsiswa-kp')
            ->with('success','data guru berhasil diinput');


         
     
            //     foreach ($validated['siswa_id'] as $siswaId) {
            //     konselingpribadi::create([
            //         'siswa_id' => $siswaId,
            //         'walas_id' => $request->walas_id,
            //         'gurubk_id' => $request->gurubk_id,
            //         'status' => $request->status,
            //         'jeniskonseling_id' => $request->jeniskonseling_id,
            //         'deskripsi' => $request->deskripsi,
            //         'tanggal' => $request->tanggal,
            //         'jam' => $request->jam,
            //         'tempat' => $request->tempat,
            //     ]);
            // }
        

        // $input = $request->all();
        // konselingpribadi::create($input);
        // return redirect('dbsiswa-kp')
        //     ->with('success','data guru berhasil diinput');
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
        $id_siswa = Auth::user()->siswa->id;
        $konselingpribadi = konselingpribadi::where('siswa_id', $id_siswa)
            ->where('status', ['waiting', 'approved', 'reschedule'])
            ->get();

        return view('siswa.konselingP',['konselingpribadi'=> $konselingpribadi]);
    }


    public function indexkpPrivate()
    {
        $id_siswa = Auth::user()->siswa->id;
        $konselingpribadi = konselingpribadi::where('siswa_id', $id_siswa)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 1)
            ->get();
        return view('siswa.konselingPprivate',['konselingpribadi'=> $konselingpribadi]);
    }
    public function indexkpSosial()
    {
        $id_siswa = Auth::user()->siswa->id;
        $konselingpribadi = konselingpribadi::where('siswa_id', $id_siswa)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 2)
            ->get();
        return view('siswa.konselingPsosial',['konselingpribadi'=> $konselingpribadi]);
    }
    public function indexkpkarir()
    {
        $id_siswa = Auth::user()->siswa->id;
        $konselingpribadi = konselingpribadi::where('siswa_id', $id_siswa)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 3)
            ->get();
        return view('siswa.konselingPkarir',['konselingpribadi'=> $konselingpribadi]);
    }
    public function indexkpbelajar()
    {
        $id_siswa = Auth::user()->siswa->id;
        $konselingpribadi = konselingpribadi::where('siswa_id', $id_siswa)
        ->whereIn('status', ['waiting', 'approved', 'reschedule'])
        ->where('jeniskonseling_id', 4)
            ->get();
        return view('siswa.konselingPbelajar',['konselingpribadi'=> $konselingpribadi]);
    }


    public function indexkphistory()
    {
        $id_siswa = Auth::user()->siswa->id;
        $konselingpribadi = konselingpribadi::where('siswa_id', $id_siswa)
            ->where('status', 'done')
            ->get();
        return view('siswa.konselingPhistory',['konselingpribadi'=> $konselingpribadi]);
    }
}

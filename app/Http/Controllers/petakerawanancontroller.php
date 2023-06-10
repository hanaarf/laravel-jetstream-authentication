<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\walas;
use App\Models\jenisrawan;
use Illuminate\Http\Request;
use App\Models\petakerawanan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

class petakerawanancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = Auth::user();
        $walas = $user->walas;
        $petaKerawanans = petakerawanan::where('walas_id', $walas->id)->get();
        return view('walas.petakerawanan', compact('walas', 'petaKerawanans'));
        // $peta->with('siswa',)
        // return view('walas.petakerawanan', compact('walas','peta','petakerawanan'));





        // $petakerawanan = petakerawanan::with('jenisrawanid','walasid','siswaid')->get();
        // return view('walas.petakerawanan', ['petakerawanan'=>$petakerawanan]);



            // Mendapatkan data Walas berdasarkan user yang sedang login
            // $walas = walas::where('user_id', auth()->user()->id)->first();
                    
            // Mendapatkan data siswa yang memiliki kelas yang sama dengan Walas yang sedang login
            // $siswa = $walas->kelas1->siswa;

            // Mendapatkan data kerawanan siswa
            // $kerawanan = petakerawanan::whereIn('siswa_id', $siswa->pluck('id'))->with('jenisrawan2')->get();

            // return view('walas.petakerawanan', compact('walas', 'siswa', 'kerawanan'));
    
            // return view('walas.petakerawanan', compact('walas', 'siswa'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        $walas = walas::where('user_id', $user->id)->first();
        $siswa = siswa::where('kelas_id', $walas->kelas1->id)->get();
        $jenisKerawanan = jenisrawan::all();
        return view('walas.create.pk', compact('user', 'walas', 'siswa', 'jenisKerawanan'));

        

        // $jenisrawan = jenisrawan::all();
        // $user = auth()->user();
        // $walas = walas::where('user_id', $user->id)->first();
        // $siswa = siswa::where('kelas_id', $walas->kelas1->id)->get();
        // return view('walas.create.pk', ['jenisrawan'=>$jenisrawan, 'user'=>$user, 'walas'=>$walas, 'siswa'=>$siswa]);
        
        // return view('walas.create.pk', compact('jenisrawan','user', 'walas', 'siswa'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'walas_id' => 'required',
            'siswa_id' => 'required',
            'jenisrawan_id' => 'required',
        ]);

        $input = $request->all();
        petakerawanan::create($input);
        return redirect('/dbwalas-petakerawanan')
            ->with('success','data walas berhasil diinput');


            // $jenisKerawanan = implode(',', $request->jenisrawan_id);
            // $petaKerawanan = petakerawanan::create([
            //     'siswa_id' => $request->siswa_id,
            //     'walas_id' => $request->walas_id,
            //     'jenisrawan_id' => $jenisKerawanan,
            // ]);
    
            // Proses penyimpanan data peta kerawanan
    
            // return redirect()->route('/dbwalas-petakerawanan')->with('success', 'Data peta kerawanan berhasil disimpan.');

            


                // $jenisKerawanan = implode(',', $request->jenisrawan_id);
                // $petaKerawanan = petakerawanan::create([
                //     'walas_id' => $request->walas_id,
                //     'siswa_id' => $request->siswa_id,
                //     'jenisrawan_id' => $jenisKerawanan,
                // ]);
                // return redirect('/dbwalas-petakerawanan')->with('success', 'Data peta kerawanan berhasil disimpan.');
            


        // $request->validate([
        //     'walas_id' => 'required',
        //     'siswa_id' => 'required',
        //     'jenisrawan_id' => 'required',
        // ]);

        // $data = $request->all();

        // Ubah array siswa_id menjadi string yang dipisahkan oleh koma
        // $jenisrawan_ids = implode(',', $data['jenis_rawan']);
        // $data['jenis_rawan'] = $jenisrawan_ids;


        // petakerawanan::create($data);

        // petakerawanan::create([
        //     'walas_id' => $request->walas_id,
        //     'siswa_id' => $request->siswa_id,
        //     'jenisrawan_id' => $request->jenis_rawan,
        // ]);

        // return redirect()->route('dbwalas-petakerawanan')->with('success', 'Peta kerawanan siswa berhasil ditambahkan.');
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
    public function edit($id)
    {
        $petakerawanan = petakerawanan::with('jenisrawanid','siswaid','walasid')->findOrFail($id);
        $jenisrawanid = jenisrawan::where('id', '!=', $petakerawanan->jenisrawan_id)->get(['id','name']);
        $siswaid = siswa::where('id', '!=', $petakerawanan->siswa_id)->get(['id','name']);
        $walasid = walas::where('id', '!=', $petakerawanan->walas_id)->get(['id','name']);

        return view('walas.update.pk',['petakerawanan' => $petakerawanan, 'jenisrawanid' => $jenisrawanid, 'siswaid' => $siswaid, 'walasid' => $walasid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $petakerawanan = petakerawanan::findorFail($id);
        $petakerawanan->update($request->except(['_token','submit']));
        return redirect('dbwalas-petakerawanan')
        ->with('success','data User berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         Schema::disableForeignKeyConstraints();
        $petakerawanan = petakerawanan::findorFail($id);
        $petakerawanan -> delete();
        Schema::enableForeignKeyConstraints();
        return redirect('dbwalas-petakerawanan')
        ->with('success','data User berhasil dihapus');
    }
}

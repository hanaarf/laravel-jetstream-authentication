<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswaExport;
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

class admincontroller extends Controller
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }




    /**
     * Store a newly created resource in storage.
     */

     // allguru
    public function indexguru()
    {
        $guru = guru::with('userid','kelas')->get();
        return view('admin.gurubk', ['guru'=>$guru]);
    }
    public function createguru()
    {
        $user = User::all();
        return view('admin.create.gurubk',['user'=> $user]);
    }
    public function storeguru(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'nipd' => 'required',
        //     'gender' => 'required',
        //     'ttl' => 'required',
        //     'role' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:8',
        // ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);
        

        $userId = $user->id;

        $siswa = guru::create([
            'user_id' => $userId,
            'nipd' => $request->input('nipd'),
            'name' => $request->input('name'),
            'ttl' => $request->input('ttl'),
            'gender' => $request->input('gender'),
        ]);


        // $request->validate([
        //     'name' => 'required',
        //     'nipd' => 'required',
        //     'user_id' => 'required',
        //     'ttl' => 'required',
        //     'gender' => 'required',
        // ]);

        // $input = $request->all();
        // guru::create($input);
        return redirect('/dbadmin-gurubk')
            ->with('success','data guru berhasil diinput');
    }
    public function showguru(User $user)
    {
        //
    }
    public function editguru($id)
    {
        $guru = guru::with('userid')->findOrFail($id);
        $userid = User::where('id', '!=', $guru->user_id)->get(['id','name']);

        return view('admin.update.gurubk',['guru' => $guru, 'userid' => $userid]);
    }
    public function updateguru(Request $request, $id)
    {
        $guru = guru::findorFail($id);
        $guru->update($request->all());
        return redirect('/dbadmin-gurubk')
        ->with('success','data User berhasil diedit');
    }
    public function destroyguru($id)
    {
        Schema::disableForeignKeyConstraints();
        $guru = guru::findorFail($id);
        $guru -> delete();
        Schema::enableForeignKeyConstraints();
        return redirect('/dbadmin-gurubk')
        ->with('success','data User berhasil dihapus');
    }



    /**
     * Store a newly created resource in storage.
     */

    // allsiswa
    public function indexsiswa()
      {
          $siswa = siswa::with('kelasid','userid')->get();
          return view('admin.siswa', ['siswa'=>$siswa]);
      }
      public function createsiswa()
      {
          $user = User::all();
          $kelas = kelas::all();
          return view('admin.create.siswa',['user'=> $user,'kelas' => $kelas]);
      }
      public function storesiswa(Request $request)
      {
        //   $request->validate([
        //     'name' => 'required',
        //     'nisn' => 'required',
        //     'user_id' => 'required',
        //     'kelas_id' => 'required',
        //     'ttl' => 'required',
        //     'gender' => 'required',
        //   ]);
  
        //   $input = $request->all();
        //   siswa::create($input);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);
        

        $userId = $user->id;

        $siswa = siswa::create([
            'user_id' => $userId,
            'nisn' => $request->input('nisn'),
            'name' => $request->input('name'),
            'kelas_id' => $request->input('kelas_id'),
            'ttl' => $request->input('ttl'),
            'gender' => $request->input('gender'),
        ]);

        
          return redirect('/dbadmin-murid')
              ->with('success','data siswa berhasil diinput');
      }
      public function showsiswa(User $user)
      {
          //
      }
      public function editsiswa($id)
      {
          $siswa = siswa::with('kelasid','userid')->findOrFail($id);
          $userid = User::where('id', '!=', $siswa->user_id)->get(['id','name']);
          $kelasid = kelas::where('id', '!=', $siswa->kelas_id)->get(['id','name']);
          return view('admin.update.siswa',['siswa' => $siswa, 'userid' => $userid, 'kelasid' => $kelasid]);
      }
      public function updatesiswa(Request $request, $id)
      {
          $siswa = siswa::findorFail($id);
          $siswa->update($request->all());
          return redirect('/dbadmin-murid')
          ->with('success','data User berhasil diedit');
      }
      public function destroysiswa($id)
      {
          Schema::disableForeignKeyConstraints();
          $siswa = siswa::findorFail($id);
          $siswa -> delete();
          Schema::enableForeignKeyConstraints();
          return redirect('/dbadmin-murid')
          ->with('success','data User berhasil dihapus');
      }


      

      /**
     * Store a newly created resource in storage.
     */
        // allwalas
      public function indexwalas()
      {
          $walas = walas::with('userid','kelas')->get();
          return view('admin.walas', ['walas'=>$walas]);
      }
      public function createwalas()
      {
          $user = User::all();
          return view('admin.create.walas',['user'=> $user]);
      }
      public function storewalas(Request $request)
      {
        //   $request->validate([
        //       'name' => 'required',
        //       'nipd' => 'required',
        //       'user_id' => 'required',
        //       'ttl' => 'required',
        //       'gender' => 'required',
        //   ]);
  
        //   $input = $request->all();
        //   walas::create($input);


        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);
        

        $userId = $user->id;

        $siswa = walas::create([
            'user_id' => $userId,
            'nipd' => $request->input('nipd'),
            'name' => $request->input('name'),
            'ttl' => $request->input('ttl'),
            'gender' => $request->input('gender'),
        ]);
          return redirect('/dbadmin-walas')
              ->with('success','data walas berhasil diinput');
      }
      public function showwalas(User $user)
      {
          //
      }
      public function editwalas($id)
      {
          $walas = walas::with('userid')->findOrFail($id);
          $userid = User::where('id', '!=', $walas->user_id)->get(['id','name']);
  
          return view('admin.update.walas',['walas' => $walas, 'userid' => $userid]);
      }
      public function updatewalas(Request $request, $id)
      {
          $walas = walas::findorFail($id);
          $walas->update($request->except(['_token','submit']));
          return redirect('/dbadmin-walas')
          ->with('success','data User berhasil diedit');
      }
      public function destroywalas($id)
      {
          Schema::disableForeignKeyConstraints();
          $walas = walas::findorFail($id);
          $walas -> delete();
          Schema::enableForeignKeyConstraints();
          return redirect('/dbadmin-walas')
          ->with('success','data User berhasil dihapus');
      }



      
      /**
     * Store a newly created resource in storage.
     */
    // alluser
    public function indexuser()
    {
        $User = User::all();
        return view('admin.alluser', ['User'=>$User]);
    }
    public function createuser()
    {
        return view('admin.create.alluser');
    }
    public function storeuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password']),
            'role' =>  $data['role'],
        ]);

        return redirect('/dbadmin-alluser')
            ->with('success','data pelanggaran berhasil diinput');
    }
    public function showuser(User $user)
    {
        //
    }
    public function edituser($id)
    {
        $User = User::findorFail($id);
        return view('admin.update.alluser',['User' => $User]);
    }
    public function updateuser(Request $request, $id)
    {
        $User = User::findorFail($id);
        $User->update($request->except(['_token','submit']));
        return redirect('/dbadmin-alluser')
        ->with('success','data User berhasil diedit');
    }
    public function destroyuser($id)
    {
        Schema::disableForeignKeyConstraints();
        $User = User::findorFail($id);
        $User -> delete();
        Schema::enableForeignKeyConstraints();
        return redirect('/dbadmin-alluser')
        ->with('success','data User berhasil dihapus');
    }




     /**
     * Store a newly created resource in storage.
     */

    // allkelas
    public function indexkelas()
      {
          $kelas = kelas::with('guru','walas','siswa')->get();
          return view('admin.kelas', ['kelas'=>$kelas]);
      }
      public function createkelas()
      {
       
          $guru = guru::all();

          $walas = walas::all();
          return view('admin.create.kelas',['guru'=> $guru,'walas' => $walas]);
      }
      public function storekelas(Request $request)
      {
          $request->validate([
            'name' => 'required',
            'gurubk_id' => 'required',
            'walas_id' => 'required',
          ]);
  
          $input = $request->all();
          kelas::create($input);
          return redirect('/dbadmin-kelas')
              ->with('success','data kelas berhasil diinput');
      }
      public function showkelas(User $user)
      {
          //
      }
      public function editkelas($id)
      {
          $kelas = kelas::with('guru','walas')->findOrFail($id);
          $guru = guru::where('id', '!=', $kelas->guru_id)->get(['id','name']);
          $walas = walas::where('id', '!=', $kelas->walas_id)->get(['id','name']);
          return view('admin.update.kelas',['kelas' => $kelas, 'guru' => $guru, 'walas' => $walas]);
      }
      public function updatekelas(Request $request, $id)
      {
          $kelas = kelas::findorFail($id);
          $kelas->update($request->all());
          return redirect('/dbadmin-kelas')
          ->with('success','data User berhasil diedit');
      }
      public function destroykelas($id)
      {
          Schema::disableForeignKeyConstraints();
          $kelas = kelas::findorFail($id);
          $kelas -> delete();
          Schema::enableForeignKeyConstraints();
          return redirect('/dbadmin-kelas')
          ->with('success','data User berhasil dihapus');
      }





       /**
     * Store a newly created resource in storage.
     */

    // alljenisrawan
    public function indexjenisrawan()
    {
        $jenisrawan = jenisrawan::all();
        return view('admin.jenisrawan',['jenisrawan' => $jenisrawan]);
    }
    public function createjenisrawan()
    {
        return view('admin.create.jenisrawan');
    }
    public function storejenisrawan(Request $request)
    {
        $request->validate([
          'name' => 'required',
        ]);

        $input = $request->all();
        jenisrawan::create($input);
        return redirect('/dbadmin-jenisrawan')
            ->with('success','data jenisrawan berhasil diinput');
    }
    public function showjenisrawan(User $user)
    {
        //
    }
    public function editjenisrawan($id)
    {
        $jenisrawan = jenisrawan::findorFail($id);
        return view('admin.update.jenisrawan',['jenisrawan' => $jenisrawan]);
    }
    public function updatejenisrawan(Request $request, $id)
    {
        $jenisrawan = jenisrawan::findorFail($id);
        $jenisrawan->update($request->all());
        return redirect('/dbadmin-jenisrawan')
        ->with('success','data User berhasil diedit');
    }
    public function destroyjenisrawan($id)
    {
        Schema::disableForeignKeyConstraints();
        $jenisrawan = jenisrawan::findorFail($id);
        $jenisrawan -> delete();
        Schema::enableForeignKeyConstraints();
        return redirect('/dbadmin-jenisrawan')
        ->with('success','data User berhasil dihapus');
    }





        /**
     * Store a newly created resource in storage.
     */

    // alljenisrawan
    public function indexjeniskonseling()
    {
        $jeniskonseling = jeniskonseling::all();
        return view('admin.jeniskonseling',['jeniskonseling' => $jeniskonseling]);
    }
    public function createjeniskonseling()
    {
        return view('admin.create.jeniskonseling');
    }
    public function storejeniskonseling(Request $request)
    {
        $request->validate([
          'name' => 'required',
        ]);

        $input = $request->all();
        jeniskonseling::create($input);
        return redirect('/dbadmin-jeniskonseling')
            ->with('success','data jeniskonseling berhasil diinput');
    }
    public function showjeniskonseling(User $user)
    {
        //
    }
    public function editjeniskonseling($id)
    {
        $jeniskonseling = jeniskonseling::findorFail($id);
        return view('admin.update.jeniskonseling',['jeniskonseling' => $jeniskonseling]);
    }
    public function updatejeniskonseling(Request $request, $id)
    {
        $jeniskonseling = jeniskonseling::findorFail($id);
        $jeniskonseling->update($request->all());
        return redirect('/dbadmin-jeniskonseling')
        ->with('success','data User berhasil diedit');
    }
    public function destroyjeniskonseling($id)
    {
        Schema::disableForeignKeyConstraints();
        $jeniskonseling = jeniskonseling::findorFail($id);
        $jeniskonseling -> delete();
        Schema::enableForeignKeyConstraints();
        return redirect('/dbadmin-jeniskonseling')
        ->with('success','data User berhasil dihapus');
    }

    public function exportSiswa()
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
}

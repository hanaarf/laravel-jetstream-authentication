<?php

use App\Models\User;
use App\Models\kelas;
use App\Http\Controllers\gurubkcontroller;
use App\Http\Controllers\petakerawanancontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\walascontroller;
use App\Http\Controllers\siswacontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/nipd/{id}', 'walascontroller@Nipd');
// Route::get('/nipd/{id}', 'gurubkcontroller@Nipd');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/konsultan', function () {
    return view('consultant');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // $user = Auth::user();
        // dd($user);

        // $user = User::with('guru')->find(Auth::id());
        // $id = $user->guru->id;

        // $kelas = kelas::where('gurubk_id', $id)->get();
        // dd($kelas);

        // dd(auth()->user()->getRoleNames());

        return view('dashboard');
    })->name('dashboard');
    Route::get('walas-page', function() {
        return 'Halaman untuk walas';
    })->middleware('role:walas')->name('admin.page');
    
});



Route::middleware(['role:admin'])->group(function () {
    // alluser
    Route::get('/dbadmin-alluser', [admincontroller::class, 'indexuser']);
    Route::get('/dbadmin-form-alluser', [admincontroller::class, 'createuser']);
    Route::post('/dbadmin-form-alluser', [admincontroller::class, 'storeuser']);
    Route::get('/dbadmin/{id}/editalluser', [admincontroller::class, 'edituser']);
    Route::put('/dbadmin-simpaneditalluser/{id}', [admincontroller::class, 'updateuser']);
    Route::delete('/dbadmin-hapusalluser/{id}', [admincontroller::class, 'destroyuser']);

    // kelas
    Route::get('/dbadmin-kelas', [admincontroller::class, 'indexkelas']);
    Route::get('/dbadmin-form-kelas', [admincontroller::class, 'createkelas']);
    Route::post('/dbadmin-form-kelas', [admincontroller::class, 'storekelas']);
    Route::get('/dbadmin/{id}/editkelas', [admincontroller::class, 'editkelas']);
    Route::put('/dbadmin-simpaneditkelas/{id}', [admincontroller::class, 'updatekelas']);
    Route::delete('/dbadmin-hapuskelas/{id}', [admincontroller::class, 'destroykelas']);

    // gurubk
    Route::get('/dbadmin-gurubk', [admincontroller::class, 'indexguru']);
    Route::get('/dbadmin-form-gurubk', [admincontroller::class, 'createguru']);
    Route::post('/dbadmin-form-gurubk', [admincontroller::class, 'storeguru']);
    Route::get('/dbadmin/{id}/editgurubk', [admincontroller::class, 'editguru']);
    Route::put('/dbadmin-simpaneditgurubk/{id}', [admincontroller::class, 'updateguru']);
    Route::delete('/dbadmin-hapusgurubk/{id}', [admincontroller::class, 'destroyguru']);


    // walas
    Route::get('/dbadmin-walas', [admincontroller::class, 'indexwalas']);
    Route::get('/dbadmin-form-walas', [admincontroller::class, 'createwalas']);
    Route::post('/dbadmin-form-walas', [admincontroller::class, 'storewalas']);
    Route::get('/dbadmin/{id}/editwalas', [admincontroller::class, 'editwalas']);
    Route::put('/dbadmin-simpaneditwalas/{id}', [admincontroller::class, 'updatewalas']);
    Route::delete('/dbadmin-hapuswalas/{id}', [admincontroller::class, 'destroywalas']);

    // siswa
    Route::get('/dbadmin-murid', [admincontroller::class, 'indexsiswa']);
    Route::get('/dbadmin-form-siswa', [admincontroller::class, 'createsiswa']);
    Route::post('/dbadmin-form-siswa1', [admincontroller::class, 'storesiswa']);
    Route::get('/dbadmin/{id}/editsiswa', [admincontroller::class, 'editsiswa']);
    Route::put('/dbadmin-simpaneditsiswa/{id}', [admincontroller::class, 'updatesiswa']);
    Route::delete('/dbadmin-hapussiswa/{id}', [admincontroller::class, 'destroysiswa']);
});




// jenisrawan
// Route::get('/dbadmin-jenisrawan', [admincontroller::class, 'indexjenisrawan']);
// Route::get('/dbadmin-form-jenisrawan', [admincontroller::class, 'createjenisrawan']);
// Route::post('/dbadmin-form-jenisrawan', [admincontroller::class, 'storejenisrawan']);
// Route::get('/dbadmin/{id}/editjenisrawan', [admincontroller::class, 'editjenisrawan']);
// Route::put('/dbadmin-simpaneditjenisrawan/{id}', [admincontroller::class, 'updatejenisrawan']);
// Route::delete('/dbadmin-hapusjenisrawan/{id}', [admincontroller::class, 'destroyjenisrawan']);


// jeniskonseling
Route::get('/dbadmin-jeniskonseling', [admincontroller::class, 'indexjeniskonseling']);
Route::get('/dbadmin-form-jeniskonseling', [admincontroller::class, 'createjeniskonseling']);
Route::post('/dbadmin-form-jeniskonseling', [admincontroller::class, 'storejeniskonseling']);
Route::get('/dbadmin/{id}/editjeniskonseling', [admincontroller::class, 'editjeniskonseling']);
Route::put('/dbadmin-simpaneditjeniskonseling/{id}', [admincontroller::class, 'updatejeniskonseling']);
Route::delete('/dbadmin-hapusjeniskonseling/{id}', [admincontroller::class, 'destroyjeniskonseling']);


Route::get('/dbadmin-profile', function(){
    return view('profile.show');
});




Route::middleware(['role:walas'])->group(function () {
    Route::get('dbwalas-petakerawanan', [petakerawananController::class, 'index'])
    ->name('peta-kerawanan.create');
    Route::get('dbwalas-form-pk', [petakerawananController::class, 'create'])
        ->name('peta-kerawanan.create');
});
Route::middleware(['auth', 'role:walas'])->group(function () {
   
    Route::post('peta-kerawanan', [petakerawananController::class, 'store'])->name('peta-kerawanan.store');
});
Route::middleware(['auth', 'role:walas'])->group(function () {
    Route::get('/dbwalas-form-pk', [petakerawananController::class, 'create'])->name('kerawanan.create');
    Route::post('/dbwalas-form-pk', [petakerawananController::class, 'store'])->name('kerawanan.store');
});
Route::middleware(['auth', 'role:walas'])->group(function () {
    Route::get('/dbwalas-petakerawanan', [petakerawananController::class, 'index'])->name('peta-kerawanan.index');
    Route::get('/dbwalas/{id}/editpk', [petakerawananController::class, 'edit']);
    Route::put('/dbwalas/{id}/editpk', [petakerawananController::class, 'update']);
    Route::delete('/dbwalas-hapuspk/{id}', [petakerawananController::class, 'destroy']);
});



// Route::get('/dbgurubk-form-pk', [petakerawanancontroller::class, 'createpkguru']);
// Route::post('/dbgurubk-form-pk', [petakerawananController::class, 'storegurupk']);
// Route::post('/peta-kerawanan/get-walas', [petakerawanancontroller::class, 'getWalas']);



Route::middleware(['auth', 'role:gurubk'])->group(function () {
    Route::get('/dbgurubk-petakerawanan', [petakerawanancontroller::class, 'indexpk']);
    Route::get('/dbgurubk-form-pk', [petakerawanancontroller::class, 'createpkguru'])->name('peta_kerawanan.create');
    Route::get('/dbgurubk-formpk-kelas/{id}', [petakerawanancontroller::class, 'kelaspk']);
    Route::post('/dbgurubk-formpk-kelas', [petakerawanancontroller::class, 'storepkguru'])->name('dbgurubk-formpk-kelas');
    Route::get('/dbgurubk/{id}/editpk', [petakerawananController::class, 'editpk']);
    Route::put('/dbgurubk/{id}/editpk', [petakerawananController::class, 'updatepk']);
    Route::delete('/dbgurubk-hapuspk/{id}', [petakerawananController::class, 'destroypk']);





    //konseling
    Route::get('/dbgurubk-history', [gurubkcontroller::class, 'historykonseling']);
    Route::get('/dbgurubk-pribadi', [gurubkcontroller::class, 'indexpribadi']);
    Route::get('/dbgurubk-sosial', [gurubkcontroller::class, 'indexsosial']);
    Route::get('/dbgurubk-karir', [gurubkcontroller::class, 'indexkarir']);
    Route::get('/dbgurubk-belajar', [gurubkcontroller::class, 'indexbelajar']);
});

Route::middleware(['auth', 'role:siswa'])->group(function () {
    // buatkonseling
    Route::get('/dbsiswa-konselingpribadi', [siswacontroller::class, 'index']);
    Route::get('/dbsiswa-form-konselingpribadi', [siswacontroller::class, 'create']);
    Route::post('/dbsiswa-form-konselingpribadi', [siswacontroller::class, 'store']);
    // Route::get('/dbsiswa/{id}/editkonselingpribadi', [siswacontroller::class, 'edit']);
    // Route::put('/dbsiswa/{id}/editkonselingpribadi', [siswacontroller::class, 'update']);
    Route::delete('/dbsiswa-hapuskonselingpribadi/{id}', [siswacontroller::class, 'destroy']);


    
    //buatdatakonseling
    Route::get('/dbsiswa-kp', [siswacontroller::class, 'indexkp']);
    Route::get('/dbsiswa-kp-private', [siswacontroller::class, 'indexkpPrivate']);
    Route::get('/dbsiswa-kp-sosial', [siswacontroller::class, 'indexkpSosial']);
    Route::get('/dbsiswa-kp-karir', [siswacontroller::class, 'indexkpkarir']);
    Route::get('/dbsiswa-kp-belajar', [siswacontroller::class, 'indexkpbelajar']);
    Route::get('/dbsiswa-kp-history', [siswacontroller::class, 'indexkphistory']);
    Route::get('/dbsiswa-form-kp', [siswacontroller::class, 'create']);
    Route::post('/dbsiswa-form-kp', [siswacontroller::class, 'store']);
    Route::get('/dbsiswa/{id}/editkp', [siswacontroller::class, 'edit']);
    Route::put('/dbsiswa/{id}/editkp', [siswacontroller::class, 'update']);
    Route::delete('/dbsiswa-hapuskp/{id}', [siswacontroller::class, 'destroy']);





});





// alluser
// Route::get('/dbadmin-alluser', [admincontroller::class, 'indexuser']);
// Route::get('/dbadmin-form-alluser', [admincontroller::class, 'createuser']);
// Route::post('/dbadmin-form-alluser', [admincontroller::class, 'storeuser']);
// Route::get('/dbadmin/{id}/editalluser', [admincontroller::class, 'edituser']);
// Route::put('/dbadmin-simpaneditalluser/{id}', [admincontroller::class, 'updateuser']);
// Route::delete('/dbadmin-hapusalluser/{id}', [admincontroller::class, 'destroyuser']);
// Route::get('/dbadmin-detailalluser/{id}', [admincontroller::class, 'showuser']);

// kelas
// Route::get('/dbadmin-kelas', [admincontroller::class, 'indexkelas']);
// Route::get('/dbadmin-form-kelas', [admincontroller::class, 'createkelas']);
// Route::post('/dbadmin-form-kelas', [admincontroller::class, 'storekelas']);
// Route::get('/dbadmin/{id}/editkelas', [admincontroller::class, 'editkelas']);
// Route::put('/dbadmin-simpaneditkelas/{id}', [admincontroller::class, 'updatekelas']);
// Route::delete('/dbadmin-hapuskelas/{id}', [admincontroller::class, 'destroykelas']);


// gurubk
// Route::get('/dbadmin-gurubk', [admincontroller::class, 'indexguru']);
// Route::get('/dbadmin-form-gurubk', [admincontroller::class, 'createguru']);
// Route::post('/dbadmin-form-gurubk', [admincontroller::class, 'storeguru']);
// Route::get('/dbadmin/{id}/editgurubk', [admincontroller::class, 'editguru']);
// Route::put('/dbadmin-simpaneditgurubk/{id}', [admincontroller::class, 'updateguru']);
// Route::delete('/dbadmin-hapusgurubk/{id}', [admincontroller::class, 'destroyguru']);

// walas
// Route::get('/dbadmin-walas', [admincontroller::class, 'indexwalas']);
// Route::get('/dbadmin-form-walas', [admincontroller::class, 'createwalas']);
// Route::post('/dbadmin-form-walas', [admincontroller::class, 'storewalas']);
// Route::get('/dbadmin/{id}/editwalas', [admincontroller::class, 'editwalas']);
// Route::put('/dbadmin-simpaneditwalas/{id}', [admincontroller::class, 'updatewalas']);
// Route::delete('/dbadmin-hapuswalas/{id}', [admincontroller::class, 'destroywalas']);

// siswa
// Route::get('/dbadmin-murid', [admincontroller::class, 'indexsiswa']);
// Route::get('/dbadmin-form-siswa', [admincontroller::class, 'createsiswa']);
// Route::post('/dbadmin-form-siswa1', [admincontroller::class, 'storesiswa']);
// Route::get('/dbadmin/{id}/editsiswa', [admincontroller::class, 'editsiswa']);
// Route::put('/dbadmin-simpaneditsiswa/{id}', [admincontroller::class, 'updatesiswa']);
// Route::delete('/dbadmin-hapussiswa/{id}', [admincontroller::class, 'destroysiswa']);
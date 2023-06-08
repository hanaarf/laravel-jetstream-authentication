<?php

use App\Http\Controllers\admincontroller;
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
        return view('dashboard');
    })->name('dashboard');
});



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

// alluser
Route::get('/dbadmin-alluser', [admincontroller::class, 'indexuser']);
Route::get('/dbadmin-form-alluser', [admincontroller::class, 'createuser']);
Route::post('/dbadmin-form-alluser', [admincontroller::class, 'storeuser']);
Route::get('/dbadmin/{id}/editalluser', [admincontroller::class, 'edituser']);
Route::put('/dbadmin-simpaneditalluser/{id}', [admincontroller::class, 'updateuser']);
Route::delete('/dbadmin-hapusalluser/{id}', [admincontroller::class, 'destroyuser']);
// Route::get('/dbadmin-detailalluser/{id}', [admincontroller::class, 'showuser']);

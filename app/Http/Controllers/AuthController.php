<?php

namespace App\Http\Controllers;

use App\Models\konselingpribadi;
use App\Models\siswa;
use App\Models\kelas;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function Register(Request $R) {
        try {
            $cred = new User();
            $cred->name = $R->name;
            $cred->email = $R->email;
            $cred->password = Hash::make($R->password);
            $cred->role = $R->role;
            $cred->save();
            $response = ['status' => 200, 'message' => 'Register Succesfully!'];
            return response()->json($response);
            } catch (Exception $e) {
            $response = ['status' => 500, 'message' => $e];
        }
        }

    function Login(Request $R) {
    //ngambil email
    $user = User::where('email', $R->email)->first();

    //ngecek pw
    if($user!='[]' && Hash::check($R->password,$user->password)){
    $u = User::with('siswa','guru', 'wali_kelas')->where('email', $R->email)->first();
    $token = $user->createToken('Personal Access Token')->plainTextToken;
    $response = ['status' => 200, 'token' => $token, 'user' => $u, 'message' => 'Login Successfully!' , 'token'=>$token];
    return response()->json($response);
    }else if($user=='[]'){
    $response = ['status' => 500, 'message' => 'No account found with this username' ,];
    }else{
    $response = ['status' => 500, 'message' => 'Wrong username or password! please try again'];
    }
    }

    public function jadwal(Request $request){
    //ngambal data jadwal konseling pribadi
    $jadwals = konselingpribadi::with('siswaid', 'gurubkid', 'jenisKonseling7', 'walasid')->where('siswa_id',$request->id)->get();

    if ($jadwals) {
    return response()->json(['data' => $jadwals, 'message' => 'success' ,'status'=> 200]);
    } else {
    return response()->json([ 'message' => 'gagal']);
    }
    }

    public function index(){
    return response()->json(konselingpribadi::orderBy('id', 'ASC')->get());
    }


    // public function store (Request $request){
    //     $user = Auth::user();
    //     $siswa = $user->siswa;

    //     $data = $request->validate([
    //         'deskripsi' => 'required',
    //         'tanggal' => 'required|date',
    //         'tempat' => 'required',
    //         'jam' => 'required',
    //         'jeniskonseling_id' => 'required|exists:jeniskonseling,id',
    //     ]);

    //     $data['siswa_id'] = $siswa->id;
    //     $data['walas_id'] = $siswa->kelas->walas->id;
    //     $data['gurubk_id'] = $siswa->kelas->guru1->id;
    //     $data['status'] = 'waiting';

    //     konselingpribadi::create($data);

    //     return response()->json(['message' => 'Konseling berhasil dibuat'], 201);
    // }
















    // public function loginApi(Request $request) 
    // {
    //     $credentials = $request->only('name', 'password');
    //     if (Auth::attempt($credentials)) {
    //         $user = User::where('name', $request->name)->first();

    //         if ($user->role == 'siswa') {
    //             $token = $user->createToken('Personal Access Token')->plainTextToken;
    //             $response=['status'=>200, 'token'=>$token, 'user'=>$user, 'message'=>'Successfuly Login! Welcome Back'];
    //             return response()->json($response);
    //         }else {
    //             return response()->json(['message'=>'Unauthorized'],401);
    //         }
    //     } else {
    //         return response()->json(['message'=> 'invalid credentials'], 401);
    //     }
    // }

    public function store(Request $request){
        // $product = konselingpribadi::create($request->all());
        // return response()->json(['message' => 'Success','data' => $product]);


        $validatedData = $request->validate([
            'deskripsi' => 'required',
            'jeniskonseling_id' => 'required',
            'siswa_id' => 'required',
            'walas_id' => 'required',
            'gurubk_id' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
        ]);

        // Buat record konseling
        $konseling = konselingpribadi::create([
            'deskripsi' => $validatedData['deskripsi'],
            'jeniskonseling_id' => $validatedData['jeniskonseling_id'],
            'siswa_id' => $validatedData['siswa_id'],
            'walas_id' => $validatedData['walas_id'],
            'gurubk_id' => $validatedData['gurubk_id'],
            'tanggal' => $validatedData['tanggal'],
            'jam' => $validatedData['jam'],
            'tempat' => $validatedData['tempat'],
            'status' => 'waiting',
        ]);

        return response()->json(['message' => 'Konseling berhasil dibuat'], 201);
    }
    

   

}
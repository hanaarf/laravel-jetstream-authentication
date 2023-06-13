<?php

namespace App\Http\Controllers;

use App\Models\konselingpribadi;
use App\Models\siswa;
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
    $user = User::where('email', $R->email)->first();

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

    public function jadwal(Request $request)
{


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
}
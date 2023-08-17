<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\konselingpribadi;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function update(Request $request){
     $jadwal = konselingpribadi::findOrFail($request->id);
   $create =  $jadwal->update([
      'jam' => $request->jam,
       'tanggal'=> $request->tanggal,
       'tempat'=> $request->tempat
     ]);

     $response = ['status' => 200, 'message' => $jadwal];
            return response()->json($response);
    }
}

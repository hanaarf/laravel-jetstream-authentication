<?php

namespace Database\Seeders;

use App\Models\petakerawanan;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class petakerawananSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['jenisrawan_id'=>'1','siswa_id'=>'1','walas_id'=>'1'],
            ['jenisrawan_id'=>'2','siswa_id'=>'2','walas_id'=>'2'],
            ['jenisrawan_id'=>'1','siswa_id'=>'2','walas_id'=>'2'],
        ];

        foreach ($data as $item ) {
            petakerawanan::insert([
                'jenisrawan_id' => $item['jenisrawan_id'],
                'walas_id' => $item['walas_id'],
                'siswa_id' => $item['siswa_id'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);                                      
        }
    }
}

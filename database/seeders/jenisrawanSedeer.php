<?php

namespace Database\Seeders;

use App\Models\jenisrawan;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class jenisrawanSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = [
            ['name'=>'Sering sakit'],
            ['name'=>'Sering ijin'],
            ['name'=>'Sering alpha'],
            ['name'=>'Sering terlambat'],
            ['name'=>'Bolos'],
            ['name'=>'Kelainan jasmani'],
            ['name'=>'Minat/ motivasi belajar kurang'],
            ['name'=>'Introvert / pendiam'],
            ['name'=>'Tinggal dengan wali'],
            ['name'=>'Kemampuan kurang'],
            ['name'=>'Berkelahi'],
            ['name'=>'Menentang guru'],
            ['name'=>'Mengganggu teman'],
            ['name'=>'Pacaran'],
            ['name'=>'Broken home'],
            ['name'=>'Kondisi ekonomi kurang '],
            ['name'=>'Pergaulan di luar sekolah'],
            ['name'=>'Pengguna narkoba'],
            ['name'=>'Merokok'],
            ['name'=>'Membiayai sekolah sendiri / bekerja'],
          

        ];

        foreach ($data as $item ) {
            jenisrawan::insert([
                'name' => $item['name'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);                                      
        }

    }
}

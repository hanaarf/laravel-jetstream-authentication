<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kelasSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name'=>'X PPLG I','gurubk_id'=>'1','walas_id'=>'1'],
            ['name'=>'X PPLG II','gurubk_id'=>'2','walas_id'=>'2'],
            ['name'=>'X PPLG III','gurubk_id'=>'3','walas_id'=>'3'],
            ['name'=>'X MM I','gurubk_id'=>'4','walas_id'=>'4'],
            ['name'=>'X MM II','gurubk_id'=>'1','walas_id'=>'5'],
            ['name'=>'X MM III','gurubk_id'=>'2','walas_id'=>'6'],
            ['name'=>'X MM IV','gurubk_id'=>'3','walas_id'=>'7'],
            ['name'=>'X TKJ I','gurubk_id'=>'4','walas_id'=>'8'],
            ['name'=>'X TKJ II','gurubk_id'=>'1','walas_id'=>'9'],
            ['name'=>'X TE','gurubk_id'=>'2','walas_id'=>'10'],
            ['name'=>'X BRC','gurubk_id'=>'3','walas_id'=>'11'],

            
            ['name'=>'XI PPLG I','gurubk_id'=>'4','walas_id'=>'12'],
            ['name'=>'XI PPLG II','gurubk_id'=>'1','walas_id'=>'13'],
            ['name'=>'XI MM I','gurubk_id'=>'1','walas_id'=>'14'],
            ['name'=>'XI MM II','gurubk_id'=>'1','walas_id'=>'15'],
            ['name'=>'XI MM III','gurubk_id'=>'2','walas_id'=>'16'],
            ['name'=>'XI MM IV','gurubk_id'=>'2','walas_id'=>'17'],
            ['name'=>'XI TKJ I','gurubk_id'=>'2','walas_id'=>'18'],
            ['name'=>'XI TKJ II','gurubk_id'=>'2','walas_id'=>'19'],
            ['name'=>'XI TKJ III','gurubk_id'=>'2','walas_id'=>'20'],
            ['name'=>'XI TE','gurubk_id'=>'3','walas_id'=>'21'],
            ['name'=>'XI BRC','gurubk_id'=>'4','walas_id'=>'22'],


            ['name'=>'XII PPLG I','gurubk_id'=>'4','walas_id'=>'23'],
            ['name'=>'XII PPLG II','gurubk_id'=>'4','walas_id'=>'24'],
            ['name'=>'XII MM I','gurubk_id'=>'4','walas_id'=>'25'],
            ['name'=>'XII MM II','gurubk_id'=>'2','walas_id'=>'26'],
            ['name'=>'XII TKJ I','gurubk_id'=>'1','walas_id'=>'27'],
            ['name'=>'XII TKJ II','gurubk_id'=>'3','walas_id'=>'28'],
            ['name'=>'XII BRC','gurubk_id'=>'4','walas_id'=>'29'],
            ['name'=>'XII TE I','gurubk_id'=>'2','walas_id'=>'30'],

        ];

        foreach ($data as $item ) {
            kelas::insert([
                'name' => $item['name'],
                'gurubk_id' => $item['gurubk_id'],
                'walas_id' => $item['walas_id'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);                                      
        }

    }
}

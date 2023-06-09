<?php

namespace Database\Seeders;

use App\Models\jeniskonseling;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class jeniskonselingSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name'=>'Bimbingan pribadi'],
            ['name'=>'Bimbingan sosial'],
            ['name'=>'Bimbingan karir'],
            ['name'=>'Bimbingan belajar'],
        ];

        foreach ($data as $item ) {
            jeniskonseling::insert([
                'name' => $item['name'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);                                      
        }
    }
}

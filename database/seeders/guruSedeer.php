<?php

namespace Database\Seeders;

use App\Models\guru;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class guruSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Ricky M sudra','nipd' => '0031', 'user_id' => '31','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Ika Rafika','nipd' => '0032', 'user_id' => '32','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Sheila Riani putri','nipd' => '0033', 'user_id' => '33','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Heni siswanti','nipd' => '0034', 'user_id' => '34','ttl' => '2023-06-01','gender' => 'wanita'],
        ];

        foreach ($data as $item) {
            guru::insert([
                'name' => $item['name'],
                'nipd' => $item['nipd'],
                'user_id' => $item['user_id'],
                'ttl' => $item['ttl'],
                'gender' => $item['gender'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class siswaSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'hana','nisn' => '0036', 'user_id' => '36', 'kelas_id' => '1', 'ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'dhela','nisn' => '0037', 'user_id' => '37', 'kelas_id' => '2', 'ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'naillah','nisn' => '0038', 'user_id' => '38', 'kelas_id' => '3', 'ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'selvi','nisn' => '0039', 'user_id' => '39', 'kelas_id' => '4', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'sherly','nisn' => '0040', 'user_id' => '40', 'kelas_id' => '5', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'sheyla','nisn' => '0041', 'user_id' => '41', 'kelas_id' => '6', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'adri','nisn' => '0042', 'user_id' => '42', 'kelas_id' => '7', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'ahmad','nisn' => '0043', 'user_id' => '43', 'kelas_id' => '8', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'bagus','nisn' => '0044', 'user_id' => '44', 'kelas_id' => '9', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'irsyaad','nisn' => '0045', 'user_id' => '45', 'kelas_id' => '10', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'ibrahim','nisn' => '0046', 'user_id' => '46', 'kelas_id' => '11', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'rasya','nisn' => '0047', 'user_id' => '47', 'kelas_id' => '12', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'khairan','nisn' => '0048', 'user_id' => '48', 'kelas_id' => '13', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'kiagus','nisn' => '0049', 'user_id' => '49', 'kelas_id' => '14', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'habibi','nisn' => '0050', 'user_id' => '50', 'kelas_id' => '15', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'ibrahim','nisn' => '0051', 'user_id' => '51', 'kelas_id' => '16', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'jeffry','nisn' => '0052', 'user_id' => '52', 'kelas_id' => '17', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'andy','nisn' => '0053', 'user_id' => '53', 'kelas_id' => '18', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'divadan','nisn' => '0054', 'user_id' => '54', 'kelas_id' => '19', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'siti','nisn' => '0055', 'user_id' => '55', 'kelas_id' => '20', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'sheyla','nisn' => '0056', 'user_id' => '56', 'kelas_id' => '21', 'ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'raditya','nisn' => '0057', 'user_id' => '57', 'kelas_id' => '22', 'ttl' => '2023-06-01','gender' => 'pria'],
        ];

        foreach ($data as $item) {
            siswa::insert([
                'name' => $item['name'],
                'nisn' => $item['nisn'],
                'user_id' => $item['user_id'],
                'kelas_id' => $item['kelas_id'],
                'ttl' => $item['ttl'],
                'gender' => $item['gender'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

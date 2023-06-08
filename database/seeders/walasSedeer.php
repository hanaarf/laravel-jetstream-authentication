<?php

namespace Database\Seeders;

use App\Models\walas;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class walasSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Nahla naufan','nipd' => '001', 'user_id' => '1','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Yoga Sanjaya','nipd' => '002', 'user_id' => '2','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Erraldo daniel','nipd' => '003', 'user_id' => '3','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Furida lusi siagian','nipd' => '004', 'user_id' => '4','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Sugeng santoso ','nipd' => '005', 'user_id' => '5','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Abd. Rosyid','nipd' => '006', 'user_id' => '6','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Fariz Achmad ','nipd' => '007', 'user_id' => '7','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Lia Debby Juwita','nipd' => '008', 'user_id' => '8','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Devi Mariani','nipd' => '009', 'user_id' => '9','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Ratnawati','nipd' => '0010', 'user_id' => '10','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Aniek','nipd' => '0011', 'user_id' => '11','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Fatah','nipd' => '0012', 'user_id' => '12','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Fatima elvi','nipd' => '0013', 'user_id' => '13','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Kemal yefta','nipd' => '0014', 'user_id' => '14','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Syamsul maarif','nipd' => '0015', 'user_id' => '15','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Dwi sustiawan','nipd' => '0016', 'user_id' => '16','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Ambar','nipd' => '0017', 'user_id' => '17','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Anita triana','nipd' => '0018', 'user_id' => '18','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Anna susilowati','nipd' => '0019', 'user_id' => '19','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Muchlas edi','nipd' => '0020', 'user_id' => '20','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Maesitoh','nipd' => '0021', 'user_id' => '21','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Gebi mahes','nipd' => '0022', 'user_id' => '22','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Shova al marwah','nipd' => '0023', 'user_id' => '23','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Casik','nipd' => '0024', 'user_id' => '24','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Darma wahyu','nipd' => '0025', 'user_id' => '25','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Nur syafitri','nipd' => '0026', 'user_id' => '26','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Handika reynaldi','nipd' => '0027', 'user_id' => '27','ttl' => '2023-06-01','gender' => 'pria'],
            ['name' => 'Anisa anggi','nipd' => '0028', 'user_id' => '28','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Rina wastanti','nipd' => '0029', 'user_id' => '29','ttl' => '2023-06-01','gender' => 'wanita'],
            ['name' => 'Sinta nur','nipd' => '0030', 'user_id' => '30','ttl' => '2023-06-01','gender' => 'wanita'],
        ];

        foreach ($data as $item) {
            walas::insert([
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

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Nahla naufan','email' => 'walas1@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Yoga Sanjaya','email' => 'walas2@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Erraldo daniel','email' => 'walas3@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Furida lusi siagian','email' => 'walas4@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Sugeng santoso ','email' => 'walas5@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Abd. Rosyid','email' => 'walas6@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Fariz Achmad ','email' => 'walas7@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Lia Debby Juwita','email' => 'walas8@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Devi Mariani','email' => 'walas9@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Ratnawati','email' => 'walas10@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Aniek','email' => 'walas11@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Fatah','email' => 'walas12@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Fatima elvi','email' => 'walas13@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Kemal yefta','email' => 'walas14@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Syamsul maarif','email' => 'walas15@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Dwi sustiawan','email' => 'walas16@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Ambar','email' => 'walas17@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Anita triana','email' => 'walas18@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Anna susilowati','email' => 'walas19@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Muchlas edi','email' => 'walas20@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Maesitoh','email' => 'walas21@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Gebi mahes','email' => 'walas22@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Shova al marwah','email' => 'walas23@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Casik','email' => 'walas24@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Darma wahyu','email' => 'walas25@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Nur syafitri','email' => 'walas26@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Handika reynaldi','email' => 'walas27@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Anisa anggi','email' => 'walas28@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Rina wastanti','email' => 'walas29@gmail.com', 'password' => 'pw', 'role' => 'walas',],
            ['name' => 'Sinta nur','email' => 'walas30@gmail.com', 'password' => 'pw', 'role' => 'walas',],

            ['name' => 'Ricky M sudra','email' => 'gurubk1@gmail.com', 'password' => 'pw', 'role' => 'gurubk',],
            ['name' => 'Ika Rafika','email' => 'gurubk2@gmail.com', 'password' => 'pw', 'role' => 'gurubk',],
            ['name' => 'Sheila Riani putri','email' => 'gurubk3@gmail.com', 'password' => 'pw', 'role' => 'gurubk',],
            ['name' => 'Heni siswanti','email' => 'gurubk4@gmail.com', 'password' => 'pw', 'role' => 'gurubk',],

            ['name' => 'Casandra Fitriani','email' => 'admin@gmail.com', 'password' => 'pw', 'role' => 'admin',],

            ['name' => 'hana','email' => 'siswa1@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'dhela','email' => 'siswa2@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'naillah','email' => 'siswa3@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'selvi','email' => 'siswa4@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'sherly','email' => 'siswa5@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'sheyla','email' => 'siswa6@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'adri','email' => 'siswa7@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'ahmad','email' => 'siswa8@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'bagus','email' => 'siswa9@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'irsyaad','email' => 'siswa10@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'ibrahim','email' => 'siswa11@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'rasya','email' => 'siswa12@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'khairan','email' => 'siswa13@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'kiagus','email' => 'siswa14@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'habibi','email' => 'siswa15@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'ibrahim','email' => 'siswa16@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'jeffry','email' => 'siswa17@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'andy','email' => 'siswa18@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'divadan','email' => 'siswa19@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'siti','email' => 'siswa20@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'sheyla','email' => 'siswa21@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
            ['name' => 'raditya','email' => 'siswa22@gmail.com', 'password' => 'pw', 'role' => 'siswa',],
        ];

        foreach ($data as $item) {
            User::insert([
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => Hash::make($item['password']),
                'role' => $item['role'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        
    }
}

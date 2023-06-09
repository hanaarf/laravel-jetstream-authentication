<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class roleSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'walas',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'siswa',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'gurubk',
            'guard_name' => 'web'
        ]);
    }
}

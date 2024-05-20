<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::updateOrCreate([
        //     'name'     => 'admin',
        //     'username' => 'administrator',
        //     'password' => bcrypt('admin1')
        // ]);
        User::updateOrCreate([
            'name'     => 'operator',
            'username' => 'operator',
            'password' => bcrypt('operator1')
        ]);
        User::updateOrCreate([
            'name'     => 'petugas',
            'username' => 'petugas',
            'password' => bcrypt('petugas1')
        ]);



    }
}

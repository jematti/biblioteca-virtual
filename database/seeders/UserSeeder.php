<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'usuario_prueba',
            'email' => 'a1@a1.com',
            'password' => bcrypt('123456')
        ])->assignRole('admin');
    }
}

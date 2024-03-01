<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'AFLAH BADRUS',
            'email' => 'Aflahoioi87665@gmail.com',
            'role' => 'user',
            'study_in' => 'SMKN 1 Bangsri',
            'password' => encrypt('password')

        ]);
        User::create([
            'name' => 'Taufiq',
            'email' => 'taufiq@gmail.com',
            'role' => 'admin',
            'study_in' => 'SMKN 1 Bangsri',
            'password' => encrypt('password')

        ]);
        User::create([
            'name' => 'Rifal Prasetyo',
            'email' => 'hrdsdms765@gmail.com',
            'role' => 'superadmin',
            'study_in' => 'SMKN 1 Bangsri',
            'password' => encrypt('password')

        ]);
    }
}

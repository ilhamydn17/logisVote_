<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name'=>'Ilham Yudantyo',
            'username'=>'admin',
            'password'=>bcrypt('password'),
            'role'=>'admin'
        ]);

        User::create([
            'name'=>'Fikril Hadid',
            'username'=>'fikril_',
            'password'=>bcrypt('password'),
            'role'=>'user'
        ]);

        User::create([
            'name'=>'Ahmad Hasan',
            'username'=>'hasan_',
            'password'=>bcrypt('password'),
            'role'=>'user'
        ]);
    }
}

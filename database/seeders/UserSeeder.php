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
            'name' => 'Ilham Yudantyo',
            'username' => 'admin',
            'password' => bcrypt('adminkeren123'),
            'role' => 'admin'
        ]);

        // for ($i = 0; $i < 10; $i++) {
        //     User::create([
        //         'name' => 'User ' . $i,
        //         'username' => 'user' . $i,
        //         'password' => bcrypt('password'),
        //         'role' => 'user'
        //     ]);
        // }
    }

}

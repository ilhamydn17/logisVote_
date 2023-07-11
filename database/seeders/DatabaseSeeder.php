<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /**
         * @var User $user
         * 'name',
         * 'email',
         * 'password',
         */
        User::create([
            'name' => 'Arya Listyo',
            // 'email' => 'ilham@gmail.com',
            // 'username'=> 'ilhamydn',
            'nim' => '2141720092',
            'password' => Hash::make('logisvote22'),
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

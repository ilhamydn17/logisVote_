<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\CandidateSeeder;
use Database\Seeders\VoteSessionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ini untuk memanggil kelas-kelas seeder

        $this->call([
            UserSeeder::class,
            VoteSessionSeeder::class,
            CandidateSeeder::class
        ]);
    }
}

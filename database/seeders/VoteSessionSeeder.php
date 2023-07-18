<?php

namespace Database\Seeders;

use App\Models\VoteSession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoteSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VoteSession::create([
            'tahun_periode'=>'2023/2024'
            
        ]);
    }
}

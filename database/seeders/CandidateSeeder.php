<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            $table->id();
            $table->string('nama', 100);
            $table->string('no_urut');
            $table->text('visi');
            $table->text('misi');
            $table->string('foto');
            $table->string('periode');
            $table->timestamps();
        */

        Candidate::create([
            'voteSession_id'=>1,
            'nama'=>'Fikri Ardiansyah',
            'no_urut' => '01',
            'visi'=> fake()->text(200),
            'misi'=> fake()->text(200),
            'foto'=> 'candidate-img/fikri.jpeg',
        ]);

        Candidate::create([
            'voteSession_id'=>1,
            'nama'=>'Arya Listyo Kusuma Aji',
            'no_urut' => '02',
            'visi'=> fake()->text(200),
            'misi'=> fake()->text(200),
            'foto'=> 'candidate-img/arya.png',
        ]);

        Candidate::create([
            'voteSession_id'=>1,
            'nama'=>'Novita Ramadhanis',
            'no_urut' => '03',
            'visi'=> fake()->text(200),
            'misi'=> fake()->text(200),
            'foto'=> 'candidate-img/tara.jpg',
        ]);

    }
}

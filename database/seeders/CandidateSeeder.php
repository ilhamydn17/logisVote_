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
            'vote_session_id'=>1,
            'nama'=>'Fikri Ardiansyah',
            'no_urut' => '01',
            // visi
            'visi'=> 'Menjadi Ketua Umum yang visioner dan berkomitmen untuk membawa organisasi ini menuju prestasi yang lebih tinggi. Melalui kepemimpinan yang kuat dan kerja sama yang erat dengan seluruh anggota, visi saya adalah menciptakan lingkungan yang inklusif, inovatif, dan berdaya saing.',
            'misi'=> "
            Misi1, Misi2, misi3
            ",
            'foto'=> 'candidate-img/fikri.jpeg',
        ]);

        Candidate::create([
            'vote_session_id'=>1,
            'nama'=>'Arya Listyo Kusuma Aji',
            'no_urut' => '02',
            'visi'=> 'Visi arya',
            'misi'=> 'Misi arya',
            'foto'=> 'candidate-img/arya.png',
        ]);

        Candidate::create([
            'vote_session_id'=>1,
            'nama'=>'Novita Ramadhanis',
            'no_urut' => '03',
            'visi'=> 'visi tara',
            'misi'=> 'misi tara',
            'foto'=> 'candidate-img/tara.jpg',
        ]);

        Candidate::create([
            'vote_session_id'=>1,
            'nama'=>'Rael Handy Gallant',
            'no_urut' => '04',
            'visi'=> 'visi rael',
            'misi'=> 'misi rael',
            'foto'=> 'candidate-img/rael.png',
        ]);

    }
}

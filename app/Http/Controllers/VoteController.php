<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class VoteController extends Controller
{
    public function doVote(Candidate $candidate)
    {
        $userLoged = User::find(auth()->user()->id);
        // update status vote yang ada di table user menjadi 1 (sudah voting)
        if(!DB::table('users')->where('id', $userLoged->id)->update(['is_voted' => true])){
            Alert::error('Gagal', 'Anda gagal melakukan voting');
            return redirect()->route('user.home');
        }

        // insert data baru ke table vote (candidate_id, user_id)
        if (
            !Vote::create([
                'candidate_id' => $candidate->id,
                'user_id' => auth()->user()->id,
            ])
        ) {
            Alert::error('Gagal', 'Anda gagal menyimnpan data voting');
            return redirect()->route('user.home');
        }

         // redirect ke user home untuk melakukan logout
         Alert::toast('Berhasil melakukan voting', 'success');
         return redirect()->route('user.home');
    }

}

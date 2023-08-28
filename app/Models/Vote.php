<?php

namespace App\Models;

use App\Models\User;
use App\Models\Candidate;
use App\Models\VoteSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory;

    protected $table = 'votes';

    protected $fillable = [
        'user_id',
        'candidate_id',
        'tahun_vote'
    ];

    protected $with = ['user', 'candidate'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }

    public static function runVote(User $userLoged, Candidate $candidate){

        // update status vote yang ada di table user menjadi 1 (sudah voting)
        if(!DB::table('users')->where('id', $userLoged->id)->update(['is_voted' => true])){
            Alert::error('Gagal', 'Anda gagal melakukan voting');
            return redirect()->route('user.home');
        }

        // insert data baru ke table vote (candidate_id, user_id)
        if (
            !self::create([
                'candidate_id' => $candidate->id,
                'user_id' => $userLoged->id,
            ])
        ) {
            Alert::error('Gagal', 'Anda gagal menyimnpan data voting');
            return redirect()->route('user.home');
        }

        // update jumlah vote di table candidate
        $candidate->hasVoted();

        // redirect ke user home untuk melakukan logout
        Alert::toast('Berhasil melakukan voting', 'success');
        return redirect()->route('user.home');
    }

    public static function generateChartData(){
        return VoteSession::with('candidates')->latest()->first()->candidates()->orderBy('id', 'asc')->get();
    }
}

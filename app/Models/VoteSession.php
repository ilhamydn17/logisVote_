<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VoteSession extends Model
{
    use HasFactory;

    protected $table = 'vote_session';
    protected $guarded = ['id'];

    public function candidates(){
        return $this->hasMany(Candidate::class);
    }

    public function actionCheck(){
        if($this->session_run == 0){
            $this->update([
                'session_run'=>1
            ]);
            Alert::success('Berhasil', 'Sesi voting telah dimulai');
            return redirect()->back();
        }elseif($this->session_run == 1){
            $this->update([
                'session_run'=>2
            ]);
            Alert::success('Berhasil', 'Sesi voting telah dihentikan');
            return redirect()->back();
        }
    }

    public static function sessionExist(){
        return self::where('session_run', 1)->orWhere('session_run',0)->first();
    }

}

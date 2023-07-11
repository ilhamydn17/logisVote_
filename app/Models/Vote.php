<?php

namespace App\Models;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}

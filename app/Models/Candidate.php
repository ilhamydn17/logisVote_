<?php

namespace App\Models;

use App\Models\Vote;
use App\Models\VoteSession;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidates';

    protected $guarded = [
     'id'
    ];

    public function vote(){
        return $this->hasMany(Vote::class);
    }

    public function vote_session(){
        return $this->belongsTo(VoteSession::class);
    }
}
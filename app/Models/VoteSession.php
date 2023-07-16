<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VoteSession extends Model
{
    use HasFactory;

    protected $table = 'vote_session';
    protected $guarded = ['id'];

    public function candidates(){
        return $this->hasMany(Candidate::class);
    }
}

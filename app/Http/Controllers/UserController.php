<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\VoteSession;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function adminHome(){
        $this->authorize('is-admin');
        $lastSession = VoteSession::with('candidates')->latest()->first();
        return view('app.admin.admin-dashboard', compact('lastSession'));
    }

    public function adminCandidate(){
        $this->authorize('is-admin');
        $candidate = Candidate::with('vote_session')->latest()->get();
        return view('app.admin.admin-dataKandidat', compact('candidate'));
    }

    public function userHome(){
        $this->authorize('is-user');
        $voteSession = VoteSession::with('candidates')->latest()->first();
        return view('app.user.user-home', compact('voteSession'));
    }
}

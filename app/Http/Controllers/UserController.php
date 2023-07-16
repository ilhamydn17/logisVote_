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
        return view('app.admin-home');
    }

    public function userHome(){
        $this->authorize('is-user');
        $candidate = VoteSession::with('candidate')->latest()->get();
        // $candidate = Candidate::all();
        return view('app.user-home', compact('candidate'));
    }
}

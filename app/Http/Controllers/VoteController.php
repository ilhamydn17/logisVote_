<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Vote;
use App\Models\Candidate;
use App\Models\VoteSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use RealRashid\SweetAlert\Facades\Alert;

class VoteController extends Controller
{
    public function doVote(Candidate $candidate)
    {
        $userLoged = User::find(auth()->user()->id);
        return Vote::runVote($userLoged,$candidate);
    }

    public function chart(){
        $dataCandidate = Vote::generateChartData();
        $data = [];
        $labels = [];
        foreach ($dataCandidate as $item) {
            $data[] = $item->vote()->count();
            $labels[] = $item->nama;
        }
        return view('app.admin.admin-chart', compact(['labels','data']));
    }

}

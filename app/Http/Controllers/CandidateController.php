<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCandidateRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CandidateController extends Controller
{
    public function show($id){
        $candidate = Candidate::findOrFail($id);
        return view('app.admin.admin-detailKandidatSesi', compact('candidate'));
    }

    public function update(UpdateCandidateRequest $request, Candidate $candidate){
        $foto = $candidate->foto;
        if($request->hasFile('fotoBaru')){
            $foto = $request->file('fotoBaru')->store('public/candidate-img');
        }
        $candidate->update($request->validated() + ['foto'=>$foto]);

        Alert::toast('Data Berhasil di update', 'success');
        return redirect()->back();
    }
}

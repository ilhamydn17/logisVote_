<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteSessionCreateRequest;
use App\Models\Candidate;
use App\Models\VoteSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class VoteSessionController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        if(VoteSession::sessionExist()){ Alert::warning('Peringatan', 'Terdapat sesi yang masih berjalan'); return redirect()->route('admin.list-session');}
        return view('app.admin.admin-create-session');
    }

    public function store(VoteSessionCreateRequest $request)
    {
        if(!VoteSession::create(['tahun_periode'=>$request->validated('tahun_periode')])){
            Alert::toast('gagal menambahkan sesi baru', 'danger');
        }

        for ($i=1; $i <= 4 ; $i++) {
            if (!$path = $request->validated('foto'.$i.'')->store('public/candidate-img')) {
                Alert::toast('gambar gagal diupload', 'danger');
                return redirect()->back();
            }

            if(
                !Candidate::create([
                    'vote_session_id'=> VoteSession::latest()->first()->id,
                    'nama' => $request->validated('nama_kandidat'.$i.''),
                    'no_urut' => $request->validated('no_urut'.$i.''),
                    'foto' => $path,
                    'visi' => $request->validated('visi'.$i.''),
                    'misi' =>$request->validated('misi'.$i.'')
                ])
            ){
                Alert::toast('data kandidat gagal diupload', 'danger');
                return redirect()->back();
            }
        }

        Alert::toast('Berhasil menambahkan sesi baru', 'success');
        return redirect()->route('admin.list-session');
    }


    public function show(VoteSession $voteSession)
    {
        return view('app.admin.admin-kandidatSesi', compact('voteSession'));
    }


    public function edit(VoteSession $voteSession)
    {

    }


    public function update(Request $request, $id)
    {
        //
    }

    public function adminAction(VoteSession $voteSession){
        return $voteSession->actionCheck();
    }

    public function destroy($id)
    {

    }
}

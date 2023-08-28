<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Imports\UserImport;
use App\Models\User;
use App\Models\Candidate;
use App\Models\VoteSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function adminHome(){
        $this->authorize('is-admin');
        $lastSession = VoteSession::with('candidates')->latest()->first();
        $choosenCandidate = $lastSession->candidates()->where('jumlah_vote', $lastSession->candidates()->max('jumlah_vote'))->first();
        return view('app.admin.admin-dashboard', compact('lastSession', 'choosenCandidate'));
    }

    public function listUsers(){
        $this->authorize('is-admin');
        $users = User::where('role', 'user')->get();
        return view('app.admin.admin-listUsers', compact('users'));
    }

    public function adminCandidate(){
        $this->authorize('is-admin');
        $candidate = Candidate::with('vote_session')->latest()->get();
        return view('app.admin.admin-dataKandidat', compact('candidate'));
    }

    public function adminListSession(){
        $this->authorize('is-admin');
        $listSesi = VoteSession::with('candidates')->latest()->get();
        return view('app.admin.admin-listSesi', compact('listSesi'));
    }

    public function userHome(){
        $this->authorize('is-user');
        $voteSession = VoteSession::with('candidates')->latest()->first();
        return view('app.user.user-home', compact('voteSession'));
    }

    public function importUsers(Request $request){
        // validasi
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_user',$nama_file);

		// import data
		Excel::import(new UserImport, public_path('/file_user/'.$nama_file));

		// notifikasi dengan session
        Alert::success('Success', 'Data Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect()->route('admin.list-users');
    }

    public function storeUser(StoreUserRequest $request){
        Hash::make($request->password);
        if(!User::create([
            'name' => $request->validated('name'),
            'username' => $request->validated('username'),
            'password'=> Hash::make($request->validated('password')),
        ])){
            Alert::error('Gagal Menambahkan User');
        }
        Alert::success('Sukses','Berhasil Menambahkan User');
        return redirect()->route('admin.list-users');
    }
}

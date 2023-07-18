<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoteSessionCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // $tahun_periode = $request->input('tahun_periode');
        // $nama_kandidat1 = $request->input('nama_kandidat1');
        // $no_urut1 = $request->input('no_urut1');
        // $visi1 = $request->input('visi1');
        // $misi1 = $request->input('misi1');
        return [
            'tahun_periode'=>'required',

            'nama_kandidat1'=>'required',
            'no_urut1'=>'required',
            'foto1'=>'required|image',
            'visi1'=>'required',
            'misi1'=>'required',

            'nama_kandidat2'=>'required',
            'no_urut2'=>'required',
            'foto2'=>'required|image',
            'visi2'=>'required',
            'misi2'=>'required',

            'nama_kandidat3'=>'required',
            'no_urut3'=>'required',
            'foto3'=>'required|image',
            'visi3'=>'required',
            'misi3'=>'required',

            'nama_kandidat4'=>'required',
            'no_urut4'=>'required',
            'foto4'=>'required|image',
            'visi4'=>'required',
            'misi4'=>'required'
        ];
    }
}

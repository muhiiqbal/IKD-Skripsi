<?php

namespace App\Http\Controllers;

use App\Models\Ambil;
use App\Models\Kelas;
use App\Models\Matkul;
use App\Models\User;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tambahmatkul(Request $request)
    {

        Matkul::create([
            'nama_matkul' => $request->nama_matkul,
            'sks' => $request->sks,
        ]);
        return redirect('/mmatkul')->with('success', 'Mata Kuliah Berhasil Ditambahkan');
    }

    public function kelas(Request $request)
    {
        Kelas::create([
            'nama_kelas'=>$request->nama_kelas,
        ]);
        return redirect('/mmatkul')->with('success', 'Kelas Berhasil Ditambahkan');
    }
    
    public function addmatkul(User $user)
    {
        return view('pages.addmatkul',[
            'dosen' => User::where('id',$user->id)->first(),
            'matkul' => Matkul::all(),
            'kelas' => Kelas::all()
        ]);
    }

    public function storematkul(User $user, Request $request)
    {
        for ($i=0; $i < count($request->matkul); $i++) {
            Ambil::create([
                'user_id' => $user->id,
                'matkul_id' => $request->matkul[$i],
                'kelas_id' => $request->kelas[$i],
            ]);
        }
        return redirect('/all-user?role='. $request->role)->with('success', 'Mata Kuliah Berhasil Ditambahkan');
    }
}

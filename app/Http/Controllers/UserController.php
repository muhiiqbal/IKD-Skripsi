<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Matkul;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adduser()
    {
        return view('pages.adduser');
    }

    public function addmatkul(User $user)
    {
        return view('pages.addmatkul',[
            'dosen' => User::where('id',$user->id)->first(),
            'matkul' => Matkul::all(),
            'kelas' => Kelas::all()
        ]);
    }

    public function storeuser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->pass),
            'role' => $request->role,
        ]);

        return redirect('/all-user?role='.$request->role)->with('success', 'User Berhasil Dibuat');
    }

    public function updateuser(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->username;
        $user->emails = $request->email;
        $user->role = $request->role;
        $user->phone = $request->phone;
        $user->save();

        return redirect('/all-user')->with('success', 'User Berhasil Diupdate');
    }

    public function deleteuser(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return redirect('/all-user')->with('success', 'User Berhasil Dihapus');
    }
}

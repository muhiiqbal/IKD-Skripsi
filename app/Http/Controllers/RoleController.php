<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Matkul;
use App\Models\MasterNilai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addrole()
    {
        $dose = User::all();

        return view('pages.roles',[
            'dose' => $dose,
        ]);
    }

    public function editrole(Request $request) 
    {
        
        $user = User::all();
        //how to edit role in laravel ?

    }
    // Add role to user
//     public function editrole(Request $request) 
//     {
//         $user = User::find($request->id);
//         $user->name = $request->name;
//         $user->email = $request->username;
//         $user->emails = $request->email;
//         $user->role = $request->role;
//         $user->phone = $request->phone;
//         $user->save();

//         return redirect('/all-user')->with('success', 'User Berhasil Diupdate');
//     }
}

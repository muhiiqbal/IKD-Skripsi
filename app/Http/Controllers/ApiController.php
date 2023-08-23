<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function getuser()
    {
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->username,
            'emails' => $request->email,
            'password' => Hash::make($request->pass),
            'role' => $request->role,
            'phone' => $request->phone
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'Data Berhasil Ditambahkan'
        ]);
    }

    public function destroy(User $user)
    {

        User::destroy($user->id);
        return response()->json([
            'status' => 'Success',
            'message' => 'Data Berhasil Dihapus'
        ]);
    }

    


}

<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function(){
    return response()->json([
        'status' => 'true',
        'message' => 'Data Berhasil Diterima'
    ]);
});

Route::get('/getuser', [ApiController::class, 'getuser']);
Route::post('/storeuser', [ApiController::class, 'store']);
Route::delete('/deleteuser/{user}', [ApiController::class, 'destroy']);


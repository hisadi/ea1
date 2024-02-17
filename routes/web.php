<?php

use App\Http\Controllers\WaifuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hai', function () {
    return view('index');
});

Route::get('/dashboard', [WaifuController::class, 'show']);
Route::get('/add-waifu', [WaifuController::class, 'create']);
//Post itu buat store
Route::post('/store-waifu', [WaifuController::class, 'store']);
Route::get('/detail-waifu/{id}', [WaifuController::class, 'showDetail']);
Route::get('/edit-waifu/{id}', [WaifuController::class, 'edit']);
Route::patch('/update-waifu/{id}', [WaifuController::class, 'update']);
Route::delete('/delete-waifu/{id}', [WaifuController::class, 'destroy']);

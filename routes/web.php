<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformasiController;


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
    return redirect('/landing');
});

Route::get('/profil', function () {
    return view('profile/index', [
        "frist" => "Hello",
        "name" => "Ridwan Yoga Permana",
        "image" => "profil.png"
    ]);
});


Route::get('/landing', [LandingController::class, 'index']);
Route::get('/landing/profile', [ProfileController::class, 'index']);
Route::get('/landing/informasi', [InformasiController::class, 'index']);
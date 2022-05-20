<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\joursController;
use App\Http\Controllers\SportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('pagee.index');
});
//afficher pour crud jours
Route::get("/index",[AdminController::class,'index']);

// Route::get("/index",[SportController::class,'index']);


Route::resource('sport', SportController::class);
Route::resource('categorie', AdminController::class);
Route::resource('jours', joursController::class);
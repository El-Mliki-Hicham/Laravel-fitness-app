<?php

use App\Http\Controllers\PublicController;
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

Route::get('/home', function () {
       return view('pages.exercices');
});





Route::get('/index',[PublicController::class,'index'] )->name('home');
Route::get('/jours/{id}',[PublicController::class,'afficher_jours_id'] )->name('jour');
Route::get('/exercices/{id}/{id_c}',[PublicController::class,'afficher_exercices_id'] );

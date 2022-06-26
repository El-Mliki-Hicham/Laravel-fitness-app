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

// Route::get('/home', function () {
//        return view('pages.exercices');
// });



route::namespace("public")->group(function(){

Route::get('/index',"PublicController@index" )->name('home');
Route::get('/jours/{id}',"PublicController@afficher_jours_id" );
Route::get('/exercice-categorie/{id}',"PublicController@categorie_exercice" );
Route::get('/exercices/{id}/{id_c}',"PublicController@afficher_exercices_id" );


});
<?php
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\exercices_par_jourController;
use App\Http\Controllers\ExercicesController;
use App\Http\Controllers\JoursController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\public\PublicController as PublicPublicController;
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


// public routes

Route::get('/index',[PublicPublicController::class,"index"])->name('home');
Route::get('/jours/{id}',[PublicPublicController::class,"afficher_jours_id"] );
Route::get('/exercice-categorie/{id}',[PublicPublicController::class,"categorie_exercice"] );
Route::get('/exercices/{id}/{id_c}',[PublicPublicController::class,"afficher_exercices_id"] );





route::namespace("crud-public")->group(function(){

       route::resource("categorie",CategoriesController::class);
       route::resource("exercice",ExercicesController::class);
       route::resource("jour",JoursController::class);
       route::resource("programme",ProgrammeController::class);


       });



// Auth::routes();

// //home login
// Route::get('/login',"HomeController@index")->name('login');
// // Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// // login
// Route::get('/', function () {
//        return 'login';
// });





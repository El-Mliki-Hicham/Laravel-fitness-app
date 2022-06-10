<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


// @forelse ($exercices as $value)
//             <div class="col-sm-4 fitness-program-col">
//                 <div class="fitness-program-item">
//                     <div class="fitness-program-item-front" style="background-image: url(assets/img/home2-program-2.jpg);">
//                         <div class="fitness-program-item-inner">
//                             <div class="date">{{$value->nom_exercice}}</div>
//                             <h3>Open Training</h3>
//                         </div>
//                     </div>
                   
//                 </div>
//             </div>
// 			@empty
		
// 			@endforelse
            
            
class PublicController extends Controller
{
    function afficher_categories(){

      $categories=  DB::table('categories')
        ->select("*")
        ->get();
        $exercices = DB::table('exercices')
        ->select('*')
        ->take(6)
        ->get();
        return view("pages.home",compact("categories","exercices"));
    }

    function afficher_jours_id($id){

    $jours = DB::table('exercices_de_jours')
    ->select('*')
    ->where("id_categorie",$id)
    ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours","exercices_de_jours.id_jour",'=',"jours.id_jour")
    ->groupBy("exercices_de_jours.id_jour")
    ->get();
    return view('pages.categorie',compact("jours"));
    }
    
    
    function afficher_exercices_id($id,$id_c){
    $exercices = DB::table('exercices_de_jours')
    ->select('*')
    ->where("exercices_de_jours.id_jour",$id)
    ->where("exercices_de_jours.categorie_id",$id_c)
    ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours","exercices_de_jours.id_jour",'=',"jours.id_jour")
    // ->groupBy("exercices_de_jours.id_jour")
    ->get();
    return view('pages.exercices',compact("exercices"));


    }
    
    function afficher_exercices(){
   
    

    // return view('pages.home',compact("exercices"));


    }

  }
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    function afficher_categories(){

      $categories=  DB::table('categories')
        ->select("*")
        ->get();
        return view("pages.index",compact("categories"));
    }

    function afficher_categorie_id($id){

    $jours = DB::table('exercices_de_jours ')
    ->select('exercices_de_jours.id_jour')
    ->where("exercices_de_jours.categorie_id",$id)
    ->groupBy("exercices_de_jours.id_jour")
    ->join("categories"," exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices"," exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours"," exercices_de_jours.id_jour",'=',"jours.id_jour");
    
    
    return view('pages.jours',compact("jours"));


    }
}

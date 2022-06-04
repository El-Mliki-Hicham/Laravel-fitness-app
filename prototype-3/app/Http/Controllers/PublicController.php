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
        return view("pagess.index",compact("categories"));
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
    return view('pagess.jours',compact("jours"));
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
    return view('pagess.exercices',compact("exercices"));


    }

  }
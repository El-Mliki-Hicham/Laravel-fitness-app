<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

            
class PublicController extends Controller
{

  //page index
    function index(){

      $categories=  DB::table('categories')
        ->select("*")
        ->get();
       
       $exercices =DB::table( "categories_exerices")
        ->select('*')
        ->get();

       $exercices_count =DB::table( "exercices")
        ->select('*')->count();

       $categorie_count =DB::table( "categories")
        ->select('*')->count();

        return view("pages.home",compact("categories","exercices","exercices_count","categorie_count"));
    }

    
//page jour
    function afficher_jours_id($id){

    $jours = DB::table('exercices_de_jours')
    ->select('*')
    ->where("id_categorie",$id)
    ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
    ->groupBy("jour_id")
    ->get();

    
    $exercices = DB::table('exercices_de_jours')
    ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
    ->where("id_categorie",$id)
    ->select("*")->count();

    $number_jours = DB::table('exercices_de_jours')
    ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
    ->where("id_categorie",$id)
   
    ->groupBy("id_jour")
    ->count();


    return view('pages.jours',compact("jours","exercices","number_jours"));
    }
    
    //page exercices-de-jour
    function afficher_exercices_id($id,$id_c){
    $exercices = DB::table('exercices_de_jours')
    ->select('*')
    ->where("id_jour",$id)
    ->where("exercices_de_jours.categorie_id",$id_c)
    ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
    ->get();

    $categorie_exercice = DB::table('exercices')
    ->select('*')
    ->join("categories_exerices","exercices.categorie_exercice",'=',"categories_exerices.id_categorie_exercice")
    ->get();

    
    return view('pages.exercices-de-jour',compact("exercices","categorie_exercice"));


    }
    

    //page exercices
    function categorie_exercice($id){
    $categorie_exercice = DB::table('exercices')
        ->select('*')
        ->where('categorie_exercice',$id)
        ->join("categories_exerices","exercices.categorie_exercice",'=',"categories_exerices.id_categorie_exercice")

        ->get();
    
        $number_categorie_exercices = DB::table('exercices')
        ->where('categorie_exercice',$id)
        ->join("categories_exerices","exercices.categorie_exercice",'=',"categories_exerices.id_categorie_exercice")
        ->select('*')
        // d
        ->count();

    return view('pages.exercices',compact("categorie_exercice","number_categorie_exercices"));


    }





  
}


// test
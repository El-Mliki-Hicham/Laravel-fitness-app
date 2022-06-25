<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categories;
use App\Models\categories_exerices;
use App\Models\exercices;
use App\Models\exercices_de_jours;

            
class PublicController extends Controller
{

  //page index
    function index(){  
      $categories=categories::all();    
       $exercices =categories_exerices::all();
       $exercices_count =exercices::all()->count();
       $categorie_count =categories::all()->count();
        return view("pages.home",compact("categories","exercices","exercices_count","categorie_count"));
    }

    
//page jour
    function afficher_jours_id($id){

    $jours =exercices_de_jours::where("id_categorie",$id)
    ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
    ->groupBy("jour_id")
    ->get();
    return view('pages.jours',compact("jours"));
    }
    
    //page exercices-de-jour
    function afficher_exercices_id($id,$id_c){
    $exercices =exercices_de_jours::where("id_jour",$id)
    ->where("exercices_de_jours.categorie_id",$id_c)
    ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
    ->get();

    // $categorie_exercice =exercices::all()
    // ->join("categories_exerices","exercices.categorie_exercice",'=',"categories_exerices.id_categorie_exercice");
    
      $categorie_exercice = new Controller;
      $categorie_exercice->index();

    return view('pages.exercices-de-jour',compact("exercices"));


    }
    

    //page exercices
    function categorie_exercice($id){
    $categorie_exercice = exercices::where('categorie_exercice',$id)
        ->join("categories_exerices","exercices.categorie_exercice",'=',"categories_exerices.id_categorie_exercice")
      ->get();
        $number_categorie_exercices =exercices::where('categorie_exercice',$id)
        ->join("categories_exerices","exercices.categorie_exercice",'=',"categories_exerices.id_categorie_exercice")
        ->count();

    return view('pages.exercices',compact("categorie_exercice","number_categorie_exercices"));


    }





  
}


// test
<?php

namespace App\Http\Controllers;
use App\Models\categories;
use App\Models\categories_exerices;
use App\Models\exercices;
use App\Models\jours;
use App\Models\exercices_de_jours;
use Illuminate\Http\Request;

class checkboxController extends Controller
{
    public function index(){
        $jours = jours::all();
        $exercices = exercices::select("*")->take(5)
        ->join("categories_exerices","exercices.categorie_exercice",'=',"categories_exerices.id_categorie_exercice")
      ->get();

    return view("pages.index",compact('exercices',"jours"));
    }



public function ajouter(Request $request){


$jours = $request->input("jour");
$exercice = $request->input("exercice");

exercices_de_jours::create([
  
  "exercice_id"=>$exercice,
  "categorie_id"=>1,
  "jour_id"=>$jours
]);

  
  


if ($insert) {
  return redirect('index');
}





}








}



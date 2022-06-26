<?php

namespace App\Http\Controllers\public;
use App\Models\exercices;
use App\Models\categories_exerices;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $categorie_exercice =exercices::all()
    ->join("categories_exerices","exercices.categorie_exercice",'=',"categories_exerices.id_categorie_exercice");
    
    return view('pages.exercices-de-jour',compact("categorie_exercice"));
    }

    function countt(){
$id =3;
        $number_categorie_exercices =exercices::where('categorie_exercice',$id)
        ->join("categories_exerices","exercices.categorie_exercice",'=',"categories_exerices.id_categorie_exercice")
        ->count();
        return view('pages.exercices',compact("number_categorie_exercices"));

    }

    public function count_exercices(){

        $exercices =categories_exerices::all();

        return $exercices;
    }
}

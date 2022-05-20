<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SportController extends Controller
{
    public function  index(){

        $users = DB::table('jours')
        ->join('categories', 'jours.id_categories', '=', 'categories.id')
        ->join('exercices', 'jours.id_exercice', '=', 'exercices.id')
        ->select('*')
        ->get()->toArray();  
        
        
    
        return view('pages.index',compact('users')) ;
    
}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programme=DB::table('exercices_de_jours')
    ->select('*')
    ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
    ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
    ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
    ->get();
    return view('pages.tableau-programme',compact("programme"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie =DB::table('categories')
        ->select('*')
        ->get();

        $exercice = DB::table('exercices')
        ->select("*")
        ->get();

        $jour = DB::table('jours')
        ->select("*")
        ->get();
    
          
        return view("pages.inserte-programme",compact('categorie','exercice','jour'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $exercice =$request->input('exercice');
        $categorie=$request->input('categorie');
        $jour=$request->input('jour');
       

        $inserte =DB::insert('insert into exercices_de_jours(exercice_id,categorie_id,jour_id) value(?,?,?)',[$exercice,$categorie,$jour]);
        if ($inserte) {
            return redirect('afficher-programme');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie =DB::table('categories')
        ->select('*')
        ->get();

        $exercice = DB::table('exercices')
        ->select("*")
        ->get();

        $jour = DB::table('jours')
        ->select("*")
        ->get();


        $programme=DB::table('exercices_de_jours')
        ->select('*')
        ->where('id_programme',$id)
        ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
        ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
        ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
        ->get();
        return view('pages.edit-programme',compact('categorie','exercice','jour',"programme"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $exercice =$request->input('exercice');
        $categorie=$request->input('categorie');
        $jour=$request->input('jour');



        $edit = DB::table('exercices_de_jours')
        ->select('*')
        ->where('id_programme',$id)
        ->update([
            'exercice_id'=>$exercice ,
            'categorie_id'=>$categorie,
            'id_jour'=>$jour
            ]);
       if($edit){
        return redirect('afficher-programme');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programme=DB::table('exercices_de_jours')
        ->select('*')
        ->where('id_programme',$id)
        ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
        ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
        ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
        ->delete();
        return redirect('afficher-programme');
    }
}

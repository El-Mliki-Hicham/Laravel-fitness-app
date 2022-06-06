<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExercicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $exercice = DB::table('exercices')
        ->select("*")
        ->get();
        return view('pages.tableau-exercice' , compact('exercice'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pages.inserte-exercice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name =$request->input('nom_exercice');
        $numero=$request->input('numero');
        $description=$request->input('description_exercice');
        if($request->hasfile('photo_exercice'))
        {
            $file = $request->file('photo_exercice');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img/exerice', $filename);
            $photo = $filename;
        }

        $inserte =DB::insert('insert into exercices (nom_exercice ,numero ,description_exercice ,photo_exercice) value(?,?,?,?)',[$name ,$numero  ,$description, $photo]);
        if ($inserte) {
            return redirect('afficher-exercice');
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
      $exercice = DB::table("exercices")
        ->select("*")
        ->where('id_exercice',$id)
        ->get();
        return view('pages.edit-exercice',compact("exercice"));

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
        $nom = $request->input('name_categorie');
      
      
        if($request->hasfile('photo_categorie'))
         {
             $file = $request->file('photo_categorie');
             $extenstion = $file->getClientOriginalExtension();
             $filename = time().'.'.$extenstion;
             $file->move('img', $filename);
            $photo = $filename;
         }
        
     //    $photo = $request->input('photo_categorie');
        $inserte = DB::insert('insert into categories(name_categorie,photo_categorie) value(?,?)',[$nom,$photo]);
       if($inserte){
        return redirect('afficher-categorie');
        
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
       DB::table('exercices')
       ->where('id_exercice',$id)
       ->select('*')
       ->delete();
       return redirect('afficher-exercice');
    }
}

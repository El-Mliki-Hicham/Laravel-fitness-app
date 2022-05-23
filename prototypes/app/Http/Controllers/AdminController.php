<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Sport;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories=  DB::table('categories')
        ->select('*')
        ->get();
      $exercices=  DB::table('exercices')
        ->select('*')
        ->get();
      $jours=  DB::table('jours')
        ->select('*')
        ->join('categories', 'jours.id_categories', '=', 'categories.id')
        ->join('exercices', 'jours.id_exercice', '=', 'exercices.id')
        ->get();

       return view("sports.index",compact("categories","exercices","jours"));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')
                
        ->select('*')
        ->get()->toArray();  
$exercices = DB::table('exercices')
        
        ->select('*')
        ->get()->toArray();  
        
        
    
        return view('sports.create',compact('categories',"exercices")) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie=$request->input('categorie');
   
    $description=$request->input('description');
   
    
    $insert = DB::insert('insert into categories (name_categorie,description) values(?,?)',
            [$categorie,$description]);
   

    if($insert){
       return redirect('sports');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show( $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

      $row = db::table("categories")
      ->where('id',$id)
      ->get();
  
      return view('sports.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $admin)
    {
      DB::table('categories')
      ->where('id',$request->input('id'))
      ->update([
         'name_categorie'=>$request->input('name'),
         'description'=>$request->input('description')

      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
      db::table('categories')->where('id',$id)
      ->delete();
      return redirect('sports');
    }
}

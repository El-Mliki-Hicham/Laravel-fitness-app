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
        $categories =DB::table('categories')
        ->select('*');
                           
        $exercices =DB::table('exercices')
        ->select('*')
        ->union($categories)
        ->get(); 
                    
                    // print_r($exercices["categories.id"]);
                    print_r($exercices);
                    

                       
                    // return view('pages.indexxx',['exercices'=>$exercices]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
       return redirect('index');
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
    public function edit($admin)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy( $admin)
    {
        //
    }
}

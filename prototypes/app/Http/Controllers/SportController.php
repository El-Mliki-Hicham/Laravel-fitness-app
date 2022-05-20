<?php

namespace App\Http\Controllers;
use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SportController extends Controller
{


public function index()
{
   


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
    
    $exercice=$request->input('exercice');
    $numero=$request->input('numero');
    $description=$request->input('description');
    $photos=$request->input('photo');
    
    $insert = DB::insert('insert into exercices (exercice,numero,description,photo) values(?,?,?,?)',
            [$exercice,$numero,$description,$photos]);
   

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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categories;
// use App\Models\categories_exerices;
// use App\Models\exercices;
// use App\Models\exercices_de_jours;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
     $categorie =categories::all();
      return view('pages.tableau-categorie', compact('categorie'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.inserte-categorie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

       $name=$request->input('nom_categorie');
       $description=$request->input('description_categorie');
       if($request->hasfile('photo_categorie'))
        {
            $file = $request->file('photo_categorie');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img/categories', $filename);
           $photo = $filename;
        }
        else{
            $photo = null;
        }
        
        $insert=categories::create([
            "id_categorie"=>3,
            "nom_categorie" => $name ,
            "description_categorie" =>$description ,
            "photo_categorie" =>$photo
            
        ]);
        
        if ($insert) {
            return redirect('afficher-categorie');
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
        $edit =categories::where('id_categorie',$id)
        ->get();
        
        return view('pages.edit-categorie', compact('edit'));
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
        $name=$request->input('nom_categorie');
        $description=$request->input('description_categorie');


        if ( $request->hasFile('photo_categorie')) {
         $file = $request->file('photo_categorie');
             $extenstion = $file->getClientOriginalExtension();
             $filename = time().'.'.$extenstion;
             $file->move('img/categories', $filename);
             $image = $filename;
          }
        else{
            $image= $request->input("img");
       } 
       
      categories::where('id_categorie',$id)
       ->update(['nom_categorie'=>$name, 
       'photo_categorie'=>$image,
       "description_categorie"=>$description
    ]);
       
       return redirect('afficher-categorie');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      categories::where('id_categorie',$id)
      ->delete();
      return redirect('afficher-categorie');
    }
}

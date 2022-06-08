@extends('pages.principal')
@section('content')
<div class="main-content">
    <h1 class="titre text-center ">
   <strong>Ajouter les endroits</strong>
   </h1>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <!-- form -->
                            <div class="card-header">Edit</div>
                            <div class="card-body">
                                
                            
                                
                                @forelse ($programme as $programme)
                                <form action="{{route('afficher-programme.update',$programme->id_programme)}}"  method="POST" novalidate="novalidate"   enctype="multipart/form-data">
                                    @method("put")
                                @csrf 
                                   <div class="row">
                                   
                                     </div>
                                     <div class="row">
                                        <div class="col-6">
                                            <div class="form-group ">
                                                <label for="cc-exp" class="control-label mb-1">categories</label>
                                            <select name="categorie"  class="form-control cc-exp">
                                                <option value="{{$programme->id_categorie}}" selected>{{$programme->nom_categorie}}</option>
                                                @forelse ($categorie as $value)
                                               <option value="{{$value->id_categorie}}">{{$value->nom_categorie}}</option>
                                               @empty
                                               @endforelse
                                            </select>
                                            
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group ">
                                                <label for="cc-exp" class="control-label mb-1">exercices</label>
                                                
                                                <select name="exercice"  class="form-control cc-exp">
                                                    <option value="{{$programme->id_exercice}}" selected>{{$programme->nom_exercice}}</option>
                                                    @forelse ($exercice as $value) 
                                                 <option value="{{$value->id_exercice}}">{{$value->nom_exercice}}</option>
                                                @empty
                                                        
                                                 @endforelse 
                                            </select> 
                                            
                                        </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group ">
                                                <label for="cc-exp" class="control-label mb-1">jour</label>
                                                
                                                <select name="jour"  class="form-control cc-exp">
                                                    <option value="{{$programme->id_jour}}" selected>{{$programme->jour}}</option>
                                                @forelse ($jour as $value) 
                                                 <option value="{{$value->id_jour}}">{{$value->jour}}</option>
                                                
                                                @empty
                                                        
                                                @endforelse
                                            </select>
                                            </div>
                                        </div>   
                                    </div>

                                    <div class="">
                                        <button class="btn btn-info au-btn--block " type="submit"> Ajouter </button>

                                    </div>
                                 </div>
                                
                                </form>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <!-- fin -->                        
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
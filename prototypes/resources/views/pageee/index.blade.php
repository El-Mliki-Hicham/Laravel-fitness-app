hello<!-- create.blade.php -->

@extends('layouts/layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter un exercice
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('sport.store') }}">
.         @csrf
          <div class="form-group">
              <label for="nom d'exercice">nom d'exercice </label>
              <input type="text" class="form-control" name="exercice"/>
          </div>

          <div class="form-group">
              <label for="numero d'xercice">numero d'exercice</label>
              <input type="text" class="form-control" name="numero"/>
          </div>
          
          <div class="form-group">
              <label for="Description">Description</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="Description">photo</label>
              <input type="text" class="form-control" name="photo"/>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>


<div class="card-header">
    Ajouter categorie
  </div>

<form method="post" action="{{ route('categorie.store') }}">
    .         @csrf
              <div class="form-group">
                  <label for="nom d'exercice">categorie </label>
                  <input type="text" class="form-control" name="categorie"/>
              </div>
    
            
              <div class="form-group">
                  <label for="Description">description</label>
                  <input type="text" class="form-control" name="description"/>
              </div>
              <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
            
            
            
            
            <div class="card-header">
              Ajouter jours
            </div>
            
            <form method="post" action="{{ route('jours.store') }}">
@csrf
           
            
           
             <div class="form-group">
              <label for="cc-exp" class="control-label mb-1">Exercices</label>
              <select name="jour" id="select" class="form-control">
               
              <option selected>Select exercice</option>
              <option > Dimanche  </option>
              <option > Lundi </option>
              <option > Mardi </option>
              <option > Mercredi </option>
              <option > Jeudi </option>
              <option > Vendredi </option>
              <option > Samedi </option>
              
              </option>
          </select>
              <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
          </div>


{{-- categories --}}

             <div class="form-group">
              <label for="cc-exp" class="control-label mb-1">categories</label>
              <select name="categorie" id="select" class="form-control">
               
              <option selected>Select exercice</option>
              @forelse ($categories as $value)
              <option value="{{$value->id}}">{{$value->name_categorie}} </option>
              @empty
                  
              @endforelse
             
              </option>
          </select>
              <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
          </div>

            {{-- exercice --}}

            <div class="form-group">
              <label for="cc-exp" class="control-label mb-1">Exercices</label>
              <select name="exercice" id="select" class="form-control">
               
              <option selected>Select exercice</option>
              @forelse ($exercices as $value)
              <option value="{{$value->id}}">{{$value->exercice}} </option>
              @empty
                  
              @endforelse
             
              </option>
          </select>
              <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
          </div>

              <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
          
@endsection
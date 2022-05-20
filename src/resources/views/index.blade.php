hello<!-- create.blade.php -->

@extends('layout')

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
@endsection
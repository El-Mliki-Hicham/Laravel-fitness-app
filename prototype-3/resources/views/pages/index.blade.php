
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

@forelse ($categories as $value)
<div class="card text-center">
         
     
    <div class="card-header">
      
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$value->nom_categorie}}</h5>
    
      <a href="/modifier/{{$value->id}}"  class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer text-muted">
     
    </div>
</div>
@empty
     
 @endforelse
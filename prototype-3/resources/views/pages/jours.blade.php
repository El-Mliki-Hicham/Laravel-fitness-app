
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

@forelse ($jours as $value)

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$value->jour}}</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="/exercices/{{$value->id_jour}}/{{$value->categorie_id}}" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  @empty
     
 @endforelse
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<a href="{{route('page.create')}}"><button>ajouter un image</button></a>





<div class="card" style="width: 18rem;">
    @forelse ($image as $item)
    <img src="image/{{$item->image}}" class="card-img-top" style="width: 200px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <form method="post" action="{{ route('page.destroy', $item->id	) }}" >
        <!-- CSRF token -->
        @csrf
        <!-- <input type="hidden" name="_method" value="DELETE"> -->
        @method('DELETE')
        <input type="submit" value="x Supprimer" >
    </form>
    </div>
    @empty
    @endforelse
      
  </div>

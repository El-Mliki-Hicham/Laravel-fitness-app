<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<a href="{{route('pageeee.create')}}"><button>ajouter un image</button></a>





@forelse ($image as $item)
<div class="card" style="width: 18rem;">
    <img src="image/{{$item->image}}" class="card-img-top" style="width: 200px" alt="...">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <a href="{{ route('pageeee.edit', $item->id) }}"><button>mofidier</button></p></a>
      <form method="post" action="{{ route('pageeee.destroy', $item->id) }}" >
        <!-- CSRF token -->
        @csrf
        <!-- <input type="hidden" name="_method" value="DELETE"> -->
        @method('DELETE')
        <input type="submit" value="x Supprimer" >
    </form>
    </div>
    
</div>
@empty
@endforelse

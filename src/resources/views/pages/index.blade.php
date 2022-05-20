

@forelse ($users as $item)

<h1>{{$item->exercice}}</h1>
<h1>{{$item->name_categorie}}</h1>
<h1>{{$item->jour}}</h1>
@empty
    
@endforelse


@extends('pages.principal')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tableau des categorie</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">

			
			<table id="datatablesSimple">
			<thead>
					<tr>
						<th>PHOTO</th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
				
                <tbody>
					@forelse ($categorie as $value)
					<tr>
                        <td style="width: 20%">
                            <div class="uImg"><img src="img/categories/{{$value->photo_categorie}}" alt=""
                                    style="width: 100px"></div>
                        </td>
                        <td>{{$value->id_categorie}}</td>
                        <td>{{$value->nom_categorie}}</td>
                        <td>{{$value->description_categorie}}</td>
                        <td style="width: 6%">

                            <a href="{{route('afficher-categorie.edit',$value->id_categorie)}}"><i
                                    class="item-action fa fa-edit" data-toggle="modal"
                                    data-target="#labelModal"></i></a>

                            <form action="{{route('afficher-categorie.destroy',$value->id_categorie)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button> <i class="item-action fa fa-trash" data-toggle="modal"
                                        data-target="#deleteItemModal"></i></button>

                            </form>

                        </td>
                    </tr>

					@empty
	
					@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

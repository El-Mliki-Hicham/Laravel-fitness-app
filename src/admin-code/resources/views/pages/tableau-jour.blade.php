@extends('pages.principal')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tableau des categorie</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('afficher-jour.create')}}">ajouter un jour</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           
        </div>
        <div class="card-body">


            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>JOUR</th>
                       
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($jour as $value)
                    <tr>
                       
                        <td>{{$value->id_jour}}</td>
                        <td>{{$value->jour}}</td>

                        <td style="width: 6%">

                           
                            <form action="{{route('afficher-jour.destroy',$value->id_jour)}}" method="POST">
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

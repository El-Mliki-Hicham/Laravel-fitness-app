
	@extends('pages.principal')		
      @section('content')
          
    
      <div class="container-fluid px-4">
					<h1 class="mt-4">Tableau des exercices</h1>
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
										<th>NOM EXERCICE</th>
										<th>NUMERO</th>
										<th>DESCRIPTION</th>
										<th>ACTION</th>
									</tr>
								</thead>
	
								<tbody>
									@forelse ($exercice as $value)
									<tr>
										<td style="width: 20%">
											<div class="uImg"><img src="img/exercices/{{$value->photo_exercice}}" alt=""
													style="width: 100px"></div>
										</td>
										<td>{{$value->id_exercice}}</td>
										<td>{{$value->nom_exercice}}</td>
										<td>{{$value->numero}}</td>
										<td>{{$value->description_exercice}}</td>
										<td style="width: 6%">
				
											<a href="{{route('afficher-exercice.edit',$value->id_exercice)}}"><i
													class="item-action fa fa-edit" data-toggle="modal"
													data-target="#labelModal"></i></a>
				
											<form action="{{route('afficher-exercice.destroy',$value->id_exercice)}}" method="POST">
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
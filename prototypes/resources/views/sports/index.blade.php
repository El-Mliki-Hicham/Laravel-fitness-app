@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")

	<h1>Tous les articles</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('sports.create') }}" title="Créer un article" >Créer un nouveau post</a>
	</p>

	<!-- Le tableau pour lister les articles/posts -->
	<table border="1" >
		<thead>
			<tr>
				<th>#</th>
				<th>Exercices</th>
				<th>numero</th>
				
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($exercices as $value)
			<tr>
				
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					{{$value->id}}
				</td>
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					{{$value->exercice}}
				</td>
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					{{$value->numero}}
				</td>
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					<a href="{{ route('sport.edit',$value->id) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un Post : "posts.destroy" -->
					<form method="POST" action="{{ route('sport.destroy', $value->id) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
					
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

<br>
<br>
<br>
<br>
<br>




</div>


{{-- categories --}}
	<table border="1" >
		<thead>
			<tr>
				<th>#</th>
				<th>name_categorie</th>
				
				
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($categories as $value)
			<tr>
				
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					{{$value->id}}
				</td>
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					{{$value->name_categorie}}
				</td>
				
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					<a href="{{ route('sport.edit',$value->id) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un Post : "posts.destroy" -->
					<form method="POST" action="{{ route('sport.destroy', $value->id) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
					
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div>
{{-- joure --}}
	<table border="1" >
		<thead>
			<tr>
				<th>#</th>
				<th>jour</th>
				<th>name_categorie</th>
				<th>exercices</th>
				
				
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($jours as $value)
			<tr>
				
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					{{$value->id}}
				</td>
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					{{$value->jour}}
				</td>
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					{{$value->name_categorie}}
				</td>
				
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					{{$value->exercice}}
				</td>
				
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					<a href="{{ route('sport.edit',$value->id) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un Post : "posts.destroy" -->
					<form method="POST" action="{{ route('sport.destroy', $value->id) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
					
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div>
@endsection
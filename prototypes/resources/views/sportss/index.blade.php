@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")

	<h1>Tous les articles</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('sportss.create') }}" title="Créer un article" >Créer un nouveau post</a>
	</p>

	<!-- Le tableau pour lister les articles/posts -->
	<table border="1" >
		<thead>
			<tr>
				<th>Titre</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
		
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="" title="Lire l'article" ></a>
				</td>
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					<a href="" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un Post : "posts.destroy" -->
					
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
					
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
		
		</tbody>
	</table>
	
@endsection
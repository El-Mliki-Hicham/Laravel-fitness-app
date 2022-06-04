
	@extends('pages.principal')		
      @section('content')
          
    
      <div class="container-fluid px-4">
					<h1 class="mt-4">Tableau des endroit</h1>
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
										<th>TEMPERATURE</th>
										<th>CATEGORIE</th>
										<th>DESCRIPTION</th>
										<th>ACTION</th>
									</tr>
								</thead>
	
								<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>61</td>
										<td>2011/04/25</td>
										<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt esse modi delectus quis? Repudiandae, cumque, ad incidunt commodi quidem </td>
										<td>$320,800</td>
									</tr>
								   
								</tbody>
							</table>
						</div>
					</div>
				</div>
        @endsection
@extends('ajout_categorie')

@section('content2')

	<div class="panel panel-default">
		<div class="panel-headind">
			
            
			<div class="row">
                <div class="input-group mb-3">
                  <div class="col-3">
			      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
			        <option selected>Actions groupées</option>
			        <option value="1">One</option>
			        <option value="2">Two</option>
			        <option value="3">Three</option>
			      </select>
			      </div>
			      <div class="col-9">
                     <a href="#" class="btn btn-outline-secondary"  role="button" aria-pressed="true">Appliquer</a>
                 </div>
                </div>
               
            </div>
        </div>
			
		</div>
		<div class="panel-body">
			<div class="table-responsive">
			<table class="table table-striped table-white">
			  <thead>
			    <tr>
			      <th>
			      	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-app" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 2H5a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
					</svg>
			      </th>
			      <th scope="col">Image</th>
			      <th scope="col" style="color: #4d79ff;">Nom</th>
			      <th scope="col" style="color: #4d79ff;">Description</th>
			      <th scope="col" style="color: #4d79ff;">Slug</th>
			      <th scope="col" style="color: #4d79ff;">Total</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($categories as $row)

			  	<tr>
			  		<td>
			  			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-app" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 2H5a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
						</svg>
			  		</td>
			  		<td>{{$row['Image']}}</td>
			  		<td style="color: #4d79ff; font-weight: 600">{{$row['Nom']}}</td>
			  		<td>{{$row['Description']}}</td>
			  		<td>{{$row['Slug']}}</td>
			  		<td></td>
			 
			  	</tr>

			  	@endforeach
			   
			  </tbody>
			</table>
			</div>
		</div>
	</div>

@endsection
@extends('ajout_categorie')

@section('content')

	<div class="row">
		<div class="col">
		<br/>
		<h3 align="center">Ajouter catégorie</h3>
		@if(count($errors) > 0)
			 <div class="alert alert-danger">
			 	<ul>
			 		@foreach($errors->all() as $error)
			 		<li>{{$error}}</li> <!--control validation error on this page-->
			 		@endforeach
			 	</ul>
			 </div>
		@endif
		@if(\Session::has('success')) 
		<!--check if that method in the controller returns success-->
		<div class="alert alert-success">
			<p>{{ \Session::get('success') }}</p>
		</div>

		@endif

		<form method="post" action="{{url('categories_de_produits')}}">
			{{csrf_field()}}

			  <div class="form-group green-border-focus">
			    <label for="exampleFormControlFile1">Image</label>
			    <input type="file" class="form-control-file" id="Image" name="Image">
			    <small id="imagelHelp" class="form-text text-muted">Taille max: 64KiB.</small>
	 		  </div>

	 		  <div class="form-group green-border-focus">
			    <label for="formGroupExampleInput">Nom</label>
			    <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Nom de catégorie">
			    <small id="nomHelp" class="form-text text-muted">Ce nom est utilisé un peu partout sur votre site.</small>
 			  </div>

 			  <div class="form-group green-border-focus">
				 <label for="exampleFormControlTextarea5">Description</label>
				 <textarea class="form-control" id="Description" name="Description" rows="3" ></textarea>
			  </div>

 			  <div class="form-group green-border-focus">
			    <label for="formGroupExampleInput">Slug</label>
			    <input type="text" class="form-control" id="Slug" name="Slug" placeholder="Slug de catégorie">
			    <small id="SlugHelp" class="form-text text-muted">Le slug est la version normalisée du nom. il ne contient généralement que des lettres minusculesnnon accentuées, des chiffres et des traits d'union.</small>
 			  </div>

			  <div class="form-group green-border-focus">
				 <label class="my-1 mr-2" for="Categorie_parente">Catégorie parente</label>
				 <select class="custom-select my-1 mr-sm-2" name="Categorie_parente" id="Categorie_parente">
				    <option selected>Aucun...</option>
				    <option value="1">One</option>
				    <option value="2">Two</option>
				    <option value="3">Three</option>
				 </select>
			  </div>

			  

			  <button type="submit" class="btn btn-primary">Ajouter une catégorie</button>
			

		</form>
		</div>
	</div>

@endsection
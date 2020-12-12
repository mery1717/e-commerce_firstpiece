<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
      
        <title>Catégories</title>

        <!-- Fonts -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


       <link href="{{ asset('css/style.css') }}" rel="stylesheet">
       <style type="text/css">
           .leftside, .rightside{

    height: 50vh;
    width: 100%;
}

body {
  background-color: #e6e6e6;
}


@media screen and (min-width: 768px)
{
    .leftside, .rightside {

        height: 75vh;
    }
}

.btn {
  background-color: #e6e6e6;
  border-color: #3399ff;
  color: #3399ff;
}
h4{
    margin-left:20px;
}
table{
    background-color: white;
}


       </style>
      
    </head>

    <body>    

        <div class="row grow w-100">
            <div class="col-12 py-3">
                <h4>Catégories de produits</h4>
            </div>
            <div class="col-8  py-3">
                
            </div>
            <div class="main col-4  h-100 py-3">

                <div class="input-group mb-3">
                      <input type="text" class="form-control" >
                      <div class="input-group-append">
                      <a href="#" class="btn btn-outline-secondary"  role="button" aria-pressed="true">Recherche dans les catégories</a>
                      </div>
                </div>
               
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-md-4 no-gutters">

                <div class="leftside d-flex justify-content-center align-item-center">
                    
                    <div class="container">
                       <div class="row">
        <div class="col">
        <br/>
        
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

        <form method="post" action="{{url('categories_de_produits')}}" enctype="multipart/form-data">
            {{csrf_field()}}

              <div>
                  <p>
                      Les Catégories de produit pour votre boutique peuvent être gérées ici. Pour changer l'order des catégoriés sur le site, vous pouver les glisser/déposer pour les ordonner. Pour voir plus de catégoriés listées, cliquer le lien "option de l'écran" en haut de la page. 
                  </p>
                  <h5 align="leftside">Ajouter catégorie</h5>
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
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="Image" name="Image">
                <small id="imagelHelp" class="form-text text-muted">Taille max: 64KiB.</small>
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

              

              <button type="submit" class="btn btn-lg btn-primary">Ajouter une catégorie</button>
            

        </form>
        </div>
    </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-md-8 no-gutters">
                
                <div class="rightside d-flex justify-content-center align-item-center">
                    
                    <div class="container">
                        @yield('content2')
                    </div>

                </div>
                
            </div>
 


        </div>






    </body>
</html>

<!--
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
      
        <title>Produits</title>
      -->

        <!-- Fonts -->
        <!--
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<!--
       <link rel="stylesheet" type="text/css" href="style.css">
     -->
     <!--
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




       </style>
      
    </head>

    <body>    


        <div class="row" style="margin-right: 25px; margin-top: 25px;">
            <div class="col-md-9">

                <div class="leftside d-flex justify-content-center align-item-center">
                    
                    <div class="container">
                       
                      <form method="post" action="{{url('categories_de_produits')}}" enctype="multipart/form-data">
            {{csrf_field()}}
                        
                        <div class="form-group green-border-focus">
                          <input type="text" class="form-control" id="NomProduit" name="NomProduit" placeholder="Nom du produit">
                        </div>
                      <br><br><br>
                      

                      <div class="form-row">
                        <div class="col">
                          
                          
                      <a href="#" class="btn btn-outline-secondary"  role="button" aria-pressed="true">
                        <span>
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                          <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                          <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                        </svg>
                        </span>Ajouter un média</a>

                        </div>
                        <div class="col">
                          
                          <a href="#" class="btn btn-outline-secondary"  role="button" aria-pressed="true"> 
                          <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                                <circle cx="3.5" cy="5.5" r=".5"/>
                                <circle cx="3.5" cy="8" r=".5"/>
                                <circle cx="3.5" cy="10.5" r=".5"/>
                              </svg>
                          </span>Ajouter un formulaire de contact</a>

                        </div>
                      
                      </div>

                      <div class="form-row" style="display: block;
  width: 100px; height: 38px; padding: 5px; border: 1px solid #e6e6e6;    
  background-color: #ffffff; font-weight: 600">
                      <div class="col">

                        <div class="form-group green-border-focus">
                           <label class="my-1 mr-2" for="Categorie_parente">Données produit--</label>
                           <select class="custom-select my-1 mr-sm-2" name="Categorie_parente" id="Categorie_parente">
                              <option selected value="1">Produit simple</option>
                              <option value="2">..</option>
                              <option value="3">..</option>
                              <option value="4">..</option>
                           </select>
                        </div>
                      </div>
                      <div class="col">

                        <div class="form-check form-check-inline">
                          <label class="form-check-label" for="inlineCheckbox1">Virtual:</label>
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        </div>

                        <div class="form-check form-check-inline">
                          <label class="form-check-label" for="inlineCheckbox2">Téléchargeable:</label>
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        </div>

                      </div>


                      </div>






                      </form>

                    </div>
                    
                </div>
                
            </div>
            <div class="col-md-3" style=" ">
                
                <div class="rightside d-flex justify-content-center align-item-center">
                    
                    <div class="container">
                        @yield('content2')
                    </div>

                </div>
                
            </div>
 


        </div>






    </body>
</html>
-->
<!DOCTYPE html>
<html>
  
  <head>
        
        <meta charset="utf-8">
      
        <title>Produits</title>
        <!-- Fonts -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

       <link rel="stylesheet" type="text/css" href="../../css/ajoutproduit.css">

       <style type="text/css">
         * {
              box-sizing: border-box;
            }
            body {
              margin: 0px;
              padding: 10px;
              text-align: center;
              background-color: #e6e6e6;
            }

            header , footer {
              padding: 20px;
              backgroung: dodgerblue;
              color: black;
              border-radius: 20px;
            }
            section {
              width: 65%;
              float: left;
              height: 400px;
              background: grey;
            }
            .right {
              width: 30%;
              float: left;
              height: 400px;
              background: grey;
              border-left: 2px ;
              border-radius: 10px;
              margin-left: 5%; 
            }
            .main * {
              border-radius: 10px;
            }
            .main {
              margin: 10px 0px;

            }
            .main::after {
              content: "";
              clear: both;
              display: table;
            }

       </style>

  </head>
  <body>
       
        <div class="main">
          <section>
            <h1>this is section</h1>
          </section>
          <aside class="right">
            <h1>this is right side bar</h1>
           
            
          </aside>
        </div>
       
  </body>

</html>
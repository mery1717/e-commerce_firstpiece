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
              text-align: left;
              background-color: #e6e6e6;
            }

            .section {
              width: 68%;
              float: left;
              height: auto;
              background: #ffffff;
              margin-left: 1%;
              margin-right: 1%;
              border: 2px solid #e6e6e6;
            }
            .right {
              width: 28%;
              float: left;
              height: auto;
              background: #ffffff;
              border: 2px solid #e6e6e6;
              margin-right: 1%; 
              margin-left: 1%; 
            }
            .main * {
              /*border-radius: 10px;*/
              /*padding-left: 1%;*/
            }
            .main {
              margin: 10px 0px;

            }
            .main::after {
              content: "";
              clear: both;
              display: table;
            }
            .header{
            	border-bottom: 2px solid #e6e6e6;
            	margin-left: 0px;
            	padding-left: 1%;
            }
            .bodyRight {
            /* border: 2px solid #e6e6e6;*/
             width: 85%;
             height: auto;
             float: left;
             text-align: left;
             border-bottom: 2px solid #e6e6e6;
             text-align: center;
             padding-top: 2%; 
             padding-left: 2%; 
            }
            .bodySection {
             width: auto;
             height: auto;
             float: left;
             color: #3399ff;
              
            }
            .list-group{

            }
            


       </style>

  </head>
  <body>
       
        <div class="main">
          <section class="section">

          	<div class="header">
            	<div class="form-check form-check-inline">
            		
            		<label class="form-check-label" for="inlineFormCustomSelect">Données produit</label>
            		<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
				        <option selected>Choose...</option>
				        <option value="1">One</option>
				        <option value="2">Two</option>
				        <option value="3">Three</option>
				    </select>
				  					
            	</div>
            	<div class="form-check form-check-inline">

            		<label class="form-check-label" for="inlineCheckbox1">Virtuel:</label>
				  	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
				  
				</div>
				<div class="form-check form-check-inline">

            		<label class="form-check-label" for="inlineCheckbox2">Téléchargeable:</label>
				  	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
				  
				</div>
            </div>
            <div class="body">
            	<section class="bodySection">
            		
            		<div class="list-group">
					  <a href="#" class="list-group-item list-group-item-action">Général</a>
					  <a href="#" class="list-group-item list-group-item-action">Inventaire</a>
					  <a href="#" class="list-group-item list-group-item-action">Expédition</a>
					  <a href="#" class="list-group-item list-group-item-action ">Produit liés</a>
					  <a href="#" class="list-group-item list-group-item-action ">Attributs</a>
					  <a href="#" class="list-group-item list-group-item-action ">Avancé</a>
					</div>

            	</section>
            	<aside class="bodyRight">
            		<div class="form-group row">

						    <label for="inputTarifRegulier" class="col-sm-4  col-form-label">Tarif régulier(د.م)</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="inputTarifRegulier">

					    </div>
					    <div class="form-group row">
						    <label for="inputTarifPromo" class="col-sm-2 col-form-label">Tarif régulier(د.م)</label>
						    <div class="col-sm-10">
						     <input type="inputTarifPromo" class="form-control" id="inputPassword3">
						    </div>
						</div>
					</div>
            	</aside>
            	
            </div>
            
            

          </section>
          <aside class="right">
            <h1>this is right side bar</h1>
           
            
          </aside>
        </div>
       
  </body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
      
        <title>Catégories</title>

        <!-- Fonts -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


       <link href="{{ asset('css/style.css') }}" rel="stylesheet">
       <!--
       <link href="C:\xampp\htdocs\e-commerce_firstpiece\resources\css\style.css" rel="stylesheet">
        -->
    </head>
    <body>
        

        

        <div class="row no-gutters">
            <div class="col-md-6 no-gutters">

                <div class="leftside d-flex justify-content-center align-item-center">

                    <div class="container">
                        @yield('content')
                    </div>
                    
                </div>
                
            </div>
            <div class="col-md-6 no-gutters">

                <div class="rightside d-flex justify-content-center align-item-center">
                    select categorisies 
                </div>
                
            </div>
 


        </div>






    </body>
</html>

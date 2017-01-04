<!DOCTYPE html>
<html>
    
   <head>
      <title>404</title>
      <link href = "https://fonts.googleapis.com/css?family=Lato:100" rel = "stylesheet" 
         type = "text/css">
      <!-- Fonts -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

      <!-- Styles -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   
      <style>
         html, body {
            height: 100%;
         }
         body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
         }
         .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
         }
         .content {
            text-align: center;
            display: inline-block;
         }
         .title {
            font-size: 72px;
            margin-bottom: 0px;
         }

         p{
            font-size: 50px;
         }

         .content-btn{
            text-align: center;
            display: inline-block;
            max-width: 100px;
         }
      </style>
		
   </head>
   <body>
	
      <div class = "container">
         <div class = "content">
            <div class = "title">404 Error : Page not exists</div>
         </div>
         <br>
         <div content>
            <a type="button" class="btn btn-default btn-lg" href="{{ url('/') }}"><i class="fa fa-btn fa-angle-left fa-fw"></i>&nbsp Back to Home</a>
         </div>
            
      </div>
		
   </body>
</html>
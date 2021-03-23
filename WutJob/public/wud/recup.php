<?php
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="La technologie en global">
    <meta name="author" content="Samba Ndiaye">

    

    <title id="WEBSIT_NAME">
   ok

  </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/customer.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/database/libs/font-awesome-4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <link rel="stylesheet" type="text/css" href="libs/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" type="text/css" href="libs/alertifyjs/css/themes/bootstrap.min.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <link href="favicon.ico" rel="icon" type="image/jpg" style="border-radius: 0.5em;" />
  </head>

 <Body>

    <div id="main-content">

        <div class="container">
          <div class="row">
         
            <div class="col-sm-7 col-sm-offset-2">
                <div class="panel panel-default">
                 <div class="panel-heading">
                  <h3 style="text-align:center;" class="panel-title"><b>Profil de <?php echo $_POST["nom"]; ?></b></h3>
              
             </div>
            <div class="panel-body">
              
                  
                  <img class='imghov' style="border-radius: 100%;" src="images/<?php echo $_POST["avatar"]; ?>"  width='140' height='150'>
  
                  <hr>
                  
      
                <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group">
                     <b>Nom:</b>     <?php echo $_POST["nom"]; ?></br></br>
                     <hr>
                     <b>Age:</b>   <?php echo $_POST["age"]; ?></br></br>
                     <hr>
                     <b>Adresse: </b>    <?php echo $_POST["adresse"]; ?></br></br>
                     <hr>
                     <hr>
                     <b>Sex: </b>    <?php echo $_POST["sex"]; ?></br></br>
                     <hr>
                     <hr>
                     <b>Numéro: </b>    <?php echo $_POST["numero"]; ?></br></br>
                     <hr>
                     <hr>
                     <b>Email: </b>    <?php echo $_POST["email"]; ?></br></br>
                     <hr>
                   
                 </div>
                 
               </div>
               
               <!--vile-->
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                   <b>Spécialit:</b>   <?php echo $_POST["specialite"]; ?></a></br></br>
                   <hr>
                   <b>Niveau:  </b>       <?php echo $_POST["Niveau"]; ?></a></br></br>
                   <hr>
                   <b>Expérience: </b>    <?php echo $_POST["experience"]; ?></br></br>
  
                  
  
                   
  
                  </div>
                  
                </div>
                
                </div>
              </div>
            </div>
              
            </div>
        
  
          </div>
        
       </div><!-- /.container -->
  
         
     </div>


 </Body>
</html>


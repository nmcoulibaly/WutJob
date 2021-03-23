<?php
/* Smarty version 3.1.30, created on 2021-03-23 22:00:46
  from "C:\xampp2\htdocs\php\WutJob\WutJob\src\view\Cv\cv.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_605a56fecd4b87_38968073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9018b2c3b176f5eb40c0dfebadb1a26471f6853' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\php\\WutJob\\WutJob\\src\\view\\Cv\\cv.html',
      1 => 1616533217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605a56fecd4b87_38968073 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Day - HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/Day/css/bootstrap.min.css" rel="stylesheet">
  <link rel="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/Day/stylesheet" href="css/font-awesome.min.css">
  <link rel="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/Day/stylesheet" href="css/animate.css">
  <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/Day/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/Day/css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Day
    Theme URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <div class="navbar-brand">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
welcome/index"><h1>WutJob</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
welcome/index">Accueil</a></li>
              <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
welcome/offres">Offres</a></li>
              <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
welcome/presentation">Presentation</a></li>
              <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
welcome/cv" class="active">CV</a></li>
              <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
welcome/Login">Se Connecter</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
    <div class="container">
      <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

        <div  class="container">
          <p style="text-align: center; color: #004d99 !important;">Créer mon CV  </h1><br></p>
          <hr>
        <div class="col-sm-11 col-sm-offset-0">
                      
                        <div  style="border: solid 1px #004d99;"  class="panel panel-default">
                        <div  style="border: solid 1px #004d99 ;"  class="panel-heading ">
                         <h5 style="text-align: center;"><a style="float: left; color: white; font-size: 15px;" href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</a> Ajouter un Cv ici <i class="fa fa-plus-circle" aria-hidden="true"></i><br></h5>
                       </div>
                        <hr>
                         <div id="main-content">
        
              <div class="container">
        
                <div class="row">
               
                  <div class="col-sm-7 col-sm-offset-2">
                      <div class="panel panel-default">
                       <div class="panel-heading">
                        <h3 style="text-align:center;" class="panel-title"><b>Formulaire</b></h3>
                    
                      </div>
                    <div class="panel-body">
              
                        <!--nom prenom-->
                   <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Cv/insert">
                     <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label" for="nom" >Nom Prénom<span class="text-danger">*</span></label>
                          <input type="text" placeholder="Nom Prenom" name="nom" id="nom" class="form-control" value="" required="required">
                        </div>
                        
                      </div>
                        <!--age-->
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label" for="age" >Age<span class="text-danger">*</span></label>
                          <input type="text" placeholder="Age" name="age" id="age" class="form-control" value="" required="required">
                        </div>
                        
                      </div>
        
        
                          <!--adresse-->
                     
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label" for="adresse" >Adresse<span class="text-danger">*</span></label>
                          <input type="text" placeholder="Adresse" name="adresse" id="adresse" value="" class="form-control" required="required">
                        </div>
                        
                      </div>
        
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label" for="specialite" >Specialite<span class="text-danger">*</span></label>
                          <input type="text" placeholder="Specialite" name="specialite" id="specialite" value="" class="form-control" required="required">
                        </div>
                        
                      </div>
        
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label" for="niveau" >Niveau d’etude<span class="text-danger">*</span></label>
                          <input type="text" placeholder="Niveau d’etude" name="niveau" id="niveau" value="" class="form-control" required="required">
                        </div>
                        
                      </div>
        
                      <div class="col-sm-10">
                        <div class="form-group">
                          <label class="control-label" for="experience" >Experience professionnelle<span class="text-danger">*</span></label>
                          <input type="text" placeholder="Experience professionnelle" name="experience" id="experience" value="" class="form-control" required="required">
                        </div>
                        
                      </div>
        
        
                      <!--sex-->
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label" for="sex" >Sex<span class="text-danger">*</span></label>
                          <select name="sex" id="sex" class="form-control" required="required">
                            <option>
                              Homme
                            </option>
                            <option>
                              Femme
                            </option>
                          </select>
                        </div>
                      </div>
        
                      <!--Numero-->
                     <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label" for="numero" >Numéro<span class="text-danger">*</span></label>
                            <input type="text" placeholder="Numero" name="numero" id="numero" value="" class="form-control"  required="required">
                          </div>
                          
                        </div>
                       
                     </div>
        
                     <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label" for="email" >Email<span class="text-danger">*</span></label>
                          <input type="email"  name="email" id="email" class="form-control" value="" placeholder="email">
                        </div>
                        
                      </div>
                      
                    </div>
        
                    
                    <div class="row">
                       <div class="col-md-12">
                         <div class="form-group">
                           <label for="avatar">Photo</label>
                           <input type="file" name="avatar" id="avatar" required="required">
                         </div>
                       </div>
                     </div>
          
              
                       
                       
                     </div>
                
                     
                     <input style="background-color: #004d99; border : #004d99;" type="submit" class="btn btn-success" value="valider" name="valider">
                      <input style="background-color: #004d99; border : #004d99; float: right;" type="reset" class="btn btn-primary" value="actualiser">
                   </form> 
        
                  </div>
                  
                </div>
                    
                  </div>
              
        
                </div>
              
             </div><!-- /.container -->
        
               
           </div>
                 </div>
                  </div>
        
                </div>


      </div>
        </div>
     
  </header>
  <!--/header-->
 

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/Day/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/Day/js/jquery-migrate.min.js"><?php echo '</script'; ?>
>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/Day/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/Day/js/wow.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    wow = new WOW({}).init();
  <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}

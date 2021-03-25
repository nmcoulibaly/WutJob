<?php
/* Smarty version 3.1.30, created on 2021-03-25 18:58:35
  from "C:\xampp\htdocs\WutJob\WutJob\src\view\welcome\Inscription.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_605ccf4b2f6671_38336008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dcb3c663ded35ef1a0e4919749939cf14628f80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WutJob\\WutJob\\src\\view\\welcome\\Inscription.html',
      1 => 1616694849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605ccf4b2f6671_38336008 (Smarty_Internal_Template $_smarty_tpl) {
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
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/Day/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/Day/css/animate.css">
  <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/Day/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/Day/css/style.css" rel="stylesheet" />

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
welcome/index">
              <h1>WutJob</h1>
            </a>
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
cv/cv">CV</a></li>
              <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
welcome/Login" class="active">Se Connecter</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->
    <div id="login" >
        <h3 class="text-center text-white pt-5">Connexion</h3>
        <div class="container" style="margin-left:400px;">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <div class="form-group">
                                <label for="username" class="text-info">Login</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mot de passe</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Connecter">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Créer un compte</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/Day/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/Day/js/jquery-migrate.min.js"><?php echo '</script'; ?>
>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/Day/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/Day/js/wow.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    wow = new WOW({}).init();
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="contactform/contactform.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}

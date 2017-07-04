<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $meta["title"] ?></title>
        <meta name="description" content="<?php echo $meta["description"] ?>">
        <meta name="keywords" content="<?php echo $meta["keywords"] ?>">
        <meta name="robots" content="<?php echo $meta["robots"] ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base_url()."/webroot/css/bootstrap.min.css" ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base_url()."/webroot/css/style.css" ?>">
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/jquery.js" ?>"></script>
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/bootstrap.min.js" ?>"></script>
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/js.js" ?>"></script>
       
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/jqBootstrapValidation.js" ?>"></script>     
        
    </head>
    <body>
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $app->appName ?></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li <?php if ($_GET["r"] == "home/index"){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("home/index") ?>">Home</a>
              </li>
                <?php
                session_start();
                if ((isset($_SESSION['login']))&&($_SESSION['login']== true))
                {echo ' <li><a href="admin">Admin</a></li>';}
                ?>
              <li>
                  <?php
                    if (!isset($_SESSION['login']))
                    {echo '<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>';}                     
                 ?>        
              </li> 
              
          </ul>
          </div><!--/.nav-collapse -->

        </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                    <div class="loginmodal-container">
			<h1>Login</h1><br>
                            <div align="center">
                                <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
                            </div>
                            <div >
                                <div id="icon-login" class="glyphicon glyphicon-chevron-right"></div>
                                <span >Ingrese su email y password.</span>
                            </div>
                        
                        <br>
                        <form  action="<?php echo ROUTER::create_action_url("home/login");?>" method="POST" enctype="multipart/form-data">
				<div class="control-group">
                                    <label class="control-label">Email </label>
                                    <div class="controls">
                                      <input type="email" name="email" data-validation-email-message="No es un formato email "/>
                                    
                                      <p class="help-block"></p>
                                     </div>
                                     
                                </div>
                                   
                                <div class="control-group">
                                    <label class="control-label">Password</label>
                                    <div class="controls">
                                        <input type="password" name="password" required data-validation-required-message="Campo requerido"/>
                                      <p class="help-block"></p>
                                    </div>
                                </div>
                               
				<!--input type="submit" name="login" class="login loginmodal-submit" value="Login"-->
                                <div class="modal-footer">
                                    <input type="hidden" name="login"/>
                                     <button type="submit"  class="btn btn-primary">Login</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                 </div>
                          </form>				
                    </div>
            </div>
    </div>
        <div class="container">
            <?php echo HTML::br(4) ?>
        <?php include $content; ?>
        </div>
    </body>
</html>
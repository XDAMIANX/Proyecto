<!DOCTYPE HTML>
<html>
     <head>
        <meta charset="UTF-8">
        <title><?php echo $meta["title"] ?></title>
        <meta name="description" content="<?php echo $meta["description"] ?>">
        <meta name="keywords" content="<?php echo $meta["keywords"] ?>">
        <meta name="robots" content="<?php echo $meta["robots"] ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base_url()."/webroot/css/bootstrap.min.css" ?>">
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/jquery.js" ?>"></script>
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/bootstrap.min.js" ?>"></script>
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/js.js" ?>"></script>
         <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/jspdf.debug.js" ?>"></script>
        
    </head>
    <body>
        <?php echo HTML::br(3);?>
        
              <div class="col-md-2">
                <div class="navbar navbar-default navbar-fixed-left" role="navigation">
              
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>

                    </div>
                     <div class="collapse navbar-collapse">
                        <ul class="nav nav-pills nav-stacked">
                            <li <?php if ($_GET["r"] == "home/index"){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("home/index") ?>">Home</a></li>
                           
                            <li <?php if ($_GET["r"] == "admin/admin"){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("admin/admin") ?>">Admin</a></li>
                            
                            <li <?php if (($_GET["r"] == "usuario/usuario")||($_GET["r"] == "usuario/usuarioEditar")){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("usuario/usuario") ?>">Usuarios</a></li>
                            <li <?php if ($_GET["r"] == "producto/producto"){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("producto/producto") ?>">Productos</a></li>
                            <li <?php if ($_GET["r"] == "categoria/categoria"){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("categoria/categoria") ?>">categorias</a></li>
                            <li>
                                <form action="<?php echo ROUTER::create_action_url("home/login");?>" method="POST" >
                                     <input type="hidden" name='cerrar_sesion'>
                                     <input type="submit" class="btn btn-success " value="Cerrar sesion">

                                 </form>
                            </li>
                        </ul>    
                     </div>   
                </div>
             </div>
           
        <div class="container" >            
            <?php include $content; ?>
        </div>  
        <?php echo HTML::br(15);?>
    </body>
    <footer>
         <div class="row">
                <div class="col-xs-12">
                    <hr />
                    <footer class="text-center well">
                        <p>Proyecto Final <a href="">Umss</a></p>
                    </footer>                
                </div>    
            </div>
    </footer>
</html>



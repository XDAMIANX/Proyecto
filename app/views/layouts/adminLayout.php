<!DOCTYPE HTML>
<html>
     <head>
        <meta charset="UTF-8">
        <title><?php echo $meta["title"] ?></title>
        <meta name="description" content="<?php echo $meta["description"] ?>">
        <meta name="keywords" content="<?php echo $meta["keywords"] ?>">
        <meta name="robots" content="<?php echo $meta["robots"] ?>">
       <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/js.js" ?>"></script>
        
        <!-- Bootstrap Styles-->
        <link rel="stylesheet" type='text/css' href="<?php echo URL::base_url()."/webroot/css/bootstrap.css" ?>"  />
        <!-- FontAwesome Styles-->
        <link rel="stylesheet" type='text/css' href="<?php echo URL::base_url()."/webroot/css/font-awesome.css" ?>"  />
        <!-- Morris Chart Styles-->
        <link rel="stylesheet" type='text/css' href="<?php echo URL::base_url()."/webroot/js/morris/morris-0.4.3.min.css" ?>" />
        <!-- Custom Styles-->
        <link rel="stylesheet" type='text/css' href="<?php echo URL::base_url()."/webroot/css/custom-styles.css" ?>"  />
        <!-- Google Fonts-->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans'  />
        
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/jquery-1.10.2.js" ?>"></script>
        <!-- Bootstrap Js -->
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/bootstrap.min.js"?>"> </script>
        <!-- Metis Menu Js -->
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/jquery.metisMenu.js" ?>"></script>
        <!-- Morris Chart Js -->
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/morris/raphael-2.1.0.min.js" ?>"></script>
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/morris/morris.js"?>"></script>
        <!-- Custom Js -->
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/custom-scripts.js" ?>"></script>
        
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/jspdf.debug.js" ?>"></script>
    </head>
    <body>
       
                <div id="wrapper">
                    <nav class="navbar navbar-default top-navbar" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">Dream</a>
                        </div>

                        <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li>
                                        <a href="#">
                                            <div>
                                                <strong>John Doe</strong>
                                                <span class="pull-right text-muted">
                                                    <em>Today</em>
                                                </span>
                                            </div>
                                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <strong>John Smith</strong>
                                                <span class="pull-right text-muted">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <strong>John Smith</strong>
                                                <span class="pull-right text-muted">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="text-center" href="#">
                                            <strong>Read All Messages</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-messages -->
                            </li>
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-tasks">
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 1</strong>
                                                    <span class="pull-right text-muted">60% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                        <span class="sr-only">60% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 2</strong>
                                                    <span class="pull-right text-muted">28% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                                        <span class="sr-only">28% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 3</strong>
                                                    <span class="pull-right text-muted">60% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                        <span class="sr-only">60% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 4</strong>
                                                    <span class="pull-right text-muted">85% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                                        <span class="sr-only">85% Complete (danger)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="text-center" href="#">
                                            <strong>See All Tasks</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-tasks -->
                            </li>
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-comment fa-fw"></i> New Comment
                                                <span class="pull-right text-muted small">4 min</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                                <span class="pull-right text-muted small">12 min</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                                <span class="pull-right text-muted small">4 min</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-tasks fa-fw"></i> New Task
                                                <span class="pull-right text-muted small">4 min</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                                <span class="pull-right text-muted small">4 min</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="text-center" href="#">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-alerts -->
                            </li>
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                    <form action="<?php echo ROUTER::create_action_url("home/login");?>" method="POST" >
                                         <input type="hidden" name='cerrar_sesion'>
                                        <i class="fa fa-sign-out fa-fw"></i>  <input type="submit" class="btn btn-success " value="Cerrar sesion">

                                     </form>
                                        <!--a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a-->
                                    </li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <!-- /.dropdown -->
                        </ul>
                    </nav>
                    <!--/. NAV TOP  -->
                    <nav class="navbar-default navbar-side" role="navigation">
                        <div class="sidebar-collapse">
                            <ul class="nav" id="main-menu">

                               
                                <li <?php if ($_GET["r"] == "home/index"){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("home/index") ?>"><i class="fa fa-dashboard"></i>Inicio</a>
                                </li>
                                
                                   
                                <li <?php if ($_GET["r"] == "admin/admin"){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("admin/admin") ?>"><i class="fa fa-desktop"></i>Cuenta</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-sitemap"></i>Registros<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li <?php if (($_GET["r"] == "usuario/usuario")||($_GET["r"] == "usuario/usuarioEditar")){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("usuario/usuario") ?>">Usuarios</a></li>
                                        <li <?php if ($_GET["r"] == "producto/producto"){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("producto/producto") ?>">Productos</a></li>
                                        <li <?php if ($_GET["r"] == "categoria/categoria"){ echo 'class="active"'; } ?>><a href="<?php echo ROUTER::create_action_url("categoria/categoria") ?>">categorias</a></li>
                                        <li>
                                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="#">Third Level Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Link</a>
                                                </li>

                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                                                      
                                <li>
                                    <a href="chart.html"><i class="fa fa-bar-chart-o"></i> Reportes</a>
                                </li>
                                <li>
                                    <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Pedidos</a>
                                </li>

                                <!--li>
                                    <a href="table.html"><i class="fa fa-table"></i> Responsive Tables</a>
                                </li>
                                <li>
                                    <a href="form.html"><i class="fa fa-edit"></i> Forms </a>
                                </li>


                                <li>
                                    <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#">Second Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Second Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="#">Third Level Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Link</a>
                                                </li>

                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                                </li!-->
                            </ul>

                        </div>

                    </nav>
                    <!-- /. NAV SIDE  -->
                    <div id="page-wrapper">
                        <div id="page-inner">

                                 <div >            
                                    <?php include $content; ?>
                                 </div>
                            
                                                 

                           
                                            
                        </div>
                        <!-- /. PAGE INNER  -->
                    </div>
                    
                     
                   
                    <!-- /. PAGE WRAPPER  -->
                </div>
                <!-- /. WRAPPER  -->
             
               
           
         
          

    </body>
    <footer>
         
    </footer>
</html>



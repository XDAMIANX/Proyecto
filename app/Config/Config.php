<?php
Class Config
{   Public $appName ="Aplication";
    Public $layout = "layouts/layout";
    Public $debug= true;//para desactivar errores poner false
   
    
    Public $db = array(
      'sqlite'=> array(
          'driver' => 'sqlite',
          'dbname' => '../app/data/test.sqlite',
      ),  
       'mysql'=>array(
           'driver' => 'mysql',
           'dbname' => 'proyecto',
           'host' => 'localhost',
           'user' => 'root',
           'password' =>'',
       ),
        'pgsql'=> array(
            'drive'=> 'pgsql',
            'dbname '=> '',
            'port' => 5432,
            'user' => '',
            'password' => '',
            
        ),
        'sqlsrv' => array(
            'driver' => 'sqlsrv',
            'host '=> '',
            'dbname' => '',
            'user' => '',
            'password' => '',
            
        ),
    );
    
    Public $mailer = array(
      
        'gmail'=> array(
            'isSMTP' =>true,
            'SMTPAuth' => true,
            'SMTPSecure' =>'ssl',
            'Host' => 'smtp.gmail.com',
            'Port' => 465,
            'Username' => 'e.g.sdemian@gmail.com',
            'Password' => '200507300',
            'From' =>'e.g.sdemian@gmail.com',
            'FromName' => 'Administrador',
        ),
    );
    Public $DirectoryIndex = "index.php?r=home/index";
    Public $ErrorPage = "index.php?r=home/error";
   
    Public $rules = array(
        "home/index" => array(
            "?r=home/index" =>"index",
            "?r=home/index&id=$1" =>"index/id/([0-9]+)",
            "?r=home/index&id=$1&title=$2" => "index/id/([0-9]+)/title/([a-zA-Z]+)",
        ),
        "home/login" => array(
            "?r=home/login" =>"login",
        ),
         "admin/admin" => array(
            "?r=admin/admin" =>"admin",
        ),
        "usuario/usuario" => array(
            "?r=usuario/usuario" =>"usuario",
            "?r=usuario/usuario&id=$1" =>"usuario/id/([0-9]+)",
            "?r=usuario/usuario&id=$1&title=$2" => "usuario/id/([0-9]+)/title/([a-zA-Z]+)",
        ),
        "producto/producto" => array(
            "?r=producto/producto" =>"producto",
            "?r=producto/producto&id=$1" =>"producto/id/([0-9]+)",
            "?r=producto/producto&id=$1&title=$2" => "producto/id/([0-9]+)/title/([a-zA-Z]+)",
        ),
         "producto/productoEditar" => array(
            "?r=producto/productoEditar" =>"productoEditar",
            "?r=producto/productoEditar&id=$1" =>"productoEditar/id/([0-9]+)",
            "?r=producto/productoEditar&id=$1&title=$2" => "productoEditar/id/([0-9]+)/title/([a-zA-Z]+)",
        ),
        "categoria/categoria" => array(
            "?r=categoria/categoria" =>"categoria",
        ),
         "usuario/usuarioEditar" => array(
            "?r=usuario/usuarioEditar" =>"usuarioEditar",
            "?r=usuario/usuarioEditar&id=$1" =>"usuarioEditar/id/([0-9]+)",
            "?r=usuario/usuarioEditar&id=$1&title=$2" => "usuarioEditar/id/([0-9]+)/title/([a-zA-Z]+)",
        ),
         "usuario/usuarioReporte" => array(
            "?r=usuario/usuarioReporte" =>"usuarioReporte",
            "?r=usuario/usuarioReporte&t=$1" =>"usuarioReporte/t/([a-zA-Z]+)",
            "?r=usuario/usuarioEditar&id=$1&title=$2" => "usuarioEditar/id/([0-9]+)/title/([a-zA-Z]+)",
        ),
        "reporte/usuarioFormato" => array(
            "?r=reporte/usuarioFormato" =>"usuarioFormato",
            "?r=reporte/usuarioFormato&t=$1" =>"usuarioFormato/t/([a-zA-Z]+)",
            "?r=reporte/usuarioFormato&t=$1&c=$2" => "usuarioFormato/t/([a-zA-Z]+)/c/",
        ),
    );
}


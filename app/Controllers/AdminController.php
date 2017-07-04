<?php

Class AdminController extends Controllers
{   
    Public $layout ="layouts/adminLayout";
    Public Function admin()
    {  
        //inicia sesion o la destruye si no hay
        session_start();
       $msgS=NULL;
        if ((isset($_SESSION['login']))&&($_SESSION['login']== true))
        {                       
           $msgS ="Bienvenido ".$_SESSION['nombre']."";
       }
       else
        {                  
            session_destroy();
            header('location:'.ROUTER::create_action_url("home/index").'');     
        } 
        //configurar informacion de la pagina
           $meta = array
         (
             'title' =>'Pagina de inicio',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
         
        return ROUTER::show_view('admin/admin',array('meta'=>$meta,'mensaje'=>$msgS));
    }
    
}


<?php

Class HomeController extends Controllers
{   
    Public $layout ="layouts/layout";
    Public Function index()
        {
            $meta = array
         (
             'title' =>'Pagina de inicio',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
         
        
       
          return ROUTER::show_view('home/index',array( 'meta' => $meta));
        
        }
    Public Function login()
    {      
             $mensaje=NULL;
             if(isset($_POST['login']))
            {   $conn= DB::connect($this->db["mysql"]);
                $model=new SELECCIONAR();
                $model->email = htmlspecialchars($_POST['email']);
                $model->password = htmlspecialchars($_POST['password']);
                $model->location =ROUTER::create_action_url("admin/admin");
                $model->login($conn);
                $mensaje=$model->mensaje;
            }
            else
            {
                 header('location:'.ROUTER::create_action_url("home/index").''); 
            }
            
            if(isset($_POST['cerrar_sesion']))
            {
                session_start();
                session_destroy();
                header('location:'.ROUTER::create_action_url("home/index").'');
            }      
            
           $meta = array
         (
             'title' =>'Pagina de inicio',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
          
        return ROUTER::show_view('home/login',array( 'meta' => $meta ,'mensaje'=>$mensaje));
    }
    
    
}

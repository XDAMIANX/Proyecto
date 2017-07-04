<?php

Class UsuarioController extends Controllers
{   
    Public $layout ="layouts/adminLayout";
    Public Function usuario()
    {    //inicia sesion o la destruye si no hay
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
             'title' =>'Usuarios',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
             $mensaje=NULL;
             $conn= DB::connect($this->db["mysql"]);
               //READ lEYENDO LOS REGISTROS
               $model = new CRUD();
               $model->select ='*';
               $model->from='usuario';
              // $model->condition ='id=3';
               $model->read($conn);
               $filas=$model->rows;
               $total=count($filas);
               $mensaje=$model->mensaje;
               $atributo=Null;
               
               //ELIMINANDO LOS REGISTROS
               $id=null;
                if(isset($_GET["id"]))
                {
                   $id=$_GET["id"];
                }
                 if(is_null($id))
                    {
                         //header('location:'.ROUTER::create_action_url("usuario/usuario").'');
                    }
                    else
                    {
                        $model = new CRUD();
                        $model->deleteFrom =" usuario ";
                        $model->condition = "id = $id";
                        $model->delete($conn);
                        header('location:'.ROUTER::create_action_url("usuario/usuario").'');
                        $mensaje=$model->mensaje;
                       
                    } 
        //PAGINACION CARGANDO TODO LOS REGISTROS Y POR BUSQUEDA
         $pagination = new PDO_Pagination($conn);
         
         if(isset($_POST["buscar"]))
         {  
            $atributo =$_POST["atributo"]; 
            
            $pagination->params= array("buscar"=>$_POST["buscar"]);

            //$pagination ->rowCount("SELECT * FROM test_paginacion");
            
            $pagination->rowCount("SELECT * FROM usuario WHERE $atributo LIKE '%".$_POST["buscar"]."%'");
            /*$pagination->config(3,5);/* muestra 3 botones y 5 registros*/
            $pagination->config(3,4);
            $pagination->btn_next_page ="Siguiente";
            $pagination->btn_back_page ="Anterior";
            $pagination->btn_last_page ="Ultimo";
            $pagination->btn_first_page ="Primera";
            
            $sql = "SELECT * FROM usuario WHERE $atributo LIKE '%".$_POST["buscar"]."%' ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows";
            //$sql = "SELECT * FROM test_paginacion ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows";
            $query = $conn->prepare($sql);
            $query->execute();
            $model = array();

            while($rows = $query ->fetch())
            {
                $model[]=$rows;
            }
         }
         else
         {
            $pagination->rowCount("SELECT * FROM usuario");
            $pagination->config(3, 4);

            $pagination->btn_next_page = "Siguiente";
            $pagination->btn_back_page = "Anterior";
            $pagination->btn_last_page = "Última";
            $pagination->btn_first_page = "Primera";

            $sql = "SELECT * FROM usuario ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows";
            $query = $conn->prepare($sql);
            $query->execute();

            $model = array();

            while($rows = $query->fetch())
            {
            $model[] = $rows;
            }
         }
         
         
        return ROUTER::show_view('usuario/usuario',array('meta'=>$meta,'filas'=>$filas,'mensaje'=>$mensaje,'total'=>$total,'id'=>$id,'model'=>$model,'pagination'=>$pagination,'atributo'=>$atributo));
    }
     Public Function usuarioEditar()
    {    //inicia sesion o la destruye si no hay
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


            ////configurar informacion de la pagina
           $meta = array
         (
             'title' =>'Registro de Usuario',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
           $id=NULL;
           $mensaje = NULL;
           $filas = NULL;
           $msg = null;
           $conn= DB::connect($this->db["mysql"]);
           
           //CREANDO REGLAS DE VALIDACION PARA LOS CAMPOS
            $rules= array(
             "nombre" => array(
                 array("required" => true,"msg" => "El campo Nombre es requerido"),
                 array("alpha" =>true, "msg"=>"El campo Name solo debe contener letras de la a-z"),
             ),
                "apellido" => array(
                 array("required" => true,"msg" => "El campo Apellido es requerido"),
                 array("alpha" =>true, "msg"=>"El campo Apellido solo debe contener letras de la a-z"),
             ),
                  "password" => array(
                 array("required" => true,"msg" => "El campo password es requerido"),
             ),
                  "correo" => array(
                array("required" => true,"msg" => "El campo password es requerido"),
                array("email" =>true, "msg"=>"El email no es un formato email "),
                
             ),
       
         );
         
         
           //VALIDANDO E INSERTANDO LOS DATOS DEL REGISTRO EN LA BD 
               
           if(isset($_REQUEST["create"]))
           {   /*$nombre = htmlspecialchars($_REQUEST["nombre"]);
               $apellido = htmlspecialchars($_REQUEST["apellido"]);
               $password = htmlspecialchars($_REQUEST["password"]);
               $correo = htmlspecialchars($_REQUEST["correo"]);*/
               $sexo = htmlspecialchars($_REQUEST["sexo"]);
               $rol = htmlspecialchars($_REQUEST["rol"]);
               $nombre = NULL;
               $apellido = NULL;
               $password = NULL;
               $correo = NULL;
               
                if(isset($_REQUEST["nombre"]))
                    {   $validate = new FORM_VALIDATE();
                        $validate -> validate($rules);
                        if ($validate->is_valid)
                            {    $nombre = htmlspecialchars($_REQUEST["nombre"]);}                  
                        else 
                            { $msg = $validate -> msg;}
                    }
                    
                if(isset($_REQUEST["apellido"]))
                    {   $validate = new FORM_VALIDATE();
                        $validate -> validate($rules);
                        if ($validate->is_valid)
                            {    $apellido = htmlspecialchars($_REQUEST["apellido"]);}                  
                        else 
                            { $msg = $validate -> msg;}
                    }
                    
                if(isset($_REQUEST["password"]))
                    {   $validate = new FORM_VALIDATE();
                        $validate -> validate($rules);
                        if ($validate->is_valid)
                            {    $password = htmlspecialchars($_REQUEST["password"]);}                  
                        else 
                            { $msg = $validate -> msg;}
                    }
                    
                if(isset($_REQUEST["correo"]))
                    {   $validate = new FORM_VALIDATE();
                        $validate -> validate($rules);
                        if ($validate->is_valid)
                            {    $correo = htmlspecialchars($_REQUEST["correo"]);}                  
                        else 
                            { $msg = $validate -> msg;}
                    }
                if(($nombre!= NULL)&&($apellido!=NULL)&&($password!=NULL)&&($correo!=NULL))
                    {   $msg = "Enhorabuena datos correctamente ingresados";
                        $model = new CRUD();
                        $model->insertInto='usuario';
                        $model->insertColumns='nombre,apellido,password,correo,sexo,rol';
                        $model->insertValues = "'$nombre','$apellido','$password','$correo','$sexo','$rol'";
                        $model->create($conn );
                        $mensaje=$model->mensaje;
                    }                          
            }
                   
       //HACIENDO LAS ACTUALIZACIONES DE REGISTRO EN LA BD      

          if(isset($_GET["id"]))
          {
              $id = htmlspecialchars($_GET["id"]);
              
              $model = new CRUD();
              $model->select ="*";
              $model->from ="usuario";
              $model->condition = "id = $id";
              $model->read($conn);
              $filas = $model->rows;
             
              
          }
          
          if(isset($_POST["update"]))
          {     
                
                $idUsuario = htmlspecialchars($_POST["idUsuario"]);
                $nombre=htmlspecialchars($_POST["nombre"]);
                $apellido= htmlspecialchars($_POST["apellido"]);
                $password= htmlspecialchars($_POST["password"]);
                $correo=htmlspecialchars($_POST["correo"]);
                $sexo=htmlspecialchars($_POST["sexo"]);
                $rol=htmlspecialchars($_POST["rol"]);
                $model = new CRUD();
                $model -> update = "usuario";
                $model -> set="nombre='$nombre',apellido='$apellido',password='$password',correo='$correo',sexo='$sexo',rol='$rol'";
                $model->condition= "id=$idUsuario";
                $model->update($conn);
                $mensaje= $model->mensaje;
                
          }
          
          
           
        
         
        return ROUTER::show_view('usuario/usuarioEditar',array('meta'=>$meta,'msg'=>$msg,'mensaje'=>$mensaje,'filas'=>$filas,'id'=>$id));
    }
    
      Public function usuarioReporte()
    {   
           $meta = array
         (
             'title' =>'Usuarios',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
           
           $conn= DB::connect($this->db["mysql"]);
               //READ lEYENDO LOS REGISTROS
               $model = new CRUD();
               $model->select ='*';
               $model->from='usuario';
              // $model->condition ='id=3';
               $model->read($conn);
               $filas=$model->rows;
               $total=count($filas);
               $mensaje=$model->mensaje;
               
           
            
        
         return ROUTER::show_view('usuario/usuarioReporte',array('meta'=>$meta,'filas'=>$filas));
    }
    
 
   
    
}


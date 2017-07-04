<?php

Class ProductoController extends Controllers
{   
    Public $layout ="layouts/adminLayout";
    Public Function producto()
    {   $id=null;
           $meta = array
         (
             'title' =>'Pagina de inicio',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
               $conn= DB::connect($this->db["mysql"]);
               $model = new CRUD();
               $model->select ='*';
               $model->from='producto';
               //$model->condition ='id_producto =2';
               $model->read($conn);
               $filas=$model->rows;
               $total=count($filas);
               $mensaje=$model->mensaje;
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
                        $model->deleteFrom =" producto ";
                        $model->condition = "id_producto = $id";
                        $model->delete($conn);
                        header('location:'.ROUTER::create_action_url("producto/producto").'');
                        $mensaje=$model->mensaje;
                       
                    }       
         
         
        return ROUTER::show_view('producto/producto',array('meta'=>$meta,'filas'=>$filas,'mensaje'=>$mensaje,'total'=>$total,'id'=>$id));
         
        
    }
     Public Function productoEditar()
    {   
           $meta = array
         (
             'title' =>'Pagina de inicio',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
            $id=NULL;
            $mensaje = NULL;
            $filas = NULL;
            $conn= DB::connect($this->db["mysql"]);
           if(isset($_REQUEST["create"]))
           {
               $nombre = htmlspecialchars($_REQUEST['nombre']);
               $descripcion = htmlspecialchars($_REQUEST['descripcion']);
               $precio = htmlspecialchars($_REQUEST['precio']);
               $sigla = htmlspecialchars($_REQUEST['sigla']);            
               
               $model = new CRUD();
               $model->insertInto='producto';
               $model->insertColumns='nombre,descripcion,precio,sigla';
               $model->insertValues = "'$nombre','$descripcion','$precio','$sigla'";
               $model->create($conn);
               $mensaje= $model->mensaje; 
               
               
           }   
           if(isset($_GET["id"]))
          {
              $id = htmlspecialchars($_GET["id"]);
              
              $model = new CRUD();
              $model->select ="*";
              $model->from ="producto";
              $model->condition = "id_producto = $id";
              $model->read($conn);
              $filas = $model->rows;
             
              
          }
          
          if(isset($_POST["update"]))
          {     
                
                $idProducto = htmlspecialchars($_POST["idProducto"]);
                $nombre=htmlspecialchars($_POST["nombre"]);
                $descripcion= htmlspecialchars($_POST["descripcion"]);
                $precio= htmlspecialchars($_POST["precio"]);
                $sigla=htmlspecialchars($_POST["sigla"]);
                $model = new CRUD();
                $model -> update = "usuario";
                $model -> set ="nombre='$nombre',descripcion='$descripcion',precio='$precio',sigla='$sigla'";
                $model->condition= "id=$idProducto";
                $model->update($conn);
                $mensaje= $model->mensaje;
                
          }
           
   
                
        return ROUTER::show_view('producto/productoEditar',array('meta'=>$meta,'mensaje'=>$mensaje,'filas'=>$filas,'id'=>$id));
    }
    
    
}


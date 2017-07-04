<?php

class SELECCIONAR
{
    public $email;
    public $password;
    public $mensaje;
    public $location;


    public function login($conn)
    {       
         
          $conexion=$conn;
          $location = $this->location;
          $sql ='SELECT * FROM usuario WHERE ';
          $sql .='correo =:email AND password =:password';
          $consulta = $conexion->prepare($sql);
          $consulta -> bindParam(':email', $this->email,PDO::PARAM_STR);
          $consulta -> bindParam(':password', $this->password,PDO::PARAM_STR);
          $consulta->execute();
          $total = $consulta->rowCount();
          if($total == 0)
          {
              $this->mensaje='error al iniciar sesion';
          }
          else
          {
              $fila = $consulta->fetch();
              session_start();
              $_SESSION['login']= true;
              $_SESSION['id_usuario']=$fila['id'];
              $_SESSION['nombre']=$fila['Nombre'];
              $this->mensaje='iniciar sesion correctamente';
              header('location:'.$location.'');
          }
    }
    
}

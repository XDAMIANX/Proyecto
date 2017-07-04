<?php

Class CRUD  
{
    Public $insertInto;
    Public $insertColumns;
    Public $insertValues;
    
    Public $mensaje;
    
    Public $select;
    Public $from;
    Public $condition;
    Public $rows;
    Public $update;
    Public $set;
    Public $deleteFrom;
    
    
    Public Function create($conn) 
    {
       
        $conexion=$conn;
        $insertInto = $this->insertInto;
        $insertColumns = $this->insertColumns;
        $insertValues = $this->insertValues;
        $sql="INSERT INTO $insertInto ($insertColumns)VALUES ($insertValues)";
        $consulta = $conexion->prepare($sql);
        if(!$consulta)
            {
            $this->mensaje = "error al crear el registro";
            }
        else
        {
            $consulta->execute();
            $this->mensaje="registro creado correctamente";
        }
    }
    Public Function read($conn)
    {
        $conexion = $conn;
        $select = $this->select;
        $from = $this->from;
        $condition= $this->condition;
        
        if($condition != '')
        {
            $condition = " WHERE ".$condition;
        }
        $sql = "SELECT $select FROM $from $condition";
        $consulta = $conexion->prepare($sql);
        if(!$consulta)
            {
            $this->mensaje = "Ha ocurrido un error al cargar registro ";
            }
        else
        {
            $consulta->execute();
           
             while ($filas = $consulta->fetch())
                {
                    $this->rows[]=$filas;
                }
            $this->mensaje="registro se cargaron correctamente";
        }
        
        
        
     
        
      
    }
    
    Public Function update($conn)
    {
        $conexion=$conn;
        $update = $this->update;
        $set = $this->set;
        $condition = $this->condition;
        if($condition != '')
        {
            $condition = " WHERE ".$condition;
        }
        $sql = "UPDATE $update SET $set $condition ";
        $consulta = $conexion -> prepare($sql);
       
        if(!$consulta)
            {
            $this->mensaje = "Ha ocurrido un error al actualizar el registro ";
            }
        else
        {
            $consulta->execute();
            $this->mensaje="registro actualizado correctamente";
        }
        
    }
    Public Function delete($conn)
    {   $conexion=$conn;
        $deleteFrom =$this->deleteFrom;
        $condition = $this->condition;
        if($condition != '')
        {
            $condition = " WHERE ".$condition;
        }
        $sql="DELETE FROM $deleteFrom $condition";
        $consulta= $conexion->prepare($sql);
       if(!$consulta)
            {
            $this->mensaje = "Ha ocurrido un error al Eliminar el registro ";
            }
        else
        {
            $consulta->execute();
            $this->mensaje="registro se elimino correctamente";
        }
    }
}

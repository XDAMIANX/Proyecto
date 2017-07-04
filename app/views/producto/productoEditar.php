<div class="col-md-8">
    <form action="<?php echo ROUTER::create_action_url("producto/productoEditar");?>" method="post" enctype="multipart/form-data">
      
              <?php
              if($id !=NULL)
              {
                    foreach($filas as $fila)
                    {
                        $id=$fila['id_producto'];
                        $nombre=$fila['nombre'];
                        $descripcion= $fila['descripcion'];
                        $precio= $fila['precio'];
                        $sigla=$fila['sigla'];
                        
                      
                    }
              }
            ?>
           
           <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" value="<?php if($id!= NULL){ echo $nombre;}?>" class="form-control" placeholder="Ingrese su nombre" />
            </div>
            
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" name="descripcion" value="<?php if($id!= NULL){ echo $descripcion;}?>" class="form-control" placeholder="Ingrese su apellido" />
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="text" name="precio" value="<?php if($id!= NULL){ echo $precio;}?>" class="form-control" placeholder="Ingrese su Password"  />
            </div>
            
            <div class="form-group">
                <label>Sigla</label>
                <input type="text" name="sigla" value="<?php if($id!= NULL){ echo $sigla;}?>" class="form-control" placeholder="Ingrese su correo electrónico"  />
            </div>
                   
               
            <hr />
            
            <div class="text-right">
                 <a class="btn btn-primary" href="<?php echo ROUTER::create_action_url("producto/producto") ?>">Volver</a>
                <?php if($id!= NULL)
                      { echo "<input type='hidden' name='idProducto' value='$id'/>";
                      }?>
                <input type="hidden" name="<?php if ($id!=NULL){ echo 'update';}else{   echo 'create';}?>"/>  
                <button type="submit"  class="btn btn-success">Guardar</button>
            </div>
    </form>
    <?php echo $mensaje ?>
    
  </div>


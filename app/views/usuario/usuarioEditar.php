<div class="col-md-8">
    <h1 class='page-header'>Registro de Usuario</h1>
    <form action="<?php echo ROUTER::create_action_url("usuario/usuarioEditar");?>" method="post" enctype="multipart/form-data">
      
              <?php
              echo $msg ;
              echo HTML::br(1);
              echo $mensaje ;
              if($id !=NULL)
              {
                    foreach($filas as $fila)
                    {
                        $id=$fila['id'];
                        $nombre=$fila['Nombre'];
                        $apellido= $fila['Apellido'];
                        $password= $fila['Password'];
                        $correo=$fila['Correo'];
                        $sexo=$fila['Sexo'];
                        $rol=$fila['Rol'];

                      
                    }
              }
            ?>
           
           <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" value="<?php if($id!= NULL){ echo $nombre;}?>" class="form-control" placeholder="Ingrese su nombre" />
            </div>
            
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido" value="<?php if($id!= NULL){ echo $apellido;}?>" class="form-control" placeholder="Ingrese su apellido" />
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="text" name="password" value="<?php if($id!= NULL){ echo $password;}?>" class="form-control" placeholder="Ingrese su Password"  />
            </div>
            
            <div class="form-group">
                <label>Correo</label>
                <input type="text" name="correo" value="<?php if($id!= NULL){ echo $correo;}?>" class="form-control" placeholder="Ingrese su correo electrónico"  />
            </div>
            
            <div class="form-group">
                <label>Sexo</label>
                <select name="sexo" class="form-control">
                  
                     <option <?php if(($id!= NULL)&&($sexo==1)){ echo "selected='selected'";}?>  value="1">Masculino</option>
                     <option <?php if(($id!= NULL)&&($sexo==2)){ echo "selected='selected'";}?> value="2">Femenino</option>
                </select>
            </div>

             <div class="form-group">
                <label>Rol</label>
                <select name="rol" class="form-control">
                    <option  <?php if(($id!= NULL)&&($rol==1)){ echo "selected='selected'";}?> value="1">Despacho</option>
                    <option  <?php if(($id!= NULL)&&($rol==2)){ echo "selected='selected'";}?> value="2">Cocina</option>
                    <option  <?php if(($id!= NULL)&&($rol==3)){ echo "selected='selected'";}?> value="3">Administrador</option>
                </select>
            </div>
            
               
            <hr />
            
            <div class="text-right">
                <a class="btn btn-primary" href="<?php echo ROUTER::create_action_url("usuario/usuario") ?>">Volver</a>
                <?php if($id!= NULL)
                      { echo "<input type='hidden' name='idUsuario' value='$id'/>";
                      }?>
                <input type="hidden" name="<?php if ($id!=NULL){ echo 'update';}else{   echo 'create';}?>"/>  
                <button type="submit"  class="btn btn-success">Guardar</button>
                
            </div>
    </form>
   
    
  </div>



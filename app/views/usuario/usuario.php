
<h1 class='page-header'> Usuarios</h1>
<div class="row">
    <div class="col-md-6">
    <form class="navbar-form " method="post">
            <div >
              <input type="search" name="buscar" class="form-control" placeholder="Buscar por ">

                  <input type="radio" name="atributo" value="Nombre"<?php if($atributo == "Nombre"){echo "checked";}else{echo "checked";} ?>> Nombre
                  <input type="radio" name="atributo" value="Apellido"<?php if($atributo == "Apellido")echo "checked"; ?>> Apellido

            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
    </form>
    </div>

    <div class="col-md-2 col-md-offset-4 ">

         <a class="btn btn-primary" href="<?php echo ROUTER::create_action_url("usuario/usuarioEditar") ?>">Nuevo Usuario</a>
    </div>
</div>
 <div >
    
     <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width:180px;">Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th style="width:120px;">Sexo</th>
                        <th style="width:120px;">Rol</th>
                        <th style="width:60px;"></th>
                        <th style="width:60px;"></th>
                    </tr>
                </thead>
                <tbody>                  
                    
                     <?php
                     
                 if ($model!=null)
                    {
                     foreach ($model as $row)
                        {
                            echo "<tr>\n";
                               echo "<td>".$row["Nombre"]."</td>";
                               echo "<td>".$row['Apellido']."</td>";
                               echo "<td>".$row['Correo']."</td>";
                               if ($row['Sexo']==1) {
                                   echo "<td> Masculino</td>\n";
                               }
                               else
                               {
                                   echo "<td> Femenino</td>\n";
                               }
                                if ($row['Rol']==1) {
                                   echo "<td>Despacho</td>\n";
                               }
                               else if ($row['Rol']==2) 
                               {
                                   echo "<td>Cocina</td>\n";
                               }
                               else
                               {
                                   echo "<td>Administrador</td>\n";
                               }

                               /*    
                               echo "<td> <a href=".ROUTER::create_action_url("usuario/usuarioEditar", array('id'=>$fila['id']))."> Editar</a> </td>\n";
                               echo "<td>
                                       <a onclick='javascript:elim()' href='".ROUTER::create_action_url("usuario/usuario", array('id'=>$fila['id']))."'>Eliminar</a>
                                     </td>";

                                */
                                 echo "<td><form>
                                       <input type='button' onclick='editar(".$row['id'].",\"usuarioEditar\",\"".$row['Nombre']."\")' value='Editar' />
                                     </form></td>";


                                 echo "<td><form>
                                       <input type='button' onclick='eliminar(".$row['id'].",\"usuario\",\"".$row['Nombre']."\")' value='Eliminar' />
                                     </form></td>";


                                echo "</tr>";
                            
                        }
                    }
                         ?>
                    
                </tbody>
            </table> 
             <?php
             $pagination->pages('btn btn-primary');
          ?>
         </div>
</div>  

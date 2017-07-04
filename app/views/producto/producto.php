
<h1 class='page-header'>Productos</h1>
<div class="row"> 
    <div class="col-md-6"">
        <form class="navbar-form " method="post">
                <div >
                  <input type="search" name="buscar" class="form-control" placeholder="Buscar por ">

                      <input type="radio" name="atributo" value="Nombre"> Nombre
                      <input type="radio" name="atributo" value="Apellido"> Apellido

                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
        </form>
    </div>
    <div class="col-md-2 col-md-offset-4 ">
        <a class="btn btn-primary" href="<?php echo ROUTER::create_action_url("producto/productoEditar") ?>">Nuevo Producto</a>
    </div>
</div>     
 <div class="col-md-9">
    
    <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width:180px;">Nombre</th>
                        <th style="width:180px;">Descripcion</th>
                        <th style="width:180px;">Precio</th>
                        <th style="width:180px;">sigla</th>
                        <th style="width:60px;"></th>
                        <th style="width:60px;"></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($filas as $fila)
                    {
                        echo "<tr>";
                        echo "<td>".$fila['nombre']."</td>";
                        echo "<td>".$fila['descripcion']."</td>";
                        echo "<td>".$fila['precio']."</td>";
                        echo "<td>".$fila['sigla']."</td>";                                        
                        echo "<td> <a href=".ROUTER::create_action_url('producto/productoEditar', array('id'=>$fila['id_producto']))."> Editar</a> </td>";
                        echo "<td>
                                    <a onclick='javascript:elim()' href='".ROUTER::create_action_url("producto/producto", array('id'=>$fila['id_producto']))."'>Eliminar</a>
                             </td>";            
                        echo "</tr>";

                        
                    }
                     echo $mensaje;
                    echo $total;
                ?>
                </tbody>
            </table> 
        </div>
</div>  
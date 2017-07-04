
Exportar
                        
                            <a href="usuarioFormato/t/word" target="_blank">Word</a> |
                            <a href="usuarioFormato/t/excel" target="_blank">Excel</a> |
                            <a href="usuarioFormato/t/pdf" target="_blank">Pdf</a> |
                            <!--a name="Imprimir" id="Imprimir" onclick="descargarPdf('reporte','Archivo')" >pdf</a-->
                        </td>    
 <button  onclick="javascript:imprSelec('impresion'); "class="btn btn-success">Imprimir</button>
 <div id="reporte">
 <div id="impresion">
    <h1>Lista de Usuarios</h1>
    
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
                     
                 if ($filas!=null)
                    {
                     foreach ($filas as $fila)
                        {                               
                              echo  "<tr>\n";
                              echo  "<td>".$fila["Nombre"]."</td>";
                                echo  "<td>".$fila['Apellido']."</td>";
                               echo  "<td>".$fila['Correo']."</td>";
                                 if ($fila['Sexo']==1) {
                                   echo  "<td> Masculino</td>\n";
                                  }
                                  else
                                  {
                                  echo  "<td> Femenino</td>\n";
                                 }
                                if ($fila['Rol']==1) {
                                    echo  "<td>Despacho</td>\n";
                                }
                                 else if ($fila['Rol']==2) 
                                 {
                                   echo  "<td>Cocina</td>\n";
                                 }
                                 else
                                {
                                   echo   "<td>Administrador</td>\n";
                                }

                             

                                echo  "</tr>";
                           
                        }
                    }
                         ?>
                    
                </tbody>
            </table> 
           
         </div>
</div>  
 
</div>
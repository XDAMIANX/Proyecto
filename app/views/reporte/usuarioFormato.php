<?php

$html ='<div >
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
                <tbody>';                  
                    
                     
                     
                 if ($filas!=null)
                    {
                     foreach ($filas as $fila)
                        {   
                              $html .=  "<tr>\n";
                                $html .=  "<td>".$fila["Nombre"]."</td>";
                                $html .=  "<td>".$fila['Apellido']."</td>";
                                $html .=  "<td>".$fila['Correo']."</td>";
                                 if ($fila['Sexo']==1) {
                                   $html .=  "<td> Masculino</td>\n";
                                  }
                                  else
                                  {
                                  $html .=  "<td> Femenino</td>\n";
                                 }
                                if ($fila['Rol']==1) {
                                   $html .=  "<td>Despacho</td>\n";
                                }
                                 else if ($fila['Rol']==2) 
                                 {
                                   $html .=  "<td>Cocina</td>\n";
                                 }
                                 else
                                {
                                   $html .=  "<td>Administrador</td>\n";
                                }

                             

                                 $html .=  "</tr>";
                            
                            
                        }
                    }
                       
                    

$html.= '</tbody>
            </table> 
           
         </div>
</div>  ';
 echo $html;
 return $html;
?>


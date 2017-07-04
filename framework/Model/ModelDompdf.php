<?php

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
Class DOM 
{
    Public Function guardar($tipo)
    {
             
            if($tipo == 'excel') $extension = '.xls';
            if($tipo == 'word') $extension = '.doc';

            // Si queremos exportar a PDF
            if($tipo == 'pdf'){
                
                //$contenido=file_get_contents( 'http://proyecto.local/usuarioFormato');
                
                // instantiate and use the dompdf class
                $dompdf = new Dompdf();
                $dompdf->loadHtml($contenido);

                // (Optional) Setup the paper size and orientation
                $dompdf->setPaper('A4', 'landscape');

                // Render the HTML as PDF
                $dompdf->render();
                $pdf = $dompdf->output(); // Obtener el PDF generado
                // Output the generated PDF to Browser
                $dompdf->stream();
               
            } else{
                //require_once 'alumnos.php';

                header("Content-type: application/vnd.ms-$tipo");
                header("Content-Disposition: attachment; filename=mi_archivo$extension");
                header("Pragma: no-cache");
                header("Expires: 0");    
            }
            
    }
}
?>
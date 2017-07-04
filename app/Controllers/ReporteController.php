<?php

Class ReporteController extends Controllers
{   
    Public $layout ="layouts/blancoLayout";
    Public function usuarioFormato()
    {   
           $meta = array
         (
             'title' =>'Usuarios',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
           
           $conn= DB::connect($this->db["mysql"]);
               //READ lEYENDO LOS REGISTROS
               $model = new CRUD();
               $model->select ='*';
               $model->from='usuario';
              // $model->condition ='id=3';
               $model->read($conn);
               $filas=$model->rows;
               $total=count($filas);
               $mensaje=$model->mensaje;
         
           
            if(isset($_REQUEST['t']))
            {   $tipo= htmlspecialchars($_REQUEST["t"]);
              
                $nombre= "Lista_de _Usuarios.pdf";
               
                if($tipo=='excel')
                    {
                        $fila = 7;
                        $imagen = imagecreatefromjpeg(URL::base_url()."/webroot/images/Icono.jpg");

                        $objPHPExcel = new PHPExcel();

                        $objPHPExcel->getProperties()->setCreator("Aplicacion")->setDescription("Reporte de Usuarios");

                        $objPHPExcel->setActiveSheetIndex(0);
                        $objPHPExcel->getActiveSheet()->setTitle("Usuarios");

                        $objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
                        $objDrawing->setName('Logotipo');
                        $objDrawing->setDescription('Logotipo');
                        $objDrawing->setImageResource($imagen);
                        $objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
                        $objDrawing->setHeight(100);
                        $objDrawing->setCoordinates('A1');
                        $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

                        $estiloTituloReporte = array(
                    'font' => array(
                        'name'      => 'Arial',
                        'bold'      => true,
                        'italic'    => false,
                        'strike'    => false,
                        'size' =>13
                    ),
                    'fill' => array(
                        'type'  => PHPExcel_Style_Fill::FILL_SOLID
                        ),
                    'borders' => array(
                        'allborders' => array(
                        'style' => PHPExcel_Style_Border::BORDER_NONE
                        )
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
                    )
                        );


                        $estiloTituloColumnas = array(
                    'font' => array(
                        'name'  => 'Arial',
                        'bold'  => true,
                        'size' =>10,
                        'color' => array(
                        'rgb' => 'FFFFFF'
                        )
                    ),
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => '538DD5')
                    ),
                    'borders' => array(
                        'allborders' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN
                        )
                    ),
                    'alignment' =>  array(
                        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
                    )
                        );

                        $estiloInformacion = new PHPExcel_Style();
                        $estiloInformacion->applyFromArray( array(
                    'font' => array(
                        'name'  => 'Arial',
                        'color' => array(
                        'rgb' => '000000'
                        )
                    ),
                    'fill' => array(
                        'type'  => PHPExcel_Style_Fill::FILL_SOLID
                        ),
                    'borders' => array(
                        'allborders' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN
                        )
                    ),
                        'alignment' =>  array(
                        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
                    )
                        ));


                        $objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
                        $objPHPExcel->getActiveSheet()->getStyle('A6:F6')->applyFromArray($estiloTituloColumnas);

                        $objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE DE USUARIOS');
                        $objPHPExcel->getActiveSheet()->mergeCells('B3:D3');

                        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
                        $objPHPExcel->getActiveSheet()->setCellValue('A6', 'ID');
                        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
                        $objPHPExcel->getActiveSheet()->setCellValue('B6', 'NOMBRE');
                        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
                        $objPHPExcel->getActiveSheet()->setCellValue('C6', 'APELLIDO');
                        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
                        $objPHPExcel->getActiveSheet()->setCellValue('D6', 'CORREO');
                        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
                        $objPHPExcel->getActiveSheet()->setCellValue('E6', 'SEXO');
                        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
                        $objPHPExcel->getActiveSheet()->setCellValue('F6', 'ROL');
                        //$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
                        //$objPHPExcel->getActiveSheet()->setCellValue('G6', 'TOTAL');

                        foreach ($filas as $rows)
                        {   

                                $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
                                $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Nombre']);
                                $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['Apellido']);
                                $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Correo']);
                                $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Sexo']);
                                $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Rol']);
                                //$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, '=E'.$fila.'*F'.$fila);

                                $fila ++;

                        }

                        $fila = $fila-1;

                        $objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, 'A7:F'.$fila);

                        $filaGrafica = $fila+3;
                        $filaGraficaFinal = $fila+10;

                        $values = new PHPExcel_Chart_DataSeriesValues('Number', 'Usuarios!$F$7:$F$'.$fila);

                        $categories = new PHPExcel_Chart_DataSeriesValues('String', 'Usuarios!$B$7:$B$'.$fila);

                        $series = new PHPExcel_Chart_DataSeries(
                        PHPExcel_Chart_DataSeries::TYPE_BARCHART, 
                        PHPExcel_Chart_DataSeries::GROUPING_CLUSTERED,
                        array(0),
                        array(),
                        array($categories), 
                        array($values)
                        );
                        $series->setPlotDirection(PHPExcel_Chart_DataSeries::DIRECTION_COL);

                        $layout = new PHPExcel_Chart_Layout();
                        $plotarea = new PHPExcel_Chart_PlotArea($layout, array($series));

                        $chart = new PHPExcel_Chart('exemplo', null, null, $plotarea);

                        $title = new PHPExcel_Chart_Title(null, $layout);
                        $title->setCaption(utf8_encode('Usuarios'));

                        $chart->setTopLeftPosition('B'.$filaGrafica);
                        $chart->setBottomRightPosition('G'.$filaGraficaFinal);
                        $chart->setTitle($title);

                        $objPHPExcel->getActiveSheet()->addChart($chart);

                        $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

                        $writer->setIncludeCharts(TRUE);


                        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
                        header('Content-Disposition: attachment;filename="Usuarios.xlsx"');
                        header('Cache-Control: max-age=0');

                        //$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
                        $writer->save('php://output');
	
                    }           
                /* if (($tipo=='word')||($tipo=='excel'))
                {
                    $guardar = new DOM();
                    $guardar->guardar($tipo) ;
                }*/
                else{
                    //$pdf = new FPDF('L','mm','Letter') 'L' orientacio pagina es horizontal  'mm' unidad de tamaño
                    // 'letter' es tamaño de pagina array(100,150)
                    $pdf = new PDF();
                    $pdf->headerFont='Arial';
                    $pdf->image='';
                    $pdf->titulo='Lista de usuarios';        
                    $pdf->AliasNbPages();
                    $pdf->Addpage();

                    $pdf->SetFillColor(232,232,232);
                    $pdf->SetFont('Arial','B',12);
                    $pdf->SetX(10);
                    $pdf->Cell(40,6,'Nombre',1,0,'C',1);
                    $pdf->SetX(50);
                    $pdf->Cell(50,6,'Apellido',1,0,'C',1);
                    $pdf->SetX(100);
                    $pdf->Cell(60,6,'Correo',1,0,'C',1);
                    $pdf->SetX(160);
                    $pdf->Cell(20,6,'Sexo',1,0,'C',1);
                    $pdf->SetX(180);
                    $pdf->Cell(20,6,'Rol',1,0,'C',1);
                    $pdf->Ln();

                    foreach ($filas as $fila)
                    {
                            $pdf->SetFont('Arial','',12);
                            $pdf->SetX(10);
                            $pdf->Cell(40,6,$fila['Nombre'],1,0,'L',0);
                            $pdf->SetX(50);
                            $pdf->Cell(50,6,$fila['Apellido'],1,0,'L',0);
                            $pdf->SetX(100);
                            $pdf->Cell(60,6,$fila['Correo'],1,0,'L',0);
                            $pdf->SetX(160);
                            $pdf->Cell(20,6,$fila['Sexo'],1,0,'L',0);
                            $pdf->SetX(180);
                            $pdf->Cell(20,6,$fila['Rol'],1,1,'L',0);
                            //$pdf->Cell(ancho celda,altura celda,titulo,salto de linea,borde,centrado[c][L][R],relleno);
                               /*   Tipos de borde 
                                *   0: no border
                                    1: frame
                                    or a string containing some or all of the following characters :
                                    L: left
                                    T: top
                                    R: right
                                    B: bottom
                                    $pdf->Cell(20,6,$fila['Rol'],'LT',1,'L',0);
                                *  */
                            
                            
                    }
                    $pdf->Output();;
                    
                    
                    
                }
            } 
           
        
         return ROUTER::show_view('reporte/usuarioFormato',array('meta'=>$meta,'filas'=>$filas));
    }
    
   
    
}


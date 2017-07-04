<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{   Public $headerFont;
    Public $image;
    Public $titulo;
// Cabecera de página
    function Header()
    {   
	$headerFont=$this->headerFont;
        $image=$this->image;
        $titulo=$this->titulo;
        // Logo
       // $this->Image($image,10,8,33);
        // Arial bold 15
	$this->SetFont($headerFont,'B',15);
	// Movernos a la derecha
	$this->Cell(80);
	// Título
	$this->Cell(30,10,$titulo,0,0,'C');// el 4° 0 es el contorno
	// Salto de línea
	$this->Ln(20);		
    }
	
    // Pie de página
	function Footer()
    {
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
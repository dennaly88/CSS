
<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página

function Header()
{
	// Logo
	$this->Image('fpdf/logo.png',2,2,25);
	// Arial bold 15
	$this->SetFont('Arial','B',8);
	// Movernos a la derecha
	$this->Cell(30);

	// Título
	
	$this->Cell(150,8,'GERENCIA DE GESTION HUMANA ',1,1,'C');
	$this->Ln(20);
    $this->Cell(195,10,'CONTROL DE INVENTARIO AREPERA',1,1,'C');
    $this->Cell(195,10,'STOCK CHARCUTERIA',1,1,'C');

	$this->Cell(10,10,'Id',1,0,'C',0);
	$this->Cell(50,10,'Nombre',1,0,'C',0);
	$this->Cell(40,10,'Unidad',1,0,'C',0);
	$this->Cell(20,10,'Cantidad',1,0,'C',0);
	$this->Cell(25,10,'Usuario',1,0,'C',0);
	$this->Cell(22,10,'Fecha',1,0,'C',0);
	$this->Cell(28,10,'Accion',1,1,'C',0);
	
} 

// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-30);

	// Arial italic 8
	$this->SetFont('Arial','B',8);
	$this->Ln(5);
    $this->Cell(64,8,'Gerente del Area',1,0,'C',0);
	$this->Cell(64,8,'Adjunto',1,0,'C',0);
	$this->Cell(62,8,'Custodio',1,1,'C',0);
	$this->Cell(64,10,'',1,0,'C',0);
	$this->Cell(64,10,'',1,0,'C',0);
	$this->Cell(62,10,'',1,0,'C',0);
	$this->Ln(15);
	$this->Cell(0,0,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
require('conexion.php');
$query = 'SELECT * FROM charcuteria;';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);


while ($mostrar=pg_fetch_array($result))
{

$pdf->Cell(10,10,$mostrar['id'],1,0,'C',0);
$pdf->Cell(50,10,$mostrar['nombre'],1,0,'C',0);
$pdf->Cell(40,10,$mostrar['unidad'],1,0,'C',0);
$pdf->Cell(20,10,$mostrar['cantidad'],1,0,'C',0);
$pdf->Cell(25,10,$mostrar['usuario'],1,0,'C',0);
$pdf->Cell(22,10,$mostrar['fecha'],1,0,'C',0);
$pdf->Cell(28,10,$mostrar['accion'],1,1,'C',0);


}

$pdf->Output();

?>





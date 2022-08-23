
<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{


    function Header()
    {

        $this->Image('fpdf/logo.png', 2, 2, 25);

        $this->SetFont('Arial', 'B', 8);
        $this->Cell(30);


        $this->Cell(150, 8, 'GERENCIA DE GESTION HUMANA ', 1, 1, 'C');
        $this->Ln(20);
        $this->Cell(195, 10, 'CONTROL DE INVENTARIO AREPERA', 1, 1, 'C');
        $this->Cell(195, 10, 'TOTAL DE BOTELLONES ENTREGADOS', 1, 1, 'C');

        $this->Cell(23, 10, 'Fecha', 1, 0, 'C', 0);
        $this->Cell(48, 10, 'Gerencia', 1, 0, 'C', 0);

        $this->Cell(23, 10, 'Usuario', 1, 0, 'C', 0);
        $this->Cell(17, 10, 'Cantidad', 1, 0, 'C', 0);
        $this->Cell(24, 10, 'Estado', 1, 0, 'C', 0);
        $this->Cell(60, 10, 'Entregado a', 1, 1, 'C', 0);
    }


    function Footer()
    {

        $this->SetY(-30);

        $this->SetFont('Arial', 'B', 8);
        $this->Ln(5);
        $this->Cell(64, 8, 'Gerente del Area', 1, 0, 'C', 0);
        $this->Cell(64, 8, 'Adjunto', 1, 0, 'C', 0);
        $this->Cell(62, 8, 'Responsable', 1, 1, 'C', 0);
        $this->Cell(64, 10, '', 1, 0, 'C', 0);
        $this->Cell(64, 10, '', 1, 0, 'C', 0);
        $this->Cell(62, 10, '', 1, 0, 'C', 0);
        $this->Ln(15);
        $this->Cell(0, 0, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
require('conexion.php');
$query = 'SELECT * FROM agua;';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);


while ($mostrar = pg_fetch_array($result)) {

    $pdf->Cell(23, 10, $mostrar['fecha'], 1, 0, 'C', 0);
    $pdf->Cell(48, 10, $mostrar['gerencia'], 1, 0, 'C', 0);

    $pdf->Cell(23, 10, $mostrar['usuario'], 1, 0, 'C', 0);
    $pdf->Cell(17, 10, $mostrar['cantidad'], 1, 0, 'C', 0);
    $total +=  $mostrar['cantidad'];
    $pdf->Cell(24, 10, $mostrar['estado'], 1, 0, 'C', 0);
    $pdf->Cell(60, 10, $mostrar['entregado'], 1, 1, 'C', 0);
}

$total1 = "TOTAL DE BOTELLONES";


while ($mostrar = pg_fetch_assoc($resul)) {

    $total +=  $mostrar['cantidad'];
}

$pdf->Cell(195, 10, $total1, 1, 1, 'C', 0);
$pdf->Cell(195, 10, $total, 1, 1, 'C', 0);













$pdf->Output();

?>







<?php

require('fpdf/fpdf.php');
$fpdf = new FPDF();
$fpdf -> Addpage('PORTRAIT','A4');

    

class pdf extends FPDF
{
    public function header()
    {
        $this->SetFont('TIMES','B','10');
        //$this -> setX(160);
        //$this -> Image('./img/logo_ucateci.png');
    }

    public function footer()
    {
        $this ->SetFont('TIMES','B','10');
        $this ->setY(-15);
        $this ->Write(5,'La Vega, Republica Dominicana');
        //$this -> Image('fpdf/img/bandera.png',185,275,20,20,'png',"");
        $this->Setx(-30);
        $this->AliasNbPages('tpaginas');
        $this->Write(5,$this->PageNo().'/tpaginas');
        
    }
}

$fpdf = new pdf();


$fpdf->AddPage();
$fpdf->SetFont('Arial','B',16);
$fpdf->SetY(25);
$fpdf->Cell(0,25,"Reporte de Usuarios Registrados",0,0,"C");

//$fpdf->SetTextColor(45,47,250);
$fpdf->SetFont('Arial','B',14);
//$fpdf->Ln();
$fpdf->Ln();
$fpdf->Cell(30,5,"Materia:");
$fpdf->SetFont('Arial','B',14);$fpdf->Cell(20,5,"Diseno de Sistema");$fpdf->SetFont('Courier','B',14);$fpdf->Ln();
$fpdf->SetFont('Arial','B',14);$fpdf->Cell(30,5,"Profesor:",0,0,"");
$fpdf->SetFont('Arial','B',14);$fpdf->Cell(20,5,"Harol Tejada");$fpdf->SetFont('Courier','B',14);$fpdf->Ln();
//$fpdf->SetFont('Arial','B',14);$fpdf->Cell(30,5,"Curso:",0,0,"");
//$fpdf->SetFont('Arial','B',14);$fpdf->Cell(20,5,"A-209");$fpdf->SetFont('Courier','B',14);$fpdf->Ln(10);
//$fpdf->SetFont('Arial','B',12);
//Asignaar color a la celda
$fpdf->SetFillColor(255, 255, 255);

//Asiganar color a el bolder
$fpdf->SetDrawColor(0,4,253);


//Asignar Color
//$fpdf->SetTextColor(143, 139, 129);



//Asignar borde  a la linea
$fpdf->SetLineWidth(1);

//Asiganar una linea
$fpdf->Line(15,65,190,65);
$fpdf->Ln(15);
$fpdf->SetFont('Arial','',12);
$fpdf->SetLineWidth(0);
$fpdf->SetFillColor(230, 230, 230);
$fpdf->SetDrawColor(256,256,256);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Datos de conexión
$mysqli = new mysqli("localhost", "root", "", "pacientes");

if(mysqli_connect_errno()) {
	echo 'Conexion fallida: ', mysqli_connect_errno();
	exit();
}

// Consulta
$query = "SELECT * FROM lista_pacientes";
$resultado = $mysqli->query($query);



$fpdf->setFillColor(232, 232, 232);
$fpdf->setFont('Arial', 'B', 12);
$fpdf->Cell(20, 6, 'ID', 1, 0, 'C', 1);
$fpdf->Cell(80, 6, 'NOMBRE', 1, 0, 'C', 1);
$fpdf->Cell(40, 6, 'TELEFONO', 1, 0, 'C', 1);
$fpdf->Cell(50, 6, 'ENFERMEDAD', 1, 1, 'C', 1);

$fpdf->setFont('Arial', '', 10);

while($fila = $resultado->fetch_assoc()) {
	$fpdf->Cell(20, 6, $fila['codigo'], 1, 0, 'C');
	$fpdf->Cell(80, 6, utf8_decode($fila['nombre']), 1, 0, 'C');
	$fpdf->Cell(40, 6, utf8_decode($fila['telefono']), 1, 0, 'C');
	$fpdf->Cell(50, 6, utf8_decode($fila['enfermedad']), 1, 1, 'C');
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









$fpdf->Output();

?>
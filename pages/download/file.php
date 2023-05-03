<?php 
include('../databases/connectToBD.php');
require('fpdf/fpdf.php');

// se descifra el id de la lista 
$ide = base64_decode($_GET['report']);

//Informacion tabla estudiantes
$estudiantes_sql = 'SELECT * FROM estudiantes WHERE id_lista = ? ORDER BY nombre ASC';
    $sentenciae = $mbd->prepare($estudiantes_sql);
    $sentenciae->bindParam(1, $ide);
    $sentenciae->execute();
    $datae = $sentenciae->fetchAll();

//Informacion tabla listas
$consultal = "SELECT * from listas WHERE id = ? ";
    $sentencial = $mbd->prepare($consultal);
    $sentencial->bindParam(1, $ide);
    $sentencial->execute();
    $datal = $sentencial->fetch();
    $idm = $datal['id_modulo'];
    $lista = $datal[utf8_decode('nombre')];
    $semestre = $datal[utf8_decode('semestre')];

//Informacion tabla modulos
$sqlList = 'SELECT * FROM modulos WHERE id = ?';
    $sentenciaM = $mbd->prepare($sqlList);
    $sentenciaM->bindParam(1, $idm);
    $sentenciaM->execute();
    $datam = $sentenciaM->fetch();
    $modulo   = utf8_decode($datam['nombre']);

$fecha   = date('y/m/d');


class PDF extends FPDF
{
   //Cabecera de página
   function Header()
   {
    global $idm;
    $title = ($idm == 1 ? utf8_decode('FORMATO DE EVALUACIÓN PRACTICA PROMOCIÓN Y PROTECCIÓN EN SALUD PROGRAMA DE ENFERMERÍA') : 
             ($idm == 2 ? utf8_decode('FORMATO DE EVALUACION DE PRÁCTICAS ACTIVIDADES BÁSICAS EN EL CUIDADO DEL PACIENTE PROGRAMA DE ENFERMERIA') :
             ($idm == 3 ? utf8_decode('FORMATO DE EVALUACIÓN DE PRÁCTICA CUIDADO DE ENFERMERIA MEDICO-QUIRÚRGICA PROGRAMA DE ENFERMERÍA') :
             ($idm == 4 ? utf8_decode('FORMATO DE EVALUACIÓN DE PRACTICAS CUIDADO DE ENFERMERÍA MATERNO INFANTIL Y FAMILIA PROGRAMA DE ENFERMERÍA') :
             ($idm == 5 ? utf8_decode('FORMATO DE EVALUACIÓN PRACTICA DE ADMINISTRACIÓN PROGRAMA DE ENFERMERÍA') :
             ($idm == 6 ? utf8_decode('FORMATO DE EVALUACIÓN PRÁCTICA DE CUIDADO DE ENFERMERÍA AL ADULTO, ADULTO MAYOR Y FAMILIA. PROGRAMA DE ENFERMERÍA.') :
             ($idm == 7 ? utf8_decode('FORMATO DE EVALUACIÓN PRÁCTICA INTEGRAL DE CUIDADO DE ENFERMERÍA PROGRAMA DE ENFERMERÍA') :
             ($idm == 8 ? utf8_decode('FORMATO DE EVALUACIÓN DE LA ASIGNATURA FUNDAMENTOS SOCIOEDUCATIVOS PROGRAMA ENFERMERÍA') : 'FORMATO DE EVALUACIÓN DE LA ASIGNATURA FUNDAMENTOS SOCIOEDUCATIVOS PROGRAMA ENFERMERÍA' ))))))));
        //logos
        $this->Image('../../assets/images/logo-form.jpg',15,15,25);
        $this->Image('../../assets/images/logo-form2.jpg',45,15,25);

        $this->SetFont('Arial','B',10);
        $this->SetY(20);
        $this->Cell(70);
        $this->MultiCell(65, 5, $title, 0, 'C' );
        $this->Rect(10, 10, 190, 40);
        $this->Rect(75, 10, 75, 40);   

   }

   function Footer()
    {

        $this->SetY(-10);

        $this->SetFont('Arial','I',8);

        $this->Cell(0,10,'Pag '.$this->PageNo(),0,0,'R');
    }

}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetTitle($modulo.' - '.$lista);

$pdf->SetY(70);
$pdf->SetX(10);

$pdf->SetFillColor(216,216,216);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20, 6, 'Modulo:', 0 );
$pdf->SetFont('Arial','',10);
$pdf->Cell(170, 6, $modulo, 0 , 0, 'L', TRUE);
$pdf->Ln(7);
$pdf->SetX(10);


$pdf->SetFillColor(216,216,216);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20, 6, 'Lista:', 0 );
$pdf->SetFont('Arial','',10);
$pdf->Cell(170, 6, $lista, 0 , 0, 'L', TRUE);
$pdf->Ln(7);
$pdf->SetX(10);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(20, 6, 'Semestre:', 0 );
$pdf->SetFont('Arial','',10);
$pdf->Cell(170, 6, $semestre, 0,  0, 'L', TRUE );
$pdf->Ln(7);
$pdf->SetX(10);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(20, 6, 'Fecha:', 0 );
$pdf->SetFont('Arial','',10);
$pdf->Cell(170, 6, $fecha, 0,  0, 'L', TRUE );
$pdf->Ln(15);
$pdf->SetX(15);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(180*0.4 , 8, 'Nombre', 1,  0, 'C' );
$pdf->Cell(180*0.4 , 8, 'Documento', 1,  0, 'C' );
$pdf->Cell(180*0.2 , 8, 'Nota', 1,  0, 'C' );
$pdf->Ln();

foreach($datae as $estudiante){
$pdf->SetX(15);
    
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(180*0.4 , 7, utf8_decode($estudiante['Nombre']), 1,  0 );
    $pdf->Cell(180*0.4 , 7, $estudiante['documento'], 1,  0, 'C' );
    $notac = "SELECT *  FROM   modulo_nota WHERE id_estudiante = ?";
            $nota = $mbd->prepare($notac);
            $nota->bindParam(1, $estudiante['id']);
            $nota->execute();
            $fnota = $nota->rowCount();
            $resnota = $nota->fetch();
            
    if($fnota == 0){
    $pdf->SetFillColor(238,255,145);    
    $pdf->Cell(180*0.2 , 7, 'Sin calificacion', 1,  0, 'C', TRUE );
    }
    else {
        if($resnota['nota'] < 3){
            $pdf->SetFillColor(242,138,138);
            $pdf->Cell(180*0.2 , 7, number_format((float)$resnota['nota'], 2, '.', ''), 1,  0, 'C', TRUE );
        }
        else{
        $pdf->SetFillColor(138,242,149);
        $pdf->Cell(180*0.2 , 7,number_format((float)$resnota['nota'], 2, '.', ''), 1,  0, 'C', TRUE );
        }
    }

        
                              
    $pdf->Ln();

}

// $graph = new Graph(270, 200, 'auto');
// $graph->SetScale("textlin");

// $theme_class = new UniversalTheme;
// $graph->SetTheme($theme_class);

// $graph->SetBox(false);

// $graph->ygrid->SetFill(false);
// $graph->xaxis->SetTickLabels(array('PA-01', 'PA-02', 'PA-03', 'PA-04'));
// $graph->yaxis->HideLine(false);
// $graph->yaxis->HideTicks(false, false);

// // Create the bar plots
// $b1plot = new BarPlot($data1y);

// // Create the grouped bar plot
// $gbplot = new GroupBarPlot(array($b1plot));
// // ...and add it to the graPH
// $graph->Add($gbplot);

// $b1plot->SetColor('white');
// $b1plot->SetFillColor('#C5C5C5');

// $graph->title->Set("Promedios por Periodo:");

// $nombreImagen = 'path-absouta/uploads/info/' . uniqid() . '.png';

// // Display the graph
// $graph->Stroke($nombreImagen);

// //Aqui agrego la imagen que acabo de crear con jpgraph
// $pdf->Image($nombreImagen, $pdf->GetX() + 140, $pdf->GetY() - 25, 40, 30);


$pdf->Output();

?>
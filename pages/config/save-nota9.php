<?php 
include('../databases/connectToBD.php');

$id_estudiante = $_POST['id_estudiante'];
$id_lista = $_POST['id_lista'];

$p1m9 = $_POST['p1m9'];     $p2m9 = $_POST['p2m9'];     $p3m9 = $_POST['p3m9'];
$p4m9 = $_POST['p4m9'];     $p5m9 = $_POST['p5m9'];     $p6m9 = $_POST['p6m9'];     
$p7m9 = $_POST['p7m9'];     $p8m9 = $_POST['p8m9'];     $p9m9 = $_POST['p9m9']; 
$p10m9 = $_POST['p10m9'];   $p11m9 = $_POST['p11m9'];   $p12m9 = $_POST['p12m9'];   
$p13m9 = $_POST['p13m9'];   $p14m9 = $_POST['p14m9'];   $p15m9 = $_POST['p15m9'];   
$p16m9 = $_POST['p16m9'];   $p17m9 = $_POST['p17m9'];   $p18m9 = $_POST['p18m9'];   
$p19m9 = $_POST['p19m9'];   $p20m9 = $_POST['p20m9'];   $p21m9 = $_POST['p21m9'];   
$p22m9 = $_POST['p22m9'];   $p24m9 = $_POST['p24m9'];   $p25m9 = $_POST['p25m9'];
$p26m9 = $_POST['p26m9'];   $p27m9 = $_POST['p27m9'];   $p28m9 = $_POST['p28m9'];   
$p29m9 = $_POST['p29m9'];   $p30m9 = $_POST['p30m9'];   $p31m9 = $_POST['p31m9'];      $suma1 = $_POST['suma1'];      

   

$total1 = $_POST['total1']; $total2 = $_POST['total2']; $total3 = $_POST['total3'];
$total4 = $_POST['total4'];

$subtotal1 = $_POST['subtotal1'];   $subtotal2 = $_POST['subtotal2'];
$subtotal3 = $_POST['subtotal3'];   $subtotal4 = $_POST['subtotal4'];

$recomendaciones1 = $_POST['recomendaciones1']; $recomendaciones2 = $_POST['recomendaciones2'];
$recomendaciones3 = $_POST['recomendaciones3']; $recomendaciones4 = $_POST['recomendaciones4'];
$recomendaciones5 = $_POST['recomendaciones5']; $recomendaciones6 = $_POST['recomendaciones6'];

$total = $_POST['totalgeneral'];

if($total == 'NaN'){    
    echo'NaN';
}else{
    $consulta= "SELECT * FROM preguntasm9 WHERE id_estudiante = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id_estudiante);
$sentencia->execute();
$filas =  $sentencia->rowCount();

if($filas < 1){
    $consultai = "INSERT INTO preguntasm9(id_estudiante, suma1, p1m3, p2m3, p3m3, p4m3, p5m3, p6m3, p7m3, p8m3, p9m3, p10m3, p11m3, p12m3, p13m3, p14m3, p15m3, p16m3, p17m3, p18m3, p19m3, p20m3, p21m3, p22m3,  p24m3, p25m3, p26m3, p27m3, p28m3, p29m3,  p30m3, p31m3, total1, total2, total3, total4, subtotal1, subtotal2, subtotal3, subtotal4, recomendaciones1, recomendaciones2, recomendaciones3, recomendaciones4, recomendaciones5, recomendaciones6)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m9, $p2m9, $p3m9, $p4m9, $p5m9, $p6m9, $p7m9, $p8m9, $p9m9, $p10m9, $p11m9, $p12m9, $p13m9, $p14m9, $p15m9, $p16m9, $p17m9, $p18m9, $p19m9, $p20m9, $p21m9, $p22m9, $p24m9, $p25m9, $p26m9, $p27m9, $p28m9, $p29m9,  $p30m9, $p31m9, $total1, $total2, $total3, $total4, $subtotal1, $subtotal2, $subtotal3, $subtotal4, $recomendaciones1, $recomendaciones2, $recomendaciones3, $recomendaciones4, $recomendaciones5, $recomendaciones6));

    if( $sentenciai->rowCount() > 0){
        $nota = "INSERT INTO modulo_nota(id_estudiante, nota) VALUES (?,?) ";
        $snota = $mbd->prepare($nota);
        $snota->bindParam(1,$id_estudiante);
        $snota->bindParam(2,$total);
        $snota->execute();

        echo "ok";
    }
    else{
        echo "error";
    }
    
}else{
    $delete = "DELETE  FROM preguntasm9 WHERE id_estudiante = ? ";
    $senetenciad = $mbd->prepare($delete);
    $senetenciad->bindParam(1, $id_estudiante);
    $senetenciad->execute();

    $consultai = "INSERT INTO preguntasm9(id_estudiante, suma1, p1m3, p2m3, p3m3, p4m3, p5m3, p6m3, p7m3, p8m3, p9m3, p10m3, p11m3, p12m3, p13m3, p14m3, p15m3, p16m3, p17m3, p18m3, p19m3, p20m3, p21m3, p22m3,  p24m3, p25m3, p26m3, p27m3, p28m3, p29m3,  p30m3, p31m3, total1, total2, total3, total4, subtotal1, subtotal2, subtotal3, subtotal4, recomendaciones1, recomendaciones2, recomendaciones3, recomendaciones4, recomendaciones5, recomendaciones6)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m9, $p2m9, $p3m9, $p4m9, $p5m9, $p6m9, $p7m9, $p8m9, $p9m9, $p10m9, $p11m9, $p12m9, $p13m9, $p14m9, $p15m9, $p16m9, $p17m9, $p18m9, $p19m9, $p20m9, $p21m9, $p22m9, $p24m9, $p25m9, $p26m9, $p27m9, $p28m9, $p29m9,  $p30m9, $p31m9, $total1, $total2, $total3, $total4, $subtotal1, $subtotal2, $subtotal3, $subtotal4, $recomendaciones1, $recomendaciones2, $recomendaciones3, $recomendaciones4, $recomendaciones5, $recomendaciones6));

    if( $sentenciai->rowCount() > 0){
        $nota = "UPDATE  modulo_nota  SET nota = ? WHERE id_estudiante = ? ";
        $snota = $mbd->prepare($nota);
        $snota->bindParam(1,$total);
        $snota->bindParam(2,$id_estudiante);
        $snota->execute();

        echo "ok";
    }
    else{
        echo "error";
    }
}
}

?>
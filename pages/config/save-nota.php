<?php 
include('../databases/connectToBD.php');

$id_estudiante = $_POST['id_estudiante'];
$id_lista = $_POST['id_lista'];

$suma1 = $_POST['A-1-1'];   $p1m1 = $_POST['A-1-2'];    $p2m1 = $_POST['A-1-3']; 
$p3m1 = $_POST['A-1-4'];    $p4m1 = $_POST['A-1-5'];    $p5m1 = $_POST['A-1-6'];    
$p6m1 = $_POST['A-1-7'];    $p7m1 = $_POST['A-1-8'];    $p8m1 = $_POST['A-1-9'];    
$total1 = $_POST['total1']; $p10m1 = $_POST['p10m1'];   $p11m1 = $_POST['p11m1'];   
$p12m1 = $_POST['p12m1'];   $p13m1 = $_POST['p13m1'];   $p14m1 = $_POST['p14m1'];   
$p15m1 = $_POST['p15m1'];   $p16m1 = $_POST['p16m1'];   $p17m1 = $_POST['p17m1'];   
$p18m1 = $_POST['p18m1'];   $p20m1 = $_POST['p20m1'];   $p21m1 = $_POST['p21m1'];   
$p22m1 = $_POST['p22m1'];   $suma2 = $_POST['suma2'];   $p23m1 = $_POST['p23m1'];   
$p24m1 = $_POST['p24m1'];   $p25m1 = $_POST['p25m1'];   $p26m1 = $_POST['p26m1'];   
$p27m1 = $_POST['p27m1'];   $p28m1 = $_POST['p28m1'];   $p29m1 = $_POST['p29m1'];   
$total3 = $_POST['total3']; $p30m1 = $_POST['p30m1'];   $p31m1 = $_POST['p31m1'];   
$suma3 = $_POST['suma3'];   $p32m1 = $_POST['p32m1'];   $p33m1 = $_POST['p33m1'];   
$p34m1 = $_POST['p34m1'];   $p35m1 = $_POST['p35m1'];   $p36m1 = $_POST['p36m1'];   
$p37m1 = $_POST['p37m1'];   $p38m1 = $_POST['p38m1'];   $p39m1 = $_POST['p39m1'];   
$p40m1 = $_POST['p40m1'];   $p41m1 = $_POST['p41m1'];   $p42m1 = $_POST['p42m1'];   
$p43m1 = $_POST['p43m1'];   $p44m1 = $_POST['p44m1'];   $p45m1 = $_POST['p45m1'];   
$total4 = $_POST['total4']; $p19m1 = $_POST['p19m1'];   $total2 = $_POST['total2'];     
$p9m1 = $_POST['p9m1'];     $subtotal1 = $_POST['subtotal1'];   

$subtotal2 = $_POST['subtotal2'];
$recomendaciones1 = $_POST['recomendaciones1']; $recomendaciones2 = $_POST['recomendaciones2'];
$recomendaciones3 = $_POST['recomendaciones3']; $recomendaciones4 = $_POST['recomendaciones4'];

$total = $subtotal1 + $subtotal2;

$consulta= "SELECT * FROM preguntasm1 WHERE id_estudiante = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id_estudiante);
$sentencia->execute();
$filas =  $sentencia->rowCount();

if($filas < 1){
    $consultai = "INSERT INTO preguntasm1(id_estudiante, suma1, p1m1, p2m1, p3m1, p4m1, p5m1, p6m1, p7m1, p8m1, total1,  
    recomendaciones1, p9m1, p10m1, p11m1, p12m1, p13m1, p14m1, p15m1, p16m1, p17m1, p18m1, total2, recomendaciones2, 
    subtotal1, p19m1, p20m1, p21m1, p22m1, p23m1, p24m1, p25m1, p26m1, p27m1, p28m1, p29m1, total3, recomendaciones3, 
    p30m1, p31m1, p32m1, p33m1, p34m1, p35m1, p36m1, p37m1, p38m1, p39m1, p40m1, p41m1, p42m1, p43m1, p44m1, p45m1, 
    total4, recomendaciones4, subtotal2 )VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m1, $p2m1, $p3m1, $p4m1, $p5m1, $p6m1, $p7m1, $p8m1, $total1, $recomendaciones1, $p9m1, $p10m1, $p11m1, $p12m1, $p13m1, $p14m1, $p15m1, $p16m1, $p17m1, $p18m1, $total2, $recomendaciones2, $subtotal1, $p19m1, $p20m1, $p21m1, $p22m1, $p23m1, $p24m1, $p25m1, $p26m1, $p27m1, $p28m1, $p29m1, $total3, $recomendaciones3, $p30m1, $p31m1, $p32m1, $p33m1, $p34m1, $p35m1, $p36m1, $p37m1, $p38m1, $p39m1, $p40m1, $p41m1, $p42m1, $p43m1, $p44m1, $p45m1, $total4, $recomendaciones4, $subtotal2));

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
    $delete = "DELETE  FROM preguntasm1 WHERE id_estudiante = ? ";
    $senetenciad = $mbd->prepare($delete);
    $senetenciad->bindParam(1, $id_estudiante);
    $senetenciad->execute();

    $consultai = "INSERT INTO preguntasm1(id_estudiante, suma1, p1m1, p2m1, p3m1, p4m1, p5m1, p6m1, p7m1, p8m1, total1,  
    recomendaciones1, p9m1, p10m1, p11m1, p12m1, p13m1, p14m1, p15m1, p16m1, p17m1, p18m1, total2, recomendaciones2, 
    subtotal1, p19m1, p20m1, p21m1, p22m1, p23m1, p24m1, p25m1, p26m1, p27m1, p28m1, p29m1, total3, recomendaciones3, 
    p30m1, p31m1, p32m1, p33m1, p34m1, p35m1, p36m1, p37m1, p38m1, p39m1, p40m1, p41m1, p42m1, p43m1, p44m1, p45m1, 
    total4, recomendaciones4, subtotal2 )VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m1, $p2m1, $p3m1, $p4m1, $p5m1, $p6m1, $p7m1, $p8m1, $total1, $recomendaciones1, $p9m1, $p10m1, $p11m1, $p12m1, $p13m1, $p14m1, $p15m1, $p16m1, $p17m1, $p18m1, $total2, $recomendaciones2, $subtotal1, $p19m1, $p20m1, $p21m1, $p22m1, $p23m1, $p24m1, $p25m1, $p26m1, $p27m1, $p28m1, $p29m1, $total3, $recomendaciones3, $p30m1, $p31m1, $p32m1, $p33m1, $p34m1, $p35m1, $p36m1, $p37m1, $p38m1, $p39m1, $p40m1, $p41m1, $p42m1, $p43m1, $p44m1, $p45m1, $total4, $recomendaciones4, $subtotal2));

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
?>
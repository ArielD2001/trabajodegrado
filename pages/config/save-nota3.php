<?php 
include('../databases/connectToBD.php');

$id_estudiante = $_POST['id_estudiante'];
$id_lista = $_POST['id_lista'];

$p1m3 = $_POST['p1m3'];     $p2m3 = $_POST['p2m3'];     $p3m3 = $_POST['p3m3'];
$p4m3 = $_POST['p4m3'];     $p5m3 = $_POST['p5m3'];     $p6m3 = $_POST['p6m3'];     
$p7m3 = $_POST['p7m3'];     $p8m3 = $_POST['p8m3'];     $p9m3 = $_POST['p9m3']; 
$p10m3 = $_POST['p10m3'];   $p11m3 = $_POST['p11m3'];   $p12m3 = $_POST['p12m3'];   
$p13m3 = $_POST['p13m3'];   $p14m3 = $_POST['p14m3'];   $p15m3 = $_POST['p15m3'];   
$p16m3 = $_POST['p16m3'];   $p17m3 = $_POST['p17m3'];   $p18m3 = $_POST['p18m3'];   
$p19m3 = $_POST['p19m3'];   $p20m3 = $_POST['p20m3'];   $p21m3 = $_POST['p21m3'];   
$p22m3 = $_POST['p22m3'];   $p24m3 = $_POST['p24m3'];   $p25m3 = $_POST['p25m3'];
$p26m3 = $_POST['p26m3'];   $p27m3 = $_POST['p27m3'];   $p28m3 = $_POST['p28m3'];   
$p29m3 = $_POST['p29m3'];   $p30m3 = $_POST['p30m3'];   $p31m3 = $_POST['p31m3'];   
$p32m3 = $_POST['p32m3'];   $p33m3 = $_POST['p33m3'];   $p34m3 = $_POST['p34m3'];   
$p35m3 = $_POST['p35m3'];   $p36m3 = $_POST['p36m3'];   $p37m3 = $_POST['p37m3'];   
$p38m3 = $_POST['p38m3'];   $p39m3 = $_POST['p39m3'];   $p40m3 = $_POST['p40m3'];   
$p41m3 = $_POST['p41m3'];   $p42m3 = $_POST['p42m3'];   $p43m3 = $_POST['p43m3'];   
$p44m3 = $_POST['p44m3'];      
$suma1 = $_POST['suma1'];      

   

$total1 = $_POST['total1']; $total2 = $_POST['total2']; $total3 = $_POST['total3'];
$total4 = $_POST['total4']; $total5 = $_POST['total5']; $total6 = $_POST['total6'];

$subtotal1 = $_POST['subtotal1'];   $subtotal2 = $_POST['subtotal2'];
$subtotal3 = $_POST['subtotal3'];   $subtotal4 = $_POST['subtotal4'];

$recomendaciones1 = $_POST['recomendaciones1']; $recomendaciones2 = $_POST['recomendaciones2'];
$recomendaciones3 = $_POST['recomendaciones3']; $recomendaciones4 = $_POST['recomendaciones4'];
$recomendaciones5 = $_POST['recomendaciones5']; $recomendaciones6 = $_POST['recomendaciones6'];

$total = $_POST['totalgeneral'];

if($total == 'NaN'){
    echo'NaN';
}else{
    $consulta= "SELECT * FROM preguntasm3 WHERE id_estudiante = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id_estudiante);
$sentencia->execute();
$filas =  $sentencia->rowCount();

if($filas < 1){
    $consultai = "INSERT INTO preguntasm3(id_estudiante, suma1, p1m3, p2m3, p3m3, p4m3, p5m3, p6m3, p7m3, p8m3, p9m3, p10m3, p11m3, p12m3, p13m3, p14m3, p15m3, p16m3, p17m3, p18m3, p19m3, p20m3, p21m3, p22m3,  p24m3, p25m3, p26m3, p27m3, p28m3, p29m3,  p30m3, p31m3, p32m3, p33m3, p34m3, p35m3, p36m3, p37m3, p38m3, p39m3, p40m3, p41m3, p42m3, p43m3, p44m3, total1, total2, total3, total4, total5, total6, subtotal1, subtotal2, subtotal3, subtotal4, recomendaciones1, recomendaciones2, recomendaciones3, recomendaciones4, recomendaciones5, recomendaciones6)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m3, $p2m3, $p3m3, $p4m3, $p5m3, $p6m3, $p7m3, $p8m3, $p9m3, $p10m3, $p11m3, $p12m3, $p13m3, $p14m3, $p15m3, $p16m3, $p17m3, $p18m3, $p19m3, $p20m3, $p21m3, $p22m3, $p24m3, $p25m3, $p26m3, $p27m3, $p28m3, $p29m3,  $p30m3, $p31m3, $p32m3, $p33m3, $p34m3, $p35m3, $p36m3, $p37m3, $p38m3, $p39m3, $p40m3, $p41m3, $p42m3, $p43m3, $p44m3, $total1, $total2, $total3, $total4, $total5, $total6, $subtotal1, $subtotal2, $subtotal3, $subtotal4, $recomendaciones1, $recomendaciones2, $recomendaciones3, $recomendaciones4, $recomendaciones5, $recomendaciones6));

 
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
    $delete = "DELETE  FROM preguntasm3 WHERE id_estudiante = ? ";
    $senetenciad = $mbd->prepare($delete);
    $senetenciad->bindParam(1, $id_estudiante);
    $senetenciad->execute();

    $consultai = "INSERT INTO preguntasm3(id_estudiante, suma1, p1m3, p2m3, p3m3, p4m3, p5m3, p6m3, p7m3, p8m3, p9m3, p10m3, p11m3, p12m3, p13m3, p14m3, p15m3, p16m3, p17m3, p18m3, p19m3, p20m3, p21m3, p22m3,  p24m3, p25m3, p26m3, p27m3, p28m3, p29m3,  p30m3, p31m3, p32m3, p33m3, p34m3, p35m3, p36m3, p37m3, p38m3, p39m3, p40m3, p41m3, p42m3, p43m3, p44m3, total1, total2, total3, total4, total5, total6, subtotal1, subtotal2, subtotal3, subtotal4, recomendaciones1, recomendaciones2, recomendaciones3, recomendaciones4, recomendaciones5, recomendaciones6)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m3, $p2m3, $p3m3, $p4m3, $p5m3, $p6m3, $p7m3, $p8m3, $p9m3, $p10m3, $p11m3, $p12m3, $p13m3, $p14m3, $p15m3, $p16m3, $p17m3, $p18m3, $p19m3, $p20m3, $p21m3, $p22m3, $p24m3, $p25m3, $p26m3, $p27m3, $p28m3, $p29m3,  $p30m3, $p31m3, $p32m3, $p33m3, $p34m3, $p35m3, $p36m3, $p37m3, $p38m3, $p39m3, $p40m3, $p41m3, $p42m3, $p43m3, $p44m3, $total1, $total2, $total3, $total4, $total5, $total6, $subtotal1, $subtotal2, $subtotal3, $subtotal4, $recomendaciones1, $recomendaciones2, $recomendaciones3, $recomendaciones4, $recomendaciones5, $recomendaciones6));

    
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
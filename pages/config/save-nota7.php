<?php 
include('../databases/connectToBD.php');

$id_estudiante = $_POST['id_estudiante'];
$id_lista = $_POST['id_lista'];
$rotacion = $_POST['rotacion'];


$p1m7 = $_POST['p1m7'];     $p2m7 = $_POST['p2m7'];     $p3m7 = $_POST['p3m7'];
$p4m7 = $_POST['p4m7'];     $p5m7 = $_POST['p5m7'];     $p6m7 = $_POST['p6m7'];     
$p7m7 = $_POST['p7m7'];     $p8m7 = $_POST['p8m7'];     $p9m7 = $_POST['p9m7']; 
$p10m7 = $_POST['p10m7'];   $p11m7 = $_POST['p11m7'];   $p12m7 = $_POST['p12m7'];   
$p13m7 = $_POST['p13m7'];   $p14m7 = $_POST['p14m7'];   $p15m7 = $_POST['p15m7'];   
$p16m7 = $_POST['p16m7'];   $p17m7 = $_POST['p17m7'];   $p18m7 = $_POST['p18m7'];   
$p19m7 = $_POST['p19m7'];   $p20m7 = $_POST['p20m7'];   $p21m7 = $_POST['p21m7'];   
$p22m7 = $_POST['p22m7'];   $p24m7 = $_POST['p24m7'];   $p25m7 = $_POST['p25m7'];
$p26m7 = $_POST['p26m7'];   $p27m7 = $_POST['p27m7'];   $p28m7 = $_POST['p28m7'];   
$p29m7 = $_POST['p29m7'];   $p30m7 = $_POST['p30m7'];   $p31m7 = $_POST['p31m7'];   
$p32m7 = $_POST['p32m7'];   $p33m7 = $_POST['p33m7'];   $p34m7 = $_POST['p34m7'];   
$p35m7 = $_POST['p35m7'];   $p36m7 = $_POST['p36m7'];   $p37m7 = $_POST['p37m7'];   
$p38m7 = $_POST['p38m7'];   $p39m7 = $_POST['p39m7'];   $p40m7 = $_POST['p40m7'];   
$p41m7 = $_POST['p41m7'];   $p42m7 = $_POST['p42m7'];   $p43m7 = $_POST['p43m7'];   
$p44m7 = $_POST['p44m7'];   $p45m7 = $_POST['p45m7'];   $p46m7 = $_POST['p46m7'];   
$p47m7 = $_POST['p47m7'];   $p48m7 = $_POST['p48m7'];   $p49m7 = $_POST['p49m7'];   
$p50m7 = $_POST['p50m7'];   $p51m7 = $_POST['p51m7'];   $p52m7 = $_POST['p52m7'];   
$p53m7 = $_POST['p53m7'];   $p54m7 = $_POST['p54m7'];   $p55m7 = $_POST['p55m7'];   
$p56m7 = $_POST['p56m7'];   $p57m7 = $_POST['p57m7'];   $p58m7 = $_POST['p58m7'];   
$p59m7 = $_POST['p59m7'];   $p60m7 = $_POST['p60m7'];      
$suma1 = $_POST['suma1'];      

   

$total1 = $_POST['total1']; $total2 = $_POST['total2']; 
$total3 = $_POST['total3']; $total4 = $_POST['total4']; 

$subtotal1 = $_POST['subtotal1'];   $subtotal2 = $_POST['subtotal2'];
$subtotal3 = $_POST['subtotal3'];   $subtotal4 = $_POST['subtotal4'];

$recomendaciones1 = $_POST['recomendaciones1']; $recomendaciones2 = $_POST['recomendaciones2'];
$recomendaciones3 = $_POST['recomendaciones3']; $recomendaciones4 = $_POST['recomendaciones4'];
$recomendaciones5 = $_POST['recomendaciones5']; $recomendaciones6 = $_POST['recomendaciones6'];

$total = $_POST['totalgeneral'];

if($total == 'NaN'){
    echo'NaN';
}else{
    $consulta= "SELECT * FROM preguntasm7 WHERE id_estudiante = ? AND rotacion = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id_estudiante);
$sentencia->bindParam(2, $rotacion);
$sentencia->execute();
$filas =  $sentencia->rowCount();

if($filas < 1){
    $consultai = "INSERT INTO preguntasm7(id_estudiante, suma1, p1m7, p2m7, p3m7, p4m7, p5m7, p6m7, p7m7, p8m7, p9m7, p10m7, p11m7, p12m7, p13m7, p14m7, p15m7, p16m7, p17m7, p18m7, p19m7, p20m7, p21m7, p22m7,  p24m7, p25m7, p26m7, p27m7, p28m7, p29m7,  p30m7, p31m7, p32m7, p33m7, p34m7, p35m7, p36m7, p37m7, p38m7, p39m7, p40m7, p41m7, p42m7, p43m7, p44m7, p45m7, p46m7, p47m7, p48m7, p49m7, p50m7, p51m7, p52m7, p53m7, p54m7, p55m7, p56m7, p57m7, p58m7, p59m7, p60m7, total1, total2, total3, total4, subtotal1, subtotal2, subtotal3, subtotal4, recomendaciones1, recomendaciones2, recomendaciones3, recomendaciones4, recomendaciones5, recomendaciones6, rotacion)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m7, $p2m7, $p3m7, $p4m7, $p5m7, $p6m7, $p7m7, $p8m7, $p9m7, $p10m7, $p11m7, $p12m7, $p13m7, $p14m7, $p15m7, $p16m7, $p17m7, $p18m7, $p19m7, $p20m7, $p21m7, $p22m7, $p24m7, $p25m7, $p26m7, $p27m7, $p28m7, $p29m7,  $p30m7, $p31m7, $p32m7, $p33m7, $p34m7, $p35m7, $p36m7, $p37m7, $p38m7, $p39m7, $p40m7, $p41m7, $p42m7, $p43m7, $p44m7, $p45m7, $p46m7, $p47m7, $p48m7, $p49m7, $p50m7, $p51m7, $p52m7, $p53m7, $p54m7, $p55m7, $p56m7, $p57m7, $p58m7, $p59m7, $p60m7, $total1, $total2, $total3, $total4, $subtotal1, $subtotal2, $subtotal3, $subtotal4, $recomendaciones1, $recomendaciones2, $recomendaciones3, $recomendaciones4, $recomendaciones5, $recomendaciones6, $rotacion));

    if( $sentenciai->rowCount() > 0){
        $nota = "INSERT INTO rotacion(id_estudiante, rotacion, nota) VALUES (?,?,?) ";
        $snota = $mbd->prepare($nota);
        $snota->bindParam(1,$id_estudiante);
        $snota->bindParam(2,$rotacion);
        $snota->bindParam(3,$total);
        $snota->execute();

        $cr2 = 'SELECT * FROM rotacion WHERE id_estudiante = ?';
        $notas = $mbd->prepare($cr2);
        $notas->bindParam(1, $id_estudiante);
        $notas->execute();
        $nr = $notas->rowCount() < 2 ? $notas->fetch() : $notas->fetchAll();


        
        if($notas->rowCount() == 1){
            $definitiva = $total / 3;
        $nota = "INSERT modulo_nota(nota, id_estudiante) VALUES(?,?)";
        $snota = $mbd->prepare($nota);
        $snota->bindParam(1,$definitiva);
        $snota->bindParam(2,$id_estudiante);
        $snota->execute();
        echo 'ok';
        }else{
            $definitiva = 0;
            foreach($nr as $notarotacion){
                $definitiva += $notarotacion['nota'];
            }
            $definitiva = $definitiva /3;
            $nota = "UPDATE modulo_nota SET nota = ? WHERE id_estudiante = ?";
            $snota = $mbd->prepare($nota);
            $snota->bindParam(1,$definitiva);
            $snota->bindParam(2,$id_estudiante);
            $snota->execute();

            echo 'ok';
        }
    }
    else{
        echo "error";
    }
    
}else{
    $delete = "DELETE  FROM preguntasm7 WHERE id_estudiante = ?  AND rotacion = ?";
    $senetenciad = $mbd->prepare($delete);
    $senetenciad->bindParam(1, $id_estudiante);
    $senetenciad->bindParam(2, $rotacion);
    $senetenciad->execute();

    $consultai = "INSERT INTO preguntasm7(id_estudiante, suma1, p1m7, p2m7, p3m7, p4m7, p5m7, p6m7, p7m7, p8m7, p9m7, p10m7, p11m7, p12m7, p13m7, p14m7, p15m7, p16m7, p17m7, p18m7, p19m7, p20m7, p21m7, p22m7,  p24m7, p25m7, p26m7, p27m7, p28m7, p29m7,  p30m7, p31m7, p32m7, p33m7, p34m7, p35m7, p36m7, p37m7, p38m7, p39m7, p40m7, p41m7, p42m7, p43m7, p44m7, p45m7, p46m7, p47m7, p48m7, p49m7, p50m7, p51m7, p52m7, p53m7, p54m7, p55m7, p56m7, p57m7, p58m7, p59m7, p60m7, total1, total2, total3, total4, subtotal1, subtotal2, subtotal3, subtotal4, recomendaciones1, recomendaciones2, recomendaciones3, recomendaciones4, recomendaciones5, recomendaciones6, rotacion)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m7, $p2m7, $p3m7, $p4m7, $p5m7, $p6m7, $p7m7, $p8m7, $p9m7, $p10m7, $p11m7, $p12m7, $p13m7, $p14m7, $p15m7, $p16m7, $p17m7, $p18m7, $p19m7, $p20m7, $p21m7, $p22m7, $p24m7, $p25m7, $p26m7, $p27m7, $p28m7, $p29m7,  $p30m7, $p31m7, $p32m7, $p33m7, $p34m7, $p35m7, $p36m7, $p37m7, $p38m7, $p39m7, $p40m7, $p41m7, $p42m7, $p43m7, $p44m7, $p45m7, $p46m7, $p47m7, $p48m7, $p49m7, $p50m7, $p51m7, $p52m7, $p53m7, $p54m7, $p55m7, $p56m7, $p57m7, $p58m7, $p59m7, $p60m7, $total1, $total2, $total3, $total4, $subtotal1, $subtotal2, $subtotal3, $subtotal4, $recomendaciones1, $recomendaciones2, $recomendaciones3, $recomendaciones4, $recomendaciones5, $recomendaciones6, $rotacion));

    if( $sentenciai->rowCount() > 0){
        $nota = "UPDATE rotacion SET nota = ?  WHERE id_estudiante = ? AND rotacion = ? ";
        $snota = $mbd->prepare($nota);
        $snota->bindParam(1,$total);
        $snota->bindParam(2,$id_estudiante);
        $snota->bindParam(3,$rotacion);
        $snota->execute();


        $cr2 = 'SELECT * FROM rotacion WHERE id_estudiante = ?';
        $notas = $mbd->prepare($cr2);
        $notas->bindParam(1, $id_estudiante);
        $notas->execute();
        $nr = $notas->rowCount() < 2 ? $notas->fetch() : $notas->fetchAll();
        $definitiva = 0;
        foreach($nr as $notarotacion){
            $definitiva += $notarotacion['nota'];
        }
        $definitiva = $definitiva /3;
        
        $nota = "UPDATE modulo_nota SET nota = ? WHERE id_estudiante = ?";
        $snota = $mbd->prepare($nota);
        $snota->bindParam(1,$definitiva);
        $snota->bindParam(2,$id_estudiante);
        $snota->execute();

        echo 'ok';
    }
    else{
        echo "error";
    }
}
}

?>
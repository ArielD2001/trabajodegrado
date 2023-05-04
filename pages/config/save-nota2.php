<?php 
include('../databases/connectToBD.php');

$id_estudiante = $_POST['id_estudiante'];
$id_lista = $_POST['id_lista'];
$rotacion = $_POST['rotacion'];

$p1m2 = $_POST['p1m2'];     $p2m2 = $_POST['p2m2'];     $p3m2 = $_POST['p3m2'];
$p4m2 = $_POST['p4m2'];     $p5m2 = $_POST['p5m2'];     $p6m2 = $_POST['p6m2'];     
$p7m2 = $_POST['p7m2'];     $p8m2 = $_POST['p8m2'];     $p9m2 = $_POST['p9m2']; 
$p10m2 = $_POST['p10m2'];   $p11m2 = $_POST['p11m2'];   $p12m2 = $_POST['p12m2'];   
$p13m2 = $_POST['p13m2'];   $p14m2 = $_POST['p14m2'];   $p15m2 = $_POST['p15m2'];   
$p16m2 = $_POST['p16m2'];   $p17m2 = $_POST['p17m2'];   $p18m2 = $_POST['p18m2'];   
$p19m2 = $_POST['p19m2'];   $p20m2 = $_POST['p20m2'];   $p21m2 = $_POST['p21m2'];   
$p22m2 = $_POST['p22m2'];   $p23m2 = $_POST['p23m2'];   $p24m2 = $_POST['p24m2'];   
$p25m2 = $_POST['p25m2'];   $p26m2 = $_POST['p26m2'];   $p27m2 = $_POST['p27m2'];   
$p28m2 = $_POST['p28m2'];   $p29m2 = $_POST['p29m2'];   $p30m2 = $_POST['p30m2'];   
$p31m2 = $_POST['p31m2'];   $p32m2 = $_POST['p32m2'];   $p33m2 = $_POST['p33m2'];   
$p34m2 = $_POST['p34m2'];   $p35m2 = $_POST['p35m2'];   $p36m2 = $_POST['p36m2'];   
$p37m2 = $_POST['p37m2'];   $p38m2 = $_POST['p38m2'];   $p39m2 = $_POST['p39m2'];   
$p40m2 = $_POST['p40m2'];   $p41m2 = $_POST['p41m2'];   $p42m2 = $_POST['p42m2'];   
$p43m2 = $_POST['p43m2'];   $p44m2 = $_POST['p44m2'];   $p45m2 = $_POST['p45m2'];   
$p46m2 = $_POST['p46m2'];   $p47m2 = $_POST['p47m2'];   $p48m2 = $_POST['p48m2'];   
$p49m2 = $_POST['p49m2'];   $p50m2 = $_POST['p50m2'];   $p51m2 = $_POST['p51m2'];   
$p52m2 = $_POST['p52m2'];   $p53m2 = $_POST['p53m2'];   $p54m2 = $_POST['p54m2'];   
$p55m2 = $_POST['p55m2'];   $p56m2 = $_POST['p56m2'];   $p57m2 = $_POST['p57m2'];   
$p58m2 = $_POST['p58m2'];   

   
$suma1 = $_POST['suma1'];   $suma2 = $_POST['suma2'];   $suma3 = $_POST['suma3'];

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
    $consulta= "SELECT * FROM preguntasm2 WHERE id_estudiante = ? AND rotacion = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id_estudiante);
$sentencia->bindParam(2, $rotacion);
$sentencia->execute();
$filas =  $sentencia->rowCount();

if($filas < 1){
    $consultai = "INSERT INTO preguntasm2(id_estudiante, p1m2, p2m2, p3m2, p4m2, p5m2, p6m2, p7m2, p8m2, p9m2, p10m2, p11m2, p12m2, p13m2, p14m2, p15m2, p16m2, p17m2, p18m2, p19m2, p20m2, p21m2, p22m2,  p23m2, p24m2, p25m2, p26m2, p27m2, p28m2, p29m2,  p30m2, p31m2, p32m2, p33m2, p34m2, p35m2, p36m2, p37m2, p38m2, p39m2, p40m2, p41m2, p42m2, p43m2, p44m2, p45m2,  p46m2, p47m2, p48m2, p49m2, p50m2, p51m2, p52m2, p53m2, p54m2, p55m2, p56m2, p57m2, p58m2, suma1, suma2, suma3, total1, total2, total3, total4, total5, total6, subtotal1, subtotal2, subtotal3, subtotal4, recomendaciones1, recomendaciones2, recomendaciones3, recomendaciones4, recomendaciones5, recomendaciones6, rotacion)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $p1m2, $p2m2, $p3m2, $p4m2, $p5m2, $p6m2, $p7m2, $p8m2, $p9m2, $p10m2, $p11m2, $p12m2, $p13m2, $p14m2, $p15m2, $p16m2, $p17m2, $p18m2, $p19m2, $p20m2, $p21m2, $p22m2,  $p23m2, $p24m2, $p25m2, $p26m2, $p27m2, $p28m2, $p29m2,  $p30m2, $p31m2, $p32m2, $p33m2, $p34m2, $p35m2, $p36m2, $p37m2, $p38m2, $p39m2, $p40m2, $p41m2, $p42m2, $p43m2, $p44m2, $p45m2,  $p46m2, $p47m2, $p48m2, $p49m2, $p50m2, $p51m2, $p52m2, $p53m2, $p54m2, $p55m2, $p56m2, $p57m2, $p58m2, $suma1, $suma2, $suma3, $total1, $total2, $total3, $total4, $total5, $total6, $subtotal1, $subtotal2, $subtotal3, $subtotal4, $recomendaciones1, $recomendaciones2, $recomendaciones3, $recomendaciones4, $recomendaciones5, $recomendaciones6, $rotacion));

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
            $definitiva = $total / 2;
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
            $definitiva = $definitiva /2;
            $nota = "UPDATE modulo_nota SET nota = ? WHERE id_estudiante = ?";
            $snota = $mbd->prepare($nota);
            $snota->bindParam(1,$definitiva);
            $snota->bindParam(2,$id_estudiante);
            $snota->execute();

            echo 'ok';
        }
    }
    else{
        echo "ok";
    }
    
}else{
    $delete = "DELETE  FROM preguntasm2 WHERE id_estudiante = ? AND rotacion = ? ";
    $senetenciad = $mbd->prepare($delete);
    $senetenciad->bindParam(1, $id_estudiante);
    $senetenciad->bindParam(2, $rotacion);
    $senetenciad->execute();

    $consultai = "INSERT INTO preguntasm2(id_estudiante, p1m2, p2m2, p3m2, p4m2, p5m2, p6m2, p7m2, p8m2, p9m2, p10m2, p11m2, p12m2, p13m2, p14m2, p15m2, p16m2, p17m2, p18m2, p19m2, p20m2, p21m2, p22m2,  p23m2, p24m2, p25m2, p26m2, p27m2, p28m2, p29m2,  p30m2, p31m2, p32m2, p33m2, p34m2, p35m2, p36m2, p37m2, p38m2, p39m2, p40m2, p41m2, p42m2, p43m2, p44m2, p45m2,  p46m2, p47m2, p48m2, p49m2, p50m2, p51m2, p52m2, p53m2, p54m2, p55m2, p56m2, p57m2, p58m2, suma1, suma2, suma3, total1, total2, total3, total4, total5, total6, subtotal1, subtotal2, subtotal3, subtotal4, recomendaciones1, recomendaciones2, recomendaciones3, recomendaciones4, recomendaciones5, recomendaciones6, rotacion)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $p1m2, $p2m2, $p3m2, $p4m2, $p5m2, $p6m2, $p7m2, $p8m2, $p9m2, $p10m2, $p11m2, $p12m2, $p13m2, $p14m2, $p15m2, $p16m2, $p17m2, $p18m2, $p19m2, $p20m2, $p21m2, $p22m2,  $p23m2, $p24m2, $p25m2, $p26m2, $p27m2, $p28m2, $p29m2,  $p30m2, $p31m2, $p32m2, $p33m2, $p34m2, $p35m2, $p36m2, $p37m2, $p38m2, $p39m2, $p40m2, $p41m2, $p42m2, $p43m2, $p44m2, $p45m2,  $p46m2, $p47m2, $p48m2, $p49m2, $p50m2, $p51m2, $p52m2, $p53m2, $p54m2, $p55m2, $p56m2, $p57m2, $p58m2, $suma1, $suma2, $suma3, $total1, $total2, $total3, $total4, $total5, $total6, $subtotal1, $subtotal2, $subtotal3, $subtotal4, $recomendaciones1, $recomendaciones2, $recomendaciones3, $recomendaciones4, $recomendaciones5, $recomendaciones6, $rotacion));

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
        $definitiva = $definitiva /2;
        
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
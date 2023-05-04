<?php 
include('../databases/connectToBD.php');

$id_estudiante = $_POST['id_estudiante'];
$id_lista = $_POST['id_lista'];
$rotacion = $_POST['rotacion'];



$suma1 = $_POST['A-1-1'];   $p1m4 = $_POST['A-1-2'];    $p2m4 = $_POST['A-1-3']; 
$p3m4 = $_POST['A-1-4'];    $p4m4 = $_POST['A-1-5'];    $p5m4 = $_POST['A-1-6'];    
$p6m4 = $_POST['A-1-7'];    $p7m4 = $_POST['A-1-8'];    $p8m4 = $_POST['A-1-9']; 

$p10m4 = $_POST['p10m4'];   $p11m4 = $_POST['p11m4'];  $p12m4 = $_POST['p12m4'];   
$p13m4 = $_POST['p13m4'];   $p14m4 = $_POST['p14m4'];   $p15m4 = $_POST['p15m4'];   
$p16m4 = $_POST['p16m4'];   $p17m4 = $_POST['p17m4'];   $p18m4 = $_POST['p18m4'];   
$p19m4 = $_POST['p19m4'];   $p20m4 = $_POST['p20m4'];   $p21m4 = $_POST['p21m4'];   
$p22m4 = $_POST['p22m4'];   $p23m4 = $_POST['p23m4'];   $p24m4 = $_POST['p24m4'];   
$p25m4 = $_POST['p25m4'];   $p26m4 = $_POST['p26m4'];   $p27m4 = $_POST['p27m4'];   
$p28m4 = $_POST['p28m4'];   $p29m4 = $_POST['p29m4'];   $p30m4 = $_POST['p30m4'];     
$suma3 = $_POST['suma3'];   $p32m4 = $_POST['p32m4'];   $p33m4 = $_POST['p33m4'];   
$p34m4 = $_POST['p34m4'];   $p35m4 = $_POST['p35m4'];   $p36m4 = $_POST['p36m4'];   
$p37m4 = $_POST['p37m4'];   $p38m4 = $_POST['p38m4'];   $p39m4 = $_POST['p39m4'];   
$p40m4 = $_POST['p40m4'];   $p41m4 = $_POST['p41m4'];   $p42m4 = $_POST['p42m4'];   
$p43m4 = $_POST['p43m4'];   $p44m4 = $_POST['p44m4'];   $p45m4 = $_POST['p45m4']; 
$p46m4 = $_POST['p46m4'];   $p47m4 = $_POST['p47m4'];   $p48m4 = $_POST['p48m4'];
$p49m4 = $_POST['p49m4'];   $p50m4 = $_POST['p50m4'];   $p51m4 = $_POST['p51m4']; 
$p52m4 = $_POST['p52m4'];   $p53m4 = $_POST['p53m4'];   $p54m4 = $_POST['p54m4']; 
$p55m4 = $_POST['p55m4'];   $p56m4 = $_POST['p56m4'];   $p57m4 = $_POST['p57m4'];  
$p31m4 = $_POST['p31m4'];   $p9m4 = $_POST['p9m4'];     $suma2 = $_POST['suma2'];
    

$total1 = $_POST['total1'];  $total3 = $_POST['total3'];  $total2 = $_POST['total2'];
$total4 = $_POST['total4'];  $total5 = $_POST['total5'];  $total6 = $_POST['total6'];

$subtotal1 = $_POST['subtotal1'];   $subtotal2 = $_POST['subtotal2']; 
$subtotal3 = $_POST['subtotal3'];   $subtotal4 = $_POST['subtotal4'];

$recomendaciones1 = $_POST['recomendaciones1']; $recomendaciones2 = $_POST['recomendaciones2'];
$recomendaciones3 = $_POST['recomendaciones3']; $recomendaciones4 = $_POST['recomendaciones4'];
$recomendaciones5 = $_POST['recomendaciones5']; $recomendaciones6 = $_POST['recomendaciones6'];

$total = $_POST['totalgeneral'];

if($total == 'NaN'){
    echo'NaN';
}else{
    $consulta= "SELECT * FROM preguntasm4 WHERE id_estudiante = ? AND rotacion = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id_estudiante);
$sentencia->bindParam(2, $rotacion);
$sentencia->execute();
$filas =  $sentencia->rowCount();

if($filas < 1){
    $consultai = "INSERT INTO preguntasm4(id_estudiante, suma1, p1m4, p2m4, p3m4, p4m4, p5m4, p6m4, p7m4, p8m4, total1,  
    recomendaciones1, p9m4, p10m4, p11m4, p12m4, p13m4, p14m4, p15m4, p16m4, p17m4, p18m4, total2, recomendaciones2, 
    subtotal1, p19m4, p20m4, p21m4, p22m4, suma2, p23m4, p24m4, p25m4, p26m4, p27m4, p28m4, p29m4, total3, recomendaciones3, p30m4, p31m4, suma3, p32m4, p33m4, p34m4, p35m4, p36m4, p37m4, p38m4, p39m4, p40m4, p41m4, p42m4,p43m4, p44m4, p45m4, total4, recomendaciones4, subtotal2, p46m4, p47m4, p48m4, p49m4, p50m4, p51m4, p52m4, p53m4, p54m4, p55m4, p56m4, p57m4, total5, total6, subtotal3, subtotal4, recomendaciones5, recomendaciones6, rotacion)VALUES(? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m4, $p2m4, $p3m4, $p4m4, $p5m4, $p6m4, $p7m4, $p8m4, $total1, $recomendaciones1, $p9m4, $p10m4, $p11m4, $p12m4, $p13m4, $p14m4, $p15m4, $p16m4, $p17m4, $p18m4, $total2, $recomendaciones2, $subtotal1, $p19m4, $p20m4, $p21m4, $p22m4, $suma2, $p23m4, $p24m4, $p25m4, $p26m4, $p27m4, $p28m4, $p29m4, $total3, $recomendaciones3, $p30m4, $p31m4, $suma3, $p32m4, $p33m4, $p34m4, $p35m4, $p36m4, $p37m4, $p38m4, $p39m4, $p40m4, $p41m4, $p42m4, $p43m4, $p44m4, $p45m4, $total4, $recomendaciones4, $subtotal2, $p46m4, $p47m4, $p48m4, $p49m4, $p50m4, $p51m4, $p52m4, $p53m4, $p54m4, $p55m4, $p56m4, $p57m4, $total5, $total6, $subtotal3, $subtotal4, $recomendaciones5, $recomendaciones6, $rotacion));

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
    $delete = "DELETE  FROM preguntasm4 WHERE id_estudiante = ? AND rotacion = ?";
    $senetenciad = $mbd->prepare($delete);
    $senetenciad->bindParam(1, $id_estudiante);
    $senetenciad->bindParam(2, $rotacion);
    $senetenciad->execute();

    $consultai = "INSERT INTO preguntasm4(id_estudiante, suma1, p1m4, p2m4, p3m4, p4m4, p5m4, p6m4, p7m4, p8m4, total1,  
    recomendaciones1, p9m4, p10m4, p11m4, p12m4, p13m4, p14m4, p15m4, p16m4, p17m4, p18m4, total2, recomendaciones2, 
    subtotal1, p19m4, p20m4, p21m4, p22m4, suma2, p23m4, p24m4, p25m4, p26m4, p27m4, p28m4, p29m4, total3, recomendaciones3, p30m4, p31m4, suma3, p32m4, p33m4, p34m4, p35m4, p36m4, p37m4, p38m4, p39m4, p40m4, p41m4, p42m4,p43m4, p44m4, p45m4, total4, recomendaciones4, subtotal2, p46m4, p47m4, p48m4, p49m4, p50m4, p51m4, p52m4, p53m4, p54m4, p55m4, p56m4, p57m4, total5, total6, subtotal3, subtotal4, recomendaciones5, recomendaciones6, rotacion)VALUES(? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m4, $p2m4, $p3m4, $p4m4, $p5m4, $p6m4, $p7m4, $p8m4, $total1, $recomendaciones1, $p9m4, $p10m4, $p11m4, $p12m4, $p13m4, $p14m4, $p15m4, $p16m4, $p17m4, $p18m4, $total2, $recomendaciones2, $subtotal1, $p19m4, $p20m4, $p21m4, $p22m4, $suma2, $p23m4, $p24m4, $p25m4, $p26m4, $p27m4, $p28m4, $p29m4, $total3, $recomendaciones3, $p30m4, $p31m4, $suma3, $p32m4, $p33m4, $p34m4, $p35m4, $p36m4, $p37m4, $p38m4, $p39m4, $p40m4, $p41m4, $p42m4, $p43m4, $p44m4, $p45m4, $total4, $recomendaciones4, $subtotal2, $p46m4, $p47m4, $p48m4, $p49m4, $p50m4, $p51m4, $p52m4, $p53m4, $p54m4, $p55m4, $p56m4, $p57m4, $total5, $total6, $subtotal3, $subtotal4, $recomendaciones5, $recomendaciones6, $rotacion));


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
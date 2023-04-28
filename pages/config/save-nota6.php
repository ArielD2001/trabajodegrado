<?php 
include('../databases/connectToBD.php');

$id_estudiante = $_POST['id_estudiante'];
$id_lista = $_POST['id_lista'];

$suma1 = $_POST['A-1-1'];   $p1m6 = $_POST['A-1-2'];    $p2m6 = $_POST['A-1-3']; 
$p3m6 = $_POST['A-1-4'];    $p4m6 = $_POST['A-1-5'];    $p5m6 = $_POST['A-1-6'];    
$p6m6 = $_POST['A-1-7'];    $p7m6 = $_POST['A-1-8'];    $p8m6 = $_POST['A-1-9'];    
$total1 = $_POST['total1']; $p10m6 = $_POST['p10m6'];   $p11m6 = $_POST['p11m6'];   
$p12m6 = $_POST['p12m6'];   $p13m6 = $_POST['p13m6'];   $p14m6 = $_POST['p14m6'];   
$p15m6 = $_POST['p15m6'];   $p16m6 = $_POST['p16m6'];   $p17m6 = $_POST['p17m6'];   
$p18m6 = $_POST['p18m6'];   $p20m6 = $_POST['p20m6'];   $p21m6 = $_POST['p21m6'];   
$p22m6 = $_POST['p22m6'];   $p23m6 = $_POST['p23m6'];   
$p24m6 = $_POST['p24m6'];   $p25m6 = $_POST['p25m6'];   $p26m6 = $_POST['p26m6'];   
$p27m6 = $_POST['p27m6'];   $p28m6 = $_POST['p28m6'];   $p29m6 = $_POST['p29m6'];   
$total3 = $_POST['total3']; $p30m6 = $_POST['p30m6'];   $p31m6 = $_POST['p31m6'];   
$p32m6 = $_POST['p32m6'];   $p33m6 = $_POST['p33m6'];   
$p34m6 = $_POST['p34m6'];   $p35m6 = $_POST['p35m6'];   $p36m6 = $_POST['p36m6'];   
$p37m6 = $_POST['p37m6'];   $p38m6 = $_POST['p38m6'];   $p39m6 = $_POST['p39m6'];   
$p40m6 = $_POST['p40m6'];   $p41m6 = $_POST['p41m6'];   $p42m6 = $_POST['p42m6'];   
$p43m6 = $_POST['p43m6'];   $p44m6 = $_POST['p44m6'];   $p45m6 = $_POST['p45m6'];
$p46m6 = $_POST['p46m6'];   $p47m6 = $_POST['p47m6'];   $p48m6 = $_POST['p48m6'];
$p49m6 = $_POST['p49m6'];   $p50m6 = $_POST['p50m6'];   $p51m6 = $_POST['p51m6'];
$p52m6 = $_POST['p52m6'];   $p53m6 = $_POST['p53m6'];   $p54m6 = $_POST['p54m6'];
$p55m6 = $_POST['p55m6'];   $p56m6 = $_POST['p56m6'];   $p57m6 = $_POST['p57m6'];
$p58m6 = $_POST['p58m6'];   $p59m6 = $_POST['p59m6'];   $p60m6 = $_POST['p60m6'];
$p61m6 = $_POST['p61m6'];   $p62m6 = $_POST['p62m6'];   $p63m6 = $_POST['p63m6'];
$p64m6 = $_POST['p64m6'];   $total4 = $_POST['total4']; $p19m6 = $_POST['p19m6'];
$total2 = $_POST['total2']; $p9m6 = $_POST['p9m6'];     $subtotal1 = $_POST['subtotal1'];
$total5 = $_POST['total5'];
$total6 = $_POST['total6'];
$subtotal2 = $_POST['subtotal2']; $subtotal3 = $_POST['subtotal3']; $subtotal4 = $_POST['subtotal4'];

$recomendaciones1 = $_POST['recomendaciones1']; $recomendaciones2 = $_POST['recomendaciones2'];
$recomendaciones3 = $_POST['recomendaciones3']; $recomendaciones4 = $_POST['recomendaciones4'];
$recomendaciones5 = $_POST['recomendaciones5']; $recomendaciones6 = $_POST['recomendaciones6'];

$total = $_POST['totalgeneral'];

if($total == 'NaN'){
    echo'NaN';
}else{
    $consulta= "SELECT * FROM preguntasm6 WHERE id_estudiante = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id_estudiante);
$sentencia->execute();
$filas =  $sentencia->rowCount();

if($filas < 1){
    $consultai = "INSERT INTO preguntasm6(id_estudiante, suma1, p1m6, p2m6, p3m6, p4m6, p5m6, p6m6, p7m6, p8m6, total1,  
    recomendaciones1, p9m6, p10m6, p11m6, p12m6, p13m6, p14m6, p15m6, p16m6, p17m6, p18m6, total2, recomendaciones2, 
    subtotal1, p19m6, p20m6, p21m6, p22m6, p23m6, p24m6, p25m6, p26m6, p27m6, p28m6, p29m6, total3, recomendaciones3, 
    p30m6, p31m6, p32m6, p33m6, p34m6, p35m6, p36m6, p37m6, p38m6, p39m6, p40m6, p41m6, p42m6, p43m6, p44m6, p45m6, 
    total4, recomendaciones4, subtotal2, p46m6, p47m6, p48m6, p49m6, p50m6, p51m6, p52m6, p53m6, p54m6, p55m6, p56m6, p57m6, p58m6, p59m6, p60m6, p61m6, p62m6, p63m6, p64m6, total5, total6, subtotal3, subtotal4, recomendaciones5, recomendaciones6  )VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m6, $p2m6, $p3m6, $p4m6, $p5m6, $p6m6, $p7m6, $p8m6, $total1, $recomendaciones1, $p9m6, $p10m6, $p11m6, $p12m6, $p13m6, $p14m6, $p15m6, $p16m6, $p17m6, $p18m6, $total2, $recomendaciones2, $subtotal1, $p19m6, $p20m6, $p21m6, $p22m6, $p23m6, $p24m6, $p25m6, $p26m6, $p27m6, $p28m6, $p29m6, $total3, $recomendaciones3, $p30m6, $p31m6, $p32m6, $p33m6, $p34m6, $p35m6, $p36m6, $p37m6, $p38m6, $p39m6, $p40m6, $p41m6, $p42m6, $p43m6, $p44m6, $p45m6, $total4, $recomendaciones4, $subtotal2, $p46m6, $p47m6, $p48m6, $p49m6, $p50m6, $p51m6, $p52m6, $p53m6, $p54m6, $p55m6, $p56m6, $p57m6, $p58m6, $p59m6, $p60m6, $p61m6, $p62m6, $p63m6, $p64m6, $total5, $total6, $subtotal3, $subtotal4, $recomendaciones5, $recomendaciones6));

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
    $delete = "DELETE  FROM preguntasm6 WHERE id_estudiante = ? ";
    $senetenciad = $mbd->prepare($delete);
    $senetenciad->bindParam(1, $id_estudiante);
    $senetenciad->execute();

    $consultai = "INSERT INTO preguntasm6(id_estudiante, suma1, p1m6, p2m6, p3m6, p4m6, p5m6, p6m6, p7m6, p8m6, total1,  
    recomendaciones1, p9m6, p10m6, p11m6, p12m6, p13m6, p14m6, p15m6, p16m6, p17m6, p18m6, total2, recomendaciones2, 
    subtotal1, p19m6, p20m6, p21m6, p22m6, p23m6, p24m6, p25m6, p26m6, p27m6, p28m6, p29m6, total3, recomendaciones3, 
    p30m6, p31m6, p32m6, p33m6, p34m6, p35m6, p36m6, p37m6, p38m6, p39m6, p40m6, p41m6, p42m6, p43m6, p44m6, p45m6, 
    total4, recomendaciones4, subtotal2, p46m6, p47m6, p48m6, p49m6, p50m6, p51m6, p52m6, p53m6, p54m6, p55m6, p56m6, p57m6, p58m6, p59m6, p60m6, p61m6, p62m6, p63m6, p64m6, total5, total6, subtotal3, subtotal4, recomendaciones5, recomendaciones6 )VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m6, $p2m6, $p3m6, $p4m6, $p5m6, $p6m6, $p7m6, $p8m6, $total1, $recomendaciones1, $p9m6, $p10m6, $p11m6, $p12m6, $p13m6, $p14m6, $p15m6, $p16m6, $p17m6, $p18m6, $total2, $recomendaciones2, $subtotal1, $p19m6, $p20m6, $p21m6, $p22m6, $p23m6, $p24m6, $p25m6, $p26m6, $p27m6, $p28m6, $p29m6, $total3, $recomendaciones3, $p30m6, $p31m6, $p32m6, $p33m6, $p34m6, $p35m6, $p36m6, $p37m6, $p38m6, $p39m6, $p40m6, $p41m6, $p42m6, $p43m6, $p44m6, $p45m6, $total4, $recomendaciones4, $subtotal2, $p46m6, $p47m6, $p48m6, $p49m6, $p50m6, $p51m6, $p52m6, $p53m6, $p54m6, $p55m6, $p56m6, $p57m6, $p58m6, $p59m6, $p60m6, $p61m6, $p62m6, $p63m6, $p64m6, $total5, $total6, $subtotal3, $subtotal4, $recomendaciones5, $recomendaciones6));

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
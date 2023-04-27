<?php 
include('../databases/connectToBD.php');

$id_estudiante = $_POST['id_estudiante'];
$id_lista = $_POST['id_lista'];

$suma1 = $_POST['A-1-1'];   $p1m5 = $_POST['A-1-2'];    $p2m5 = $_POST['A-1-3']; 
$p3m5 = $_POST['A-1-4'];    $p4m5 = $_POST['A-1-5'];    $p5m5 = $_POST['A-1-6'];    
$p6m5 = $_POST['A-1-7'];    $p7m5 = $_POST['A-1-8'];    $p8m5 = $_POST['A-1-9'];    
$total1 = $_POST['total1']; $p10m5 = $_POST['p10m5'];   $p11m5 = $_POST['p11m5'];   
$p12m5 = $_POST['p12m5'];   $p13m5 = $_POST['p13m5'];   $p14m5 = $_POST['p14m5'];   
$p15m5 = $_POST['p15m5'];   $p16m5 = $_POST['p16m5'];   $p17m5 = $_POST['p17m5'];   
$p18m5 = $_POST['p18m5'];   $p20m5 = $_POST['p20m5'];   $p21m5 = $_POST['p21m5'];   
$p22m5 = $_POST['p22m5'];   $p23m5 = $_POST['p23m5'];   
$p24m5 = $_POST['p24m5'];   $p25m5 = $_POST['p25m5'];   $p26m5 = $_POST['p26m5'];   
$p27m5 = $_POST['p27m5'];   $p28m5 = $_POST['p28m5'];   $p29m5 = $_POST['p29m5'];   
$total3 = $_POST['total3']; $p30m5 = $_POST['p30m5'];   $p31m5 = $_POST['p31m5'];   
$p32m5 = $_POST['p32m5'];   $p33m5 = $_POST['p33m5'];   
$p34m5 = $_POST['p34m5'];   $p35m5 = $_POST['p35m5'];   $p36m5 = $_POST['p36m5'];   
$p37m5 = $_POST['p37m5'];   $p38m5 = $_POST['p38m5'];   $p39m5 = $_POST['p39m5'];   
$p40m5 = $_POST['p40m5'];   $p41m5 = $_POST['p41m5'];   $p42m5 = $_POST['p42m5'];   
$p43m5 = $_POST['p43m5'];   $p44m5 = $_POST['p44m5'];   $p45m5 = $_POST['p45m5'];
$p46m5 = $_POST['p46m5'];   $p47m5 = $_POST['p47m5'];   $p48m5 = $_POST['p48m5'];
$p49m5 = $_POST['p49m5'];   $p50m5 = $_POST['p50m5'];   $p51m5 = $_POST['p51m5'];
$p52m5 = $_POST['p52m5'];   $p53m5 = $_POST['p53m5'];   $p54m5 = $_POST['p54m5'];
$p55m5 = $_POST['p55m5'];   $p56m5 = $_POST['p56m5'];   $p57m5 = $_POST['p57m5'];
$p58m5 = $_POST['p58m5'];   $p59m5 = $_POST['p59m5'];   $p60m5 = $_POST['p60m5'];
$p61m5 = $_POST['p61m5'];   $p62m5 = $_POST['p62m5'];   $p63m5 = $_POST['p63m5'];   
$total4 = $_POST['total4']; $p19m5 = $_POST['p19m5'];   $total2 = $_POST['total2'];
$total5 = $_POST['total5']; $total6 = $_POST['total6']; $p9m5 = $_POST['p9m5'];     
$subtotal1 = $_POST['subtotal1'];   $subtotal2 = $_POST['subtotal2']; $subtotal3 = $_POST['subtotal3'];
$subtotal4 = $_POST['subtotal4'];

$recomendaciones1 = $_POST['recomendaciones1']; $recomendaciones2 = $_POST['recomendaciones2'];
$recomendaciones3 = $_POST['recomendaciones3']; $recomendaciones4 = $_POST['recomendaciones4'];
$recomendaciones5 = $_POST['recomendaciones5']; $recomendaciones6 = $_POST['recomendaciones6'];

$total = $_POST['totalgeneral'];

if($total == 'NaN'){
    echo'NaN';
}else{
    $consulta= "SELECT * FROM preguntasm5 WHERE id_estudiante = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id_estudiante);
$sentencia->execute();
$filas =  $sentencia->rowCount();

if($filas < 1){
    $consultai = "INSERT INTO preguntasm5(id_estudiante, suma1, p1m5, p2m5, p3m5, p4m5, p5m5, p6m5, p7m5, p8m5, total1,  
    recomendaciones1, p9m5, p10m5, p11m5, p12m5, p13m5, p14m5, p15m5, p16m5, p17m5, p18m5, total2, recomendaciones2, 
    subtotal1, p19m5, p20m5, p21m5, p22m5, p23m5, p24m5, p25m5, p26m5, p27m5, p28m5, p29m5, total3, recomendaciones3, 
    p30m5, p31m5, p32m5, p33m5, p34m5, p35m5, p36m5, p37m5, p38m5, p39m5, p40m5, p41m5, p42m5, p43m5, p44m5, p45m5, 
    total4, recomendaciones4, subtotal2, p46m5, p47m5, p48m5, p49m5, p50m5, p51m5, p52m5, p53m5, p54m5, p55m5, p56m5, p57m5, p58m5, p59m5, p60m5, p61m5, p62m5, p63m5, total5, total6, subtotal3, subtotal4, recomendaciones5, recomendaciones6 )VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m5, $p2m5, $p3m5, $p4m5, $p5m5, $p6m5, $p7m5, $p8m5, $total1, $recomendaciones1, $p9m5, $p10m5, $p11m5, $p12m5, $p13m5, $p14m5, $p15m5, $p16m5, $p17m5, $p18m5, $total2, $recomendaciones2, $subtotal1, $p19m5, $p20m5, $p21m5, $p22m5, $p23m5, $p24m5, $p25m5, $p26m5, $p27m5, $p28m5, $p29m5, $total3, $recomendaciones3, $p30m5, $p31m5, $p32m5, $p33m5, $p34m5, $p35m5, $p36m5, $p37m5, $p38m5, $p39m5, $p40m5, $p41m5, $p42m5, $p43m5, $p44m5, $p45m5, $total4, $recomendaciones4, $subtotal2, $p46m5, $p47m5, $p48m5, $p49m5, $p50m5, $p51m5, $p52m5, $p53m5, $p54m5, $p55m5, $p56m5, $p57m5, $p58m5, $p59m5, $p60m5, $p61m5, $p62m5, $p63m5, $total5, $total6, $subtotal3, $subtotal4, $recomendaciones5, $recomendaciones6));

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
    $delete = "DELETE  FROM preguntasm5 WHERE id_estudiante = ? ";
    $senetenciad = $mbd->prepare($delete);
    $senetenciad->bindParam(1, $id_estudiante);
    $senetenciad->execute();

    $consultai = "INSERT INTO preguntasm5(id_estudiante, suma1, p1m5, p2m5, p3m5, p4m5, p5m5, p6m5, p7m5, p8m5, total1,  
    recomendaciones1, p9m5, p10m5, p11m5, p12m5, p13m5, p14m5, p15m5, p16m5, p17m5, p18m5, total2, recomendaciones2, 
    subtotal1, p19m5, p20m5, p21m5, p22m5, p23m5, p24m5, p25m5, p26m5, p27m5, p28m5, p29m5, total3, recomendaciones3, 
    p30m5, p31m5, p32m5, p33m5, p34m5, p35m5, p36m5, p37m5, p38m5, p39m5, p40m5, p41m5, p42m5, p43m5, p44m5, p45m5, 
    total4, recomendaciones4, subtotal2, p46m5, p47m5, p48m5, p49m5, p50m5, p51m5, p52m5, p53m5, p54m5, p55m5, p56m5, p57m5, p58m5, p59m5, p60m5, p61m5, p62m5, p63m5, total5, total6, subtotal3, subtotal4, recomendaciones5, recomendaciones6 )VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $sentenciai = $mbd->prepare($consultai);
    $sentenciai->execute(array($id_estudiante, $suma1, $p1m5, $p2m5, $p3m5, $p4m5, $p5m5, $p6m5, $p7m5, $p8m5, $total1, $recomendaciones1, $p9m5, $p10m5, $p11m5, $p12m5, $p13m5, $p14m5, $p15m5, $p16m5, $p17m5, $p18m5, $total2, $recomendaciones2, $subtotal1, $p19m5, $p20m5, $p21m5, $p22m5, $p23m5, $p24m5, $p25m5, $p26m5, $p27m5, $p28m5, $p29m5, $total3, $recomendaciones3, $p30m5, $p31m5, $p32m5, $p33m5, $p34m5, $p35m5, $p36m5, $p37m5, $p38m5, $p39m5, $p40m5, $p41m5, $p42m5, $p43m5, $p44m5, $p45m5, $total4, $recomendaciones4, $subtotal2, $p46m5, $p47m5, $p48m5, $p49m5, $p50m5, $p51m5, $p52m5, $p53m5, $p54m5, $p55m5, $p56m5, $p57m5, $p58m5, $p59m5, $p60m5, $p61m5, $p62m5, $p63m5, $total5, $total6, $subtotal3, $subtotal4, $recomendaciones5, $recomendaciones6));

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
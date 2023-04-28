
<?php 
$preguntas = 'preguntasm5';
include('datos.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/forms.css">
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    <title>Practica de administracion - <?php echo $estudiante['Nombre'] ?> </title>
</head>
<body>
    
<div class="contenedor">
    <div class="cabecera flex border">
        <div class="left flex">
            <img src="../../assets/images/logo-form.jpg" alt="" width="115px" draggable="false">
            <img src="../../assets/images/logo-form2.jpg" alt="" width="115px" draggable="false">
        </div>
        <div class="center border-left flex">
        FORMATO DE EVALUACIÓN 
        PRACTICA DE ADMINISTRACIÓN
        PROGRAMA DE ENFERMERÍA
        </div>
        <div class="right">
            <div class="item flex border-bottom">
                <p>COD-DOC</p>
                <p class="border-left">FT-PE-029</p>
            </div>
            <div class="item flex border-bottom">
                <p>VERSION</p>
                <p>5</p>
            </div>
            <div class="item flex border-bottom">
                <p>FECHA</p>
                <p class="border-left">27/07/2018</p>
            </div>
            <div class="item flex">
                <p>PAGINA</p>
                <p class="border-left">1 de 2</p>
            </div>
        </div>
    </div>
    <div class="info border no-top">
        <p class="border-bottom padding-5">Nombre de alumno: <?php echo $estudiante['Nombre'] ?></p>
        <div class="cuerpo-group border-bottom flex">
            <p class="padding-5">Docente a cargo: <?php  echo ucwords($nombre) . ucwords($apellido) ?></p>
            <p class="border-left padding-5">Institucion: Corporacion Universitaria Rafael Nuñez</p>
        </div>
        <div class="cuerpo-group flex border-bottom">
            <p class="padding-5">Fecha: <?php echo date('y/m/d') ; ?></p>
            <p class="border-left padding-5">Semestre: <?php echo $lista['semestre']; ?></p>
        </div>
        <p class="padding-10"></p>

    </div>
    <div class="instructivo border no-top">
        <p class=" padding-5 instructivo-title">INSTRUCTIVO:  </p>
        <div class="row flex">
            <div class="blue">
                <span class="large top">A.PERSONALES:</span><span class="end top">20%</span>
                <span class="large">A.1. Relaciones interpersonales:</span><span class="end">10%</span>
                <span class="large">A.2. Responsabilidades y compromiso: </span><span class="end">10%</span>
            </div>
            <div class="red">
                <span class="large top">C - Evaluación Escrita de la rotación</span><span class="end top">10%</span>
            </div>
        </div>
        <div class="row flex">
        <div class="red">
                <span class="large top">B. PROFESIONALES</span><span class="end top">60%</span>
                <span class="large">B.1. Conocimiento cientifico:</span><span class="end">25%</span>
                <span class="large">B.2. Desempeño:</span><span class="end">35%</span>
            </div>
            <div class="blue">
                <span class="large top">D - PRODUCTO FINAL  DE ROTACION :</span><span class="end top">10%</span>
                <span class="large">CLUB DE REVISTA:</span><span class="end">4%</span>
                <span class="large">NARRATIVAS y PAE:</span><span class="end">6%</span>
            </div>
        </div>
    </div>
    <p class="padding-10 border no-top"></p>

    <div class="instructivo border no-top">
        <p class=" padding-5 instructivo-title border-bottom">CRITERIOS:</p>
        <p class="border-bottom padding-5 f-14">Los criterios para la evaluacion del estudiante seran los siguientes:</p>
        <p class="border-bottom padding-5 f-14"><b>S. Sobresaliente:</b> Se distingue entre los demas. Cumple con un desempeño que supera los logros esperado s (4,50 a 5,00)</p>
        <p class="border-bottom padding-5 f-14"><b>B. Bueno:</b> Alcanza los logros de acuerdo a lo esperado (3,50 a 4,49)</p>
        <p class="border-bottom padding-5 f-14"><b>I. Insuficiente:</b> Alcanza parcialmente los logros esperados (2,00 a 3,49)</p>
        <p class=" padding-5 f-14"><b>D. Deficiente:</b> No Alcanza los logros esperados (0,00 a 1,99)</p>
    </div>
    <p class="padding-10 border no-top"></p>

    <form method="POST" id="pradmform">
    <div class="competencias flex">
        <div class="col-1">
            <div class="header flex">
                <div class="titulo-1 ">
                    <p class="padding-5 border no-top titulo-1-p bold">A.COMPETENCIAS ACTITUDINALES Y DE COMPORTAMIENTO (20%)</p>
                    <p class="padding-5 border no-top bold fs-14">A.1 Relaciones interpersonales(10%)</p>
                </div>
                <div class="titulo-2 border center no-top bold no-left padding-5">
                    Nota
                </div>
            </div>

        </div>
        <div class="col-2 border no-top no-left">
            <div class="header ">
                <div class="titulo-3 ">
                    <p class="  padding-5 bold">Recomendaciones</p>
                </div>
            </div>
        </div>
        <!-- Preguntas de relaciones -->
        <div class="pregs relaciones">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item ">Mantiene relaciones cordiales y respetuosas con</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['suma1'] : '0.00'); ?>" readonly type="text" class="input campoA1 border no-top no-left padding-5" style="background-color: #FCABC4;" id="A-1-1" name="A-1-1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>a.</b></span>
                        <span class="nombre-item ">Docentes</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p1m5'] : '0.00'); ?>" type="text" class="input  subA1 border no-top no-left padding-5" id="A-1-2" name="A-1-2">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>b.</b></span>
                        <span class="nombre-item ">Compañeros</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p2m5'] : '0.00'); ?>" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-3" name="A-1-3">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>c.</b></span>
                        <span class="nombre-item ">Equipo de trabajo</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p3m5'] : '0.00'); ?>" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-4" name="A-1-4">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>d.</b></span>
                        <span class="nombre-item ">Pacientes</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p4m5'] : '0.00'); ?>" type="text" class="input border  subA1 no-top no-left padding-5" id="A-1-5" name="A-1-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Expresa sus inquietudes con seguridad y confianza</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p5m5'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-6" name="A-1-6">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Sigue las lineas de autoridad establecidas</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p6m5'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-7" name="A-1-7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Reconoce errores y acepta sugerencias</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p7m5'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-8" name="A-1-8">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Maneja situaciones de estres adecuadamente</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p8m5'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-9" name="A-1-9">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL A1</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total1'] : '0.00'); ?>" name="total1" type="text" id="totalA1" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones1"><?php echo ($cnotas > 0 ? $notas['recomendaciones1'] : ''); ?></textarea>
        </div>
        <p class="padding-10 border no-top" style="width: 100%"></p>
        <p class="padding-10 border no-top fs-14 bold" style="width: 100%">A2 Responsabilidad y compromiso (10%)</p>



        <!-- Preguntas de Responsabilidad y compromiso -->
        <div class="pregs responsabilidad">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item ">Se presenta a sus actividades 15 a 10 min antes y a la hora de recibir el turno esta listo. Permanece en el servicio el tiempo con su equipo de trabajo. </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p9m5'] : '0.00'); ?>" name="p9m5" type="text" class="input campoA2 border no-top no-left padding-5" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Utiliza el <b>uniforme completo</b> en buen estado y mantiene una buena presentacion personal (cabello recogido, sin prendas, ni accesorios)</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p10m5'] : '0.00'); ?>" name="p10m5" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Demuestra respeto por las normas de la institucion de practica</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p11m5'] : '0.00'); ?>" name="p11m5" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Cumple con la etica profesional</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p12m5'] : '0.00'); ?>" name="p12m5" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Asume con responsabilidad y madurez sus actividades</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p13m5'] : '0.00'); ?>" name="p13m5" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Desarrolla iniciativa aplicando conocimientos adquiridos</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p14m5'] : '0.00'); ?>" name="p14m5" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Genera, transmite y asume valores formativos en su comportamiento y actitud.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p15m5'] : '0.00'); ?>" name="p15m5" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Ejerce liderazgo en la toma de decisiones dentro del grupo
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p16m5'] : '0.00'); ?>" name="p16m5" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Asiste a eventos, encuentros y reuniones programados por la facultad.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p17m5'] : '0.00'); ?>" name="p17m5" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Hace uso racional y cuidadoso de los equipos y materiales a su cargo. Conserva materiales y equipos de trabajo completo

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p18m5'] : '0.00'); ?>" name="p18m5" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL A2</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total2'] : '0.00'); ?>" name="total2" type="text" id="totalA2" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones2" ><?php echo ($cnotas > 0 ? $notas['recomendaciones2'] : ''); ?></textarea>
        </div>
        <div class="total flex  " style="width: 100%">
            <p class="border no-top padding-5 cell-blue fs-14 bold" style="width: 70%">Subtotal A: Relaciones interpersonales(A1) + Responsabilidad y compromiso(A2)</p>
            <input value="<?php echo ($cnotas > 0 ? $notas['subtotal1'] : '0.00'); ?>" name="subtotal1" class="total1 border bold no-top no-left padding-5" style="text-align: center; width:30% ;background:teal;color:white" id="subtotalA">
        </div>
    </div>

    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>


    <!-- Competencias cognitivas -->
    <div class="competencias flex">
        <div class="col-1">
            <div class="header flex">
                <div class="titulo-1 ">
                    <p class="padding-5 border no-top titulo-1-p cognitivas bold">B. COMPETENCIAS COGNITIVAS, COGNOSCITIVAS Y PROCEDIMENTALES (70%)</p>
                    <p class="padding-5 border no-top bold fs-14" style="background-color: rgb(253,233,217);">B.1 Conocimiento cientifico: 25%</p>
                </div>
                <div class="titulo-2 border center no-top bold no-left padding-5">
                    Nota
                </div>
            </div>

        </div>
        <div class="col-2 border no-top no-left">
            <div class="header ">
                <div class="titulo-3 ">
                    <p class="  padding-5 bold">Recomendaciones</p>
                </div>
            </div>
        </div>
        <!-- Preguntas de Conocimiento -->
        <div class="pregs relaciones">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item "> Identifica conceptos y funciones generales de la Administración en Salud -Enfermería						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p19m5'] : '0.00'); ?>" name="p19m5" type="text" class="input campoB1 border no-top no-left padding-5" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Conoce las normas institucionales, profesionales y eticas (manuales de funciones), en el área de salud.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p20m5'] : '0.00'); ?>" name="p20m5" type="text" class="input campoB1 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Reconoce la normatividad vigente en salud, leyes y decretos reglamentarios que regulan la seguridad social		

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p21m5'] : '0.00'); ?>" name="p21m5" type="text" class="input campoB1 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Identifica los regimenes del SGSSS			

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p22m5'] : '0.00'); ?>" name="p22m5" type="text" class="input campoB1 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Conoce sus funciones como estudiante de administracion en el servicio asignado				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p23m5'] : '0.00'); ?>" name="p23m5" type="text" class="input campoB1 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Sabe formular un diagnostico situacional, diseñar planes estrategicos, operativos y programas.				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p24m5'] : '0.00'); ?>" name="p24m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Planea y distribuye su tiempo y el de sus delegados.						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p25m5'] : '0.00'); ?>" name="p25m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Conoce los lineamientos  basicos para la elaboracion de un plan de un cuadro de turnos.				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p26m5'] : '0.00'); ?>" name="p26m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Conoce los lineamientos basicos para la asignacion de personal de acuerdo a las caracterisitcas y necesidades de cada servicio.			
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p27m5'] : '0.00'); ?>" name="p27m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Reconoce cada una de las etapas del proceso de vinculacion de personal									
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p28m5'] : '0.00'); ?>" name="p28m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>11.</b></span>
                        <span class="nombre-item ">Define perfiles de acuerdo al cargo									
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p29m5'] : '0.00'); ?>" name="p29m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>12.</b></span>
                        <span class="nombre-item ">Conoce los derechos y deberes de los trabajadores de una institucion de acuerdo a su contratacion						
			
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p30m5'] : '0.00'); ?>" name="p30m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>13.</b></span>
                        <span class="nombre-item ">Conoce los conductos regulares para el manejo de los canales de la comunicación.			
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p31m5'] : '0.00'); ?>" name="p31m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>14.</b></span>
                        <span class="nombre-item ">Reconoce la importancia de la delegación de funciones								
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p32m5'] : '0.00'); ?>" name="p32m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>15.</b></span>
                        <span class="nombre-item ">Conoce los indicadores de gestión del área funcional 									
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p33m5'] : '0.00'); ?>" name="p33m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>16.</b></span>
                        <span class="nombre-item ">Define de manera clara conceptos de auditoria y administracion en enfermeria						 									
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p34m5'] : '0.00'); ?>" name="p34m5" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-yellow">

                        <span class="nombre-item bold ">TOTAL B1:</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total3'] : '0.00'); ?>" name="total3" type="text" id="totalB1" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones3" ><?php echo ($cnotas > 0 ? $notas['recomendaciones3'] : ''); ?></textarea>
        </div>
        <p class="padding-10 border no-top" style="width: 100%"></p>
        <p class="padding-10 border no-top fs-14 bold cell-header" style="width: 100%">B2 Desempeño (35%)</p>



        <!-- Preguntas de Desmpeño -->
        <div class="pregs responsabilidad">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item ">Observa y Valora clinicamente a su paciente						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p35m5'] : '0.00'); ?>" name="p35m5" type="text" class="input campoB2 border no-top no-left padding-5" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Planea el cuidados de Enfermería de acuerdo con los problemas identificados en el paciente de acuerdo al formato del programa. 						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p36m5'] : '0.00'); ?>" name="p36m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Brinda cuidado integral de enfemeria a los usuarios de su servicio						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p37m5'] : '0.00'); ?>" name="p37m5" type="text" class="input campoB2 border no-top no-left padding-5" >
                </div>
                
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Ejecuta los planes de cuidado según lo planeado										
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p38m5'] : '0.00'); ?>" name="p38m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Reajusta y evalua el plan de cuidados de acuerdo a los cambios presentados, dando las recomendaciones necesarias.						
				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p39m5'] : '0.00'); ?>" name="p39m5" type="text" class="input campoB2 border no-top no-left padding-5" >
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Establece prioridades en la prestación del servicio al sujeto de cuidado.											
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p40m5'] : '0.00'); ?>" name="p40m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Elabora diagnóstico situacional de la instituciones de salud como herramienta de planeación.										

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p41m5'] : '0.00'); ?>" name="p41m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Elabora planes estratégicos de acuerdo a los requerimientos de la institución											

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p42m5'] : '0.00'); ?>" name="p42m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Evalúa programas de atención básica									

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p43m5'] : '0.00'); ?>" name="p43m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Participa en la elaboración de instrumentos, manuales y protocolos 						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p44m5'] : '0.00'); ?>" name="p44m5" type="text" class="input campoB2 border no-top no-left padding-5" >
                </div>
                
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>11.</b></span>
                        <span class="nombre-item ">Evalúa y compara con los estándares los servicios prestados en la Institución										
					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p45m5'] : '0.00'); ?>" name="p45m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>12.</b></span>
                        <span class="nombre-item ">Aplica los conocimientos sobre legislación durante la administración del servicio						
								
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p46m5'] : '0.00'); ?>" name="p46m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>13.</b></span>
                        <span class="nombre-item ">Se preocupa por la organización y buena presentación del servicio.						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p47m5'] : '0.00'); ?>" name="p47m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>14.</b></span>
                        <span class="nombre-item ">Aplica y evalúa encuestas de satisfacción de clientes, de acuerdo a los resultados obtenidos propone estrategias de mejoramiento.						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p48m5'] : '0.00'); ?>" name="p48m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>15.</b></span>
                        <span class="nombre-item ">Aplica instrumentos elaborados para el manejo de la comunicación						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p49m5'] : '0.00'); ?>" name="p49m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>16.</b></span>
                        <span class="nombre-item ">Aplica conocimientos del proceso administrtivo en las actividades de enfermeria						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p50m5'] : '0.00'); ?>" name="p50m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>17.</b></span>
                        <span class="nombre-item ">Programa capacitación y entrenamiento  al personal  a su cargo de acuerdo a sus necesidades.						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p51m5'] : '0.00'); ?>" name="p51m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>18.</b></span>
                        <span class="nombre-item ">Supervisa actividades del personal a su cargo y rinde informe 						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p52m5'] : '0.00'); ?>" name="p52m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>19.</b></span>
                        <span class="nombre-item ">Planea y distribuye su tiempo y el de las personas a su cargo 						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p53m5'] : '0.00'); ?>" name="p53m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>20.</b></span>
                        <span class="nombre-item ">Establece prioridades en la asignación de funciones y actividades al personal a su cargo						
					
					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p54m5'] : '0.00'); ?>" name="p54m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>21.</b></span>
                        <span class="nombre-item ">Realiza calculo de personal y elabora horarios de acuerdo a los lineamientos establecidos en la institución						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p55m5'] : '0.00'); ?>" name="p55m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>22.</b></span>
                        <span class="nombre-item ">Diligencia correctamente los registros de enfermería y realiza auditoria de los mismos									
					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p56m5'] : '0.00'); ?>" name="p56m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>23.</b></span>
                        <span class="nombre-item ">Tiene en cuenta los criterios establecidos en la institución para la admisión y egreso del paciente.						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p57m5'] : '0.00'); ?>" name="p57m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>24.</b></span>
                        <span class="nombre-item ">Realiza Rondas de Enfermería y elabora plan de cuidados para atender a los pacientes								
					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p58m5'] : '0.00'); ?>" name="p58m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>25.</b></span>
                        <span class="nombre-item ">Brinda cuidado integral de enfemeria a los usuarios de su servicio										
					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p59m5'] : '0.00'); ?>" name="p59m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>26.</b></span>
                        <span class="nombre-item ">Rinde informes claros, precisos y significativos sobre actividades realizadas.				
					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p60m5'] : '0.00'); ?>" name="p60m5" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5" style="background-color: rgb(253,233,217);">

                        <span class="nombre-item bold ">TOTAL B2</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total4'] : '0.00'); ?>" name="total4" id="totalB2" type="text" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones4"><?php echo ($cnotas > 0 ? $notas['recomendaciones4'] : ''); ?></textarea>
        </div>
        
        <div class="total flex  " style="width: 100%">
            <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal B: Conocimientos cientificos(B1) + Desempeño(B2)</p>
            <input name="subtotal2" value="<?php echo ($cnotas > 0 ? $notas['subtotal2'] : '0.00'); ?>" class="total1 border bold no-top no-left padding-5" id="subtotalB" style="text-align: center; width:30% ;background:teal;color:white">
        </div>
    </div>

    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <br>

    <div class="competencias flex">
    <div class="col-1">
            <div class="header flex">
                <div class="titulo-1 ">
                    <p class="padding-5 border no-top titulo-1-p bold">C.</p>
                </div>
                <div class="titulo-2 border center no-top bold no-left padding-5">
                    Nota
                </div>
            </div>

        </div>
        <div class="col-2 border no-top no-left">
            <div class="header ">
                <div class="titulo-3 ">
                    <p class="  padding-5 bold">Recomendaciones</p>
                </div>
            </div>
        </div>
        <!-- Preguntas de relaciones -->
        <div class="pregs relaciones">
            <div class="items fs-14">

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>C-</b></span>
                        <span class="nombre-item ">Evaluación Escrita de la rotación 10%</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p61m5'] : '0.00'); ?>" name="p61m5" type="text" class="input  campoC border no-top no-left padding-5" id="A-1-2" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL C</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total5'] : '0.00'); ?>" name="total5" type="text" id="totalC" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
               
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones5"><?php echo ($cnotas > 0 ? $notas['recomendaciones5'] : ''); ?></textarea>
    </div>
    <div class="total flex  " style="width: 100%">
        <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal C: Evaluación Escrita de la rotación (10%) </p>
        <input readonly name="subtotal3" value="<?php echo ($cnotas > 0 ? $notas['subtotal3'] : '0.00'); ?>" class="total1 border bold no-top no-left padding-5" id="subtotalC" style="text-align: center; width:30% ;background:teal;color:white">
    </div>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <br>

    <div class="competencias flex">
    <div class="col-1">
            <div class="header flex">
                <div class="titulo-1 ">
                    <p class="padding-5 border no-top titulo-1-p bold">D - PRODUCTO FINAL  DE ROTACION :          10%                        </p>
                </div>
                <div class="titulo-2 border center no-top bold no-left padding-5">
                    Nota
                </div>
            </div>

        </div>
        <div class="col-2 border no-top no-left">
            <div class="header ">
                <div class="titulo-3 ">
                    <p class="  padding-5 bold">Recomendaciones</p>
                </div>
            </div>
        </div>
        <!-- Preguntas de relaciones -->
        <div class="pregs relaciones">
            <div class="items fs-14">

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b></b></span>
                        <span class="nombre-item ">CLUB DE REVISTA  ( Demuestra revisión bibliográfica y plantea con criterio científico la aplicabilidad del mismo en el contexto,de acuerdo al formato del programa):                                                   4%                            </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p62m5'] : '0.00'); ?>" name="p62m5" type="text" class="input  campoD border no-top no-left padding-5" id="A-1-2">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b></b></span>
                        <span class="nombre-item ">DIAGNOSTICO SITUACIONAL  (Socialización de protocolos,guías de manejo, PAE, actividades de educación continua,etc):                                    6%                       </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p63m5'] : '0.00'); ?>" name="p63m5" type="text" class="input border campoD  no-top no-left padding-5" id="A-1-3">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL D</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total6'] : '0.00'); ?>" name="total6" id="totalD" type="text" id="totalD" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>  
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones6"><?php echo ($cnotas > 0 ? $notas['recomendaciones6'] : ''); ?></textarea>  
    </div>
    <div class="total flex  " style="width: 100%">
        <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal D:  CLUB DE REVISTA (4%) + DIAGNOSTICO SITUACIONAL  (6%)</p>
        <input readonly name="subtotal4" value="<?php echo ($cnotas > 0 ? $notas['subtotal4'] : '0.00'); ?>" class="total1 border bold no-top no-left padding-5" id="subtotalD" style="text-align: center; width:30% ;background:teal;color:white">
    </div>

    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <br>

    <div class="total flex border no-left  " style="width: 100%">
        <p class="border no-top padding-5 fs-14 bold" style="width: 70%">TOTAL:Sumar subtotal A + Subtotal B + Subtotal C + Subtotal D</p>
        <input name="totalgeneral" value="<?php echo ($cnotas > 0 ? $notat['nota'] : '0.00'); ?>" readonly class="total1 border bold no-top no-left padding-5" id="totalF" style="text-align: center; width:30% ;background:teal;color:white">
    </div>

    <div class="botones">
       <button type="button" id="btncancel">Cancelar</button>  
        <button type="button" class="button2" id="btnsave">Guardar</button>
    </div>
    <input type="hidden" name="id_estudiante" value="<?php echo $estudiante['id'] ?>">
    <input type="hidden" name="id_lista" value="<?php echo $lista['id']?>">
    <input type="hidden" value="#pradmform" id="nformulario">

    </form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/forms.js"></script>
<script src="../../assets/js/pradmform.js"></script>
</body>
</html>
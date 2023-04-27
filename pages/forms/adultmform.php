<?php 
$preguntas = 'preguntasm6';
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
    <title>Adulto Mayor - <?php echo $estudiante['Nombre'] ?> </title>
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
        PRÁCTICA DE CUIDADO DE ENFERMERÍA AL ADULTO, ADULTO MAYOR Y FAMILIA.
        PROGRAMA DE ENFERMERÍA.
        </div>
        <div class="right">
            <div class="item flex border-bottom">
                <p>COD-DOC</p>
                <p class="border-left">FT-PE-027</p>
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
                <p class="border-left">1 de 3</p>
            </div>
        </div>
    </div>
    <div class="info border no-top">
        <p class="border-bottom padding-5">Nombre de alumno:</p>
        <div class="cuerpo-group border-bottom flex">
            <p class="padding-5">Docente a cargo:</p>
            <p class="border-left padding-5">Institucion:</p>
        </div>
        <div class="cuerpo-group flex border-bottom">
            <p class="padding-5">Fecha:</p>
            <p class="border-left padding-5">Semestre:</p>
        </div>
        <p class="padding-10"></p>

    </div>
    <div class="instructivo border no-top">
        <p class=" padding-5 instructivo-title">INSTRUCTIVO:</p>
        <div class="row flex">
            <div class="blue">
                <span class="large top">A.PERSONALES:</span><span class="end top">15%</span>
                <span class="large">A.1. Relaciones interpersonales:</span><span class="end">7%</span>
                <span class="large">A.2. Responsabilidades y compromiso: </span><span class="end">8%</span>
            </div>
            <div class="red">
                <span class="large top">C - Evaluación Escrita de la rotación</span><span class="end top">10%</span>
            </div>
        </div>
        <div class="row flex">
        <div class="red">
                <span class="large top">B. PROFESIONALES</span><span class="end top">55%</span>
                <span class="large">B.1. Conocimiento cientifico:</span><span class="end">20%</span>
                <span class="large">B.2. Desempeño:</span><span class="end">35%</span>
            </div>
            <div class="blue">
                <span class="large top">D - PRODUCTO FINAL  DE ROTACION :</span><span class="end top">20%</span>
                <span class="large">CLUB DE REVISTA:</span><span class="end">5%</span>
                <span class="large">NARRATIVAS y PAE:</span><span class="end">5%</span>
                <span class="large">DOFA y actividades educativas</span><span class="end">10%</span>
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

    <form method="POST" id="adultmform">
    <div class="competencias flex">
        <div class="col-1">
            <div class="header flex">
                <div class="titulo-1 ">
                    <p class="padding-5 border no-top titulo-1-p bold">A.COMPETENCIAS ACTITUDINALES Y DE COMPORTAMIENTO (15%)</p>
                    <p class="padding-5 border no-top bold fs-14">A.1 Relaciones interpersonales(7%)</p>
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
                    <input value="<?php echo ($cnotas > 0 ? $notas['p1m6'] : '0.00'); ?>" type="text" class="input  subA1 border no-top no-left padding-5" id="A-1-2" name="A-1-2">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>b.</b></span>
                        <span class="nombre-item ">Compañeros</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p2m6'] : '0.00'); ?>" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-3" name="A-1-3">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>c.</b></span>
                        <span class="nombre-item ">Equipo de trabajo</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p3m6'] : '0.00'); ?>" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-4" name="A-1-4">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>d.</b></span>
                        <span class="nombre-item ">Pacientes y familiares</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p4m6'] : '0.00'); ?>" type="text" class="input border  subA1 no-top no-left padding-5" id="A-1-5" name="A-1-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Expresa sus inquietudes con seguridad y confianza</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p5m6'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-6" name="A-1-6">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Sigue las lineas de autoridad establecidas</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p6m6'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-7" name="A-1-7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Reconoce errores y acepta sugerencias</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p7m6'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-8" name="A-1-8">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Maneja situaciones de estres adecuadamente</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p8m6'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-9" name="A-1-9">
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
        <p class="padding-10 border no-top fs-14 bold" style="width: 100%">A2 Responsabilidad y compromiso (8%)</p>



        <!-- Preguntas de Responsabilidad y compromiso -->
        <div class="pregs responsabilidad">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item ">Se presenta a sus actividades 15 a 10 min antes y a la hora de recibir el turno esta listo. Permanece en el servicio el tiempo con su equipo de trabajo. 		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p9m6'] : '0.00'); ?>" name="p9m6" type="text" class="input campoA2 border no-top no-left padding-5" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Utiliza el <b>uniforme completo</b> en buen estado y mantiene una buena presentacion personal (cabello recogido, sin prendas, ni accesorios)</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p10m6'] : '0.00'); ?>" name="p10m6" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Demuestra respeto por las normas de la institucion de la practica</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p11m6'] : '0.00'); ?>" name="p11m6" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Cumple con la etica profesional</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p12m6'] : '0.00'); ?>" name="p12m6" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Asume con responsabilidad y madurez sus actividades</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p13m6'] : '0.00'); ?>" name="p13m6" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Desarrolla iniciativa aplicando conocimientos adquiridos</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p14m6'] : '0.00'); ?>" name="p14m6" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Genera, transmite y asume valores formativos en su comportamiento y actitud.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p15m6'] : '0.00'); ?>" name="p15m6" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Ejerce liderazgo en la toma de decisiones dentro del grupo
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p16m6'] : '0.00'); ?>" name="p16m6" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Asiste a eventos, encuentros y reuniones programados por la facultad.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p17m6'] : '0.00'); ?>" name="p17m6" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Hace uso racional y cuidadoso de los equipos y materiales a su cargo. Conserva materiales y equipos de trabajo completo

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p18m6'] : '0.00'); ?>" name="p18m6" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL A2</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total2'] : '0.00'); ?>" name="total2" type="text" id="totalA2" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones2"><?php echo ($cnotas > 0 ? $notas['recomendaciones2'] : ''); ?></textarea>
        </div>
        <div class="total flex  " style="width: 100%">
            <p class="border no-top padding-5 cell-blue fs-14 bold" style="width: 70%">Subtotal A: Relaciones interpersonales(A1) + Responsabilidad y compromiso(A2)</p>
            <input readonly name="subtotal1" value="<?php echo ($cnotas > 0 ? $notas['subtotal1'] : '0.00'); ?>" class="total1 border bold no-top no-left padding-5" style="text-align: center; width:30% ;background:teal;color:white" id="subtotalA">
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
                    <p class="padding-5 border no-top titulo-1-p cognitivas bold">B. COMPETENCIAS COGNITIVAS, COGNOSCITIVAS Y PROCEDIMENTALES (55%)</p>
                    <p class="padding-5 border no-top bold fs-14" style="background-color: rgb(253,233,217);">B.1 Conocimiento cientifico: 20%</p>
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
                        <span class="nombre-item ">Identifica conceptos y funciones generales de la Administración 		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p19m6'] : '0.00'); ?>" name="p19m6" type="text" class="input campoB1 border no-top no-left padding-5" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Reconoce las normas institucionales, profesionales y eticas ( manuales de funciones)					

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p20m6'] : '0.00'); ?>" name="p20m6" type="text" class="input campoB1 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Reconoce la normatividad vigente en salud, leyes y decretos reglamentarios que regulan la seguridad social		


                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p21m6'] : '0.00'); ?>" name="p21m6" type="text" class="input campoB1 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Identifica los regimenes del SGSSS		

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p22m6'] : '0.00'); ?>" name="p22m6" type="text" class="input campoB1 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Describe indicadores de gestión del área funcional							
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p23m6'] : '0.00'); ?>" name="p23m6" type="text" class="input campoB1 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Conoce sus funciones como Estudiante de administracion en el servicio asignado							

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p24m6'] : '0.00'); ?>" name="p24m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Sabe formular un diagnostico situacional, diseñar planes estrategicos, operativos y programas.		

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p25m6'] : '0.00'); ?>" name="p25m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Conoce los lineamientos basicos para la elaboracion de un plan de un cuadro de turnos.		

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p26m6'] : '0.00'); ?>" name="p26m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Conoce los lineamientos basicos para la asignacion de personal de acuerdo a las caracterisitcas y necesidades de cada servicio.		

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p27m6'] : '0.00'); ?>" name="p27m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Tiene en cuenta el proceso de enfermería a la hora de planear y ejecutar intervenciones de enfermería				

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p28m6'] : '0.00'); ?>" name="p28m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>11.</b></span>
                        <span class="nombre-item ">Explica las características de calidad, oportunidad y eficiencia en la prestación de servicios de salud.				

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p29m6'] : '0.00'); ?>" name="p29m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>12.</b></span>
                        <span class="nombre-item ">Demuestra integración de conocimientos aprendidos durante el desarrollo de su formación académica.			

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p30m6'] : '0.00'); ?>" name="p30m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>13.</b></span>
                        <span class="nombre-item ">Explica la fisiopatología del diagnóstico de sus pacientes.				

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p31m6'] : '0.00'); ?>" name="p31m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>14.</b></span>
                        <span class="nombre-item ">Conoce y explica los correctos en la aplicación de medicamentos así como las precauciones requeridas antes, durante y después de administrar el medicamento.			

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p32m6'] : '0.00'); ?>" name="p32m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>15.</b></span>
                        <span class="nombre-item ">Interpreta los resultados de lo exámenes de laboratorios y estudios especiales				

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p33m6'] : '0.00'); ?>" name="p33m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>16.</b></span>
                        <span class="nombre-item ">Explica las bases  cientificas de los signos y sintomas de las diferentes patologias del adulto y adulto mayor				

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p34m6'] : '0.00'); ?>" name="p34m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>17.</b></span>
                        <span class="nombre-item ">Reconoce los componentes de protección especifica y detección temprana de alteraciones del adulto, adulto mayor.		

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p35m6'] : '0.00'); ?>" name="p35m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>18.</b></span>
                        <span class="nombre-item ">Reconoce la Norma Técnica y Guía para la Detección Temprana de las alteraciones del Adulto y Adulto mayor		

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p36m6'] : '0.00'); ?>" name="p36m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>19.</b></span>
                        <span class="nombre-item ">Enuncia el tratamiento de su paciente y describe la acción farmacológica del mismo según la patología. Conoce los correctos en la aplicación de medicamentos.		

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p37m6'] : '0.00'); ?>" name="p37m6" type="text" class="input border campoB1 no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-yellow">

                        <span class="nombre-item bold ">TOTAL B1:</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total3'] : '0.00'); ?>" name="total3" type="text" id="totalB1" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones3"><?php echo ($cnotas > 0 ? $notas['recomendaciones3'] : ''); ?></textarea>
        </div>
        <p class="padding-10 border no-top" style="width: 100%"></p>
        <p class="padding-10 border no-top fs-14 bold cell-header" style="width: 100%">B2 Desempeño (35%)</p>



        <!-- Preguntas de Desmpeño -->
        <div class="pregs responsabilidad">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item ">Elabora diagnóstico situacional de la instituciones de salud como herramienta de planeación.		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p38m6'] : '0.00'); ?>" name="p38m6" type="text" class="input campoB2 border no-top no-left padding-5" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Elabora planes estratégicos de acuerdo a los requerimientos de la institución		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p39m6'] : '0.00'); ?>" name="p39m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Organiza el equipo necesario para la ejecución de procedimientos y verifica su funciónamiento.		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p40m6'] : '0.00'); ?>" name="p40m6" type="text" class="input campoB2 border no-top no-left padding-5" >
                </div>
                
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Supervisa actividades del personal a su cargo y rinde informe							
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p41m6'] : '0.00'); ?>" name="p41m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Establece prioridades en la asignación de funciones y actividades del personal a su cargo							

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p42m6'] : '0.00'); ?>" name="p42m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Demuestra autonomía, asume el liderazgo y gestiona el cuidado de Enfermería  integrando el Ser, Saber y Saber Hacer.						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p43m6'] : '0.00'); ?>" name="p43m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Aplica conocimientos del proceso administrtivo en las actividades de enfermeria		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p44m6'] : '0.00'); ?>" name="p44m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Observa y Valora clínicamente a su paciente						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p45m6'] : '0.00'); ?>" name="p45m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Planea los cuidados de Enfermería de acuerdo con los problemas identificados en el paciente de acuerdo al formato del programa. 						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p46m6'] : '0.00'); ?>" name="p46m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Ejecuta los planes de cuidado según lo planeado						

                        </span>
                    </div>
                    <input  value="<?php echo ($cnotas > 0 ? $notas['p47m6'] : '0.00'); ?>" name="p47m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>11.</b></span>
                        <span class="nombre-item ">Reajusta y evalúa el plan de cuidados de acuerdo a los cambios presentados, dando las recomendaciones necesarias.						
					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p48m6'] : '0.00'); ?>" name="p48m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>12.</b></span>
                        <span class="nombre-item ">Establece prioridades en la prestación del servicio al sujeto de cuidado.											
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p49m6'] : '0.00'); ?>" name="p49m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>13.</b></span>
                        <span class="nombre-item ">Diligencia correctamente los registros de enfermería y realiza auditoria de los mismos		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p50m6'] : '0.00'); ?>" name="p50m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>14.</b></span>
                        <span class="nombre-item ">Tiene en cuenta los criterios establecidos en la institución para la admisión y egreso del paciente.		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p51m6'] : '0.00'); ?>" name="p51m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>15.</b></span>
                        <span class="nombre-item ">Realiza Rondas de Enfermería y elabora plan de cuidados para atender a los pacientes		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p52m6'] : '0.00'); ?>" name="p52m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>16.</b></span>
                        <span class="nombre-item ">Brinda cuidado integral de enfemeria a los usuarios de su servicio		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p53m6'] : '0.00'); ?>" name="p53m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>17.</b></span>
                        <span class="nombre-item ">Motiva e incentiva al personal en el cumplimiento de funciones y normas de seguridad y bioseguridad		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p54m6'] : '0.00'); ?>" name="p54m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>18.</b></span>
                        <span class="nombre-item ">Maneja adecuadamente los registros de historia clínica y formatos del servicio		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p55m6'] : '0.00'); ?>" name="p55m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>19.</b></span>
                        <span class="nombre-item ">Elabora y participa en Programas de Educación Contínua, realiza entrenamiento al personal a su cargo de acuerdo a las necesidades		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p56m6'] : '0.00'); ?>" name="p56m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>20.</b></span>
                        <span class="nombre-item ">Confronta la aplicación  de las normas técnicas y guías de atención de los programas		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p57m6'] : '0.00'); ?>" name="p57m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>21.</b></span>
                        <span class="nombre-item ">Prioriza las actividades de Promoción  de la Salud al adulto y adulto  mayor							
					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p58m6'] : '0.00'); ?>" name="p58m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>22.</b></span>
                        <span class="nombre-item ">Evalua programas de Atención Básica relacionados con el Adulto Mayor		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p59m6'] : '0.00'); ?>" name="p59m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>23.</b></span>
                        <span class="nombre-item ">Aplica y evalúa encuestas de satisfacción de clientes, de acuerdo a los resultados obtenidos propone estrategias de mejoramiento.		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p60m6'] : '0.00'); ?>" name="p60m6" type="text" class="input campoB2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5" style="background-color: rgb(253,233,217);">

                        <span class="nombre-item bold ">TOTAL B2</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total4'] : '0.00'); ?>" name="total4" type="text" id="totalB2" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones4"><?php echo ($cnotas > 0 ? $notas['recomendaciones4'] : ''); ?></textarea>
        </div>
        
        <div class="total flex  " style="width: 100%">
            <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal B: Conocimientos cientificos(B1) + Desempeño(B2)</p>
            <input readonly name="subtotal2" value="<?php echo ($cnotas > 0 ? $notas['subtotal2'] : '0.00'); ?>" class="total1 border bold no-top no-left padding-5" id="subtotalB" style="text-align: center; width:30% ;background:teal;color:white">
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
                    <input value="<?php echo ($cnotas > 0 ? $notas['p61m6'] : '0.00'); ?>" name="p61m6" type="text" class="input  campoC border no-top no-left padding-5" id="A-1-2">
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
                    <p class="padding-5 border no-top titulo-1-p bold">D - PRODUCTO FINAL  DE ROTACION :          20%                        </p>
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
                        <span class="nombre-item ">CLUB DE REVISTA  :                                          5%		                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p62m6'] : '0.00'); ?>" name="p62m6" type="text" class="input campoD border no-top no-left padding-5" id="A-1-2">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b></b></span>
                        <span class="nombre-item ">NARRATIVAS y PAE:                                          5%		</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p63m6'] : '0.00'); ?>" name="p63m6" type="text" class="input border campoD  no-top no-left padding-5" id="A-1-3">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b></b></span>
                        <span class="nombre-item ">DOFA y actividades educativas 10%			</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p64m6'] : '0.00'); ?>" name="p64m6" type="text" class="input border campoD  no-top no-left padding-5" id="A-1-3">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL D</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total6'] : '0.00'); ?>" name="total6" type="text" id="totalD" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>  
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones6"><?php echo ($cnotas > 0 ? $notas['recomendaciones6'] : ''); ?></textarea>  
    </div>
    <div class="total flex  " style="width: 100%">
        <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal D:  CLUB DE REVISTA : (5%) + NARRATIVAS y PAE: (5%) + DOFA y actividades educativas (10%)</p>
        <input readonly name="subtotal4" value="<?php echo ($cnotas > 0 ? $notas['subtotal4'] : '0.00'); ?>" class="total1 border bold no-top no-left padding-5" id="subtotalD" style="text-align: center; width:30% ;background:teal;color:white">
    </div>

    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <br>

    <div class="total flex border no-left  " style="width: 100%">
        <p class="border no-top padding-5 fs-14 bold" style="width: 70%">TOTAL:Sumar subtotal A + Subtotal B + Subtotal C + Subtotal D</p>
        <p class="total1 border bold no-top no-left padding-5" id="totalF" style="text-align: center; width:30% ;background:teal;color:white">0.00</p>
    </div>

    <div class="botones">
       <button type="button" id="btncancel">Cancelar</button>  
        <button type="button" class="button2" id="btnsave">Guardar</button>
    </div>
    <input type="hidden" name="id_estudiante" value="<?php echo $estudiante['id'] ?>">
    <input type="hidden" name="id_lista" value="<?php echo $lista['id']?>">
    <input type="hidden" value="#adultmform" id="nformulario">

    </form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/forms.js"></script>
<script src="../../assets/js/adultmform.js"></script>
</body>
</html>
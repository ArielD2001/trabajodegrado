<?php
$preguntas = 'preguntasm7';
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
    <title>Practica integral - <?php echo $estudiante['Nombre'] ?> </title>
</head>
<body>


<div class="contenedor">
    <div class="cabecera flex border">
        <div class="left flex">
            <img src="../../assets/images/logo-form.jpg" alt="" width="115px" draggable="false">
            <img src="../../assets/images/logo-form2.jpg" alt="" width="115px" draggable="false">
        </div>
        <div class="center border-left flex">
        FORMATO DE EVALUACIÓN PRÁCTICA INTEGRAL DE CUIDADO DE ENFERMERÍA PROGRAMA DE ENFERMERÍA 			
        </div>
        <div class="right">
            <div class="item flex border-bottom">
                <p>COD-DOC</p>
                <p class="border-left">FT-PE-025</p>
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

    <form method="post" id="praintform">
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
                    <input value="<?php echo ($cnotas > 0 ? $notas['suma1'] : '0.00'); ?>" readonly type="text" class="input campoA1 border no-top no-left padding-5" style="background-color: #FCABC4;" id="A-1-1" name="suma1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>a.</b></span>
                        <span class="nombre-item ">Docentes</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p1m7'] : '0.00'); ?>" type="text" class="input  subA1 border no-top no-left padding-5" id="A-1-2" name="p1m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>b.</b></span>
                        <span class="nombre-item ">Compañeros</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p2m7'] : '0.00'); ?>" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-3" name="p2m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>c.</b></span>
                        <span class="nombre-item ">Equipo de trabajo</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p3m7'] : '0.00'); ?>" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-4" name="p3m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>d.</b></span>
                        <span class="nombre-item ">Pacientes y familiares</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p4m7'] : '0.00'); ?>" type="text" class="input border  subA1 no-top no-left padding-5" id="A-1-5" name="p4m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Expresa sus inquietudes con seguridad y confianza</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p5m7'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-6" name="p5m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Sigue las lineas de autoridad establecidas</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p6m7'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-7" name="p6m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Reconoce errores y acepta sugerencias</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p7m7'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-8" name="p7m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Maneja situaciones de estres adecuadamente</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p8m7'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-9" name="p8m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL A1</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total1'] : '0.00'); ?>" type="text" name="total1" id="totalA1" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " name="recomendaciones1"  style="font-size:15px ; text-transform:capitalize"><?php echo ($cnotas > 0 ? $notas['recomendaciones1'] : ''); ?></textarea>
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
                    <input value="<?php echo ($cnotas > 0 ? $notas['p9m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p9m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Utiliza el <b>uniforme completo</b> en buen estado y mantiene una buena presentacion personal (cabello recogido, sin prendas, ni accesorios)</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p10m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p10m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Demuestra respeto por las normas de la institucion de la practica</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p11m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p11m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Cumple con la etica profesional</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p12m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p12m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Asume con responsabilidad y madurez sus actividades</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p13m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p13m7"> 
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Desarrolla iniciativa aplicando conocimientos adquiridos</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p14m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p14m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Genera, transmite y asume valores formativos en su comportamiento y actitud.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p15m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p15m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Ejerce liderazgo en la toma de decisiones dentro del grupo
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p16m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p16m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Asiste a eventos, encuentros y reuniones programados por la facultad.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p17m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p17m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Hace uso racional y cuidadoso de los equipos y materiales a su cargo. Conserva materiales y equipos de trabajo completo

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p18m7'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p18m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL A2</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total2'] : '0.00'); ?>" type="text" id="totalA2" name="total2" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " name="recomendaciones2"style="font-size:15px ; text-transform:capitalize"><?php echo ($cnotas > 0 ? $notas['recomendaciones2'] : ''); ?></textarea>
        </div>
        <div class="total flex  " style="width: 100%">
            <p class="border no-top padding-5 cell-blue fs-14 bold" style="width: 70%">Subtotal A: Relaciones interpersonales(A1) + Responsabilidad y compromiso(A2)</p>
            <input value="<?php echo ($cnotas > 0 ? $notas['subtotal1'] : '0.00'); ?>" name="subtotal1" readonly class="total1 border bold no-top no-left padding-5" style="text-align: center; width:30% ;background:teal;color:white" id="subtotalA">
        </div>
    </div>

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
                        <span class="nombre-item "> Identifica conceptos y funciones generales de administración						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p19m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p19m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Reconoce la normatividad vigente en salud, leyes y decretos reglamentarios que regulan la seguridad social								

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p20m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p20m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Identifica los regimenes del SGSSS						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p21m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p21m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Sabe formular un diagnostico situacional, diseñar planes estrategicos, operativos y programas.						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p22m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p22m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Describe indicadores de gestión del área funcional							
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p24m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p24m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Demuestra integración de conocimientos aprendidos durante el desarrollo de su formación académica.										

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p25m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p25m7">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Explica la fisiopatología del diagnóstico de sus pacientes.						

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p26m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p26m7">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Conoce y explica los correctos en la aplicación de medicamentos así como las precauciones requeridas antes, durante y después de administrar el medicamento.					

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p27m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p27m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Interpreta los resultados de lo examenes de laboratorios y estudios especiales				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p28m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p28m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Enuncia el tratamiento de su paciente y describe la acción farmacologica del mismo según la patologia.				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p29m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p29m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>11.</b></span>
                        <span class="nombre-item ">Conoce las diferentes escalas de valoración del Paciente con transtorno mental				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p30m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p30m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>12.</b></span>
                        <span class="nombre-item ">Aplica las diferentes escalas en la valoración del paciente con transtorno mental 				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p31m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p31m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>13.</b></span>
                        <span class="nombre-item ">Apoya las terapias individuales y familiares realizadas a los pacientes 				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p32m7'] : '0.00'); ?>" type="text" class="input campoB1 border no-top no-left padding-5" name="p32m7"> 
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-yellow">

                        <span class="nombre-item bold ">TOTAL B1:</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total3'] : '0.00'); ?>" type="text" name="total3" id="totalB1" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " name="recomendaciones3" style="font-size:15px ; text-transform:capitalize"><?php echo ($cnotas > 0 ? $notas['recomendaciones3'] : ''); ?></textarea>
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
                    <input value="<?php echo ($cnotas > 0 ? $notas['p33m7'] : '0.00'); ?>" type="text" class="input border campoB2 no-top no-left padding-5" name="p33m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Elabora planes estratégicos de acuerdo a los requerimientos de la institución		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p34m7'] : '0.00'); ?>" type="text" class="input border campoB2 no-top no-left padding-5" name="p34m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Supervisa actividades del personal a su cargo y rinde informe						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p35m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p35m7">
                </div>
                
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Establece prioridades en la asignación de funciones y actividades del personal a su cargo										
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p36m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p36m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Demuestra autonomia, asume el liderazgo y gestiona el cuidado de Enfermeria  integrando el Ser, Saber y Saber Hacer.				
                        </span>
                    </div>
                    <input  value="<?php echo ($cnotas > 0 ? $notas['p37m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p37m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Aplica y evalúa encuestas de satisfacción de clientes, de acuerdo a los resultados obtenidos propone estrategias de mejoramiento.									
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p38m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p38m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Elabora y participa en Programas de Educación Contínua y realiza entrenamiento al personal a su cargo de acuerdo a las necesidades					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p39m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p39m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Elabora horarios de acuerdo a los lineamientos establecidos en la institución				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p40m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p40m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Observa y Valora clinicamente a su paciente				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p41m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p41m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Planea el cuidados de Enfermería de acuerdo con los problemas identificados en el paciente de acuerdo al formato del programa. 				
                        </span>
                    </div>
                    <input  value="<?php echo ($cnotas > 0 ? $notas['p42m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p42m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>11.</b></span>
                        <span class="nombre-item ">Brinda cuidado integral de enfemeria a los usuarios de su servicio				
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p43m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p43m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>12.</b></span>
                        <span class="nombre-item ">Ejecuta los planes de cuidado según lo planeado															
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p44m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p44m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>13.</b></span>
                        <span class="nombre-item ">Reajusta y evalua el plan de cuidados de acuerdo a los cambios presentados, dando las recomendaciones necesarias.						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p45m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p45m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>14.</b></span>
                        <span class="nombre-item ">Establece prioridades en la prestación del servicio al sujeto de cuidado.				
		
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p46m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p46m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>15.</b></span>
                        <span class="nombre-item ">Diligencia correctamente los registros de enfermería y realiza auditoria de los mismos						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p47m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p47m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>16.</b></span>
                        <span class="nombre-item ">Motiva e incentiva al personal en el cumplimiento de funciones y normas de seguridad y bioseguridad						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p48m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5"  name="p48m7"> 
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>17.</b></span>
                        <span class="nombre-item ">Tiene en cuenta los criterios establecidos en la institución para la admisión y egreso de pacientes						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p49m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p49m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>18.</b></span>
                        <span class="nombre-item ">Realiza rondas de Enfermeria y planea acciones de acuerdo a la situacion encontrada. 						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p50m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p50m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>19.</b></span>
                        <span class="nombre-item ">Recibe y entrega el turno de acuerdo al procedimiento establecido en la institucion de salud.						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p51m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p51m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>20.</b></span>
                        <span class="nombre-item ">Maneja adecuadamente los registros de historia clínica y formatos del servicio						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p52m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p52m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>21.</b></span>
                        <span class="nombre-item ">Se preocupa por la organización y buena presentación del servicio.										
					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p53m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p53m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>22.</b></span>
                        <span class="nombre-item ">Organiza el equipo necesario para la ejecución de procedimientos y verifica su funciónamiento.					
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p54m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p54m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>23.</b></span>
                        <span class="nombre-item ">Demuestra seguridad y confianza en la realización de sus actividades.						
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p55m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p55m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>24.</b></span>
                        <span class="nombre-item ">Apoya las actividades realizadas al paciente (lúdicas y recreativas)										
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p56m7'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p56m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5" style="background-color: rgb(253,233,217);">

                        <span class="nombre-item bold ">TOTAL B2</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total4'] : '0.00'); ?>" type="text" name="total4" id="totalB2" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " name="recomendaciones4" style="font-size:15px ; text-transform:capitalize"><?php echo ($cnotas > 0 ? $notas['recomendaciones4'] : '0.00'); ?></textarea>
        </div>
        
        <div class="total flex  " style="width: 100%">
            <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal B: Conocimientos cientificos(B1) + Desempeño(B2)</p>
            <input value="<?php echo ($cnotas > 0 ? $notas['subtotal2'] : '0.00'); ?>" name="subtotal2" readonly class="total1 border bold no-top no-left padding-5" id="subtotalB" style="text-align: center; width:30% ;background:teal;color:white">
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
                    <input value="<?php echo ($cnotas > 0 ? $notas['p57m7'] : '0.00'); ?>" type="text" class="input  campoC border no-top no-left padding-5" id="A-1-2" name="p57m7">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " name="recomendaciones5" style="font-size:15px ; text-transform:capitalize"><?php echo ($cnotas > 0 ? $notas['recomendaciones5'] : ''); ?></textarea>
    </div>
    <div class="total flex  " style="width: 100%">
        <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal C: Evaluación Escrita de la rotación (10%) </p>
        <input value="<?php echo ($cnotas > 0 ? $notas['subtotal3'] : '0.00'); ?>" name="subtotal3" readonly class="total1 border bold no-top no-left padding-5" id="subtotalC" style="text-align: center; width:30% ;background:teal;color:white">
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
                    <input value="<?php echo ($cnotas > 0 ? $notas['p58m7'] : '0.00'); ?>" type="text" class="input  campoD border no-top no-left padding-5" id="A-1-2" name="p58m7">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b></b></span>
                        <span class="nombre-item ">NARRATIVAS y PAE:                                          5%		</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p59m7'] : '0.00'); ?>" type="text" class="input border campoD  no-top no-left padding-5" id="A-1-3" name="p59m7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b></b></span>
                        <span class="nombre-item ">DOFA y actividades educativas 10%			</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p60m7'] : '0.00'); ?>" type="text" class="input border campoD  no-top no-left padding-5" id="A-1-3" name="p60m7">
                </div>

                
            </div>  
            <textarea class="rec border no-top no-left padding-5 " name="recomendaciones6" style="font-size:15px ; text-transform:capitalize"><?php echo ($cnotas > 0 ? $notas['recomendaciones6'] : '0.00'); ?></textarea>  
    </div>
    <div class="total flex  " style="width: 100%">
        <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal D:  CLUB DE REVISTA : (5%) + NARRATIVAS y PAE: (5%) + DOFA y actividades educativas (10%)</p>
        <input value="<?php echo ($cnotas > 0 ? $notas['subtotal4'] : '0.00'); ?>" name="subtotal4" readonly class="total1 border bold no-top no-left padding-5" id="subtotalD" style="text-align: center; width:30% ;background:teal;color:white">
    </div>

    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <br>

    <div class="total flex border no-left  " style="width: 100%">
        <p class="border no-top padding-5 fs-14 bold" style="width: 70%">TOTAL:Sumar subtotal A + Subtotal B + Subtotal C + Subtotal D</p>
        <input value="<?php echo ($notas > 0 ? $notat['nota'] : '0.00'); ?>" name="totalgeneral" readonly class="total1 border bold no-top no-left padding-5" id="totalF" style="text-align: center; width:30% ;background:teal;color:white">
    </div>

    <input type="hidden" name="id_estudiante" value="<?php echo $estudiante['id'] ?>">
    <input type="hidden" name="id_lista" value="<?php echo $lista['id']?>">
    <input type="hidden" value="#praintform" id="nformulario">
    <input type="hidden" value="<?php  echo $_GET['r'];   ?>" name="rotacion">


    <div class="botones">
       <button type="button" id="btncancel">Cancelar</button>  
        <button type="button" class="button2" id="btnsave">Guardar</button>
    </div>

    </form>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/forms.js"></script>
    <script src="../../assets/js/praintform.js"></script>
   
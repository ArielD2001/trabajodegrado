<?php 
$preguntas = 'preguntasm1';
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
    <title>Promoción y prevención - <?php echo $estudiante['Nombre'] ?> </title>
</head>
<body>
    

<div class="contenedor">
    <div class="cabecera flex border">
        <div class="left flex">
            <img src="../../assets/images/logo-form.jpg" alt="" width="115px">
            <img src="../../assets/images/logo-form2.jpg" alt="" width="115px">
        </div>
        <div class="center border-left flex">
            FORMATO DE EVALUACIÓN PRACTICA
            PROMOCIÓN Y PROTECCIÓN EN SALUD
            PROGRAMA DE ENFERMERÍA
        </div>
        <div class="right">
            <div class="item flex border-bottom">
                <p>COD-DOC</p>
                <p class="border-left">FT-PE-024</p>
            </div>
            <div class="item flex border-bottom">
                <p>VERSION</p>
                <p>5</p>
            </div>
            <div class="item flex border-bottom">
                <p>FECHA</p>
                <p class="border-left">27/07/ 2018</p>
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
        <p class=" padding-5 instructivo-title">INSTRUCTIVO:</p>
        <div class="row flex">
            <div class="blue">
                <span class="large top">A.PEROSNALES:</span><span class="end top">20%</span>
                <span class="large">A.1. Relaciones interpersonales:</span><span class="end">10%</span>
                <span class="large">A.2. Responsabilidades y compromiso: </span><span class="end">10%</span>
            </div>
            <div class="red">

                <span class="large top">B.</span><span class="end top"></span>
                <span class="large">B.1. Conocimiento cientifico:</span><span class="end" title="30% + Examen de rotacion 10%">30% + Examen de rotacion 10%</span>
                <span class="large">B.2.</span><span class="end"></span>
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

    <form method="POST" id="form-prom">
    <div class="competencias flex">
        <div class="col-1">
            <div class="header flex">
                <div class="titulo-1 ">
                    <p class="padding-5 border no-top titulo-1-p bold">A. COMPETENCIAS ACTITUDINALES Y DE COMPORTAMIENTO (20%)</p>
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
                    <input value="<?php echo ($cnotas > 0 ? $notas['p1m1'] : '0.00'); ?>" type="text" class="input  subA1 border no-top no-left padding-5" id="A-1-2" name="A-1-2">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>b.</b></span>
                        <span class="nombre-item ">Compañeros</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p2m1'] : '0.00'); ?>" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-3" name="A-1-3">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>c.</b></span>
                        <span class="nombre-item ">Equipo de trabajo</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p3m1'] : '0.00'); ?>" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-4" name="A-1-4">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>d.</b></span>
                        <span class="nombre-item ">Pacientes</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p4m1'] : '0.00'); ?>" type="text" class="input border  subA1 no-top no-left padding-5" id="A-1-5" name="A-1-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Expresa sus inquietudes con seguridad y confianza</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p5m1'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-6" name="A-1-6">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Sigue las lineas de autoridad establecidas</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p6m1'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-7" name="A-1-7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Reconoce errores y acepta sugerencias</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p7m1'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-8" name="A-1-8">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Maneja situaciones de estres adecuadamente</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p8m1'] : '0.00'); ?>" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-9" name="A-1-9">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL A1</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total1'] : '0.00'); ?>" name="total1" type="text" id="totalA1" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones1" ><?php echo ($cnotas > 0 ? $notas['recomendaciones1'] : ''); ?></textarea>
        </div>
        <p class="padding-10 border no-top" style="width: 100%"></p>
        <p class="padding-10 border no-top fs-14 bold" style="width: 100%">A2 Responsabilidad y compromiso (10%)</p>



        <!-- Preguntas de Responsabilidad y compromiso] -->
        <div class="pregs responsabilidad">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item ">Se presenta a sus actividades 15 a 10 minutos antes y a la hora de recibir</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p9m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5 " name="p9m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Utiliza el <b>uniforme completo</b> en buen estado y mantiene una buena presentacion personal (cabello recogido, sin prendas, ni accesorios)</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p10m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name ="p10m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Demuestra respeto por las normas de la institucion de la practica</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p11m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p11m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Cumple con la etica profesional</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p12m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5"name="p12m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Asume con responsabilidad y madurez sus actividades</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p13m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p13m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Desarrolla iniciativa aplicando conocimientos adquiridos</span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p14m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p14m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Genera, transmite y asume valores formativos en su comportamiento y actitud.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p15m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p15m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Ejerce liderazgo en la toma de decisiones dentro del grupo
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p16m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p16m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Asiste a eventos, encuentros y reuniones programados por la facultad.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p17m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p17m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Hace uso racional y cuidadoso de los equipos y materiales a su cargo. Conserva materiales y equipos de trabajo completo

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p18m1'] : '0.00'); ?>" type="text" class="input campoA2 border no-top no-left padding-5" name="p18m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL A2</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total2'] : '0.00'); ?>" type="text" id="totalA2" class="input border no-top no-left padding-5" name="total2" style="background-color: yellow">
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


    <!-- Competencias cognitivas -->
    <div class="competencias flex">
        <div class="col-1">
            <div class="header flex">
                <div class="titulo-1 ">
                    <p class="padding-5 border no-top titulo-1-p cognitivas bold">B. COMPETENCIAS COGNITIVAS, COGNOSCITIVAS Y PROCEDIMENTALES (80%)</p>
                    <p class="padding-5 border no-top bold fs-14" style="background-color: rgb(253,233,217);">B.1 Conocimiento cientifico: 40%</p>
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
                        <span class="nombre-item ">Identifica los conceptos de salud familiar, atencion primaria y salud publica.

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p19m1'] : '0.00'); ?>" type="text" class="input border campoB1 no-top no-left padding-5" name="p19m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Reconoce claramente los ambitos de actuacion en el periodo resolutorio.

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p20m1'] : '0.00'); ?>" type="text" class="input border campoB1 no-top no-left padding-5" name="p20m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Reconoce los componentes de la proteccion especifica y deteccion temprana.

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p21m1'] : '0.00'); ?>" type="text" class="input border campoB1 no-top no-left padding-5" name="p21m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Identifica las necesidades y/o problemas de la comunidad para promover autocuidado

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p22m1'] : '0.00'); ?>" type="text" class="input border campoB1 no-top no-left padding-5" name="p22m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Maneja los conceptos sobre:
                        </span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['suma2'] : '0.00'); ?>" type="text" class="input border campoB1 no-top no-left padding-5" name="suma2" id="preguntab5" style="background-color: #FCABC4;">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>a.</b></span>
                        <span class="nombre-item ">Instrumentos para el abordaje comunitario
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p23m1'] : '0.00'); ?>" type="text" class="input  subB1 border no-top no-left padding-5" name="p23m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>b.</b></span>
                        <span class="nombre-item ">Charla Educativa
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p24m1'] : '0.00'); ?>" type="text" class="input border subB1 no-top no-left padding-5" name="p24m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>c.</b></span>
                        <span class="nombre-item ">Visita Domiciliaria
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p25m1'] : '0.00'); ?>" type="text" class="input border subB1 no-top no-left padding-5" name="p25m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Maneja conceptos de APGAR- FAMILIOGRAMA-ECOMAPA
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p26m1'] : '0.00'); ?>" type="text" class="input border campoB1 no-top no-left padding-5" name="p26m1">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Maneja los conceptos y contenidos generales de AIEPI Componente comunitario

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p27m1'] : '0.00'); ?>" type="text" class="input border campoB1 no-top no-left padding-5" name="p27m1">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Reconoce las Normas Tecnicas y Guias de atencion ( 00412 ) MIAS y RIAS

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p28m1'] : '0.00'); ?>" type="text" class="input border no-top campoB1 no-left padding-5" name="p28m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item "> Conoce el programa ampliado de inmunización (PAI) normas de bioseguridad y cadena de frío

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p29m1'] : '0.00'); ?>" type="text" class="input border no-top no-left campoB1 padding-5" name="p29m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-yellow">

                        <span class="nombre-item bold ">TOTAL B1:</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total3'] : '0.00'); ?>" type="text" id="totalB1" class="input border no-top no-left padding-5" name="total3" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name ="recomendaciones3"><?php echo ($cnotas > 0 ? $notas['recomendaciones3'] : ''); ?></textarea>
        </div>
        <p class="padding-10 border no-top" style="width: 100%"></p>
        <p class="padding-10 border no-top fs-14 bold cell-header" style="width: 100%">B2 Desempeño (40%)</p>



        <!-- Preguntas de Desmpeño -->
        <div class="pregs responsabilidad">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item ">Demuestra seguridad y confianza en la realización de sus actividades.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p30m1'] : '0.00'); ?>" type="text" class="input border campoB2 no-top no-left padding-5" name="p30m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Realiza remisión de necesidades detectadas en la familia.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p31m1'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p31m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Planea,ejecuta y evalua:
                        </span>
                    </div>
                    <input readonly id="preguntab3" value="<?php echo ($cnotas > 0 ? $notas['suma3'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="suma3" style="background-color: #FCABC4;">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>a.</b></span>
                        <span class="nombre-item "> Plan de Actividades diarias.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p32m1'] : '0.00'); ?>" type="text" class="input subB2 border no-top no-left padding-5" name="p32m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>b.</b></span>
                        <span class="nombre-item "> Charlas Educativas.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p33m1'] : '0.00'); ?>" type="text" class="input border subB2 no-top no-left padding-5" name="p33m1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>c.</b></span>
                        <span class="nombre-item "> Instrumentos de la salud familiar.
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p34m1'] : '0.00'); ?>" type="text" class="input border subB2 no-top no-left padding-5" name="p34m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>d.</b></span>
                        <span class="nombre-item "> Visitas Domiciliarias

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p35m1'] : '0.00'); ?>" type="text" class="input border subB2 no-top no-left padding-5" name="p35m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>e.</b></span>
                        <span class="nombre-item ">Promoción

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p36m1'] : '0.00'); ?>" type="text" class="input border subB2 no-top no-left padding-5" name="p36m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>f.</b></span>
                        <span class="nombre-item ">Control
                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p37m1'] : '0.00'); ?>" type="text" class="input border subB2 no-top no-left padding-5" name="p37m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>g.</b></span>
                        <span class="nombre-item ">Inasistencia

                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p38m1'] : '0.00'); ?>" type="text" class="input border subB2 no-top no-left padding-5" name="p38m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item "> Confronta carnet de Vacunación


                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p39m1'] : '0.00'); ?>" type="text" class="input border campoB2 no-top no-left padding-5" name="p39m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Prioriza las actividades en promocion de la salud, de la familia asignada


                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p40m1'] : '0.00'); ?>" type="text" class="input border campoB2 no-top no-left padding-5" name="p40m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Realiza Educación en Salud de acuerdo a las necesidades detectadas.


                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p41m1'] : '0.00'); ?>" type="text" class="input campoB2 border no-top no-left padding-5" name="p41m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Utiliza ayudas didacticas para la promocion de la salud


                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p42m1'] : '0.00'); ?>" type="text" class="input border campoB2 no-top no-left padding-5" name="p42m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Participa en el desarrollo del Trabajo de Campo.


                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p43m1'] : '0.00'); ?>" type="text" class="input border no-top campoB2 no-left padding-5" name="p43m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Aplica en su plan de Accion Comunitaria el PAE diseñado en la práctica


                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p44m1'] : '0.00'); ?>" type="text" class="input border no-top no-left campoB2 padding-5" name="p44m1">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Evaluación escrita de la rotación


                        </span>
                    </div>
                    <input value="<?php echo ($cnotas > 0 ? $notas['p45m1'] : '0.00'); ?>" type="text" class="input border no-top no-left campoB2 padding-5" name="p45m1">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5" style="background-color: rgb(253,233,217);">

                        <span class="nombre-item bold ">TOTAL B2</span>
                    </div>
                    <input readonly value="<?php echo ($cnotas > 0 ? $notas['total4'] : '0.00'); ?>" id="totalB2" type="text" class="input border no-top no-left padding-5" name="total4" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize" name="recomendaciones4"><?php echo ($cnotas > 0 ? $notas['recomendaciones4'] : ''); ?></textarea>
        </div>
        <div class="total flex  " style="width: 100%">
            <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal B: Conocimientos cientificos(B1) + Desempeño(B2)</p>
            <input readonly name="subtotal2" value="<?php echo ($cnotas > 0 ? $notas['subtotal2'] : '0.00'); ?>" class="total1 border bold no-top no-left padding-5" style="text-align: center; width:30% ;background:teal;color:white" id="subtotalB">
        </div>
    </div>

    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <br>

    <div class="total flex border no-left  " style="width: 100%">
        <p class="border no-top padding-5 fs-14 bold" style="width: 70%">TOTAL:Sumar subtotal A + Subtotal B</p>
        <input name="totalgeneral" value="<?php echo ($cnotas > 0 ? $notat['nota'] : '0.00'); ?>" readonly class="total1 border bold no-top no-left padding-5" id="totalF" style="text-align: center; width:30% ;background:teal;color:white">
    </div>


    <div class="botones">
       <button type="button" id="btncancel">Cancelar</button>  
        <button type="button" class="button2" id="btnsave">Guardar</button>
    </div>
    <input type="hidden" name="id_estudiante" value="<?php echo $estudiante['id'] ?>">
    <input type="hidden" name="id_lista" value="<?php echo $lista['id']?>">
    <input type="hidden" value="#form-prom" id="nformulario">

    </form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/forms.js"></script>
<script src="../../assets/js/prom.js"></script>
</body>
</html>
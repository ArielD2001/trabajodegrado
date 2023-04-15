<style>
    * {
        padding: 0;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
        outline: none;
    }

    .border {
        border: 1px solid black;
    }

    textarea {
        resize: none;
        transition: .1s;
    }

    .contenedor {
        width: 900px;
        margin: 0 auto;
        transform: scale(0.9);
    }

    .item:hover,
    textarea:hover {
        background: rgb(0, 0, 0, 0.2);
    }

    input {
        text-align: center;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: transparent;
    }

    input:focus {
        background-color: rgb(0, 0, 0, 0.2);
    }

    input::placeholder {
        color: black;
    }

    .flex {
        display: flex;
    }

    .center {
        justify-content: center;
        align-items: center;
        padding: 20px;
        font-weight: bold;
        text-align: center;
    }
.left{
    column-gap: 40px;
}
    .left,
    .center {
        width: 40%;
        justify-content: center;
        align-items: center;
    }

    .right {
        width: 20%;
    }

    .border-left {
        border-left: 1px solid grey;
    }

    .border-bottom {
        border-bottom: 1px solid grey;
    }

    .no-top {
        border-top: 1px solid transparent;
    }

    .no-bottom {
        border-bottom: 1px solid transparent;
    }

    .no-left {
        border-left: 1px solid transparent;
    }

    .item {
        transition: .1s;
        display: flex;
        justify-content: space-between;
    }

    .item p {
        width: 50%;
        padding: 5px;
        text-align: center;
        border-left: 1px solid grey;
        font-weight: bold;
    }

    .padding-5 {
        padding: 5px;
    }

    .padding-10 {
        padding: 10px;
    }

    .info {
        font-weight: bold;
        font-size: 14px;
    }

    .f-14 {
        font-size: 14px;
    }

    .cuerpo-group {
        justify-content: space-between;
    }

    .cuerpo-group p {
        width: 50%;
    }

    .blue,
    .red {
        width: 50%;
    }

    .bold {
        font-weight: bold;
    }

    .instructivo-title {
        font-weight: bold;
    }

    .blue,
    .red,
    .grenn {
        background-color: lightblue;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .red {
        background-color: rgb(253, 233, 217);
    }
    .green{
        background-color: rgb(69,193,59);
    }

    .end {
        width: 25%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .blue span,
    .red span {
        padding: 5px;
    }

    .cell-blue {
        background-color: lightblue;
    }

    .blue .large,
    .red .large {
        width: 75%;
    }

    .blue .top {
        background-color: lightskyblue;
    }

    .red .top,
    .cell-yellow {
        background-color: rgb(251, 212, 180);
    }

    .titulo-1-p {
        background-color: skyblue;
    }

    .titulo-1-p.cognitivas,
    .cell-header {
        background: rgb(251, 212, 180) !important;
    }

    .competencias {
        flex-wrap: wrap;
    }

    .competencias .col-1 {
        width: 70%;
    }

    .col-2 {
        width: 30%;
    }

    .header .titulo-1 {
        width: 85%;
    }



    .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .header .titulo-2 {
        width: 15%;
    }

    .titulo-3 p {
        text-align: center;
    }

    .fs-14 {
        font-size: 15px;
    }

    .numero {
        width: 30px !important;
    }

    .padding-15 {
        padding: 13.5px;
    }

    .items {
        width: 70% !important;
    }

    .items .item {
        width: 100%;
    }

    .items .item .pregunta {
        width: 85%;
    }

    .items .item .input {
        width: 15%;
    }

    .pregs {
        width: 100%;
        position: relative;
        display: flex;
        height: auto;
    }

    .pregunta .numer {
        height: 100%;
        width: 50px;


    }

    .rec {
        width: 30%;
        height: 100%;
    }
</style>


<div class="contenedor">
    <div class="cabecera flex border">
        <div class="left flex">
            <img src="../../assets/images/logo-form.jpg" alt="" width="115px" draggable="false">
            <img src="../../assets/images/logo-form2.jpg" alt="" width="115px" draggable="false">
        </div>
        <div class="center border-left flex">
        FORMATO DE EVALUACIÓN DE PRACTICAS                                CUIDADO DE ENFERMERÍA MATERNO INFANTIL Y FAMILIA PROGRAMA DE ENFERMERÍA			
			
        </div>
        <div class="right">
            <div class="item flex border-bottom">
                <p>COD-DOC</p>
                <p class="border-left">FT-PE-028</p>
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
                <p class="border-left">1 de 4</p>
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
                    <input value="0.00" readonly type="text" class="input campoA1 border no-top no-left padding-5" style="background-color: #FCABC4;" id="A-1-1" name="A-1-1">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>a.</b></span>
                        <span class="nombre-item ">Docentes</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input  subA1 border no-top no-left padding-5" id="A-1-2" name="A-1-2">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>b.</b></span>
                        <span class="nombre-item ">Compañeros</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-3" name="A-1-3">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>c.</b></span>
                        <span class="nombre-item ">Equipo de trabajo</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-4" name="A-1-4">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>d.</b></span>
                        <span class="nombre-item ">Pacientes</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border  subA1 no-top no-left padding-5" id="A-1-5" name="A-1-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Expresa sus inquietudes con seguridad y confianza</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-6" name="A-1-6">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Sigue las lineas de autoridad establecidas</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-7" name="A-1-7">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Reconoce errores y acepta sugerencias</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-8" name="A-1-8">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Maneja situaciones de estres adecuadamente</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border campoA1 no-top no-left padding-5" id="A-1-9" name="A-1-9">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL A1</span>
                    </div>
                    <input readonly value="0.00" type="text" id="totalA1" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize"></textarea>
        </div>
        <p class="padding-10 border no-top" style="width: 100%"></p>
        <p class="padding-10 border no-top fs-14 bold" style="width: 100%">A2 Responsabilidad y compromiso (10%)</p>



        <!-- Preguntas de Responsabilidad y compromiso -->
        <div class="pregs responsabilidad">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item ">Se presenta a sus actividades 15 a 10 min antes y a la hora de recibir el turno esta listo. Permanece en el servicio el tiempo con su equipo de trabajo.</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Utiliza el <b>uniforme completo</b> en buen estado y mantiene una buena presentacion personal (cabello recogido, sin prendas, ni accesorios)</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Demuestra respeto por las normas de la Institucion de Practica</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Cumple con la etica profesional</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Asume con responsabilidad y madurez sus actividades</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Desarrolla iniciativa aplicando conocimientos adquiridos</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Genera, transmite y asume valores formativos en su comportamiento y actitud.
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Ejerce liderazgo en la toma de decisiones dentro del grupo
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Asiste a eventos, encuentros y reuniones programados por la facultad.
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Hace uso racional y cuidadoso de los equipos y materiales a su cargo. Conserva materiales y equipos de trabajo completo

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input campoA2 border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL A2</span>
                    </div>
                    <input readonly value="0.00" type="text" id="totalA2" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize"></textarea>
        </div>
        <div class="total flex  " style="width: 100%">
            <p class="border no-top padding-5 cell-blue fs-14 bold" style="width: 70%">Subtotal A: Relaciones interpersonales(A1) + Responsabilidad y compromiso(A2)</p>
            <p class="total1 border bold no-top no-left padding-5" style="text-align: center; width:30% ;background:teal;color:white" id="subtotalA">0.00</p>
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
                        <span class="nombre-item ">Reconoce los principios cientifícos en la realización de los procedimientos básicos en el cuidado del paciente.
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Enuncia en forma verbal o escrita las bases teóricas.
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Determina las etapas y componentes del proceso de enfermería y el plan de cuidados  aplicado a la práctica.

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Conoce las técnicas asépticas necesarias para  la ejecución del cuidado de enfermería.

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Conoce las normas de bioseguridad y  el adecuado manejo de los residuos hospitalarios.					
                        </span>
                    </div>
                    <input readonly placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Conoce, identifica y diferencia los insumos y equipos biomédicos necesarios para la atención al paciente.					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Conoce las actividades básicas de enfermería relacionadas con el bienestar, comodidad y seguridad del usuario.

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>


                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Identifica los procedimientos de enfermería en la admisión y egreso del paciente

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Conceptualiza e identifica los medicamentos, soluciones  endovenosas y sus diferentes vías  de administración.

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-yellow">

                        <span class="nombre-item bold ">TOTAL B1:</span>
                    </div>
                    <input readonly value="0.00" type="text" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize"></textarea>
        </div>
        <p class="padding-10 border no-top" style="width: 100%"></p>
        <p class="padding-10 border no-top fs-14 bold cell-header" style="width: 100%">B2 Desempeño (35%)</p>



        <!-- Preguntas de Desmpeño -->
        <div class="pregs responsabilidad">
            <div class="items fs-14">
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>1.</b></span>
                        <span class="nombre-item ">Recibe y entrega el turno de acuerdo al procedimiento. Asiste y participa en la ronda de enfermería aportando datos del paciente sugiriendo conductas según  evolución y respuestas al tratamiento					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5" >
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>2.</b></span>
                        <span class="nombre-item ">Realiza los cinco momentos del lavado de manos					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>3.</b></span>
                        <span class="nombre-item ">Realiza valoración física del paciente asignado					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5" >
                </div>
                
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>4.</b></span>
                        <span class="nombre-item ">Detecta problemas e identifica necesidades de los pacientes (diagnóstico de enfermería) planifica PAE					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>5.</b></span>
                        <span class="nombre-item ">Desarrolla los procedimientos de Higiene y Bienestar:					



                        </span>
                    </div>
                    <input readonly placeholder="0.00" type="text" class="input border no-top no-left padding-5" style="background-color: #FCABC4;">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>a.</b></span>
                        <span class="nombre-item ">Baño del paciente					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>b.</b></span>
                        <span class="nombre-item "> Arreglo de la unidad del paciente					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>c.</b></span>
                        <span class="nombre-item ">Cambios de posición, masajes y traslado de pacientes 					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>d.</b></span>
                        <span class="nombre-item "> Interviene en Procedimientos de Nutrición (Alimentación asistida, por sonda nasgastrica, por gastrostomia)					


                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>e.</b></span>
                        <span class="nombre-item ">Asiste en los procedimientos de Eliminación					


                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>f.</b></span>
                        <span class="nombre-item ">Cateterismo Vesical, manejo de sonda vesical					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>6.</b></span>
                        <span class="nombre-item ">Controla Líquidos  Ingeridos y Eliminados en su paciente asignado					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>7.</b></span>
                        <span class="nombre-item ">Realiza Procedimiento de Terapia Intravenosa					


                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>8.</b></span>
                        <span class="nombre-item ">Manejo de Soluciones, distribución de líquidos					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>9.</b></span>
                        <span class="nombre-item ">Calculo de Goteo					

                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>10.</b></span>
                        <span class="nombre-item ">Diligencia Registros Clinicos:					

                        </span>
                    </div>
                    <input readonly placeholder="0.00" type="text" class="input border no-top no-left padding-5" style="background-color: #FCABC4;">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>a.</b></span>
                        <span class="nombre-item ">Notas de Enfermería claridas y precisas sobre sus observaciones y la atención que proporciona al paciente 					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>b.</b></span>
                        <span class="nombre-item ">Control de Líquidos  Ingeridos y Eliminados										
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>c.</b></span>
                        <span class="nombre-item ">Kardex							
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>d.</b></span>
                        <span class="nombre-item ">Tarjeta de Medicamentos									
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>e.</b></span>
                        <span class="nombre-item ">Registro de Medicamentos								
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>11.</b></span>
                        <span class="nombre-item ">Aplica las técnicas de Administración de Medicamentos por las diferentes vias					
					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>12.</b></span>
                        <span class="nombre-item ">Realiza calculo de dosis										
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>13.</b></span>
                        <span class="nombre-item ">Mantiene la técnica aséptica y las medidas de bioseguridad en la realización del procedimiento y vela por el cumplimiento de la misma por parte  de los miembros  del equipo interdisciplinario					
					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>14.</b></span>
                        <span class="nombre-item ">Realiza curaciones de heridas identificando signos y síntomas de infecciones.					
					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>15.</b></span>
                        <span class="nombre-item ">Desarrolla procedimiento de control de signos vitales: Presión arterial, temperatura, respiración y pulso					
					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>16.</b></span>
                        <span class="nombre-item ">Mantiene limpios y organizados los equipos y áreas de trabajo.					
					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>17.</b></span>
                        <span class="nombre-item ">Administra oxigeno según parametros enseñados					
					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>18.</b></span>
                        <span class="nombre-item ">Ante posibilidad de muerte del paciente maneja la situación de forma profesional y ética 					
					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b>19.</b></span>
                        <span class="nombre-item ">Realiza visita domiciliaria 					
					
                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border no-top no-left padding-5">
                </div>
                <div class="item   flex">
                    <div class="pregunta border no-top padding-5" style="background-color: rgb(253,233,217);">

                        <span class="nombre-item bold ">TOTAL B2</span>
                    </div>
                    <input readonly value="0.00" type="text" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize"></textarea>
        </div>
        
        <div class="total flex  " style="width: 100%">
            <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal B: Conocimientos cientificos(B1) + Desempeño(B2)</p>
            <p class="total1 border bold no-top no-left padding-5" style="text-align: center; width:30% ;background:teal;color:white">0.00</p>
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
                    <input placeholder="0.00" type="text" class="input  subA1 border no-top no-left padding-5" id="A-1-2" name="A-1-2">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL C</span>
                    </div>
                    <input readonly value="0.00" type="text" id="totalC" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
               
            </div>
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize"></textarea>
    </div>
    <div class="total flex  " style="width: 100%">
        <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal C: Evaluación Escrita de la rotación (10%) </p>
        <p class="total1 border bold no-top no-left padding-5" style="text-align: center; width:30% ;background:teal;color:white">0.00</p>
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
                        <span class="nombre-item ">CLUB DE REVISTA  :                                          4%		                        </span>
                    </div>
                    <input placeholder="0.00" type="text" class="input  subA1 border no-top no-left padding-5" id="A-1-2" name="A-1-2">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5">
                        <span class="numero "><b></b></span>
                        <span class="nombre-item ">NARRATIVAS y PAE:                                          6%		</span>
                    </div>
                    <input placeholder="0.00" type="text" class="input border subA1  no-top no-left padding-5" id="A-1-3" name="A-1-3">
                </div>

                <div class="item   flex">
                    <div class="pregunta border no-top padding-5 cell-blue">

                        <span class="nombre-item bold ">TOTAL D</span>
                    </div>
                    <input readonly value="0.00" type="text" id="totalD" class="input border no-top no-left padding-5" style="background-color: yellow">
                </div>
            </div>  
            <textarea class="rec border no-top no-left padding-5 " style="font-size:15px ; text-transform:capitalize"></textarea>  
    </div>
    <div class="total flex  " style="width: 100%">
        <p class="border no-top padding-5 cell-yellow fs-14 bold" style="width: 70%">Subtotal D:  CLUB DE REVISTA : (4%) + NARRATIVAS y PAE: (6)%</p>
        <p class="total1 border bold no-top no-left padding-5" style="text-align: center; width:30% ;background:teal;color:white">0.00</p>
    </div>

    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <p class="padding-10 border-bottom no-top" style="width: 100%"></p>
    <br>

    <div class="total flex border no-left  " style="width: 100%">
        <p class="border no-top padding-5 fs-14 bold" style="width: 70%">TOTAL:Sumar subtotal A + Subtotal B + Subtotal C + Subtotal D</p>
        <p class="total1 border bold no-top no-left padding-5" style="text-align: center; width:30% ;background:teal;color:white">0.00</p>
    </div>

    <script>
         //PREGUNTAS A1
    var preguntasA1 = document.querySelectorAll('.campoA1')
    var pregunta1 = document.getElementById('A-1-1')
    var subA1 = document.querySelectorAll('.subA1')
    var totalA1 = document.getElementById('totalA1');

    //PREGUNTAS A2
    var preguntasA2 = document.querySelectorAll('.campoA2')
    var totalA2 = document.getElementById('totalA2');

    //SUBTOTAL A
    var subtotalA = document.getElementById('subtotalA');

    
    //Preguntas B1
    var preguntasB1 = document.querySelectorAll('.campoB1');
    var pregubtab5 = document.getElementById('preguntab5');
    var subB1 = document.querySelectorAll('.subB1');
    var totalB1 = document.getElementById('totalB1');
    
    //preguntasB2
    var preguntasB2 = document.querySelectorAll('.campoB2');
    var preguntab3 = document.getElementById('preguntab3');
    var subB2 = document.querySelectorAll('.subB2');
    var totalB2 = document.getElementById('totalB2');
    
    //total final
    var totalF = document.getElementById('totalF');

    //preguntas pertenecientes a la pregunta 1
    subA1.forEach(i => {
        i.addEventListener('keyup', function() {
            let sub = 0;
            subA1.forEach(j => {
                if (j.value != '') {
                    sub += parseFloat(j.value)
                }
            })
            pregunta1.value = sub / 4;
            updateTotalA1();
        })
    })

    //Eventos de preguntas 1
    preguntasA1.forEach(item => {
        item.addEventListener('keyup', updateTotalA1)
    })

    preguntasA2.forEach(item => {
        item.addEventListener('keyup', updateTotalA2)
    })

    function updateTotalA1() {
        let total = 0;
        preguntasA1.forEach(pregunta => {

            if (pregunta.value != '') {
                total += parseFloat(pregunta.value);
            }
        })
        totalA1.value = (total / 5) * 0.1
        let inner = parseFloat(totalA1.value) + parseFloat(totalA2.value);

        subtotalA.innerHTML = inner;
        totalF.innerHTML = parseFloat(subtotalA.innerHTML) + parseFloat(subtotalB.innerHTML)

    }

    function updateTotalA2() {
        let total = 0;
        preguntasA2.forEach(pregunta => {

            if (pregunta.value != '') {
                total += parseFloat(pregunta.value);
            }
        })
        totalA2.value = (total / 10) * 0.1
        let inner = parseFloat(totalA1.value) + parseFloat(totalA2.value);
        subtotalA.innerHTML = inner;
        totalF.innerHTML = parseFloat(subtotalA.innerHTML) + parseFloat(subtotalB.innerHTML)


    }
    </script>
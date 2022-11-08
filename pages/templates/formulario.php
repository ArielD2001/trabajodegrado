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

    .contenedor {
        width: 60%;
        margin: 0 auto;
        margin-top: 50px;
        margin-bottom: 50px;
    }
input{
    text-align: center;
    border: none;
    border-radius: 0;
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
    .red {
        background-color: lightblue;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .red {
        background-color: #F8CCFF;
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
    .cell-blue{
        background-color: lightblue;
    }
    .blue .large,
    .red .large {
        width: 75%;
    }

    .blue .top {
        background-color: lightskyblue;
    }

    .red .top {
        background-color: lightpink;
    }

    .titulo-1-p {
        background-color: skyblue;
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
    .fs-14{
        font-size: 15px;
    }
    .numero{
        width: 30px !important;
    }
</style>


<?php include('../config/config-header.php') ?>
<div class="contenedor">
    <div class="cabecera flex border">
        <div class="left flex">
            <img src="../../assets/images/logo-form.jpg" alt="" width="100px">
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

    <div class="competencias flex">
        <div class="col-1">
            <div class="header flex">
                <div class="titulo-1 ">
                    <p class="padding-5 border no-top titulo-1-p bold">A. COMPETENCIAS ACTITUDINALES Y DE COMPORTAMIENTO (20%)</p>
                    <p class="padding-5 border no-top">A.1 Relaciones interpersonales(10%)</p>
                </div>
                <div class="titulo-2 border center no-top bold no-left padding-5">
                    Nota
                </div>
            </div>

        </div>
        <div class="col-2">
            <div class="header">
                <div class="titulo-3 ">
                    <p class="border no-top no-left padding-5 bold">Recomendaciones</p>
                </div>
            </div>
        </div>
        <div class="col-1">
            <div class="header flex fs-14">
                <div class="titulo-1 f">
                    <p class="padding-5 border no-top "><span class="border no-top numero padding-5 no-left no-bottom"><b>1</b></span> Mantiene relaciones cordiales y respetuosas con</p>
                    <p class="padding-5 border no-top "><span class="border no-top numero padding-5 no-left no-bottom">a</span> Docentes</p>
                    <p class="padding-5 border no-top "><span class="border no-top numero padding-5 no-left no-bottom">b</span> Compañeros</p>
                    <p class="padding-5 border no-top "><span class="border no-top numero padding-5 no-left no-bottom">c</span> Equipo de trabajo</p>
                    <p class="padding-5 border no-top "><span class="border no-top numero padding-5 no-left no-bottom">d</span> Pacientes</p>
                    <p class="padding-5 border no-top "><span class="border no-top numero padding-5 no-left no-bottom"><b>2</b></span> Expresa sus inquitudes con seguridad y confianza</p>
                    <p class="padding-5 border no-top "><span class="border no-top numero padding-5 no-left no-bottom"><b>3</b></span> Sigue las lineas de autoridad establecidas</p>
                    <p class="padding-5 border no-top "><span class="border no-top numero padding-5 no-left no-bottom"><b>4</b></span> Reconoce los errores y acepta sugerencias</p>
                    <p class="padding-5 border no-top "><span class="border no-top numero padding-5 no-left no-bottom"><b>5</b></span> Maneja situaciones de estres adecuadamente</p>
                    <p class="padding-5 border no-top bold cell-blue">Total A1:</p>
                    


                </div>
                <div class="titulo-2 fs-14">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; background:#EC74FF" value="0,00">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; " value="0,00">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; " value="0,00">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; " value="0,00">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; " value="0,00">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; " value="0,00">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; " value="0,00">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; " value="0,00">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; " value="0,00">
                   <input type="text" class="padding-5 border no-top no-left fs-14" style="width: 100%; background:yellow" value="0,00">
                </div>
            </div>
        </div>
        <div class="col-2">
                <input type="text" style="width: 100%;">
        </div>
    </div>
</div>
</div>
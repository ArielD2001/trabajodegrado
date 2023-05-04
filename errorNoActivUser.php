<?php 
include('assets/loader.html');
session_start();
include('pages/databases/connectToBD.php');
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/images/logo_sm.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/index.css">
        <title>error</title>
    </head>

    <body>

        <div class=" flex flex-col items-center justify-center h-screen bg-gray-200">
            <div class="flex flex-col justify-center items-center my-5 w-25" style="z-index: 100;">
                

                    <div class="logo flex justify-center mb-5">
                        <img draggable="false" src="assets/images/logo_sm.png" alt="" width="130px">

                    </div>  
                    <div class="text-center" style="width:300px" >
                    Lo sentimos este usuario no se encuentra activo por favor póngase en contacto en el administrador
                    </div>
                    <a href="./index" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full my-4"> Regresar</a>

           

                
            </div>
                <p class="text-center text-gray-700 text-xs " style="z-index: 100;">
                    Ariel Caraballo Diaz - Jesus Valencia Torres
                </p>
                <p class="text-center text-gray-700 text-xs" style="z-index: 100;">
                    &copy; Corporación Universitaria Rafael Núñez | Institución Universitaria | Vigilada Mineducación
                </p>
        </div>
        <img src="assets/images/svg.png" draggable="false" alt="" style="position: absolute !important; bottom:0; width:100% ">
        <script src="assets/js/jquery.min.js"></script>

        <script src="assets/js/index.js"></script>
    </body>

    </html>


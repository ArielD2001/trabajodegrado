<?php
include('pages/databases/connectToBD.php');
session_start();

if ($_SESSION) {
    header('Location: pages/home');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo_sm.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Login</title>
</head>
<style>
    form {
        width: 700px;
        min-width: 150px;
    }
</style>

<body>
    <?php include('assets/loader.html') ?>
    <div class=" flex items-center justify-center h-screen bg-gray-200">
        <div class="" style="z-index: 100; " class="bg-white">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-10 mb-4  truncate" method="post">
                <div class="logo flex items-center mb-2 pl-6">
                    <img draggable="false" src="assets/images/logo_sm.png" alt="" width="60px">
                    <h3 class="font-bold text-xl text-gray-700 ml-3">Registro</h3>

                </div>
                <hr class="mb-6">

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 md:mb-0">
                        <label class="block  mb-2 tracking-wide text-gray-700 text-xs font-bold" for="grid-first-name">
                            Nombre
                        </label>
                        <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4  leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block  mb-2 tracking-wide text-gray-700 text-xs font-bold" for="grid-last-name">
                            Apellido
                        </label>
                        <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Apellido" name="apellido">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 md:mb-0">
                        <label class="block  mb-2 tracking-wide text-gray-700 text-xs font-bold" for="grid-first-name">
                            No. documento
                        </label>
                        <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4  leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="CC" name="documento">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block  tracking-wide mb-2 text-gray-700 text-xs font-bold" for="grid-last-name">
                            Correo
                        </label>
                        <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Correo" name="correo">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3 relative ">
                        <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Contraseña
                        </label>
                        <input class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="**************" name="contaseña">
                        <i class="fas fa-eye text-gray-600  flex items-center" id="boton-eye" style="height:50%;position: absolute; right:25px;top:calc(50% - 5px); cursor:pointer"></i>
                        <script>
                            document.getElementById('boton-eye').addEventListener('click', () => {
                                if (document.getElementById('grid-password').type == 'password') {
                                    document.getElementById('boton-eye').classList.remove('fas');
                                    document.getElementById('boton-eye').classList.remove('fa-eye');
                                    document.getElementById('boton-eye').classList.add('fa-solid');
                                    document.getElementById('boton-eye').classList.add('fa-eye-slash');
                                    

                                    document.getElementById('grid-password').type = 'text';
                                } else {
                                    document.getElementById('boton-eye').classList.add('fas');
                                    document.getElementById('boton-eye').classList.add('fa-eye');
                                    document.getElementById('boton-eye').classList.remove('fa-solid');
                                    document.getElementById('boton-eye').classList.remove('fa-eye-slash');
                                    document.getElementById('grid-password').type = 'password';
                                }
                            })
                        </script>
                    </div>
                </div>
                <hr class="mt-10 mb-3">
                <div class="flex flex-wrap justify-between items-center  mb-2">
                    <button class="bg-yellow-600 focus:outline-none hover:bg-orange-500 transition duration-100 p-2 outline-none rounded  block w-1/2 text-white" type="submit" name="registrar">Registrar</button>
                    <a href="index " class="text-xs border-b py-1 border-blue-600  text-blue-600  hover:border-blue-700  hover:text-blue-700">ya tengo una cuenta !</a>
                </div>
            </form>
            <?php include('pages/config/validate.php') ?>

            <p class="text-center text-gray-700 text-xs">
                Ariel Caraballo Diaz - Jesus Valencia Torres
            </p>
            <p class="text-center text-gray-700 text-xs">
                &copy;2022 CURN - Proyecto de grado VI semestr e.
            </p>
        </div>
    </div>
    <img src="assets/images/svg.png" draggable="false" alt="" style="position: absolute !important; bottom:0; width:100% ">
</body>

</html>
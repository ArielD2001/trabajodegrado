<?php
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

<body>
    <div class=" flex items-center justify-center h-screen bg-gray-200">
        <div class="w-1/4" style="z-index: 100;">
            <form method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-10 mb-4 relative truncate">
    <?php include('assets/loader.html') ?>

                <div class="logo flex justify-center mb-5">
                    <img draggable="false" src="assets/images/logo_sm.png" alt="" width="130px">

                </div>
                <div class="mb-4">
                    <label class="block  text-gray-700 text-sm font-bold mb-2" for="username">
                        Correo
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="email" placeholder="Username" autocomplete="off" name="email">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Contraseña
                    </label>
                    <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="************" name="password">

                </div>
                <?php if (isset($_POST['boton'])) {
                    if (strlen($_POST['email']) == 0 || strlen($_POST['password'] == 0)) {
                        echo"<style>.loader{display: none !important; animation:none !important;</style>";
                        echo '<p class="text-red-500 text-xs italic mt-2"  >Por favor complete todos los campos.</p>';
                    }else{
                        session_start();
                        $_SESSION['email'] = strtolower($_POST['email']);
                        header('Location: pages/home');
                    }                        
                        
                    
                }
                ?>
                <div class="">
                    <button class="mt-6 transition  duration-100 hover:text-white hover:bg-yellow-600 block border border-yellow-600 w-full  py-2 px-4 rounded focus:outline-none focus:bg-yellow-600 focus:text-white  bg-white text-yellow-600 font-bold" type="submit" name="boton">
                        Iniciar sesion
                    </button>
                    <button class=" transition  duration-100 mt-2 text-white hover:bg-gray-900 block border  w-full  py-2 px-4 rounded focus:outline-none bg-gray-800  " type="button">
                        <i class="fa-brands fa-google mr-2"></i>Iniciar session con Google
                    </button>
                </div>


            </form>

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
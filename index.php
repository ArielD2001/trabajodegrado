<?php include('assets/loader.html') ?>
<?php
session_start();
include('pages/databases/connectToBD.php');

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
    form{
        width: 400px !important;
        min-width: 350px;
    }
</style>
<body>

    <div class=" flex items-center justify-center h-screen bg-gray-200">
        <div class="" style="z-index: 100;">
            <form method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-10 mb-4  truncate">

                <div class="logo flex justify-center mb-5">
                    <img draggable="false" src="assets/images/logo_sm.png" alt="" width="130px">
                </div>
                <div class="mb-4">
                    <label class="block  text-gray-700 text-sm font-bold mb-2" for="username">
                        Correo
                    </label>
                    <input class="border-gray-300 campo shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" minlength="8" type="email" placeholder="Username" autocomplete="off" name="email">
                </div>
                <div class="relative">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Contraseña
                    </label>
                    <input class=" campo border-gray-300 shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password"  placeholder="************" name="password">
                    <i class="fas fa-eye text-gray-600  flex items-center" id="boton-eye" style="height:50%;position: absolute; right:10px;top:calc(50% - 3px); cursor:pointer"></i>
                        <script>
                            document.getElementById('boton-eye').addEventListener('click', () => {
                                if (document.getElementById('password').type == 'password') {
                                    document.getElementById('boton-eye').classList.remove('fas');
                                    document.getElementById('boton-eye').classList.remove('fa-eye');
                                    document.getElementById('boton-eye').classList.add('fa-solid');
                                    document.getElementById('boton-eye').classList.add('fa-eye-slash');

                                    

                                    document.getElementById('password').type = 'text';
                                    document.getElementById('password').focus();
                                } else {
                                    document.getElementById('boton-eye').classList.add('fas');
                                    document.getElementById('boton-eye').classList.add('fa-eye');
                                    document.getElementById('boton-eye').classList.remove('fa-solid');
                                    document.getElementById('boton-eye').classList.remove('fa-eye-slash');
                                    document.getElementById('password').type = 'password';
                                    document.getElementById('password').focus();
                                }
                            })
                            document.querySelectorAll('.campo').forEach(element=>{
                                cambio(element);
                            })
                            function cambio(key){
                            key.addEventListener('keyup',()=>{
                                if(key.value == ''){
                                    key.classList.replace('border-gray-300', 'border-red-500');
                                }else{
                                    key.classList.replace('border-red-500', 'border-gray-300');
                                }
                            })
                            }  
                        </script>
                </div>
                    <?php include('pages/config/validate.php') ?>
                <div class="">
                    <button class="mt-6 transition  duration-100 hover:text-white hover:bg-yellow-600 block border border-yellow-600 w-full  py-2 px-4 rounded focus:outline-none focus:bg-yellow-600 focus:text-white  bg-white text-yellow-600 font-bold" type="submit" name="boton">
                        Iniciar sesion
                    </button>
                    <button class=" transition  duration-100 mt-2 text-white hover:bg-gray-900 block border  w-full  py-2 px-4 rounded focus:outline-none bg-gray-800  " type="button">
                        <i class="fa-brands fa-google mr-2"></i>Iniciar sesion con Google
                    </button>
                    <div class="block text-center my-2 text-xs">Or</div>
                    <a href="singup" class="bg-blue-600 block rounded p-2 text-white text-center hover:bg-blue-700 transition duration-100">Crear cuenta</a>
                </div>


            </form>

            <p class="text-center text-gray-700 text-xs">
                Ariel Caraballo Diaz - Jesus Valencia Torres.
            </p>
            <p class="text-center text-gray-700 text-xs">
                &copy;2022 CURN - Proyecto de grado VI semestre.
            </p>
        </div>
    </div>
    <img src="assets/images/svg.png" draggable="false" alt="" style="position: absolute !important; bottom:0; width:100% ">
</body>

</html>
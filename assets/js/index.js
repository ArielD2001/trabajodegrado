//======Evento click para boton de iniciar sesion=========
$("#boton-login").click(function () {
  //Se toman los datos del formulario
  $.ajax({
    url: "pages/config/validate.php",
    type: "post",
    data: $("#formulario-login").serialize(),
    success: function (res) {
      document.querySelectorAll(".campo").forEach((element) => {
        cambio(element);
      });
      //Loader
      $("#result-login").html('<div class="load-item"></div>');
      setTimeout(() => {
        //Se validan los resultados
        if (res == "campos vacios") {
          $("#result-login").html(
            //Mensaje de error
            '<p class="text-red-500 text-xs italic mt-2"  >Por favor complete todos los campos.</p>'
          );
        } else if (res == "ok") {
          //Redireccion de satisfaccion a pagina home
          window.location = "pages/home";
        } else if (res == "error datos") {
          $("#result-login").html(
            //Mensaje de error
            '<p class="text-red-500 text-xs italic mt-2"  >Correo o contraseña incorrecta</p>'
          );
        } else {
          $("#result-login").html(
            //Mnesaje de error
            '<p class="text-red-500 text-xs italic mt-2"  >Error no identificado</p>'
          );
        }
      }, 500);
    },
  });
});

//Evento Ver el campo de contraseña
document.getElementById("boton-eye").addEventListener("click", () => {
  if (document.getElementById("password").type == "password") {
    document.getElementById("boton-eye").classList.remove("fas");
    document.getElementById("boton-eye").classList.remove("fa-eye");
    document.getElementById("boton-eye").classList.add("fa-solid");
    document.getElementById("boton-eye").classList.add("fa-eye-slash");

    document.getElementById("password").type = "text";
    document.getElementById("password").focus();
  } else {
    document.getElementById("boton-eye").classList.add("fas");
    document.getElementById("boton-eye").classList.add("fa-eye");
    document.getElementById("boton-eye").classList.remove("fa-solid");
    document.getElementById("boton-eye").classList.remove("fa-eye-slash");
    document.getElementById("password").type = "password";
    document.getElementById("password").focus();
  }
});

//Cambios de border de campos vacios
function cambio(key) {
  if (key.value == "") {
    key.classList.replace("border-gray-300", "border-red-500");
  } else {
    key.classList.replace("border-red-500", "border-green-300");
  }
}


//Evento enter para formulario
$(document).keyup(function(event) {
    if (event.which === 13) {
        document.querySelector('#boton-login').click()
    }
});

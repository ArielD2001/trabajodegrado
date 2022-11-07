//eventos para agregar y eliminar
function eventos() {

  //============Evento click a boton eliminar lista===================
  $(".eliminar-btn").click(function (e) {
    e.preventDefault();
    var dato = $(this).attr("href");

    //Alerta de confirmacion
    Swal.fire({
      title: "Eliminar Registro",
      text: "¿Seguro que desea eliminar este registro?",
      icon: "warning",
      showCancelButton: true,
      showConfirmButton: true,
      confirmButtonColor: "#3085d6",
      confirmButtonText: "Sí, eliminar",
      cancelButtonText: "Cancelar",
      cancelButtonColor: "#d33",
    }).then((result) => {

      //resultado postivo de la confirmacion
      if (result.isConfirmed) {

        //Se envian los datos al archvio para borrar
        $.ajax({
          url: "config/delete-list.php",
          type: "get",
          data: dato,
          success: function (res) {

            //Mensaje de notificacion
            Swal.fire({
              text: "Eliminado correctamente",
              confirmButtonColor: "#3085d6",
              icon: "success",
              width: 300,
            });

            //Loader
            $("#tabla-list").html(
              '<div style="width:100%;text-align:left; "><div class="load-item" style="width:50px !important;height:50px !important ; border:5px solid grey;border-top:5px solid transparent"></div></div>'
            );
            setTimeout(() => {

              //Se actualiza la tabla de listas y de callbac se llama la misma funcion
              $("#app").load("listas.php #app", eventos);
            }, 500);
          },
        });
      }
    });
  });

  //==============Evento Agregar Lista====================
  $("#agregar-list").click(function () {
    $("#resultado-list").html('<div class="load-item"></div>');

    //Adjuncion de datos del formulario y del fichero excel
    var data = $("#formulario-list").serialize();
    var adjunto = $("#adjunto")[0].files[0];
    var formulario = new FormData();
    formulario.append("adjunto", adjunto);
    formulario.append("data", data);

    //Se envian los datos al archivo para agregar
    $.ajax({
      url: "config/add-list.php",
      type: "post",
      data: formulario,
      contentType: false,
      processData: false,

      //resultado postivo de la confirmacion
      success: function (resultado) {

        //Verificaion de campos vacios
        verificarCampos();
        setTimeout(() => {

          //Validaciones por tipo de error
          if (resultado == "error - tipo") {
            $("#resultado-list").html(
              //Mensaje de error
              '<h6 class="text-danger mt-2 mb-1">Solo se admiten archivos Excel (.xlsx)</h6>'
            );

            //Mensaje de error
          } else if (resultado == "campos vacios") {
            $("#resultado-list").html(
              '<h6 class="text-danger mt-2 mb-1"> Por favor complete todos los campos</h6>'
            );

            //Mensaje de error
          } else if (resultado == "error - existente") {
            $("#resultado-list").html(
              '<h6 class="text-primary mt-2 mb-1"> Esta lista a existe por favor cambia el nombre</h6>'
            );

            //Mensaje de error
          } else if (resultado == "error - consulta") {
            $("#resultado-list").html(
              '<h6 class="text-danger mt-2 mb-1"> Ha ocurrido un error en la consulta</h6>'
            );
            
            //Respuesta positiva
          } else if (resultado == "ok") {
            $("#tabla-list").html(
              '<div style="width:100%;text-align:left; "><div class="load-item" style="width:50px !important;height:50px !important ; border:5px solid grey;border-top:5px solid transparent"></div></div>'
            );
            //Se cierra el modal
            document.querySelector(".btn-close").click();

            //Alerta de notificacion de lista agregada
            Swal.fire({
              text: "Agregado correctamente",
              confirmButtonColor: "#3085d6",
              icon: "success",
              width: 300,
            });
            setTimeout(() => {
                $('#resultado-list').html(resultado);
                if(resultado == '<h5 class="text-success mt-2">&#x2714; Lista agregada</h5>'){
                    document.querySelector('.btn-close').click();
                    Swal.fire({
                        text: 'Agregado correctamente',
                        confirmButtonColor: '#3085d6',
                        icon:'success',
                        width:300,

                    })
                    setTimeout(() => {
                        document.getElementById('nombre').value ='';
                        $("#tabla-list").html('<div style="width:100%;text-align:left; "><div class="load-item" style="width:50px !important;height:50px !important ; border:5px solid grey;border-top:5px solid transparent"></div></div>');
                        document.getElementById('semestre').value ='';
                        setTimeout(() => {
                            $("#tabla-list").load("listas.php #tabla-list",agregareventDelete);
                        }, 1000);
                     },400)
                }
            }, 1000);
          } else {

            //Verificaion de error no validado
            $("#resultado-list").html(resultado);
          }
        }, 500);
      },
    });
  });

  

}

//Se da inicio a las funciones de agregar y eliminar listas
eventos();

setInterval(function () {
  var hoy = new Date();
  var hora_h = hoy.getHours() < 10 ? "0" + hoy.getHours() : hoy.getHours();
  var hora_m =
    hoy.getMinutes() < 10 ? "0" + hoy.getMinutes() : hoy.getMinutes();
  var hora_s =
    hoy.getSeconds() < 10 ? "0" + hoy.getSeconds() : hoy.getSeconds();
  var hora = hora_h + ":" + hora_m + ":" + hora_s;
  document.querySelector(".hora_hoy").innerHTML = hora;
}, 1000);

$('#boton-login').click(function(){
    console.log('clok')
    $.ajax({
        url:'pages/config/validate.php',
        type:'post',
        data:$('#formulario-login').serialize(),
        success:function(res){
            $('#result-login').html('<div class="load-item"></div>');
            setTimeout(() => {
                $('#result-login').html(res)
            }, 1300);
        }
    })
})
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

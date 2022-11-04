function eventos() {
  console.log("function activate");
  $(".eliminar-btn").click(function (e) {
    e.preventDefault();
    var dato = $(this).attr("href");
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
      if (result.isConfirmed) {
        console.log(dato);
        $.ajax({
          url: "config/delete-list.php",
          type: "get",
          data: dato,
          success: function (res) {
            console.log(res);
            Swal.fire({
              text: "Eliminado correctamente",
              confirmButtonColor: "#3085d6",
              icon: "success",
              width: 300,
            });

            $("#tabla-list").html(
              '<div style="width:100%;text-align:left; "><div class="load-item" style="width:50px !important;height:50px !important ; border:5px solid grey;border-top:5px solid transparent"></div></div>'
            );
            setTimeout(() => {
              $("#app").load("listas.php #app", eventos);
            }, 500);
          },
        });
      }
    });
  });
  $("#agregar-list").click(function () {
    var data = $("#formulario-list").serialize();
    var adjunto = $("#adjunto")[0].files[0];
    var formulario = new FormData();
    formulario.append("adjunto", adjunto);
    formulario.append("data", data);

    $.ajax({
      url: "config/add-list.php",
      type: "post",
      data: formulario,
      contentType: false,
      processData: false,
      success: function (resultado) {
        $("#resultado-list").html('<div class="load-item"></div>');
        verificarCampos();
        setTimeout(() => {
          if (resultado == "error - tipo") {
            $("#resultado-list").html(
              '<h6 class="text-danger mt-2 mb-1">Solo se admiten archivos Excel (.xlsx)</h6>'
            );
          } else if (resultado == "campos vacios") {
            $("#resultado-list").html(
              '<h6 class="text-danger mt-2 mb-1"> Por favor complete todos los campos</h6>'
            );
          } else if (resultado == "error - existente") {
            $("#resultado-list").html(
              '<h6 class="text-primary mt-2 mb-1"> Esta lista a existe por favor cambia el nombre</h6>'
            );
          } else if (resultado == "error - consulta") {
            $("#resultado-list").html(
              '<h6 class="text-danger mt-2 mb-1"> Ha ocurrido un error en la consulta</h6>'
            );
          } else if (resultado == "ok") {
            document.querySelector(".btn-close").click();
            Swal.fire({
              text: "Agregado correctamente",
              confirmButtonColor: "#3085d6",
              icon: "success",
              width: 300,
            });
            $("#tabla-list").html(
                '<div style="width:100%;text-align:left; "><div class="load-item" style="width:50px !important;height:50px !important ; border:5px solid grey;border-top:5px solid transparent"></div></div>'
              );
            setTimeout(() => {
                $("#app").load("listas.php #app", eventos);
            }, 1000);
          } else {
            $("#resultado-list").html(resultado);
          }
        }, 500);
      },
    });
  });
}
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

function verificarCampos() {
  if (document.getElementById("nombre-list").value == "") {
    document.getElementById("nombre-list").style.border = "1px solid #F56547";
  } else {
    document.getElementById("nombre-list").style.border = "1px solid #64BB62";
  }

  if (document.getElementById("semestre-list").value == "") {
    document.getElementById("semestre-list").style.border = "1px solid #F56547";
  } else {
    document.getElementById("semestre-list").style.border = "1px solid #64BB62";
  }

  if (document.getElementById("adjunto").value == "") {
    document.getElementById("adjunto").style.border = "1px solid #F56547";
  } else {
    document.getElementById("adjunto").style.border = "1px solid #64BB62";
  }
}

$('#agregar-list').click(function() {
    $.ajax({
        url: 'config/add-list.php',
        type: 'post',
        data: $('#formulario-list').serialize(),
        success: function(resultado) {
            $('#resultado-list').html('<div class="load-item"></div>');
            setTimeout(() => {
                $('#resultado-list').html(resultado);
                if(resultado == '<h4 class="text-success">&#x2714; Lista agregada</h4>'){
                    setTimeout(() => {
                        document.getElementById('nombre').value ='';
                        $("#tabla-list").html('<div style="width:100%;text-align:left; "><div class="load-item" style="width:60px !important;height:60px !important"></div></div>');
                        document.getElementById('semestre').value ='';
                        setTimeout(() => {
                            $("#tabla-list").load("listas.php #tabla-list");
                        }, 1000);
                     },400)
                }
            }, 1000);
        }
    })
})

setInterval(function() {
    var hoy = new Date();
    var hora_h = hoy.getHours() < 10 ? '0' + hoy.getHours() : hoy.getHours();
    var hora_m = hoy.getMinutes() < 10 ? '0' + hoy.getMinutes() : hoy.getMinutes();
    var hora_s = hoy.getSeconds() < 10 ? '0' + hoy.getSeconds() : hoy.getSeconds();
    var hora = hora_h + ":" + hora_m + ":" + hora_s;
    document.querySelector(".hora_hoy").innerHTML = hora;
}, 1400);

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
                        $("#tabla-list").load("listas.php #tabla-list");
                        document.getElementById('nombre').value ='';
                        document.getElementById('semestre').value ='';
                        
                     },400)
                }
            }, 400);
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


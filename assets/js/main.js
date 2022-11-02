function agregareventDelete(){
    console.log('function activate')
    $('.eliminar-btn').on('click', function (e) { 
    
        e.preventDefault();
        var dato = $(this).attr('href');
        Swal.fire({
            title: 'Eliminar Registro',
            text: "¿Seguro que desea eliminar este registro?",
            icon: 'warning',
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#d33',
                }).then((result) => {
                if (result.isConfirmed) {
                    console.log(dato);
                   $.ajax({
                    url:'config/delete-list.php',
                    type:'get',
                    data:dato,
                    success:function(res){
                            Swal.fire({
                            text: 'Eliminado correctamente',
                            confirmButtonColor: '#3085d6',
                            icon:'success',
                            width:300,
    
                        })
                        setTimeout(() => {
                            $("#tabla-list").html('<div style="width:100%;text-align:left; "><div class="load-item" style="width:50px !important;height:50px !important ; border:5px solid grey;border-top:5px solid transparent"></div></div>');
                            setTimeout(() => {
                            $("#tabla-list").load('listas.php #tabla-list',agregareventDelete);
                            }, 1000);
                        }, 500);
                    }
    
                   })
                }
                })
        });
}
agregareventDelete();

$('#agregar-list').on('click',function() {
    $.ajax({
        url: 'config/add-list.php',
        type: 'post',
        data: $('#formulario-list').serialize(),
        success: function(resultado) {
            $('#resultado-list').html('<div class="load-item"></div>');
            setTimeout(() => {
                $('#resultado-list').html(resultado);
                if(resultado == '<h5 class="text-success mt-2">&#x2714; Lista agregada</h5>'){
                    document.querySelector('.btn-close').click();
                    Swal.fire({
                        text: 'agregado correctamente correctamente',
                        confirmButtonColor: '#3085d6',
                        icon:'success',
                        width:300,

                    })
                    setTimeout(() => {
                        document.getElementById('nombre').value ='';
                        document.getElementById('semestre').value ='';
                        $("#tabla-list").html('<div style="width:100%;text-align:left; "><div class="load-item" style="width:50px !important;height:50px !important ; border:5px solid grey;border-top:5px solid transparent"></div></div>');
                        setTimeout(() => {
                            $("#app").load("listas.php #app",agregareventDelete);
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
}, 1000);


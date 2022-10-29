$('#agregar-list').click(function() {
    $.ajax({
        url: 'config/add-list.php',
        type: 'post',
        data: $('#formulario-list').serialize(),
        success: function(resultado) {
            $('#resultado-list').html('<div class="load-item"></div>');
            setTimeout(() => {
                $('#resultado-list').html(resultado);
                if(resultado == '<h5 class="text-success mt-2">&#x2714; Lista agregada</h5>'){
                    setTimeout(() => {
                        document.getElementById('nombre').value ='';
                        $("#tabla-list").html('<div style="width:100%;text-align:left; "><div class="load-item" style="width:50px !important;height:50px !important ; border:5px solid grey;border-top:5px solid transparent"></div></div>');
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
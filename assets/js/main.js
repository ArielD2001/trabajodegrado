function mostar(archivo){
    console.log(archivo)
$.get(archivo,function(data,estado){
    document.getElementById('app').innerHTML = data
})
}
$('#agregar-list').click(function() {
    console.log('clik')
    $.ajax({
        url: 'config/add-list.php',
        type: 'post',
        data: $('#formulario-list').serialize(),
        success: function(resultado) {
            $('#resultado-list').html('');
            $('#resultado-list').html(resultado);
        }
        
    });
});
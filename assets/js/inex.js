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

  //inputs
  var inputs = document.querySelectorAll('input');

  inputs.forEach(input=>{
      input.addEventListener('click',()=>{
          input.select()
      })
  })
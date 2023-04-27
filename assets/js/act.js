      //PREGUNTAS A1
      var preguntasA1 = document.querySelectorAll('.campoA1')
      var pregunta1 = document.getElementById('A-1-1')
      var subA1 = document.querySelectorAll('.subA1')
      var totalA1 = document.getElementById('totalA1');
  
      //PREGUNTAS A2
      var preguntasA2 = document.querySelectorAll('.campoA2')
      var totalA2 = document.getElementById('totalA2');
  
      //SUBTOTAL A
      var subtotalA = document.getElementById('subtotalA');
  
      
      //Preguntas B1
      var preguntasB1 = document.querySelectorAll('.campoB1');
      var totalB1 = document.getElementById('totalB1');
      
      //preguntasB2
      var preguntasB2 = document.querySelectorAll('.campoB2');
      var pregunta5 = document.getElementById('pregunta5');
      var pregunta10 = document.getElementById('pregunta10');
      var subB2 = document.querySelectorAll('.subB2');
      var subB2a = document.querySelectorAll('.subB2a');
      var totalB2 = document.getElementById('totalB2');
  
      //SUBTOTAL B
      var subtotalB = document.getElementById('subtotalB');
  
      //Pregunta C
      var preguntasC = document.querySelectorAll('.campoC');
      var totalC = document.getElementById('totalC');
      var subtotalC = document.getElementById('subtotalC');
  
      //Preguntas D
      var preguntasD = document.querySelectorAll('.campoD');
      var totalD = document.getElementById('totalD');
      var subtotalD = document.getElementById('subtotalD');
      //total final
      var totalF = document.getElementById('totalF');
  
      //preguntas pertenecientes a la pregunta 1
      subA1.forEach(i => {
          i.addEventListener('keyup', function() {
              let sub = 0;
              subA1.forEach(j => {
                  if (j.value != '') {
                      sub += parseFloat(j.value)
                  }
              })
              pregunta1.value = sub / 4;
              updateTotalA1();
          })
      })
      
  
      //Eventos de preguntas 1
      preguntasA1.forEach(item => {
          item.addEventListener('keyup', updateTotalA1)
      })
  
      preguntasA2.forEach(item => {
          item.addEventListener('keyup', updateTotalA2)
      })
      //Evento de prguntas B
      preguntasB1.forEach(item => {
          item.addEventListener('keyup', updateTotalB1)
      })
  
      preguntasB2.forEach(item => {
          item.addEventListener('keyup', updateTotalB2)
      })
      //Evento de prguntas C
      preguntasC.forEach(item => {
          item.addEventListener('keyup', updateTotalC)
      })
      //Evento de preguntas D
      preguntasD.forEach(item => {
          item.addEventListener('keyup', updateTotalD)
      })
  
  
      function updateTotalA1() {
          let total = 0;
          preguntasA1.forEach(pregunta => {
  
              if (pregunta.value != '') {
                  total += parseFloat(pregunta.value);
              }
          })
          totalA1.value = (total / 5) * 0.1
          let inner = parseFloat(totalA1.value) + parseFloat(totalA2.value);
  
          subtotalA.value = inner;
          totalF.value = parseFloat(subtotalA.value) + parseFloat(subtotalB.value) + parseFloat(subtotalC.value) + parseFloat(subtotalD.value);
  
      }
  
      function updateTotalA2() {
          let total = 0;
          preguntasA2.forEach(pregunta => {
  
              if (pregunta.value != '') {
                  total += parseFloat(pregunta.value);
              }
          })
          totalA2.value = (total / 10) * 0.1
          let inner = parseFloat(totalA1.value) + parseFloat(totalA2.value);
          subtotalA.value = inner;
          totalF.value = parseFloat(subtotalA.value) + parseFloat(subtotalB.value) + parseFloat(subtotalC.value) + parseFloat(subtotalD.value);
      }
      function updateTotalB1() {
          let total = 0;
          preguntasB1.forEach(pregunta => {
  
              if (pregunta.value != '') {
                  total += parseFloat(pregunta.value);
              }
          })
          totalB1.value = (total / 9) * 0.25
          let inner = parseFloat(totalB1.value) + parseFloat(totalB2.value);
  
          subtotalB.value = inner;
          totalF.value = parseFloat(subtotalA.value) + parseFloat(subtotalB.value) + parseFloat(subtotalC.value) + parseFloat(subtotalD.value);
          
  
      }
  
      subB2.forEach(i => {
          i.addEventListener('keyup', function() {
              let sub = 0;
              subB2.forEach(j => {
                  if (j.value != '') {
                      sub += parseFloat(j.value)
                  }
              })
              pregunta5.value = sub / 6;
              updateTotalB2();
          })
      })
      subB2a.forEach(i => {
          i.addEventListener('keyup', function() {
              let suba = 0;
              subB2a.forEach(j => {
                  if (j.value != '') {
                      suba += parseFloat(j.value)
                  }
              })
              pregunta10.value = suba / 5;
              updateTotalB2();
          })
      })
  
      //Eventos de preguntas 2
      
  
      function updateTotalB2() {
          let total = 0;
          preguntasB2.forEach(pregunta => {
  
              if (pregunta.value != '') {
                  total += parseFloat(pregunta.value);
              }
          })
          totalB2.value = (total / 19) * 0.35
          let inner = parseFloat(totalB1.value) + parseFloat(totalB2.value);
  
          subtotalB.value = inner;
          totalF.value = parseFloat(subtotalA.value) + parseFloat(subtotalB.value)  + parseFloat(subtotalC.value) + parseFloat(subtotalD.value);
  
      }
  
      function updateTotalC() {
          let total = 0;
          preguntasC.forEach(pregunta => {
  
              if (pregunta.value != '') {
                  total += parseFloat(pregunta.value);
              }
          })
          totalC.value = (total / 1) * 0.1
          let inner = parseFloat(totalC.value)
  
          subtotalC.value = inner;
          totalF.value = parseFloat(subtotalA.value) + parseFloat(subtotalB.value) + parseFloat(subtotalC.value) + parseFloat(subtotalD.value);
  
      }
      function updateTotalD() {
          let total = 0;
          preguntasD.forEach(pregunta => {
  
              if (pregunta.value != '') {
                  total += parseFloat(pregunta.value);
              }
          })
          totalD.value = (total / 2) * 0.1
          let inner = parseFloat(totalD.value)
  
          subtotalD.value = inner;
          totalF.value = parseFloat(subtotalA.value) + parseFloat(subtotalB.value) + parseFloat(subtotalC.value) + parseFloat(subtotalD.value);
  
      }

 
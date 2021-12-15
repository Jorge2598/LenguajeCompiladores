$("#inicio").click(function() { 
    var texto = $('textarea#textInicio').val();
    $('textarea#textFinal').val(' ');
     postData('https://convertidor-pio-js.herokuapp.com/getjs', { piocode: texto })
    .then(data => {
      if(data.bloque.codigojs){
        location.href ="convertirJs.php?codeJs="+data.bloque.codigojs.replaceAll("\n", ";")+"&codex="+ data.bloque.codigopio;
      }else{
        $('textarea#textFinal').val("Mala Sintaxis Del Lenguaje");
      }
     
  });
    });

async function postData(url = '', data = {}) {
    const response = await fetch(url, {
      method: 'POST', 
      mode: 'cors',
      cache: 'no-cache', 
      credentials: 'same-origin', 
      headers: {
        'Content-Type': 'application/json'
      },
      redirect: 'follow',
      referrerPolicy: 'no-referrer',
      body: JSON.stringify(data) 
    });
    return response.json(); 
  }
  

  
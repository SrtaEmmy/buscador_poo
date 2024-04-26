let xhr = new XMLHttpRequest();
let show_result = document.getElementById('resultados');
let inputBuscar = document.getElementById('inputBuscar');
let btnBuscar = document.getElementById('btn');


// manejar respuesta
xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
        console.log('solicitud enviada a PHP');

        console.log(xhr.response);

        let data = JSON.parse(xhr.response);

        if (data !== false) {
            if (Array.isArray(data)) {
                
                let marcasHTML = data.map(item => `<p>${item.elemento}</p>`).join('');

                show_result.innerHTML = marcasHTML;

            } else {
                show_result.innerHTML = data;
            }
        } else {
            show_result.innerHTML = "No se encontraron resultados"
        }
    }
};

const enviar_solicitud = () => {
    let elemento = document.getElementById('inputBuscar').value;

    xhr.open('POST', 'index.php?class=ajax&method=buscar', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send(`elemento=${elemento}`);
};


// cerrar resultados al detectar input vacio
inputBuscar.addEventListener('input', ()=>{
   if (inputBuscar.value==='') {
    show_result.innerHTML = '';
   }
});

//cerrar resultados al hacer clic en otra parte
document.addEventListener('click', (e)=>{
   if (e.target !== btnBuscar && e.target !== inputBuscar) {
     show_result.innerHTML = '';
   }
});
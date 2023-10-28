const display = document.querySelector('.display');
// Hacer una solicitud con fetch para obtener datos XML
fetch('./team.json')
  .then((response) => {
    return response.json()
  })
  .then((data) => {
    // Work with JSON data here
      //onsole.log(data)
      data.forEach(element => {
          console.log(element)
      
          display.innerHTML+=`<li>${element.name} ${element.lastname} </li>`;
      });
  })
  .catch((error) => {
      // Do something for an error here
      console.error('Hubo un error al obtener o procesar el archivo json:', error);
  })


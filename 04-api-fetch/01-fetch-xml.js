const display = document.querySelector('.display');
// Hacer una solicitud con fetch para obtener datos XML
fetch('team.xml')
  .then(response => response.text())
  .then(data => {
    // Crear un objeto DOMParser para analizar la respuesta en XML
    const parser = new DOMParser();
    const xmlDoc = parser.parseFromString(data, 'text/xml');

    // Acceder y manipular datos XML
    let elements = xmlDoc.querySelectorAll('name'); // Reemplaza el parametro con el nombre de la etiqueta que deseas buscar
      console.log(elements[0].children);
      // lo hacemos con un bucle for, ...
    for (let i = 0; i < elements.length; i++) {
          const key = elements[i].nodeName;// Acceder al nombre de la etiqueta
         const value = elements[i].textContent; // Acceder al contenido de la etiqueta
         
          // Realiza operaciones con el valor
        //   console.log(key); 
        // console.log(value); 
        display.innerHTML += `<li>${key}:${value}</li>`;
      } 
     
  })
  .catch(error => {
    console.error('Hubo un error al obtener o procesar el archivo XML:', error);
  });

 

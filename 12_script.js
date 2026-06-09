// obtener la dirección del formualrio en el HTML
const myForm = document.forms["myForm"];

// Asignar la escucha del evento
myForm.addEventListener("submit", (e) => {
  e.preventDefault();

  // Obtener los valores del formulario
  let nombre = myForm["nombre"].value.trim();
  let apellido = myForm["apellido"].value.trim();
  let email = myForm["email"].value.trim();
  let password = myForm["password"].value;
  let color = myForm["color"].value;
  let fecha = myForm["fecha"].value;

  const patternNombre = /^[a-zñçáéíóúàèìòùïüA-ZÑÇÁÉÍÓÚÀÈÌÒÙÏÜ\s]+$/;
  if (nombre === "" || !patternNombre.test(nombre)) {
    alert("Revise la escritura del nombre");
    return;
  }
  if (apellido === "" || !patternNombre.test(apellido)) {
    alert("Revise la escritura del nombre");
    return;
  }

  const hoy = "09-06-2026";

  const datos = { nombre, apellido, email, password, color, fecha, hoy };
  const datosString = JSON.stringify(datos);
  console.log(datosString);

  fetch("12_datos.php", {
    method: "POST",
    headers: {
      "Content-type": "application/json",
      "Accept": "application/json"
    },
    body: datosString,
  })
    .then((respuesta) => respuesta.json())
    .then((respuesta) => console.log(respuesta))
    //   })
    //   .then( respuesta => respuesta.text())
    //   .then( respuesta => {
    //     console.log(respuesta)
    //     if (respuesta === "OK") {
    //         alert("Datos recibidos correctamente")
    //     } else {
    //         alert("Error en los datos")
    //     }
    //   } )
    .catch((error) => console.log(error));
});

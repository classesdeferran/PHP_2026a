// obtener la dirección del formualrio en el HTML
const myForm = document.forms["myForm"];

const envios = document.getElementById("envios");
let contadorEnvios = 0;

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

  // Validación de los datos
  const patternNombre = /^[a-zñçáéíóúàèìòùïüA-ZÑÇÁÉÍÓÚÀÈÌÒÙÏÜ\s]+$/;
  if (nombre === "" || !patternNombre.test(nombre)) {
    alert("Revise la escritura del nombre");
    return;
  }
  if (apellido === "" || !patternNombre.test(apellido)) {
    alert("Revise la escritura del nombre");
    return;
  }
  // Añadir una variable más
  const hoy = "10-06-2026";

  /*
  // === MÉTODO 1 ===
  const formData = new FormData();
  formData.append("nombre", nombre);
  formData.append("apellido", apellido);
  formData.append("email", email);
  formData.append("password", password);
  formData.append("color", color);
  formData.append("fecha", fecha);
  formData.append("hoy", hoy);

  fetch("12_datos_formdata.php", {
    method: "POST",
    body: formData,
  })
    .then((respuesta) => respuesta.json())
    .then((respuesta) => {
      contadorEnvios++
      envios.textContent = `Envíos realizados: ${contadorEnvios}`
      console.log(respuesta)
    })
    .catch((error) => console.log(error));

    myForm.reset()
*/

  // === MÉTODO 2

  const datos = { nombre, apellido, email, password, color, fecha, hoy };
  const datosString = JSON.stringify(datos);
  console.log(datosString);

  fetch("12_datos_objeto.php", {
    method: "POST",
    body: datosString,
  })
    .then((respuesta) => respuesta.json())
    .then((respuesta) => {
      contadorEnvios++;
      envios.textContent = `Envíos realizados: ${contadorEnvios}`;
      console.log(respuesta);
    })
    .catch((error) => console.log(error));
});

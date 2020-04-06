	/********************************************Select IMG 1**********************************************/

function cambiarimg1(){
    var pdrs = document.getElementById('file-upload-img1').files[0].name;
    document.getElementById('info-img1').innerHTML = pdrs;

  }

  function cambiarimg2(){

  /********************************************Select IMG 2**********************************************/

    var pdrs = document.getElementById('file-upload-img2').files[0].name;
    document.getElementById('info-img2').innerHTML = pdrs;

  }

  function cambiarimg3(){

  /********************************************Select IMG 3**********************************************/

    var pdrs = document.getElementById('file-upload-img3').files[0].name;
    document.getElementById('info-img3').innerHTML = pdrs;

  }

  function cambiarimg4(){

  /********************************************Select IMG 4**********************************************/

    var pdrs = document.getElementById('file-upload-img4').files[0].name;
    document.getElementById('info-img4').innerHTML = pdrs;

  }

  function cambiarimg5(){

  /********************************************Select IMG 5**********************************************/

    var pdrs = document.getElementById('file-upload-img5').files[0].name;
    document.getElementById('info-img5').innerHTML = pdrs;

  }

  function cambiarimg6(){

  /********************************************Select IMG 6**********************************************/

    var pdrs = document.getElementById('file-upload-img6').files[0].name;
    document.getElementById('info-img6').innerHTML = pdrs;
}

  /********************************************Select IMG 1**********************************************/

const $seleccionArchivosimg1 = document.querySelector("#file-upload-img1"),
  $imagenPrevisualizacionimg1 = document.querySelector("#img-pre-img1");

// Escuchar cuando cambie
$seleccionArchivosimg1.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivosimg1.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacionimg1.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacionimg1.src = objectURL;
});


  /********************************************Select IMG 2**********************************************/

const $seleccionArchivosimg2 = document.querySelector("#file-upload-img2"),
  $imagenPrevisualizacionimg2 = document.querySelector("#img-pre-img2");

// Escuchar cuando cambie
$seleccionArchivosimg2.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivosimg2.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacionimg2.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacionimg2.src = objectURL;
});


  /********************************************Select IMG 2**********************************************/

const $seleccionArchivosimg3 = document.querySelector("#file-upload-img3"),
  $imagenPrevisualizacionimg3 = document.querySelector("#img-pre-img3");

// Escuchar cuando cambie
$seleccionArchivosimg3.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivosimg3.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacionimg3.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacionimg3.src = objectURL;
});


  /********************************************Select IMG 2**********************************************/

const $seleccionArchivosimg4 = document.querySelector("#file-upload-img4"),
  $imagenPrevisualizacionimg4 = document.querySelector("#img-pre-img4");

// Escuchar cuando cambie
$seleccionArchivosimg4.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivosimg4.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacionimg4.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacionimg4.src = objectURL;
});


  /********************************************Select IMG 2**********************************************/

const $seleccionArchivosimg5 = document.querySelector("#file-upload-img5"),
  $imagenPrevisualizacionimg5 = document.querySelector("#img-pre-img5");

// Escuchar cuando cambie
$seleccionArchivosimg5.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivosimg5.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacionimg5.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacionimg5.src = objectURL;
});


  /********************************************Select IMG 2**********************************************/

const $seleccionArchivosimg6 = document.querySelector("#file-upload-img6"),
  $imagenPrevisualizacionimg6 = document.querySelector("#img-pre-img6");

// Escuchar cuando cambie
$seleccionArchivosimg6.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivosimg6.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacionimg6.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacionimg6.src = objectURL;
});
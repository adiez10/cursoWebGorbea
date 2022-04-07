// $(document).ready(function(){
//   $("#boton1").click(function(){
//     $("#texto").toggle(2500);
//   })
// });
$(document).ready(inicialiarPrograma);

function inicialiarPrograma(){
  $("#boton1").click(mostrarOcultarText);
}

function mostrarOcultarText(){
  $("#texto").toggle(2000);
}

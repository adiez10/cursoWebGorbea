$(document).ready(inicializarPrograma);

function inicializarPrograma(){
  $("#parraf1").click(presionarParrafo1);
  $("#parraf2").click(presionarParrafo2);
  $("#parraf2").dblclick(presionarParrafo22);
}

function presionarParrafo1(){
  alert("Se ha presionado el parrafo 1");
  $("#parraf1").css("color","red");
}

function presionarParrafo2(){
  //alert("Se ha presionado el parrafo 2");
  $("#parraf2").removeClass("azul");
  $("#parraf2").addClass("verde");  
}

function presionarParrafo22(){
  //alert("Se ha presionado el parrafo 2");
  $("#parraf2").removeClass("verde");
  $("#parraf2").addClass("azul");
}

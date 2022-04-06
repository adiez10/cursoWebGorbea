$(document).ready(inicializarPrograma);

function inicializarPrograma(){
  $("#tabla1 tr").click(presionarTabla1);
  $("#tabla2 tr").click(presionarTabla2);
}

function presionarTabla1(){
  if($(this).hasClass("azul")){
    $(this).removeClass("azul");
  }else{
    $(this).addClass("azul");
  }
}

function presionarTabla2(){
  if($(this).hasClass("verde")){
    $(this).removeClass("verde");
  }else{
    $(this).addClass("verde");
  }
}

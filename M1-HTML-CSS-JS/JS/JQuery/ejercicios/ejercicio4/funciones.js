$(document).ready(inicialiarPrograma);

function inicialiarPrograma(){
  $("#primerH1").click(cambiarPrimerH1);
  $("#segundoH1").click(cambiarSegundoH1);
}

/*
//Solución 1
function cambiarPrimerH1(){
$(this).css("color","green");
$(this).css("background-color","pink");
$(this).css("font-family","Courier");
}

function cambiarSegundoH1(){
$(this).css({"color":"blue","background-color":"yellow","font-family":"Verdana"});
}
*/

//Solución 2
function cambiarPrimerH1(){
  if($(this).hasClass("primerH1")){
    $(this).removeClass("primerH1");
  }else{
    $(this).addClass("primerH1");
  }
}

function cambiarSegundoH1(){
  if($(this).hasClass("segundoH1")){
    $(this).removeClass("segundoH1");
  }else{
    $(this).addClass("segundoH1");
  }
}

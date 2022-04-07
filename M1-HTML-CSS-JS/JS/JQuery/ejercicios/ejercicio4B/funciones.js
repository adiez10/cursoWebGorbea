$(document).ready(inicialiarPrograma);

var contador = 0;
var contador2 = 0;

function inicialiarPrograma(){
  $("#primerH1").click(cambiarPrimerH1);
  $("#segundoH1").click(cambiarSegundoH1);
}

function cambiarPrimerH1(){
  if(contador == 0){
    $(this).css("color","green");
    contador++;
    console.log(contador);
  }else if(contador == 1){
    $(this).css("background-color","pink");
    contador++;
  }else {
    $(this).css("font-family","Courier");
  }
}

function cambiarSegundoH1(){
  if(contador2 == 0){
    $(this).css("color","#eeaf11");
    contador2++;
    console.log(contador2);
  }else if(contador2 == 1){
    $(this).css("background-color","#cc110f");
    contador2++;
  }else if(contador2 == 2){
    $(this).css("font-family","Arial");
    contador2++;
  }else {
    $(this).css({"color":"","background-color":"","font-family":""});
    contador2=0;
  }
}

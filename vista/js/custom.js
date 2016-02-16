var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
function agregar_evt(selector1, selector2){
  $(selector1).change(function(){
    var mes = $(this).find(":selected").html();
    $(selector2).html(generar_meses(mes));
  });
}

function generar_meses(mes){
  var inicio = '<option value="';
  var fin = '</option>';
  var arreglo = meses.slice(meses.indexOf(mes)+1);
  // arreglo = arreglo.slice(arreglo.indexOf(mes)+1);
  var resultado = "";
  for (var i = 0; i < arreglo.length; i++) {
    resultado += inicio + arreglo[i] + '">' + arreglo[i] + fin;
  }
  return resultado;
}

$(document).ready(function(){
    agregar_evt('.gay1', '.gay2');
});

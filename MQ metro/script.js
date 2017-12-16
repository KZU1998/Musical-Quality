var urlWS = "";
$(document).ready(function(){
    urlWS="http://musical-quality.byethost7.com/server"
});


function leer(){
    if(id==0){
        urltorequest = urlWS +"Generos/leer";
    }else{
        urltorequest = urlWS +"Generos/leer";
    }
    $.ajax({
        type: "get",
        url: urltorequest,
        async:true,
        success:  function (respuesta) {
           toshow = JSON.parse(respuesta);
           cabeceraTabla = "<table class=\"table table-condensed\"><thead><tr><th>id</th><th>TIPO</th></tr></thead><tbody>";
           pieTabla = "</tbody></table>";
           contenidoTabla = "";
           $(toshow).each(function(key,value){
                contenidoTabla=contenidoTabla+"<tr><td>"+value.idGeneros+"</td><td>"+value.genero+"</td></tr>";
           });
           document.getElementById("respuesta").innerHTML=cabeceraTabla+contenidoTabla+pieTabla;
        }
    });
    limpiar();
}
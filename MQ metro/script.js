var urlWS = "";
$(document).ready(function(){
    urlWS="http://musical-quality.byethost7.com/server/"
});


function leer(){
    urltorequest = urlWS +"Generos/leer";
      $.ajax({
        type: "get",
        url: urltorequest,
        async:false,
        success:  function (respuesta) {
          alert("llegaron los datos");
        }
    });

}

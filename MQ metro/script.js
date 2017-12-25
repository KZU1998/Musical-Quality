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
function crearreg(){
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    edad = document.getElementById("edad").value;
    email = document.getElementById("email").value;
    pw = document.getElementById("pw").value;
    urltorequest = urlWS +"Registro/crear";
    $.ajax({
        type: "post",
        url: urltorequest,
        data:JSON.stringify({nombre: nombre, apellido: apellido, edad: edad, email: email, pw: pw}),
        async:false,
        success:  function (respuesta) {
            if(respuesta=="false"){
                alert("Error al crear el registro");
            }else{
                alert("Registro creado.");
            }
        }
    });
   
}

function crear(){
    id = document.getElementById("id").value;
    des = document.getElementById("descripcion").value;
    urltorequest = urlWS +"Generos/crear";
    $.ajax({
        type: "post",
        url: urltorequest,
        data:JSON.stringify({id: id, descripcion: des}),
        async:false,
        success:  function (respuesta) {
            if(respuesta=="false"){
                alert("Error al crear el registro");
            }else{
                alert("Registro creado.");
            }
        }
    });

}

<?php
   $destino= "Lsalazar@yavirac.edu.ec";
   $texto = $_POST["texto"];
   $contenido ="Mensaje:". $texto;
   mail($destino, "Mensaje", $contenido);
   header("Location:gracias.html");
?>
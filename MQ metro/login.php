<?php
session_start();
$con = mysqli_connect("localhost","id4105697_vessel9","vessel9","id4105697_musicalquality2") or die("conexion exitosa!");
if(isset($_POST['usuario']) and isset($_POST['contra'])){
   $nombredeusuario=mysqli_real_escape_string($con,$_POST['usuario']);
   $password=mysqli_real_escape_string($con,$_POST['contra']);
   $comprobacion_del_nombre='select * from Registro where email="'.$nombredeusuario.'"';
   $comprobacion=$con->query($comprobacion_del_nombre);
   if ($comprobacion->num_rows>0){
       $consulta_a_la_base='select clave from Registro where email="'.$nombredeusuario.'"';
       if($consulta_a_la_base=$password){
           $_SESSION['email']=$nombredeusuario;
           header('location:./');
       }else{
           print 'los datos an sido incorrectos';
        
       }

   }else{
       print 'no se a encontrado el registro';
   }
}else{
    header('location:./');
}
?>

<?php  

if(isset($_POST['insert'])){
    $id = $_POST['id'];
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $eda = $_POST['edad'];
    $mail = $_POST['email'];
    $pass = $_POST['password'];
    $idlog = $_POST['idlog'];
    
     
    $con = mysqli_connect("localhost","id4105697_vessel9","vessel9","id4105697_musicalquality2") or die("conexion exitosa!");


$insertar ="INSERT INTO Registro (idRegistro,nombre,apellido,edad,email,clave,idLoginR)
VALUES ('$id','$nom','$ape','$eda,'$mail','$pass','$idlog')";
echo "datos insertados";


}
?>
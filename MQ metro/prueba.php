<?php
session_start();

$con = mysqli_connect("localhost","id4105697_vessel9","vessel9","id4105697_musicalquality2") or die("conexion exitosa!");
	?>
	<form method="POST" action="prueba.php">
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="id del genero"/><br/>
        <label>Apellido</label>
		<input type="text" name="apellido" placeholder="id del genero"/><br/>
        <label>Edad</label>
		<input type="text" name="edad" placeholder="id del genero"/><br/>
        <label>mail</label>
		<input type="text" name="email" placeholder="id del genero"/><br/>
		<label>Contraseña</label>
		<input type="password" name="contra" placeholder="Genero"/><br/>
		<input type="submit" name="insert" value="INSERTAR DATOS"/>
	
	</form>

	
	<?php 
	if(isset($_POST['insert'])){
	
        $nom = $_POST['nombre'];
        $ape = $_POST['apellido'];
        $eda = $_POST['edad'];
        $mail = $_POST['email'];
        $pass = $_POST['contra'];
		
		
		$insertar = "INSERT INTO Registro (nombre,apellido,edad,email,clave) values ('$nom','$ape','$eda','$mail','$pass')";
        
        $ejecutar = mysqli_query($con, $insertar);

	
	}
	
    ?> 
  
 

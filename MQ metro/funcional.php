<?php
$con = mysqli_connect("localhost","id4105697_vessel9","vessel9","id4105697_musicalquality2") or die("conexion exitosa!");
	?>
	<form method="POST" action="funcional.php">
		<label>Nombre:</label>
		<input type="text" name="idgen" placeholder="id del genero"/><br/>
		<label>Contraseña:</label>
		<input type="text" name="desc" placeholder="Genero"/><br/>
		<input type="submit" name="insert" value="INSERTAR DATOS"/>
	
	</form>

	
	<?php 
	if(isset($_POST['insert'])){
	
		$usuario = $_POST['idgen'];
		$pass = $_POST['desc'];
		
		$insertar = "INSERT INTO Generos (genero) values ('$pass')";
        
        $ejecutar = mysqli_query($con, $insertar);

	
	}
	
    ?> 

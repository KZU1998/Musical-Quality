<!DOCTYPE html> 
<meta charset="UTF-8">
<?php  
$con = mysqli_connect("localhost","id4105697_vessel9","vessel9","id4105697_musicalquality") or die("conexion exitosa!");
?>
<html> 	
		<head>
			<meta chrset="UTF-8">
			<title>CRUD PHP & MySQL</title> 
		</head>
<body>
	
	<form method="post" action="prueba.php">
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
		
		$insertar = "INSERT INTO Generos (idGeneros,genero) values ('$usuario','$pass')";
		
		$ejecutar = mysqli_query($con,$insertar);
	
		if($ejecutar){
		
		echo "<h3>Insertado correctamente</h3>";
		}
	}
	
    ?> 
</html>
  
 

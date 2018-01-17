<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost","id4105697_vessel9","vessel9","id4105697_musicalquality2") or die("conexion exitosa!");
?>
<html>
<head>
        <title>Musical Quality</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/metro.css" rel="stylesheet">
          <link href="css/metro-icons.css" rel="stylesheet">
          <link href="css/metro-responsive.css" rel="stylesheet">
          <link href="css/metro-schemes.css" rel="stylesheet">
          <script src="js/jquery-2.1.3.min.js"></script>
          <script src="js/jquery.dataTables.min.js"></script>
          <script src="js/select2.min.js"></script>
          <script src="js/metro.js"></script>
          <script src="js/jquery.backstretch.min.js"></script>
          
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="css/login.css">
          <link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet" type="css/login.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/redes.css">
      
      <script>
    $(document).ready(function (e) {
        
    
        $.backstretch(["fondos/fon.jpg"]);
    });
</script>
<style>
     img{
max-width: 100%;
}
</style>
</head>
<body>
        <div>
                <div class="app-bar darcula">
    
                    <div class="app-bar-element place-right">
                            <a class="dropdown-toggle fg-white"><span class="mif-search"></span> Buscar</a>
                            <div class="app-bar-drop-container bg-darcula fg-white place-right"
                                    data-role="dropdown" data-no-close="true">
                                <div class="padding20">
                                    <form>
                                        
                                        <div class="input-control text">
                                           
                                            <input type="search" id="input-search"
                                             placeholder="Buscar aqui">
                                             
                                            <div class="content-search">
                                                <div class="content-table">
                                                 <table>
                                                     <thead>
                                                         <tr>
                                                             <td></td>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>
                                                             <td>
                                                                 
                                                             </td>
                                                         </tr>
                                                     </tbody>
                                                 </table>
                                                </div>
    
                                            </div>
                                        
                                        </div>
                                        
                                       
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="app-bar-element place-left">
                                <picture>
                                        
                                    <img src="fondos/logobxs.png" alt=logo"">
                                    
                                </picture>
                            </div>
                        
                    
                       
                        <div>
                    <a class="app-bar-element" href="index.php">Musical Quality</a>
                
                    <span class="app-bar-divider"></span>
                
                    
                </div>
                
            </div>
            
        </div> 
    <div class='login'>
       <form method="POST" action="registro.php">     
      <h2 style="color:darkgray">Registro</h2>
     
      
      <input name="nombre" placeholder='Nombre' style="color:rgb(43, 189, 226)"  type='text'>
      <input name="apellido" placeholder='Apellido'  style="color:rgb(43, 189, 226)" type='text'>      
      <input name="edad" placeholder='Edad'  style="color:rgb(43, 189, 226)" type='text'>
      <input name="email" placeholder='E-mail'  style="color:rgb(43, 189, 226)" type='text'>
      <input name="contra" placeholder='Passowrd'  style="color:rgb(43, 189, 226)" type='password'>
    <
      <input class='animated' type='submit' name="insert" >
      </form>
      </div>
     
      <?php 
	if(isset($_POST['insert'])){
	
        $nom = mysqli_real_escape_string($con,$_POST['nombre']);
        $ape = mysqli_real_escape_string($con,$_POST['apellido']);
        $eda = mysqli_real_escape_string($con,$_POST['edad']);
        $mail = mysqli_real_escape_string($con,$_POST['email']);
        $pass = password_hash($_POST['contra'], PASSWORD_DEFAULT);
		
		
		$insertar = mysqli_query($con,'INSERT INTO Registro (nombre,apellido,edad,email,clave) 
        values ("'.$nom.'","'.$ape.'","'.$eda.'","'.$mail.'","'.$pass.'")') or die ('no se pudo registrar');
        
       mysqli_close($con);
       

	
	}
	
    ?> 
    	
	

   
</body>
</html5>    
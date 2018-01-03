<!DOCTYPE html> 
<meta charset="UTF-8">
<?php  
$con = mysqli_connect("localhost","id4105697_vessel9","vessel9","id4105697_musicalquality") or die("conexion exitosa!");
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
      <script type="text/javascript" src="script.js"></script>
      <link rel="stylesheet" href="css/estilos.css">
  
      
     
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
                                    
                                <img src="fondos/logobxs.png" alt="logo">
                                
                            </picture>
                        </div>
                        
                <div class="app-bar-element place-right">
                        <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Ingresar</a>
                        <div class="app-bar-drop-container bg-darcula fg-white place-right"
                                data-role="dropdown" data-no-close="true">
                            <div class="padding20">
                                <form>
                                    <h4 class="text-light">Ingresar</h4>
                                    <div class="input-control text">
                                        <span class="mif-user prepend-icon"></span>
                                        <input type="text">
                                    </div>
                                    <div class="input-control text">
                                        <span class="mif-lock prepend-icon"></span>
                                        <input type="password">
                                    </div>
                                    <label class="input-control checkbox small-check">
                                        <input type="checkbox">
                                        <span class="check"></span>
                                        <span class="caption">Recordar</span>
                                    </label>
                                    <div class="form-actions">
                                        <button class="button">Ingresar</button>
                                        <button class="button link">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                    <div>
                <a class="app-bar-element" href="...">Musical Quality</a>
            
                <span class="app-bar-divider"></span>
            
                <ul class="app-bar-menu">
                        <ul class="app-bar-menu darcula">
                    
                    <li>
                        <a href="" class="dropdown-toggle">Generos</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li class="divider"></li>
                            <li><a href="" class="dropdown-toggle">Otros</a>
                                <ul class="d-menu" data-role="dropdown">
                                    <li><a href="">1</a></li>
                                    <li><a href="">2/a></li>
                                    <li><a href="">3</a></li>
                                </ul>
                                
                            </li>

                        </ul>
                        
                    </li>
                    
                    <li><a href="">Soporte</a> </li>
                    <li><a href="registro.html">Registrate aqui</a>
                        
                    </li>
                </ul>
                
            </div>
            
        </div>
        
    </div>   
    <div>
        
    </div>
    <div class="tile-group double">
        <h2>
            <span class="tile-group-title fg-black">Top 10</span>
        </h2>
        <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="http://f4.bcbits.com/img/a2528363725_10.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Monstercat<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Can See <span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="http://f4.bcbits.com/img/a2528363725_10.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Vigilancer - Can See.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
           
        <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                        <img src="https://s.mxmcdn.net/images-storage/albums4/6/0/1/3/2/9/37923106_350_350.jpg">
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Ozuna <span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Criminal <span class="text-bold" id="ozone"></span></p>
                            
                        </center>
                        <img src="https://s.mxmcdn.net/images-storage/albums4/6/0/1/3/2/9/37923106_350_350.jpg">
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Criminal - Natti Natasha_ Ozuna [500kbps_M4A].m4a" type='audio/mp3'>
                            </audio>
                        </div> 
                </div>
            </div>
    </div>
	
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
	
	
	}
	
    ?> 
</html>
  
 

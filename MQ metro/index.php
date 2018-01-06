<!DOCTYPE html>
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
      <script src="js/jquery.dt
      ataTables.min.js"></script>
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

            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://is1-ssl.mzstatic.com/image/thumb/Music118/v4/db/d6/54/dbd654ef-c216-f6a6-c3d0-9c219b176a7c/886446817590.jpg/1200x630bb.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">San Luis, Silvestre Dangond<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Como Yo <span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music118/v4/db/d6/54/dbd654ef-c216-f6a6-c3d0-9c219b176a7c/886446817590.jpg/1200x630bb.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/San Luis, Silvestre Dangond  - Como Yo (Letra).mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="http://cdn2.ipauta.com/wp-content/uploads/2017/10/Tomas-The-Latin-Boy-Ft.-Farina-Parcera.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Tomas The Latin Boy ft. Farina<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Parcera <span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="http://cdn2.ipauta.com/wp-content/uploads/2017/10/Tomas-The-Latin-Boy-Ft.-Farina-Parcera.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Tomas The Latin Boy ft. Farina - Parcera (LETRA).mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://enmp3.org/wp-content/uploads/2017/10/Mau-Y-Ricky-Ft.-Karol-G-Mi-Mala.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Karol G ft. Mau y Ricky<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Mi mala <span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://enmp3.org/wp-content/uploads/2017/10/Mau-Y-Ricky-Ft.-Karol-G-Mi-Mala.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Karol G ft. Mau y Ricky - Mi Mala (Letra_Lyrics).mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="http://cdn1.ipauta.com/wp-content/uploads/2017/05/Shakira-Ft.-Nicky-Jam-Perro-Fiel.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Shakira (LETRA) ft. Nicky Jam<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Perro Fiel<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="http://cdn1.ipauta.com/wp-content/uploads/2017/05/Shakira-Ft.-Nicky-Jam-Perro-Fiel.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Perro Fiel - Shakira (LETRA) ft. Nicky Jam.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://4.bp.blogspot.com/-bOERxkHToTs/WbwPS-Mi63I/AAAAAAAAMqo/CnyMJJyp370CTyJBQ3nuKE8mIWq3U1aSACK4BGAYYCw/s1600/Mr%2BBlack%2B-%2BFiesta%2BPal%2BMundo.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Mr Black<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Fiesta Pal Mundo<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://4.bp.blogspot.com/-bOERxkHToTs/WbwPS-Mi63I/AAAAAAAAMqo/CnyMJJyp370CTyJBQ3nuKE8mIWq3U1aSACK4BGAYYCw/s1600/Mr%2BBlack%2B-%2BFiesta%2BPal%2BMundo.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Mr Black - Fiesta Pal Mundo _ Audio.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://i1.wp.com/latinmusicrecordpool.net/wp-content/uploads/2017/10/Mirella-Cesa-En-ti-mp3-image.jpg?fit=1000%2C1000">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Mirella Cesa<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">En Ti<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://i1.wp.com/latinmusicrecordpool.net/wp-content/uploads/2017/10/Mirella-Cesa-En-ti-mp3-image.jpg?fit=1000%2C1000">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Mirella Cesa - En Ti (vídeo oficial).mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://i1.sndcdn.com/artworks-000207573634-wnwksx-t500x500.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Karol G<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Hello Live<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://i1.sndcdn.com/artworks-000207573634-wnwksx-t500x500.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Karol G - Hello Live _ YouTube Space Miami.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="http://www.elgenero.com/images/subir/images/14780274251492578769.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Karol G<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Hello<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="http://www.elgenero.com/images/subir/images/14780274251492578769.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Ozuna Ft Karol G - Hello ★ ® 2016.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
           
    </div>
          
</body>
</html>
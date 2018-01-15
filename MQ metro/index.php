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
                <a class="app-bar-element" href="index.php">Musical Quality</a>
            
                <span class="app-bar-divider"></span>
            
                <ul class="app-bar-menu">
                        <ul class="app-bar-menu darcula">
                    
                    <li>
                        <a href="" class="dropdown-toggle">Generos</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="">POP</a></li>
                            <li><a href="">REGUETON</a></li>
                            <li><a href="">SALSA</a></li>
                            <li><a href="">ELECTRONICA</a></li>
                            <li class="divider"></li>
                            <li><a href="" class="dropdown-toggle">Otros</a>
                                <ul class="d-menu" data-role="dropdown">
                                    <li><a href="">MERENGE</a></li>
                                    <li><a href="">TRAP</a></li>
                                    <li><a href="">TROPICAL</a></li>
                                </ul>
                                
                            </li>

                        </ul>
                        
                    </li>
                    
                    <li><a href="Contacto.html">Contacto</a> </li>
                    <li><a href="registro.php">Registrate aqui</a>
                        
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

    <div class="tile-group double">
    </div>



    <div class="tile-group double">
        <h2>
            <span class="tile-group-title fg-black">Te puede Interesar</span>
        </h2>
        <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="data:image/jpeg;base64,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">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Zeed<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Clarity<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTEhMWFRUVGBgXGBcXGB4YFxgaGBcXGBgXFxgYHSggGBolHRUXITEhJSkrLi4uGB8zODMtNygtLisBCgoKDg0OGhAQGi8lICUvLS0tLS0tLS0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQIDBAUGB//EAD0QAAEDAgQDBQcDAgUEAwAAAAEAAhEDIQQSMUEFUWETInGBkQZSobHB0fAUMuFC8QcjYnKSJDNDwhVTsv/EABoBAAIDAQEAAAAAAAAAAAAAAAAEAQIDBQb/xAAmEQACAgICAgICAgMAAAAAAAAAAQIRAyEEEjFRIkEFE3GxMoGh/9oADAMBAAIRAxEAPwD1TEVnBxAP5CYMQ7n8kuK/cfL5KJNRiqWhOUn2eyT9Q7n8koru5qMBKFPVeiO0vZL2zuaO2dzUZShR1Xotb9knau5pe1PNMCVVpE2/Y7tTzR2ruaYClaikWtjxVPNKHlNDU5qikTbHZyjOeaISwo0TbDOUmcpQEI0FsaXlNNQpzkxzVNILYvaHmjtHc02CEoKmkRbF7Q80doeaISEIpFW37DtTzSdq7mkhNUpL0Vbfsd2zuaQ1nc0iRWpeiO0vYvbu5/JLTrOkX3TCEtId4eIQ4qvAKTvyX0IQlBwpYkd4+XyUYCmxA7xTAE1F/FCkl8mJCUBOhACLChIShqcAhqrZZIMqAE4hMLtUFkiN2qUFJl3Ka1wmc1gCNtbXnpB9VYvRPnT2KtUrC1t/yytU3SqNUFCtT4SwhUsKEhNKfCCEWFFeokD0+sduf5uqdKvJPS/ktIq0FEpcUrNUx7xMz09dD8D8U5gm4VgonhJCcAlhZ2UojhNIUhCSFayGiMhIVIQmkKbKNDCEUx3h4hKUtMXHipb0QlsuISISw4V6w7yaApagukhbJ6F2tsbCAlhICgmhwCIQkLrKCUiKtVAUBeRJJEc9IHOSlxIBE78/zwXN8Z9oW0oZ703Bu3qOvjy30W+PE56RpGDZd45xprAWNMm7T0t8P7LCpcXc7l3dLwb+BusPEYwPcSHTJkk6meYUJfGg3n7rr4+NCMBuOJJHa0ONN7xAPdGpAiZjNfe48gVvYDFl9QQRliNI6+ItH5r5fU4iNRImQYPkdbEakjr6dBwHiwpGXS8h2rSCCAdQAec7nx1SXJwJK0ZzhR6OiEzDVg9ocNCJ/hSrlGFDYTamikVXiL8tMkbKV5CjLqVhczuZt62/NVlYvHZbzmMxprYj13ss3iXFDcDWABeQARJDjPMRaftiVcdIAcZEEnWZ/q1OsgenVdPBitm0YWa1XjZEkRJt9LA6LW4Hx5p7rjA59SdOp6LiS+ZMHvH8kpzMQGm5gfIjTzsn5caEoGrxJo9YpVRsRE6zI6/byVhrwVxPB/aRr3GnM2nM4iT9D5cvNdRgjAnnfwXGy4JQexWUGjQLU0hI2pIlLKxM2hpCbCeUQpsq0RkIYLjxT4SNFwpvRWtlhCRCXGRjxdIApCkWiejJrZG9VqlSFaIVPF01pAskSCrOnmi+ipUzBV6mDF1aSotRT4o0Ck7nB6R1XkPG25nZxqddT5glexVMQ05xbuxmnQSJv5EFece0eBpB5axwBJJ1sZiIjz9Qn+E9OLN8Xo53A2Jk/nNWziZVbEYSCYiw102uARrv8FWZVMjKYaIs697ee+nyXQUnHQx4LGYC87/Y/RWsFXMtLTBk7Wv5GBctmFnU5k5hfYkeMiNP7KxhRqQYIBnlBgi/SFjlXZFJKz2f2WDewaWyc1zJJi5gCdgI0t8lsLD9kKk0GwRENywDoABcm5mN7rchefmqkxR+QJXO+2GNy4d8AzYeAcQJi33XRrlPbXEtFJ+kACRGsnbrdTiVySJS2eccUqtJceos2wNxYQIMRoqb64dcE7aHU2nrsm40A3Ly4GctrWPwNlBVGkCCeWwg8t/5Xdwx6oaiqND9THVV8a4GL+X51Vd1V0942sCBY7W6HTTqpMNhwcptB31IBJtfTf1TPZvRfyP4VS78mbacyfEbL1v2dcH0Wnn1nyXnnBcDT7TI8zmiALXnQ899Oa9Mw9ZjWNgjLIa0jQ7D42SHNdRUUYZfRa6JxqETKUi1lSqulc1Kxei3RqSrDVRwlO60YVZ0mVcRhakAun5UZVWylDkIhCyNghEJwQVYiiCpZV8QbWTsWSL/AAGvksvGY7LlvIO63hBvwWSss0WiZKfiOIMa0umw1I2tN/zdchj/AGqyOMaN25/ZYfEfao1QQ0NaDqIElNw4c5tWjSOJs1vaLjxDnNbo4B3d1t1+ax8Vi2v0nm6Y1gCxHgsd/ES494NaAbAaDnE8ymYzFiO4PUGI3uF1ceOOOKYyoKKsfi8SJAh0awBrO+vx/hJ+naWW0I13v+BU8LiS4yf3XBAgj5ztyV1hOaTofnp5IjLvbJWyHBT3s/7QQBefG/ifJQYrEGm075iAbR/xOk6K7UwsGWWP58FR4niP8p7XholhiHGS6wltoBEkqmX4wd/RWWkdp/h3xstyhxs6o6nym2Hy3InRx6fBelcNxwqiRzeP+Ly36LxHgfEmvdQIJAFdzQHCD3W4WxgRNifLyXrPsbVLqZgCM1Q5ojMe2qiAOQygzvmXAzJdm0KS8mzjsWKYBNhNzsIvdcB7e8UY6g9+rQ9m8HWAP+Q8+m2j/iZWe2lSEw01mBxjMA0Am7dwXBo81wfEsaabHuLpAe0kATb9TXkgkQZAIjaBe4KjHFKpP2CX2ZGAq5wWl2UNlwsXSYsJBNiYEn1VnFk5RlvcZoMTzvFtVV4XihlIYAe8+QTDoDu6TAiIMR/Kusw7nQX33toPBd/D8oafkbjtBRwwy385P2SYbEDNADoiII169fgn1ReG6DUeHwVTGYjKcx1GgtHS5P0Wkn1JejoMHiWtMuBLTBtGoMjXZavBeOnOGXALs3e6DmNrLj8DjDrUEeEx16DyUp4gWmWAHYgnVs3afJTKMckWyXFSVnsuE4m17ZBtz2mYI6n7oxMG4XmPD/aU0tWtLZ/bAtPI/dbeG9r8zgYgH+n6rlZOHOL+K0LSxNeDucNZW6T5WBg8fmcRNomVrYSoTfY/Ec/BJ5INeTJouQhAQVgUoRCEKLLDmoJQEpQQZ/EKg0+WvkuJ45juzJgBpi3veJm5vvrqu4xbOi859qqtJ0gWLXQSRFyDOvlf7LqcCClKhjDHs6OR4niS+dpN/vzWBWxRY+8TyBt4LUxLhmMG3wWJxXKdDrqBcLu8lOGJdTq5cfXGmi/+rnvH42+KmoYuDzHLksbhxJ7t48Mvz/hXTVDO6JgW0XNjyXLzoRWRvR0VINIDgBKc5xvssnAYzYzdW/17RY+u38JuEky6KWKr5SIcXNH7mzEn6DT0KMfWFS43BMGxHQTE6K3xDDhzSYkgT1PmNQsbEU7lhOsEdPGElyHKKa9mM9Gnw/DFgpOmWis9wki4NKkJbfvAFrtN5XpH+HftFSL6VA5g99Ko68xDa1TR0wSSCYi3gvK6DMtMRqHPk8pZTFhv+2fLzWnwrGGjisI9re8G5bDvQ+pUBJt/qJ6X8VxpIVZ6D/is4kUoMhtemY6ZWgTzvpyXD8VoksqwbOJHUf8AU4hzjEyAAdenktLjPHv1bZyyBXpG99GEz6sCx+LPJ7SN3OE7XrVrHXaduXO0RBGdw2KZAJG+4JsT48p81JTxeaoTJYwzYHczp53I8VnUmQ4NkSfTx1N4utjAYcDvZYmdb7m42XY4/aSURmFvRdokhovKVzWwXECYVZ+PAMATtP5qq+MxdoEp+UktG7GYnF3tYD49Lqv+pGo25X08FB+pBsTbw/JVbiMsEAH5/LZKy5LjdbKvJRP+tL3gb9TZbXD6xabwd7aeUrmeGBs94mOUZR5repOEgzadk/xLyQbkO4IdoNs9B4JxHtMoIa48jB9BMnbmu74a/a46ON/7LzL2Zq0mkudfQWExM+ZGn4F6hgBYGFx/yEFB0jl549XReCEoQVyBYahKhQSOamvE7wlahzlKAzOI4d5b3X5TeTvHQjTprovH/bBtRlV2d0zEGdQdDr0+Oy9lxFUEGTGuui859rsPTeS/IHOt3tLDaBrub812vxc2p0xriyqR565ua6p1jE8vz+Fs1sLckBVG4QGQ4CPFd3kRbXxo6eTa0UaFKf2yZ6RB5XsbdVYbgBBOYj4eSmpjvQNBEQfS3KJUUa7c4K5csai+3kTcafYbSoBo7v3KmylsOOUtdNjr8PEJcM3zPxT61IlkiTew20NxvPlHVV0kUY9+Mb+0u2FmkAaC069NlhcReM5DPOBInz163srFXCl2YtzFwvA8DpAHJSmg2s0ZRBbmJcNwbDwvaOWYpTO5TVGM7ehuFZVgfugXgCDduw8BqefgtGphv+qoAEEtNN2+gqFzp6w4+OnJM4RiXPqP7Q5y1uukgWi0EDw9VrYnBB1alU/1UzuZOZpIMnYb30HiubNqzF+TK4ZQc1jZMA1Q4dRlqjc81Y4kHRWykkl0RDiTNWo5oggA3JiJ08lZfQDQwQf3tPK86x4Tayjr1IqgsF8xJm4JE9LC5MX8NyRSbBHOAEVYqHoZFpB0jX0WvQxbBDQ4tvBkgjXxB+Kir4UU5qE584OUxEOFybbxcAxqVRbhdHmRJ7vUEkgiQbaLo4HKGjaDaNDIX/tytAEkeet9rqGpTzDvTB9VPhaRyuPgbaHXX6R8EYho+HwTipo2RAOHAtEOMesKCtRixkAbxPhp8+qsD18VI+xHWN/lz0+alY1L5eKLKKeyhRNoExufv8FcbTDbhPdg2gdwC99VYpYQ2supx4tf5Ux3FrbLvs6XvqtDDfMIn+45L2jg1B4aM1TPax1ProvN/ZbCUw4ONMBwIh3KOml77br1HAPBaCCD4LjflZttI53LlbovgIIQ1yHLhCYyUJUKAFakclakcgDPxuFDtduS43jOFFMmdCbH4+K7bFTFjE+a5njAJIJYHFu+/lMro8Scro1g2cdiMAACdvBZf6IX7s2WxxfGZWkEQTMAGQORv5LIwuLJ7up06rrTWSUBlqTiRN4c2cxt4D6qOng5cIgj+fQ7rVr0ZbcW5befNRNwTy2ALeMHy6pHNk61FmUpNJIzatAF+k8/tyVljodcBoFtBOtpMLVwHC3au7t9NSfhY+q1zhGNZ3RcHUi86SPut4ZMeq2XUl9HLVOGNDwZLWOudM0TMOBuBrYJ9XhYALaTRkcZaQIdEbnpMySul4fwjtDAkmdfX+fVbzOHBjMstaWyCf3Oi0ZQNCeultVXJkhHXllW0eZYfhZpVHBxJkECb2uYHSSfXqtZmHg0iS0CWkgxeDEbaXOu9r669TCtzQG5nGZeTmcYE25eATeJ4Vww1EBsmXEXnKQ5ocHCIjuyZ5cpXLzwowkim6o1jXd1oL2NiWGRmh5LDfLapoNtItNDB8KFavrBgkWFhfY8oFui67h/AC+mS4QJcMzbkgWI2lstNvAA2UPDqDM7rZsshp/Y4XsQRMGIt18VfAlQRObxfCXAupua0tzSSb2nb/kR6Ko/hbHPimZpxYGBFv6d516L0l+GzNgkPJGUEkNdNpHIi8yOiwOJcEFKZ9dF0MeSD09M2TRyWJcM3cuBsRDh56hwVR9ECpOXKJ+K7Clg2Oac94tMHNbTqVnY/hBg5TMbHX1j6ea1nPGtsu5RMTEYTvTAj47RO3NK7hzTBBkeAPqddleGBfBBFvG/mIT8LQgWEc/r5pbDktuKKRl5SKgwend5rQwuABb4dPmqOJxRZbQ/fkr3BsZLcty70BvO22l4T2JZIw0axUkje4VhcxyN2idoXbcOwbWXE3HiuZ4VObMKYB0nfToLjzXWYAGL/ALl8ycvAtkbLwCCUgQVzTIahEoUAOagpAkJQBHUZKz+JUu6TG32WlmVfEQGm3lzlbY5NNEo8q9psC/PZrg0aG7hfqTpKysHgjNhHXqu641xEBxaWHXnfqs5gaLyIXooZ5/qSaHo5ZdaozK7SAG3PP6BPZVI6qTF4hjTYzPr4qu6oBp/ZcjJinkyeBdwcpGth3evxWpRpB4ymDePW0rmqOK0tHPotLBY2DZMvF0VRLyio+Dp6OE7NvcExrt532sVnYxnam0E6SJMDU96wjfe5R+vFQZTed5+HSeivYJjSIsNhBWEbh8n5MlozuC4BjMRNRwLnZmgnRstIt6gevNbeN4OOyyO7wkyY5ue4m29xtyWFxItbUERMze26163H3ta54Af3v2OEENMyA5tiASIJvGypnxzk1JESTezTdDGBrabiYEtbtIMzHx8lj8cwbHhpZ3HCcpGndNx1vKxeI8fxFZzSwmm0Q4Nad9iXWJt5dFpM4o6plp1C0kXzAXmOmm6jDhnCpBGLWyGhQNN0ugH3oOhi03A5abhaZpGo2XCx0IvPhF+eyTFNaG9eRNvyFntxYpCBA1Njp0H2Wkrnv7JextXCtpy0Rbn+dVmV3c4slx+PLt5lZlbFLeOPuqkaxjemI+sZI0UVEGSDv8ANDKoP7rfmilw+IYTBMRz3SscM8eTSKdHGRk4/BGbiR1t4X9NlNwHAv7QENc4WBgR1MEaW6redlN5Ft1b4XxAB2UMO15XZ/fNY6SGf2tRpI6fhNAZRAED+PVa1JvkquDcC39sTqPHVW153LJuTsQb2PQUzMlWLIFQhCgAJTXFNe66bmQABI9AUitYHP8AFuFh4lsZuvXf4LkOKYLKNIJ2/hekVAue47gA8SBddHjciVdTWE34PPq1GxTqG5N76fJbdbhZiACSfjOiTifBjTpB5GhGYTuZv0/pC6OGSTSY3ikrpmK6sGm48uSzcTxR5OVogZgD5wflCt8UDQRlMyDPqQMtp0Czq5Y3KeomOXW3RNT40JVJf7NXiUto2KPEsmp21/NVJhPaXvmXQPw+ViuYxLsxESToBzk8lscK4C7JncIc64HIfzEongh0XbVlpYodVejpOMcaIDSADoZGu0DqrNXH1CwwB3hBvzAuI0j6rJ4VgclN+YXlwA1sJE//AJ05J2DxUD9sxYkiTIsRdLZMEaqH0YSxKqj9FirXdTIAgxaef4FJwnjDi4ktHOTsZ202VDiFdrpOQf7o05GeXzTsThJoQBDg3rJiflI9EQwrqu32EcSpdhnEvaTvWdMG/Llr4qvU4tn0P8eSgxXs8SywhwkgRqOQ9PgsGj3XXBaRt5WsmcWCCTUd0bQxQp1s0RxN7HOae8JEc7x9VotxAd9eqx6Dmucbja58BfTmFd4cGl8OJAgkc5iR5WRDjQVyfgqsKW2Xa4sYtH4EyjSOvUra4Rwrtc7gAWiwuRJgx15FPpcJcCWuaQfwzPol8zjbSM8sknSIOFYPMY15dV1vB+Egd50bR9lW4Dw4N7zhJ+i6ilELm8jkSS6oVnN+B9IQE5yfCjcFzbsxHhLKiD0NdooYE8IRKFAFes66a16biHd4+XyTA5AFgOTpVYOTg9AD3KvVYIU+ZIFeMqJRA+gdZ+Cy+N0XGm4BjSCO8SYMC8ixkzFreK2yquK2HM/AX+gTGLI1JMtGVM4Hi/s/kh9RwaBAytFyI0bNp+5XEcVw5bUewkGI7zTLdAbHxK9q4gwObdodJAAIBA6wfy+2o8v9p+EOZWfluJJHz+oXe4HJ/Y+s2dHiZOzqTM72ZwPbVg0zABcfAED6hegValNtVlI2LmEjaAI0jo134Vl+x3DCxvawQ51vKfyy2Mfw2ara2a7WwBsBqQPGSo5OWMsvVvSX/SufIpZKvS/sOwItYnS4lotyHluFjcTw5EtYQJMAf1EmSQCTcxNyupazM0kiNlQdhzImDmcNBoBczM7gfl0tjy09mMMlGHhcG5pLH5SJHdiTlPhsbrabRIgWkaEToSYBJ1OkmbqzXoEm0CCDJGosCNtvwqwynDZ1P590ZM1pBPJZmZ2NqspT3i0n0j6td5LifbHAClUDmiA/MQNrRMeo9V3VLh+au2tJBbNuhEEX2ufVUvavhvasnemCW/m2y24+VQyx39b/AJNcORRmt/yecYSmczQP6nCSTAuQDJ5XXccJ4DnfLXhxbALeo/cQR/Ty6Fc3wrhT31GiIv5i8fVer4Cg1khoiDqABm8ba/nQb8/kfqSUGa8vIo6iyvwHCuY0tyMgON5kl2htEAQBufJbTKJ1J+CjoHvOGk976H5BW2rz+bK5SbOZKVuyKnTGn8fBWWAJhTgUvKVlSXMmPcoy5NLlmQOLkjXXHiFEXJKTu83xCANJCEIAzcYe+fL5JmdNx7v8w+XyUYcgCw1ycHKvmTg9AFnMgFRBycHKQFJhVe0zPd/phvqA4/NvorLhZVabIc7/AFQfQAH/ANVrBrZKEqCfJZOJwbc5c4S479DqPmtwuCRuHBN1vDN1LqVGXg8I1rcosBPxMqdtG61xhGpThhsofJtkOZlGmR1URpAkCOfxhaFahdPoi+in9urDsZ/Zjcc0oZNhZaNXwUVOjJQsugspVKMaf3UWIw4LSDuCPXVbgw43TXYUKq5FB2OWpYBmYZQAW2B5D8lbNJu53U9XDgGyAQrzzdyXJsiqPylruRAPg4gfPL6K60qnXZmyjqD5NM/OFbpiywm1SKMkKTMmlyQuWJA4uUTnJHOURcoAcXIonvt8R81E56XDO77fEfNAG2hCEAYnE3f5h8vkFXbUUnFj/mu8vkFWBQBazpzXKs1yeHIAshycHKuHJ4cgCwCli8qEFPDkWA9wUlJRZlIHKbAsZkAqEOShygDyXin+J2PptqVf0lDsGVn0Gvc8jM5h0a0vzOtqQI1VzFe3nEWuwtIYKj2+Jpuqdm5xYWgOfElzwGyxuaCQb+SyMbwPi5x/6l2ApVmUi4Yek6rTFKm3NLXNYKo7299zJ0EVMb7IcUqHDVa+EGKe0Vu2bVrMAc59R5bJbVBsHNIgwIA6KbYHT4v224nhWdrjeHMp0CQDUpvFTJms1xa15kSRaWzpN1LS9vMVh6tL9fhGMw1d4ZTxNJ+ZhzXa8gknKR3rwYkwYhZ3FMHxrG4cYJ+EoYWhDA5zajXuyUy0hjR2pk90axMQXASlxHs9xLHdjhMRQp4XA0HMP/ca+rUZTBaxpLHuGbLYmwkk3iFNsD1glGZRkozKoDagUYYpC5NzKbAQtSlyaSmEosBxcmFyaXJrnKAHFyjc5ISo3OQAFyfhXd9n+4fNQuKfg/8AuM/3D5oA6KUqRCAOe4sf813l8gqoV7imHeari1riLXAnYKsMJU9x3oUAMBTwUowlT3HehThhanuO9CgBA5PDkDDVPcd6FOGHf7jvQoAUOTwU0Yd/uO9CnDDv90+iAHBycHJoov8Add6Jwou90+hQBQ4phKtQjs6uQBr2kd4Zi9sTLSIy2IME66Kr/wDE1pJ7dwkn+p5sWhobd1g2D3h3jmmQQtrsn+6fRL2TvdPogDExXD3Ah/all2SO1qFtjVkS4n36d4/8e2wMITSa39QczM78zXvdA7It1zS8B5a+HeAiy23YckQWEjkQmjBx/wCPn/TzsUAZAYYphuIa2H9rBc50tsOzzOIJBBd+6bkQLWjdwyo5wdTxLyBUqOLc5ygOc5zWggaDMLGdABAAja/RD/6h/wAR9k9lAjRkeAhAGM3hFYaYh7tLve6WwGCwaQHWZEOG5Jkl2azwvAOpGX1XP7sAFziJL3EmHE/09m2+mU8zOj2TvdPojsne6fRAAXJpcjsne6fRJ2L/AHT6IAQuTS5KaL/dd6FIaD/dd6IAYXJhcpDQf7rvQppw7/dd6FAERKaSpThqnuO9CmnCv9x3oUAQkqTBn/MZ/uHzCP0lT3HehUmEwzw9hLHAZhseaAOgQhCABASoQAFIhCABBQhACpChCABCEIAEIQgACAhCABCEIAEIQgAQhCABCEIAEqEIAQJShCABCEIARCEIA//Z">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/zeed.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
           
        <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                        <img src="https://upload.wikimedia.org/wikipedia/pt/e/ea/Mr._Probz_-_Waves_%28Robin_Schulz_Remix%29.jpg">
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Mr Probz <span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Waves <span class="text-bold" id="ozone"></span></p>
                            
                        </center>
                        <img src="https://upload.wikimedia.org/wikipedia/pt/e/ea/Mr._Probz_-_Waves_%28Robin_Schulz_Remix%29.jpg">
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/waves.m4a" type='audio/mp3'>
                            </audio>
                        </div> 
                </div>
            </div>

            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://orig00.deviantart.net/d089/f/2011/347/3/d/deadmau5___strobe_by_babie5-d4j1cr0.png">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Deadmau5<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Rise you weapon <span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://orig00.deviantart.net/d089/f/2011/347/3/d/deadmau5___strobe_by_babie5-d4j1cr0.png">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/rise.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://i.ytimg.com/vi/KfPL9yEC2Ts/maxresdefault.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Robin Schulz<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Sugar <span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://i.ytimg.com/vi/KfPL9yEC2Ts/maxresdefault.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/sugar.m4a" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://pre00.deviantart.net/5ad0/th/pre/i/2013/159/b/e/unofficial_monstercat_album_cover_007__solace_by_petirep-d687x6w.png">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Timeless ft. Veela<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Rameses B <span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://pre00.deviantart.net/5ad0/th/pre/i/2013/159/b/e/unofficial_monstercat_album_cover_007__solace_by_petirep-d687x6w.png">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/Rameses.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="http://i.imgur.com/1Qd05zE.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Bonny lovy<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Quien Sera<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="http://i.imgur.com/1Qd05zE.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/quien.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://i1.sndcdn.com/artworks-000110138046-ahtucd-t500x500.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Callen D Agostino<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Stay<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://i1.sndcdn.com/artworks-000110138046-ahtucd-t500x500.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/stay.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="http://direct.rhapsody.com/imageserver/images/Alb.164618628/500x500.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Lilly Wood<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Prayer in C<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="http://direct.rhapsody.com/imageserver/images/Alb.164618628/500x500.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/prayer.m4a" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://f4.bcbits.com/img/a1624492499_2.jpg">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Kalleta<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Stand by me (ft Abby)<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://f4.bcbits.com/img/a1624492499_2.jpg">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/stand.mp3" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
            <div class="tile" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide">
                            <a href="registro.html">
                            <img src="https://i1.wp.com/elmovimientourbano.es/wp-content/uploads/2017/05/Charly-Black-Ft.-Daddy-Yankee-Maluma-Farruko-El-Boy-C-%E2%80%93-Party-Animal-Official-Remix.jpg?fit=892%2C870">
                        </a>
                    </div>
                
                    <div class="live-slide" style="color:blueviolet"> 
                        
                            <center>
                            <p class="no-margin text-shadow">Charly Black<span class="text-bold" id="pressure"></span></p>
                            <p class="no-margin text-shadow">Party Animal<span class="text-bold" id="ozone"></span></p>
                            
                            </center>
                        <a href="registro.html">
                        <img src="https://i1.wp.com/elmovimientourbano.es/wp-content/uploads/2017/05/Charly-Black-Ft.-Daddy-Yankee-Maluma-Farruko-El-Boy-C-%E2%80%93-Party-Animal-Official-Remix.jpg?fit=892%2C870">
                    </a>
                    </div>
                    <div data-role="audio" data-mode="micro" >
                            <audio>
                                <source src="media/animal.m4a" type='audio/mp3'>
                            </audio>
                        </div> 
                       
                </div>
            </div>
           
    </div>
          
</body>
</html>
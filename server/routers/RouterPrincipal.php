<?php
include_once('../routers/RouterBase.php');
include_once('../routers/RouterFuncionalidadesEspecificas.php');
function cargarRouters() {
   define("routersPath", "../routers/");
   $files = glob(routersPath."CRUD/*.php");
   foreach ($files as $filename) {
      include_once($filename);
   }
}
cargarRouters();

class RouterPrincipal extends RouterBase
{
   function route(){
      switch(strtolower($this->datosURI->controlador)){
         case "generos":
            $routerGeneros = new RouterGeneros();
            return json_encode($routerGeneros->route());
            break;
         case "listadereproduccion":
            $routerListaDeReproduccion = new RouterListaDeReproduccion();
            return json_encode($routerListaDeReproduccion->route());
            break;
         case "login":
            $routerLogin = new RouterLogin();
            return json_encode($routerLogin->route());
            break;
         case "musica":
            $routerMusica = new RouterMusica();
            return json_encode($routerMusica->route());
            break;
         case "registro":
            $routerRegistro = new RouterRegistro();
            return json_encode($routerRegistro->route());
            break;
         case "usuario":
            $routerUsuario = new RouterUsuario();
            return json_encode($routerUsuario->route());
            break;
         default:
            $routerEspeficias = new RouterFuncionalidadesEspecificas();
            return $routerEspeficias->route();
            break;
      }
   }
}

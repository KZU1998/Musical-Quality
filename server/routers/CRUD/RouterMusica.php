<?php
include_once('../routers/RouterBase.php');
include_once('../controladores/CRUD/ControladorMusica.php');
class RouterMusica extends RouterBase
{
   public $controlador;

   function __construct(){
      parent::__construct();
      $this->controlador = new ControladorMusica();
   }
   function route()
   {
      switch (strtolower($this->datosURI->accion)){
         case "borrar":
            return $this->controlador->borrar($this->datosURI->argumentos["id"]);
            break;
         case "leer":
            return $this->controlador->leer($this->datosURI->argumentos["id"]);
            break;
         case "leer_paginado":
            return $this->controlador->leer_paginado($this->datosURI->argumentos["pagina"],$this->datosURI->argumentos["registros_por_pagina"]);
            break;
         case "numero_paginas":
            return $this->controlador->numero_paginas($this->datosURI->argumentos["registros_por_pagina"]);
            break;
         case "leer_filtrado":
            return $this->controlador->leer_filtrado($this->datosURI->argumentos["columna"],$this->datosURI->argumentos["tipo_filtro"],$this->datosURI->argumentos["filtro"]);
            break;
         case "crear":
            return $this->controlador->crear(new Musica($this->datosURI->mensaje_body["idMusica"],$this->datosURI->mensaje_body["nombre"],$this->datosURI->mensaje_body["artista"],$this->datosURI->mensaje_body["album"],$this->datosURI->mensaje_body["caratula"],$this->datosURI->mensaje_body["audio"],$this->datosURI->mensaje_body["linkCompra"],$this->datosURI->mensaje_body["idListaDeReproduccion"],$this->datosURI->mensaje_body["idGeneros"]));
            break;
         case "actualizar":
            return $this->controlador->actualizar(new Musica($this->datosURI->mensaje_body["idMusica"],$this->datosURI->mensaje_body["nombre"],$this->datosURI->mensaje_body["artista"],$this->datosURI->mensaje_body["album"],$this->datosURI->mensaje_body["caratula"],$this->datosURI->mensaje_body["audio"],$this->datosURI->mensaje_body["linkCompra"],$this->datosURI->mensaje_body["idListaDeReproduccion"],$this->datosURI->mensaje_body["idGeneros"]));
            break;
      }
   }
}
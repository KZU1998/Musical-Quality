<?php
include_once('../controladores/ControladorBase.php');
include_once('../entidades/CRUD/Musica.php');
class ControladorMusica extends ControladorBase
{
   function crear(Musica $musica)
   {
      $sql = "INSERT INTO Musica (idMusica,nombre,artista,album,caratula,audio,linkCompra,idListaDeReproduccion,idGeneros) VALUES (?,?,?,?,?,?,?,?,?);";
      $parametros = array($musica->idMusica,$musica->nombre,$musica->artista,$musica->album,$musica->caratula,$musica->audio,$musica->linkCompra,$musica->idListaDeReproduccion,$musica->idGeneros);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar(Musica $musica)
   {
      $parametros = array($musica->idMusica,$musica->nombre,$musica->artista,$musica->album,$musica->caratula,$musica->audio,$musica->linkCompra,$musica->idListaDeReproduccion,$musica->idGeneros,$musica->id);
      $sql = "UPDATE Musica SET idMusica = ?,nombre = ?,artista = ?,album = ?,caratula = ?,audio = ?,linkCompra = ?,idListaDeReproduccion = ?,idGeneros = ? WHERE id = ?;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function borrar(int $id)
   {
      $parametros = array($id);
      $sql = "DELETE FROM Musica WHERE id = ?;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function leer($id)
   {
      if ($id==""){
         $sql = "SELECT * FROM Musica;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Musica WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($pagina,$registrosPorPagina)
   {
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Musica LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($registrosPorPagina)
   {
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Musica;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta[0];
   }

   function leer_filtrado(string $nombreColumna, string $tipoFiltro, string $filtro)
   {
      switch ($tipoFiltro){
         case "coincide":
            $parametros = array($filtro);
            $sql = "SELECT * FROM Musica WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Musica WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Musica WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Musica WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}
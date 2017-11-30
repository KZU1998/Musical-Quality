<?php
include_once('../controladores/ControladorBase.php');
include_once('../entidades/CRUD/ListaDeReproduccion.php');
class ControladorListaDeReproduccion extends ControladorBase
{
   function crear(ListaDeReproduccion $listadereproduccion)
   {
      $sql = "INSERT INTO ListaDeReproduccion (idListaDeReproduccion,nombreLista,idUsuario) VALUES (?,?,?);";
      $parametros = array($listadereproduccion->idListaDeReproduccion,$listadereproduccion->nombreLista,$listadereproduccion->idUsuario);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar(ListaDeReproduccion $listadereproduccion)
   {
      $parametros = array($listadereproduccion->idListaDeReproduccion,$listadereproduccion->nombreLista,$listadereproduccion->idUsuario,$listadereproduccion->id);
      $sql = "UPDATE ListaDeReproduccion SET idListaDeReproduccion = ?,nombreLista = ?,idUsuario = ? WHERE id = ?;";
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
      $sql = "DELETE FROM ListaDeReproduccion WHERE id = ?;";
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
         $sql = "SELECT * FROM ListaDeReproduccion;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM ListaDeReproduccion WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($pagina,$registrosPorPagina)
   {
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM ListaDeReproduccion LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($registrosPorPagina)
   {
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM ListaDeReproduccion;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta[0];
   }

   function leer_filtrado(string $nombreColumna, string $tipoFiltro, string $filtro)
   {
      switch ($tipoFiltro){
         case "coincide":
            $parametros = array($filtro);
            $sql = "SELECT * FROM ListaDeReproduccion WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM ListaDeReproduccion WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM ListaDeReproduccion WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM ListaDeReproduccion WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}
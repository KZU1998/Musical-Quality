<?php
class ListaDeReproduccion
{
   public $idListaDeReproduccion;
   public $nombreLista;
   public $idUsuario;

   function __construct(int $idListaDeReproduccion,string $nombreLista,int $idUsuario){
      $this->idListaDeReproduccion = $idListaDeReproduccion;
      $this->nombreLista = $nombreLista;
      $this->idUsuario = $idUsuario;
   }
}
?>
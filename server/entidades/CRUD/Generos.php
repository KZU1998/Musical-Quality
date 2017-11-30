<?php
class Generos
{
   public $idGeneros;
   public $genero;

   function __construct(int $idGeneros,string $genero){
      $this->idGeneros = $idGeneros;
      $this->genero = $genero;
   }
}
?>
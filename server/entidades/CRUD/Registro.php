<?php
class Registro
{
   public $idRegistro;
   public $nombre;
   public $apellido;
   public $edad;
   public $email;
   public $clave;
   public $idLoginR;

   function __construct(int $idRegistro,string $nombre,string $apellido,int $edad,string $email,string $clave,int $idLoginR){
      $this->idRegistro = $idRegistro;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->edad = $edad;
      $this->email = $email;
      $this->clave = $clave;
      $this->idLoginR = $idLoginR;
   }
}
?>
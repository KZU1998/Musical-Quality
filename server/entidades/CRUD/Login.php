<?php
class Login
{
   public $idLogin;
   public $email;
   public $clave;
   public $IdUsuario;

   function __construct(int $idLogin,string $email,string $clave,int $IdUsuario){
      $this->idLogin = $idLogin;
      $this->email = $email;
      $this->clave = $clave;
      $this->IdUsuario = $IdUsuario;
   }
}
?>
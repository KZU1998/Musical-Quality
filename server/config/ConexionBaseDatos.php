<?php
include_once("../persistencia/DatosConexion.php");
class ConexionBaseDatos {
    private static $array = array();
    public static function DatosConexiones(){
        $array = array();
        $array[] = new DatosConexion("bytehost","sql313.byethost7.com","b7_21140688","b7_21140688_mq","1998KaZu");
        
        return $array;
    }
}
<?php
include_once("../persistencia/DatosConexion.php");
class ConexionBaseDatos {
    private static $array = array();
    public static function DatosConexiones(){
        $array = array();
        $array[] = new DatosConexion('local','localhost','id4105697_musicalquality','vessel9','vessel9');
        
        return $array;
    }
}
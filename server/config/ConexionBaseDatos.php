<?php
include_once("../persistencia/DatosConexion.php");
class ConexionBaseDatos {
    private static $array = array();
    public static function DatosConexiones(){
        $array = array();
        $array[] = new DatosConexion('local','sql313.byethost7.com','b7_21140688_MusicalQuality','b7_21140688','1998KaZu');
        $array[] = new DatosConexion('local','127.0.0.1','MusicalQuality','julio','12345');
        return $array;
    }
}
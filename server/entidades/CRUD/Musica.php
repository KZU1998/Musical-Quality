<?php
class Musica
{
   public $idMusica;
   public $nombre;
   public $artista;
   public $album;
   public $caratula;
   public $audio;
   public $linkCompra;
   public $idListaDeReproduccion;
   public $idGeneros;

   function __construct(int $idMusica,string $nombre,string $artista,string $album,string $caratula,string $audio,longtext $linkCompra,int $idListaDeReproduccion,int $idGeneros){
      $this->idMusica = $idMusica;
      $this->nombre = $nombre;
      $this->artista = $artista;
      $this->album = $album;
      $this->caratula = $caratula;
      $this->audio = $audio;
      $this->linkCompra = $linkCompra;
      $this->idListaDeReproduccion = $idListaDeReproduccion;
      $this->idGeneros = $idGeneros;
   }
}
?>
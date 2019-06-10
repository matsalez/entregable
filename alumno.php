<?php
//Parte A

//Punto 1
class Alumno {

  //Punto 2.a

  private $nombre;
  private $apellido;
  private $codigo;

//Punto 3.a
  public function __construct(string $elNombre,string $elApellido,int $elCodigo) {
      $this->nombre = $elNombre;
      $this->apellido= $elApellido;
      $this->codigo= $elCodigo;

  }


//Punto 4 y 5.a

  public function setNombre(string $elNombre) {

    $this->nombre = $elNombre;

  }

  public function setApellido(string $elApellido) {

      $this->apellido = $elApellido;
  }

  public function setCodigo(int $elCodigo) {

      $this->codigo = $elCodigo;

  }

  public function getNombre() {

    	return $this->nombre;
  }

  public function getApellido() {

      return $this->apellido;
  }

  public function getCodigo() {

      return $this->codigo;
}

}

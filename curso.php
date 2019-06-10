<?php
//Parte B

//Punto 1 y 2.b
class Curso {

  private $nombre;
  private $codigo;
  private $alumnos = [];
  private $profesorTitular;
  private $profesorAdjunto;
  private $capacidad;




  public function __construct(string $elNombre,int $elCodigo, int $LaCapacidad ) {
    $this->nombre = $elNombre;
    $this->codigo = $elCodigo;
    $this->capacidad =$LaCapacidad;
  }

  //Punto 3.b

  public function setNombre(string $elNombre) {

    $this->nombre = $elNombre;

  }


  public function setCodigo(int $elCodigo) {

      $this->codigo = $elCodigo;

  }

  public function setAlumnos(Alumno $alumno) {

      $this->alumnos[] = $alumno;

  }

  public function setProfesoresTitulares(ProfesorTitular $profesor) {

      $this->profesorTitular = $profesor;

  }


    public function setProfesoresAdjuntos(ProfesorAdjunto $profesor) {

        $this->profesorAdjunto = $profesor;

    }


    public function setCapacidad($LaCapacidad) {

        $this->capacidad = $LaCapacidad;

    }




  public function getNombre() {

    	return $this->nombre;
  }


  public function getCodigo() {

      return $this->codigo;
}

public function getAlumnos() {

    //return array($this->alumnos);
    return $this->alumnos;

}

public function getCapacidad() {

    return $this->capacidad;

}

public function getProfesoresTitulares() {

    $this->profesor;

}


  public function getProfesoresAdjuntos() {

      $this->profesor;

  }

public function agregarUnAlumno(Alumno $alumno){

    if ( count($this->getAlumnos()) >= $this->getCapacidad()) {
    echo "El cupo esta completo";
  } else { $this->setAlumnos($alumno);
}
}

}

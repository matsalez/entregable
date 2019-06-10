<?php
//Parte F
require_once("curso.php");
require_once("alumno.php");


class DigitalHouseManager
{
  //Punto 1 y 2. f

  private $ListaAlumno = [];
  private $ListaProfesorTitular = [];
  private $ListaProfesorAdjunto = [];
  private $ListaCursos = [];

  public function __construct()
  {

}

//Parte H

//Punto 1.h
public function altaCurso(string $nombre, int $codigoCurso, int $cupoMaximoDealumnos) {
 // $this->setListaCursos(new Curso($nombre, $codigoCurso, $cupoMaximoDealumnos));
 $Curso = new Curso($nombre, $codigoCurso, $cupoMaximoDealumnos);
 $this->setListaCursos($Curso);

}
//Punto 2.h
public function altaProfesorAdjunto(string $nombre, string $apellido, int $codigoProfesor, int $cantidadDeHoras) {
 $ProfesorAdjunto = new ProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras);
 $this->setListaProfesorAdjunto($ProfesorAdjunto);

}
//Punto 3.h
public function altaProfesorTitular(string $nombre, string $apellido, int $codigoProfesor, int $especialidad) {
  $ProfesorTitular = new ProfesorTitular($nombre, $apellido, $codigoProfesor, $cantidadDeHoras);
  $this->setListaProfesorTitular($ProfesorTitular);

}
//Punto 4.h
public function altaAlumno($nombre, $apellido, $codigoAlumno) {
 $Alumno = new Alumno($nombre, $codigoCurso, $cupoMaximoDealumnos);
 $this->setListaAlumno($Alumno);

}





public function inscribirAlumno(int $codigoAlumno,int $codigoCurso) {
  foreach($this->ListaCursos as $Curso)
  {
    if ($Curso->getCodigo() == $codigoCurso)
    {
      foreach($this->ListaAlumno as $Alumno)
      {
        if ($Alumno->getCodigo() == $codigoAlumno)
        {
          $Curso->agregarUnAlumno($Alumno);
          break;
        }
      }
      break;
    }
  }
}


public function asignarProfesores($codigoCurso, $codigoProfesorTitular, $codigoProfesorAdjunto) {
$Curso;
$profesorTitular;
$profesorAdjunto;

// Obtener curso
foreach($this->ListaCursos as $C)
{
  if ($C->getCodigo() == $codigoCurso)
  {
    $Curso = $C;
    break;
  }
 }

 foreach($this->ListaProfesorTitular as $ProfeT)
 {
   if ($ProfeT->getCodigoTitular() == $codigoProfesorTitular)
   {
    $profesorTitular = $ProfeT;
    break;
   }
  }

  foreach($this->ListaProfesorAdjunto as $ProfeA)
  {
    if ($ProfeA->getCodigoAdjunto() == $codigoProfesorAdjunto)
    {
     $profesorAdjunto = $ProfeA;
     break;
    }
   }


   if(!empty($Curso)) {
     if(!empty($profesorAdjunto)) {
      $Curso->setProfesoresAdjuntos($profesorAdjunto);
     }
     else {
       echo "No se encontro el Profesor Adjunto";
     }
     if(!empty($profesorTitular)) {
      $Curso->setProfesoresTitulares($profesorTitular);
    } else {
      echo "No se encontro el Profesor Titular";
    }
   } else {
     echo "No se encontro el curso";
   }



}



public function setListaCursos(Curso $Curso) {
  $this->ListaCursos[] = $Curso;
}

public function getListaCursos() {

  return $this->ListaCursos;
}

public function setListaProfesorAdjunto(ProfesorAdjunto $ProfesorAdjunto) {
  $this->ListaProfesorAdjunto[] = $ProfesorAdjunto;
}

public function getListaProfesorAdjunto() {

  return $this->ListaProfesorAdjunto;
}



public function setListaProfesorTitular(ProfesorTitular $ProfesorTitular) {
  $this->ListaProfesorTitular[] = $ProfesorTitular;
}

public function getListaProfesorTitular() {

  return $this->ListaProfesorTitular;
}


public function setListaAlumno(Alumno $Alumno) {
  $this->ListaAlumno[] = $Alumno;
}

public function getListaAlumno() {

  return $this->ListaAlumno;
}






}


 ?>

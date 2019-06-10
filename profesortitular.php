<?php

class ProfesorTitular extends Profesor {

protected $especialidad;
protected $antiguedad;
protected $codigoTitular;

public function __construct(string $laEspecialidad, int $LaAntiguedad, int $ElCodigoTitular, $elNombre, $elApellido) {
  parent::__construct($elNombre, $elApellido);
  $this->especialidad = $laEspecialidad;
  $this->antiguedad = $LaAntiguedad;
  $this->codigoTitular = $ElCodigoTitular;


}

public function setEspecialidad(string $laEspecialidad) {

 $this->especialidad = $laEspecialidad;

}

public function setAntiguedad(int $LaAntiguedad) {

    $this->antiguedad = $LaAntiguedad;
}

public function setCodigoTitular(int $ElCodigoTitular) {

    $this->codigoTitular = $ElCodigoTitular;
}

public function getEspecialidad() {

    return $this->especialidad;
}

public function getAntiguedad() {

    return $this->antiguedad;
}

public function getCodigoTitular() {

    return $this->codigoTitular;
}
}

 ?>

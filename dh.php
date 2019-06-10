

<?php
//Parte J 
require_once("alumno.php");
require_once("profesor.php");
require_once("profesortitular.php");
require_once("profesoradjunto.php");
require_once("curso.php");
require_once("digitalHouse.php");

$Alumno1 = new Alumno("Juana","Suarez", 1);
$Alumno2 = new Alumno("Diego","Vega", 2);
$Alumno3 = new Alumno("Rocio","Luna", 3);
$Alumno4 = new Alumno("Ayrton","Aguirre", 4);
$Alumno5 = new Alumno("David","Gemignani", 5);

$ProfeT = new ProfesorTitular("FullStack",3,1,"Juan","Gonzalez");
$ProfeT2 = new ProfesorTitular("Android",3,2,"Pedro","Rossel");
$ProfeA = new ProfesorAdjunto(5,1,"Emiliano","Perez");
$ProfeA2 = new ProfesorAdjunto(5,2,"Pablo","Etchegaray");

//


$Dh = new DigitalHouseManager();
$Dh->altaCurso("FullStack", 1,22);
$Dh->altaCurso("Android", 2,22);

$Dh->setListaProfesorTitular($ProfeT);
$Dh->setListaProfesorAdjunto($ProfeA);
$Dh->setListaProfesorTitular($ProfeT2);
$Dh->setListaProfesorAdjunto($ProfeA2);
$Dh->setListaAlumno($Alumno1);
$Dh->setListaAlumno($Alumno2);
$Dh->setListaAlumno($Alumno3);
$Dh->setListaAlumno($Alumno4);
$Dh->setListaAlumno($Alumno5);
$Dh->asignarProfesores(1,1,1);
$Dh->asignarProfesores(1,1,1);
$Dh->asignarProfesores(2,2,2);
$Dh->asignarProfesores(2,2,2);
$Dh->inscribirAlumno(1,1);
$Dh->inscribirAlumno(2,1);
$Dh->inscribirAlumno(2,1);
$Dh->inscribirAlumno(3,1);
$Dh->inscribirAlumno(4,1);
$Dh->inscribirAlumno(5,1);




echo "<pre>";
var_dump($Dh);
echo "</pre>";

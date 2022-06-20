<?php

require_once __DIR__."/../vendor/autoload.php";

use App\Models\Curso;
use App\Models\Estudiante;


$estudiante = new Estudiante();

$nombre = new Estudiante("TRUJILLO VILCHERREZ JAHIR ANTHONY");

$estudiante->agregar(new Curso("matematica"));
$estudiante->agregar(new Curso("QUIMICA"));
$estudiante->agregar(new Curso("FISICA"));

echo "Alumno:".$nombre->getNombre()."<br>";

foreach($estudiante->listar() as $curso){

    echo "curso: ".$curso->getCursos()."<br>";

}



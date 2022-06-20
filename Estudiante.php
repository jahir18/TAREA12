<?php 
namespace App\Models;
use App\Models\Curso;

class Estudiante{

    private $nombre;
    private $cursos;

    public function Estudiante($nombre,$cursos){
        
        $this->nombre=$nombre;
        $this->cursos=[];
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function agregar(Curso $curso){

        $this->cursos[]=$curso;
    }

    public function listar(){

        return $this->cursos;
    }
}
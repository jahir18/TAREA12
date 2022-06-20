<?php 
namespace App\Models;

class Curso{

    private $curso;

    public function Curso($curso){

        $this->curso=$curso;
    }

    public function getCursos()
    {
        return $this->curso;
    }
}
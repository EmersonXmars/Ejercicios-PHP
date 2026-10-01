<?php
class Persona
{
    public $nombre;
    public $edad;

    public function __construct($nombre,$edad) {
        $this->setNombre($nombre);
        $this->setEdad($edad);
    }

    public function setNombre($nombre)
    {
        if(!empty(trim($nombre)))
            {
                $this->nombre=$nombre;
            }
        else
            {
                echo "No valido";
            }
    }
    public function setEdad($edad)
    {
        if(is_numeric($edad) && $edad>=0)
            {
                if($edad>=0 && $edad<=120)
                    {
                        $this->edad=$edad;
                    }
                else
                    {
                        echo "No valido";
                    }
            }
        else
            {
                echo "Dato no valido";
            }
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function MostrarDatos()
    {
        echo "Mi nombre es:". $this->nombre. "y mi edad es:". $this->edad;
    }
}

class Estudiante extends Persona
{
    public $grado;
    public function __construct($nombre,$edad,$grado) {
        parent::__construct($nombre,$edad);
        $this->setGrado($grado);
    }

    public function setGrado($grado)
    {
        if(!empty(trim($grado)))
            {
                $this->grado=$grado;
            }
        else
            {
                echo "No valido";
            }
    }
    public function getGrado()
    {
        return $this->grado;
    }

    public function mostrarEstudiante()
    {
        echo "Nombre:".$this->nombre."\n"."Edad:".$this->edad."\n"."Grado:".$this->grado."\n";
    }

}
$humano= new Estudiante("Juan","16","5");

$humano->mostrarEstudiante();

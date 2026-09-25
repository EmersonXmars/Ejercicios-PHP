<?php
class Alumno
{
    private $nombre;
    private $notas;

    public function __construct($nombre,$notas) 
    {
        $this->setNombre($nombre);
        $this->setNotas($notas);
    }

    public function setNombre($nombre)
    {
        if(!empty(trim($nombre))) //¿No esta vacio?
            {   //Si, no esta vacio
                $this->nombre=$nombre;
            }   
        else
            {
                echo "No valido";
            }

    }

    public function setNotas($notas)
    {   
        $valido=true;
        foreach($notas as $valor)

            {
                if(!is_numeric($valor)) //¿no es numero?
                    { //si, no es numero
                        $valido=false;
                        break;
                    }
                   
            }
        if($valido == true)
            {
                $this->notas=$notas;
            }
        else
            {
                echo"No valido";
            }
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getNotas()
    {
        return $this->notas;
    }
    
    public function mostrarNotas()
    {
        echo "Sus notas son:\n";
        foreach($this->notas as $valor)
            {   
                echo "$valor\n";    
            }   
    }
    public function calcularPromedio()
    {
        $total=0;
        foreach ($this->notas as $value) {
        $total=$total+$value;
        }
        $resultado = $total /count($this->notas);
        //echo "Su promedio es: $resultado\n";
        return $resultado;
    }

    public function contarNotasAprobadas()
    {
        $aprobados=0;
        foreach($this->notas as $valor)
            {   
                if($valor>=11)
                    {
                        $aprobados++;
                    }

                
            }
        echo "Notas aprobadas :$aprobados\n";

    }
    public function clasificarPromedio()
    {
        $promedio=$this->calcularPromedio();
        echo "Su promedio es: $promedio - ";
            if($promedio >=0 && $promedio <=10)
                {
                    echo "Desaprobado\n";
                }
            elseif($promedio>=11 && $promedio <=17)
                {
                    echo "Aprobado\n";
                }
            elseif($promedio>=18 && $promedio <=20)
                {
                    echo "Excelente\n";
                }
    }
}

$juan = new Alumno("Juan",[14, 9, 18, 12, 20]);
$juan->mostrarNotas();
$juan->calcularPromedio();
$juan->clasificarPromedio();
$juan->contarNotasAprobadas();
?>
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
        echo "Su promedio es: $resultado\n";
    }

    public function contarNotasAprobadas()
    {
        $desaprobados=0;
        $aprobados=0;
        $excelente=0;
        foreach($this->notas as $valor)
            {   
                if($valor >=0 && $valor <=10)
                    {
                        $desaprobados++;
                    }
                elseif($valor >=11 && $valor <=17)
                    {
                        $aprobados++;
                    }
                elseif($valor>=18 && $valor<=20)
                    {
                        $excelente++;
                    }
                
            }
        echo "Desaprobados:$desaprobados\n";
        echo "Aprobados:$aprobados\n";
        echo "Excelentes:$excelente\n";
        echo "Notas aprobadadas:".$aprobados + $excelente;
    }
}

$juan = new Alumno("Juan",[14, 9, 18, 12, 20]);
$juan->mostrarNotas();
$juan->calcularPromedio();
$juan->contarNotasAprobadas();
?>
<?php
class Estudiante
{
    public $nombre;
    public $notas;

    public function __construct($nombre,$notas) {
        $this->nombre=$nombre;
        $this->notas=$notas;
    }

    public function mostrarNotas()
    {
        echo "Sus notas son: ";
        foreach($this->notas as $valor)
            {
                echo "$valor ";
            }
    }
    public function calcularPromedio()
    {
        $total=0;
        $promedio=0;
        foreach($this->notas as $indice=>$valor)
            {
                $total=$total + $valor;
            }
        $promedio=$total / ($indice+1);
        //echo "\n $promedio";
        return $promedio;

    }
    public function clasificarPromedio()
    {
        $estudiantePromedio= $this->calcularPromedio();
        if($estudiantePromedio>=0 && $estudiantePromedio<=10)
            {
                echo "\nPromedio: $estudiantePromedio Desaprobado";
            }
        elseif($estudiantePromedio>=11 && $estudiantePromedio<=17)
            {
                echo "\nPromedio: $estudiantePromedio Aprobado";
            }
        elseif($estudiantePromedio>=18 && $estudiantePromedio<=20)
            {
                echo "\nPromedio: $estudiantePromedio Excelente";
            }
    }
}
$luis= new Estudiante("Luis",[14,18,11,16]);
$luis->mostrarNotas();
$luis->calcularPromedio();
$luis->clasificarPromedio();
?>
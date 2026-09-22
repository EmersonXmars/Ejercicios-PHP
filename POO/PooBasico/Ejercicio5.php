<?php
class Curso
{
    public $nombreCurso;
    public $alumnos;
    public function __construct($nombreCurso,$alumnos) {
        $this->nombreCurso=$nombreCurso;
        $this->alumnos=$alumnos;
    }

    public function mostrarAlumnos()
    {
        foreach($this->alumnos as $indice=>$valor)
            {
                if($valor>=0 && $valor <=10)
                    {
                        echo "$indice - $valor - Desaprobado \n";
                    }
                elseif($valor>=11 && $valor <=17)
                    {
                        echo "$indice - $valor - Aprobado \n";
                    }
                elseif($valor>=18 && $valor <=20)
                    {
                        echo "$indice - $valor - Excelente \n";
                    }
            }       
    }

    public function contarResultados()
    {
        $desaprobados=0;
        $aprobados=0;
        $excelentes=0;
        foreach($this->alumnos as $valor)
            {
                if($valor>=0 && $valor <=10)
                    {
                        $desaprobados++;
                    }
                elseif($valor>=11 && $valor <=17)
                    {
                        $aprobados++;
                    }
                elseif($valor>=18 && $valor <=20)
                    {
                        $excelentes++;
                    }
            }
        echo "Desaprobados: $desaprobados\n";
        echo "Aprobados: $aprobados\n";
        echo "Excelentes: $excelentes \n";
    }

    public function calcularPromedioGeneral()
    {
        $total=0;
        foreach($this->alumnos as $valor)
            {
                $total=$total + $valor;
            }
        $resultado= $total/ count($this->alumnos);
        echo $resultado;
    }
}

$matematica= new Curso 
    ("Matematica",
    [
        "Ana" => 18,
        "Luis" => 12,
        "Carlos" => 9,
        "María" => 20
    ]);

$matematica->mostrarAlumnos();
$matematica->contarResultados();
$matematica->calcularPromedioGeneral();
?>
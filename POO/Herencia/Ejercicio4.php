<?php
class Vehiculo
{
    protected $marca;
    protected $modelo;
    protected $combustible;

    public function __construct($marca,$modelo,$combustible) {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->combustible=$combustible;
    }

    public function mostrarDatos()
    {
        echo "Marca:".$this->marca." Modelo:".$this->modelo." Combustible:".$this->combustible;
    }

}

class Camion extends Vehiculo
{
    protected $cargas;

    public function __construct($marca,$modelo,$combustible,$cargas) 
    {
        parent::__construct($marca,$modelo,$combustible);
        $this->cargas=$cargas;
    }

    public function calcularCargaTotal()
    {
        $total=0;
        foreach ($this->cargas as $value)
        {
            $total=$total + $value;
        }
        
        return $total;
    }

    public function contarCargasPesadas()
    {
        $contador=0;
        foreach ($this->cargas as $value) 
        {
            if($value >1000)
                {
                    $contador++;
                }
        }
        echo "Los que superan los 1000 son:$contador\n";
    }

    public function clasificarCarga()
    {
        $cargaTotal=$this->calcularCargaTotal();
                if($cargaTotal < 3000)
                    {
                        echo "Carga Ligera";
                    }
                elseif($cargaTotal>=3000 && $cargaTotal <=5000)
                    {
                        echo "Carga media";
                    }
                elseif($cargaTotal>5000)
                    {
                        echo "Carga pesada";
                    }

    }


}

$camionJonda= new Camion("Honda","V3",100,[1200, 800, 1500, 900]);

$camionJonda->calcularCargaTotal();
$camionJonda->contarCargasPesadas();
$camionJonda->clasificarCarga();



?>
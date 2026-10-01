<?php
class Empleado
{
    protected $nombre;
    protected $sueldoBase;

    public function __construct($nombre,$sueldoBase) {
        $this->setNombre($nombre);
        $this->setSueldoBase($sueldoBase);
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

    public function setSueldoBase($sueldoBase)
    {
        if(is_numeric($sueldoBase) && $sueldoBase>=0)
            {
                $this->sueldoBase=$sueldoBase;
            }
        else
            {
                echo "No valido";
            }
    }

    public function calcularPago()
    {
        return $this->sueldoBase;
    }

}

class Vendedor extends Empleado
{
    protected $ventas;

    public function __construct($nombre,$sueldoBase,$ventas) {
        parent::__construct($nombre,$sueldoBase);
        $this->ventas=$ventas;
    }

    public function calcularTotalVentas()
    {   
        $total=0;
        foreach ($this->ventas as $value) 
        {
            $total=$total + $value;
        }
        return $total;
    }

    public function calcularComision()
    {
        $totalVentas=$this->calcularTotalVentas();
        $comision=0;
        if($totalVentas < 1000 && $totalVentas>=0)
            {
                $comision=$totalVentas *0.05;
                return $comision;
            }
        elseif($totalVentas >=1000 && $totalVentas<=2000)
            {
                $comision=$totalVentas *0.10;
                return $comision;
            }
        elseif($totalVentas >2000)
            {
                $comision=$totalVentas *0.15;
                return $comision;
            }
        
    }

    public function calcularPagoFinal()
    {
        $comision=$this->calcularComision();
        $sueldoBase=$this->calcularPago();
        $resultado=$sueldoBase + $comision;

        return $resultado;

    }

}

$persona= new Vendedor("Juan",1200,[500, 700, 300]);


echo $persona->calcularPagoFinal();
?>
<?php
class Empresa
{
    private $nombreEmpresa;
    private $empleados;

    public function __construct($nombreEmpresa,$empleados) {
        $this->setNombreEmpresa($nombreEmpresa);
        $this->empleados=$empleados;

    }

    public function setNombreEmpresa($nombreEmpresa)
    {
        if(!empty(trim($nombreEmpresa)))
            {
                $this->nombreEmpresa=$nombreEmpresa;
            }
    }

    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    public function mostrarEmpleados()
    {
        foreach($this->empleados as $indice=>$valor)
            {
                echo "Empleado: $indice - Sueldo:S/".$valor["sueldo"]." - Horas extras:".$valor["horasExtra"]."\n"; 
            }
    }
    public function calcularPagoEmpleado($nombre)
    {
        $existe=false;
        if(!empty(str_replace(" ","",$nombre)))
            {
                foreach($this->empleados as $indice=>$valor)
                    {
                        if(strtolower($indice) == str_replace(" ","",strtolower($nombre)))
                            {
                                $existe=true;
                                $pago= $valor["sueldo"] +($valor["horasExtra"] * 20);
                                break;
                            }
                    }   
            }
        if($existe==true)
        {
            echo "Le corresponde un pago de $pago\n";
            return $pago;
        }
        else
            {
                echo "No encontrado\n";
            }


        
    }

    public function calcularPlanillaTotal()
    {
        $total=0;
        foreach ($this->empleados as $valor) 
        {
            $total=$total + $valor["sueldo"] + ($valor["horasExtra"]*20);
        }

        echo "La planilla total seria:$total\n";
    }
    public function contarEmpleadosPorNivel()
    {
        $bajo=0;
        $medio=0;
        $alto=0;
        $pagoEmpleado=0;
        foreach ($this->empleados as $indice => $valor) {
            $pagoEmpleado=$valor["sueldo"]+($valor["horasExtra"]*20);
            if($pagoEmpleado< 2000)
                {
                    $bajo++;
                }
            elseif($pagoEmpleado>=2000 && $pagoEmpleado <=3000)
                {
                    $medio++;
                }
            elseif($pagoEmpleado>3000)
                {
                    $alto++;
                }
        }
        echo "Bajo:$bajo\nMedio:$medio\nAlto:$alto";
    }
}

///Objeto
$empresa1= new Empresa("Fanta",
[
    "Ana" => ["sueldo" => 1800, "horasExtra" => 5],
    "Luis" => ["sueldo" => 1500, "horasExtra" => 0],
    "Carlos" => ["sueldo" => 2500, "horasExtra" => 10],
    "María" => ["sueldo" => 3200, "horasExtra" => 2]
]);   

$empresa1->mostrarEmpleados();
$empresa1->calcularPagoEmpleado("Rana");
$empresa1->calcularPlanillaTotal();
$empresa1->contarEmpleadosPorNivel();

?>
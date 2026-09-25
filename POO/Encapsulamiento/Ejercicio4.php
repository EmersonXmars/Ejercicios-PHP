<?php
class restaurante
{
    private $nombre;
    private $pedidos;

    public function __construct($nombre,$pedidos) {
        $this->setNombre($nombre);
        $this->pedidos=$pedidos;

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

    public function getNombre()
    {
        return $this->nombre;
    }

    public function mostrarPedidos()
    {
        foreach ($this->pedidos as $indice=> $valor) 
        {   
            echo "\n$indice \n";
            foreach ($valor as  $value) {
                echo "$value, ";
            }
        }
    }
    public function calcularTotalMesa($mesa)
    {   
        $total=0;
        $existe=false;
        $textoLimpio=str_replace(" ","",strtolower($mesa));
        foreach ($this->pedidos as $indice => $valor) 
        {
            if(str_replace(" ","",strtolower($indice)) == $textoLimpio)
                {
                    $existe=true;
                    foreach($valor as $value)
                        {
                            $total=$total + $value;
                        }
                        echo "La venta la mesa $indice es: $total \n";
                    return $total;
                    break;
                }

        }
        if($existe == false)
            {
                echo "No valido\n";
            }


    }

    public function calcularVentaTotal()
    {
        $total=0;
        $resultado=0;
        foreach ($this->pedidos as  $valor) 
        {
           foreach($valor as $value)
            {
                $total=$total + $value;
            }
                
        }
        
        echo "La venta total es: $total\n";
        return $total;
    }

    public function contarMesasMayoresA($monto)
    {
        $contador=0;
        $totalCadaMesa=[];
        $total=0;
        foreach ($this->pedidos as $indice => $valor) 
        {
            foreach ($valor as $value) 
            {
                $total=$total + $value;
            }
            $totalCadaMesa[]=$total;
            $total=0;
        }

        foreach($totalCadaMesa as $valor)
            {
               if($valor > $monto)
                {
                    $contador++;
                }
            }
        echo "Cantidad de mesas que superan el monto:$contador\n";
    }
}

$restaurante1= new restaurante("ElPiolin",
[
    "Mesa 1" => [25, 15, 10],
    "Mesa 2" => [40, 20],
    "Mesa 3" => [12, 8, 15, 20]
]);
$restaurante1->calcularTotalMesa("Mesa 5");
$restaurante1->calcularVentaTotal();
$restaurante1->contarMesasMayoresA(50);
$restaurante1->mostrarPedidos();
?>

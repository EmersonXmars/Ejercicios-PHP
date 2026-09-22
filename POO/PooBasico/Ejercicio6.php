<?php
class Tienda
{
    public $productos;

    public function __construct($productos) {
        $this->productos = $productos;
    }

    public function mostrarInventario()
    {
        foreach($this->productos as $indice=>$valor)
            {
                echo "$indice - S/".$valor["precio"]." - Stock:".$valor["stock"]."\n";

            }
    }
    public function calcularValorTotal()
    {
        $total=0;
        $resultado=0;
        foreach($this->productos as $valor)
            {
                $resultado=$valor["precio"] * $valor["stock"];
                $total= $total + $resultado;
            }
        echo "El Total general es: $total\n";
    }

    public function contarProductosAgotados()
    {
        $contador=0;
        foreach($this->productos as $valor)
            {
                
                if($valor["stock"] == 0)
                    {
                         $contador++;
                    }
            }
           echo "Productos agostado:$contador";
    }
}

$paquete= new Tienda
([
    "Laptop" => ["precio" => 2500, "stock" => 2],
    "Mouse" => ["precio" => 80, "stock" => 5],
    "Teclado" => ["precio" => 150, "stock" => 0],
    "Monitor" => ["precio" => 700, "stock" => 3]
]);

$paquete->mostrarInventario();
$paquete->calcularValorTotal();
$paquete->contarProductosAgotados();

?>
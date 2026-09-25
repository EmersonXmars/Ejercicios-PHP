<?php
class Almacen
{
    private $nombre;
    private $productos;

    public function __construct($nombre,$productos) {
        $this->setNombre($nombre);
        $this->productos=$productos;
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

    public function getProductos()
    {
        return $this->productos;
        
    }

    public function mostrarProductos()
    {
        foreach ($this->productos as $indice=>$valor) 
        {
            if($valor["stock"] == 0)
            echo "$indice - S/Precio:".$valor["precio"]. " - Stock:".$valor["stock"]." - Agotado"."\n";
            elseif($valor["stock"] >=1 && $valor["stock"]<=3)
                {
            echo "$indice - S/Precio:".$valor["precio"]. " - Stock:".$valor["stock"]." - Stock bajo"."\n";                    
                }
            elseif($valor["stock"] >3)
                {
            echo "$indice - S/Precio:".$valor["precio"]. " - Stock:".$valor["stock"]." - Disponible"."\n";     
                }
        }
    }
    public function calcularValorInventario()
    {
        $total=0;
        $resultado=0;
        foreach($this->productos as $valor)
            {
                $total= $valor["precio"] * $valor["stock"];
                $resultado=$resultado + $total;
            }
        echo "El valor total del inventario es: $resultado\n";
    }
    public function contarAgotados()
    {
        $contador=0;
        foreach ($this->productos as $valor) {
            if($valor["stock"]==0)
                {
                    $contador++;
                }
        }
        echo "Existen $contador con 0 de stock\n";
        return $contador;
    }
    public function buscarProductos($nombreDelProducto)
    {   
        $existe=false;
        if(!empty(trim($nombreDelProducto)))
        {
            foreach ($this->productos as $indice => $valor) {
                if(strtolower($indice) == strtolower($nombreDelProducto))
                    {
                        $existe=true;
                        break;
                    }
            }
            if($existe==true)
                {
                    echo "Si existe";
                }
            elseif($existe==false)
                {
                    echo"No existe";
                }

        }
        else
            {
                echo "No valido";
            }
    }
    
}

$paquete = new Almacen("Paquete principal",
[
    "Laptop" => ["precio" => 2500, "stock" => 3],
    "Mouse" => ["precio" => 80, "stock" => 0],
    "Teclado" => ["precio" => 150, "stock" => 5]
]

);
$paquete->mostrarProductos();
$paquete->calcularValorInventario();
$paquete->contarAgotados();
$paquete->buscarProductos("TEclado");
?>
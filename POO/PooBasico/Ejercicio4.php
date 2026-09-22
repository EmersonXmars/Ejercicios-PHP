<?php
class Producto
{
    public $nombre;
    public $precio;
    public $stock;

    public function __construct($nombre,$precio,$stock) {
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->stock=$stock;
    }

    public function mostrarProducto()
    {
        echo "Nombre: $this->nombre, Precio: $this->precio, Stock: $this->stock \n";
    }
    public function clasificarStock()
    {
        if($this->stock == 0)
            {
                echo "Agotado\n";
            }
        elseif($this->stock >=1 && $this->stock <=5)
            {
                echo "Stock bajo\n";
            }
        elseif($this->stock > 5)
            {
                echo "Disponible\n";
            }
    }
    public function calcularValorInventario()
    {
        $resultado= $this->precio * $this->stock;
        echo $resultado;
    }
}

$manzana= new Producto("Manzana",8,"89");
$manzana->mostrarProducto();
$manzana->clasificarStock();
$manzana->calcularValorInventario();
?>
<?php
class Producto
{
    protected $nombre;
    protected $precio;

    public function __construct($nombre,$precio) {
        $this->setNombre($nombre);
        $this->setPrecio($precio);

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

    public function setPrecio($precio)
    { //Aqui tengo una duda, deberia hacerlo un if dentro de otro , el primero que sea !empty y dentro el is_numeric?
        if(is_numeric($precio) && $precio>=0)
            {
                $this->precio=$precio;
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

    public function getPrecio()
    {
        return $this->precio;
    }

    public function mostrarProducto()
    {
        echo "Nombre del producto:".$this->nombre."\nPrecio del producto:".$this->precio."\n";
    }

}

    class ProductoPerecible extends Producto
    {
        protected $diasParaVencer;

        public function __construct($nombre,$precio,$diasParaVencer) {
            parent::__construct($nombre,$precio);
            $this->diasParaVencer=$diasParaVencer;
        }

        public function estadoProducto()
        {
            $estado="";
            if($this->diasParaVencer ==0)
                {
                    $estado="Vencido";
                    echo "Vencido\n";
                    return $estado;
                }
            elseif($this->diasParaVencer >=1 && $this->diasParaVencer <=3)
                {
                    $estado="Por vencer";
                    echo "Por vencer\n";
                    return $estado;
                }
            elseif($this->diasParaVencer > 3)
                {
                    $estado="Vigente";
                    echo "Vigente\n";
                    return $estado;
                }
        }

        public function calcularDescuento()
        {
            $descuento=0;
            $total=0;
            if($this->diasParaVencer ==0)
                {
                    echo "No se vende";
                }
            elseif($this->diasParaVencer >=1 && $this->diasParaVencer <=3)
                {
                    $descuento=$this->precio * 0.20;
                    $total=$this->precio - $descuento;
                    echo "Precio de descuento 20%: $total ";
                    
                }
            elseif($this->diasParaVencer >=3)
                {
                    echo "Normal, se puede vender";
                }
        }
    }
$manzana= new ProductoPerecible("Manzana",30,2);
$manzana->mostrarProducto();
$manzana->estadoProducto();
$manzana->calcularDescuento();



?>
<?php
class Mascota
{
    public $nombre;
    public $tipo;
    public $edad;

    public function mostrarDatos()
    {
        echo "Nombre: $this->nombre" . "\n";
        echo "Tipo: $this->tipo" . "\n";
        echo "Edad: $this->edad" . "\n";
    }
    public function clasificarEdad()
    {
     if($this->edad <2)
        {
            echo "Muy joven";
        }
    elseif($this->edad >=2 && $this->edad <=7)
        {
            echo "Adulto";
        }
    elseif($this->edad >7)
        {
            echo "Mayor";
        }
    }
}
$mascota1 = new Mascota();
$mascota1->nombre="Falco";
$mascota1->tipo="Gran dannez";
$mascota1->edad=6;

$mascota1->mostrarDatos();
$mascota1->clasificarEdad();

?>
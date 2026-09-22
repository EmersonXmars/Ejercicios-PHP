<?php
class Libro
{
    public $titulo;
    public $autor;
    public $paginas;
    public function __construct($titulo,$autor,$paginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas =$paginas;
    }
    public function mostrarLibro()
    {
        echo "Titulo: $this->titulo \n" ;
        echo "Autor: $this->autor \n";
        echo "Paginas: $this->paginas \n";
    }
    public function clasificarTamano()
    {
        $paginasLibro=$this->paginas; 
        if($paginasLibro < 100)
            {
                echo "Libro corto";
            }
        elseif($paginasLibro>=100 && $paginasLibro <=300)
            {
                echo "Libro mediano";
            }
        elseif($paginasLibro>300)
            {
                echo "Libro largo";
            }
    }
}

$libro1 = new Libro("El Infinito","Mi gato",278);
$libro1->mostrarLibro();
$libro1->clasificarTamano();



?>
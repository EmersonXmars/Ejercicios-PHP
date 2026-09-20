<?php
$productos = [
    "Pan" => 2.5,
    "Leche" => 4.2,
    "Arroz" => 3.8,
    "Azúcar" => 4.5
];

foreach($productos as $indice=> $valor)
    {
        echo "$indice: S/$valor \n";
    }
<?php
$productos = [
    "Pan" => 2.5,
    "Leche" => 4.2,
    "Arroz" => 3.8,
    "Azúcar" => 4.5,
    "Galletas" => 1.8
];
foreach($productos as $indice =>$valor)
    {
        if($valor <3)
            {
                echo "$indice: S/$valor Barato \n";
            }
        elseif($valor >=3 && $valor <=4)
            {
                echo "$indice: S/$valor Normal \n";

            }
        elseif($valor > 4)
            {
                echo "$indice: S/$valor Caro \n";
            }

    }



?>
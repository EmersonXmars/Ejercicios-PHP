<?php
$productos = [
    "Laptop" => ["precio" => 2500, "stock" => 3],
    "Mouse" => ["precio" => 80, "stock" => 0],
    "Teclado" => ["precio" => 150, "stock" => 5],
    "Monitor" => ["precio" => 700, "stock" => 2]
];

foreach($productos as $indice =>$valor)
    {
        foreach($valor as $contenido)
            {
                if($valor["stock"] == 0)
                    {
                        echo "$indice - Precio:S/ ". $valor["precio"]." - Stock: ".$valor["stock"]." Agotado "."\n";
                    }
                elseif($valor["stock"]>=1 && $valor["stock"]<=3)
                    {
                        echo "$indice - Precio:S/ ". $valor["precio"]." - Stock: ".$valor["stock"]." Stock bajo "."\n";
                    }
                elseif($valor["stock"]> 3)
                    {
                        echo "$indice - Precio:S/ ". $valor["precio"]." - Stock: ".$valor["stock"]." Disponible "."\n";
                    }

            }
    }
?>